<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ReturnController extends Controller
{
    public function updateAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('ref');
        $status = $request->get('status');
        $note = $request->get('note');
        $refund = $request->get('refund');
        if ($status == 4) {
            $this->editorder($id, $refund, $note);
        }
        $delivery = $request->get('delivery');
        if ($status == '1') {
            if ($delivery == 0) {
                $request->getSession()->getFlashBag()->add('error', "Please select delivery boy");
                return $this->redirectToRoute('restaurant_view_return', array("id" => $id));
            }
        }
        if ($status == '0') {
            $res = $em->getConnection()->exec("update customer_order set returnStatus='pending' where id='$id'");

        }

        if ($status == '1') {
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Out For Pickup' where id='$id'");

        }
        if ($status == '2') {
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Item Accepted' where id='$id'");

        }
        if ($status == '4') {
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Item Completed' where id='$id'");

        }
        if ($status == '3') {
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Item canceled' where id='$id'");

        }

        $em->getConnection()->exec("update stock_return set status='$status',deliveryBoy='$delivery',note='$note',refund='$refund' where 1 and ref='$id'");
        $request->getSession()->getFlashBag()->add('success', "Status updated Succesfuly!");
        return $this->redirectToRoute('restaurant_view_return', array("id" => $id));

    }
    public function editorder($id, $refund, $note)
    {

        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * FROM stock_return where ref='$id' and branch='$branch'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
        }
        $customerid = $res['customerId'];

        $sum = $connection->prepare("SELECT sum(b.price*a.qty) as total FROM `return_logs` as a join customer_order_items as b on a.itemId=b.id where ref='$id'");
        $sum->execute();
        $sums = $sum->fetchAll();
        foreach ($sums as $s) {
        }

        if ($refund == 'wallet') {
            $mode = "Return";
            $note = "refunded from order #" . $id . "on " . date('d-m-Y');
            $credits = $s['total'];
            $prepaidBalance = $this->getBalanceAction($customerid, 0, $credits, $mode, $note, 'lamo');

        }
        $ress = $connection->prepare("SELECT a.*,b.price FROM `return_logs` as a join customer_order_items as b on a.itemId=b.id where ref='$id'");
        $ress->execute();
        $resss = $ress->fetchAll();
        foreach ($resss as $x) {
            $this->updateorderitems($id, $x['price'], $x['itemId'], $x['qty']);

        }

    }
    public function getBalanceAction($id, $type, $credits, $mode, $note, $duration)
    {
        $em = $this->getDoctrine()->getManager();
        $re = $em->getRepository('AppBundle:Wallet')->findByUser($id);
        if (empty($re)) {
            $addCredits = $this->addUserToWalletAction($id, $type, $credits, $mode, $note);

            return $addCredits;
        } else {
            foreach ($re as $da) {
                $prepaid = $da->getPrepaid();
                $postpaid = $da->getPostpaid();
                if ($type == 0) {
                    $amount = $prepaid + $credits;
                    $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$id'");
                } else {
                    $amount = $postpaid + $credits;
                    $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$id'");
                    // $this->addDuesAction($credits,$amount,date('d-m-Y'),$duration,$id,'Added By MarketBhaav',0);
                }
                $time = date('h-i a');
                $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $amount, $note, $type, '0', $time, $mode);
                return $amount;
            }
        }
    }
    public function addUserToWalletAction($id, $type, $credits, $mode, $note)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new Wallet();
        if ($type == 0) {
            $wallet->setPrepaid($credits);
            $wallet->setPostpaid(0);
        } else {
            $wallet->setPostpaid($credits);
            $wallet->setPrepaid(0);
        }
        $wallet->setUser($id);
        $wallet->setRef($id);
        $wallet->setStatus(0);
        $wallet->setDuration(0);

        $wallet->setDate(date('d-m-Y'));
        $em->persist($wallet);
        $em->flush();
        $time = date('h-i a');
        $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $credits, $note, $type, '0', $time, $mode);
        return $id;
    }
    public function addWalletLogsAction($ref, $debit, $credit, $date, $total, $note, $type, $status, $time, $mode)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new WalletLogs();
        $wallet->setCredit($credit);
        $wallet->setDebit($debit);
        $wallet->setBalance($total);
        $wallet->setType($type);
        $wallet->setNote($note);
        $wallet->setStatus($status);
        $wallet->setDate($date);
        $wallet->setref($ref);
        $wallet->setStatus(0);
        $wallet->setDateTime($time);
        $wallet->setMode($mode);

        $em->persist($wallet);
        $em->flush();
        return 0;
    }

    public function updateorderitems($order, $price, $ids, $qtys)
    {

        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $tq = $price * $qtys;
        if ($ids == '0' || $ids == '') {

        } else {
            $res = $em->getConnection()->exec("update customer_order_items set quantity='$qtys',actualAmount='$tq',subTotal='$tq' where id='$ids'");
            $res = $em->getConnection()->exec("delete from customer_order_items  where id='$ids' and quantity <= 0");
//
            $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
            $statement->execute();
            $menus = $statement->fetchAll();
            foreach ($menus as $res) {
                $delivery = $res['deliveryCharge'];
                $promocode = $res['promocode'];
                $totalDiscount = $res['totalDiscount'];
                $sql = $connection->prepare("select sum(subTotal) as sum from customer_order_items where order_d='$order'");
                $sql->execute();
                $sqlquery = $sql->fetchAll();
                $total = $sqlquery[0]['sum'];

                $totalDiscount = $total - $totalDiscount;
                $actualAmount = $total;
                $final = $totalDiscount + $delivery;

                $res = $em->getConnection()->exec("update customer_order set actualAmount='$actualAmount',totalDiscount='$totalDiscount',orderAmount='$final' where id='$order'");

            }
        }
    }

    public function newReturnsAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $id = $request->get('id');
        // $result=$em->getRepository('AppBundle:StockReturn')->findAll();
        if ($id == 'all') {
            $query = "";
        } else {
            $query = " where a.status='$id'  and a.branch='$branch'";
        }
        $message = "All Orders";
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id $query");
        $statement->execute();
        $result = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='0' and a.branch='$branch'");
        $statement->execute();
        $notassigned = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='1' and a.branch='$branch'");
        $statement->execute();
        $assigned = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='2' and a.branch='$branch'");
        $statement->execute();
        $itemaccepted = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='4' and a.branch='$branch'");
        $statement->execute();
        $completed = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='3' and a.branch='$branch'");
        $statement->execute();
        $cancelled = $statement->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.status='10' and a.branch='$branch'");
        $statement->execute();
        $onway = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Returns/returns.html.twig', [
            'message' => $message,
            'orders' => $result,
            'notassigned' => count($notassigned),
            'assigned' => count($assigned),
            'itemaccepted' => count($itemaccepted),
            'completed' => count($completed),
            'cancelled' => count($cancelled),
            'onway' => count($onway),
        ]);
    }
    //
    public function viewReturnAction(Request $request)
    {
        $result['data'] = [];
        $myExtend = "Admin";
        $id = $request->get('id');

        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT a.*,b.email,b.mobileNo,b.userName FROM `stock_return` as a join customer as b on a.customerId=b.id where a.ref='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        $logs = $connection->prepare("SELECT * FROM `return_logs`  where ref='$id'");
        $logs->execute();
        $logsresult = $logs->fetchAll();
        foreach ($logsresult as $lo) {
            $item[] = $em->getRepository('AppBundle:CustomerOrderItems')->findById($lo['itemId']);
            $od = $connection->prepare("SELECT a.qty,b.* FROM `return_logs` as a join customer_order_items as b on a.itemId=b.id where a.ref='$id'");
            $od->execute();
            $orderResult = $od->fetchAll();
        }
        if (empty($orderResult)) {
            $orderResult = array();
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $connection = $em->getConnection();

        $sql = $connection->prepare("SELECT * from user where userType='Delivery' and branch='$branch'");
        $sql->execute();
        $delivery = $sql->fetchAll();

        $order_id = $result[0]['ref'];

        $sql = $connection->prepare("SELECT * from customer_order where id='$order_id' and branch='$branch'");
        $sql->execute();
        $customerorder = $sql->fetchAll();

        return $this->render('AppBundle:Admin:Returns/returnsView.html.twig', array(
            'orders' => $result,
            'items' => $orderResult,
            'delivery' => $delivery,
            'myExtend' => $myExtend,
            'customerorder' => $customerorder
        ));
    }

    public function ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $method = $request->get('method');
        $ref = $request->get('ref');
        $delivery = $request->get('delivery');
        if ($method == 'cancel') {
            $em->getConnection()->exec("update stock_return set status='3' where 1 and ref='$ref'");
            $res = $em->getConnection()->exec("update customer_order set returnStatus='canceled' where id='$id'");
        }
        if ($method == 'assign') {
            $em->getConnection()->exec("update stock_return set status='1',deliveryBoy='$delivery' where 1 and ref='$ref'");
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Out For Pickup' where id='$id'");

            //sms functionality comes here..

        }
        if ($method == 'final') {
            $em->getConnection()->exec("update stock_return set status='2',deliveryBoy='$delivery' where 1 and ref='$ref'");
            $res = $em->getConnection()->exec("update customer_order set returnStatus='Completed' where id='$id'");

        }

        return new jsonResponse('success');
    }
}
