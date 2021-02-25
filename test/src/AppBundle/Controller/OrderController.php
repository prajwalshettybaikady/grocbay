<?php
namespace AppBundle\Controller;

use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    public function doOrderAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $userid = $request->get('userid');
        $username = $request->get('username');
        $addressid = $request->get('addressid');
        $address = $request->get('address');
        $total = $request->get('total');
        $delivery = $request->get('delivery');
        $gtotal = $request->get('gtotal');
        $itemid = $request->get('selid');

        $variationId = $request->get('varid');
        $price = $request->get('price');
        $qty = $request->get('selqty');
        $totalprice = $request->get('tq');
        $note = $request->get('note');
        $payment = $request->get('paymentType');
        $type = "other";
        $restId = '999';
        $promocode = '';
        $walletType = '';
        $branch = $branch;
        $walletBalance = '';
        $orderType = $request->get('orderType');
        $fix_time = $request->get('fixtime');
        $fixDate = $request->get('fixdate');
          if ($fix_time == '' || $fixDate == '') {
            $request->getSession()->getFlashBag()->add('error', "Please select time slots");
            return $this->redirectToRoute('create_order');
        }
        if ($username == '' || $itemid == '' || $address == '') {
            $request->getSession()->getFlashBag()->add('error', "Please select customer,address,items");
            return $this->redirectToRoute('create_order');
        } else {
            if ($addressid == '') {
//update address id
                $res = $em->getConnection()->exec("INSERT INTO `billing_address`(`customer_d`, `addressType`, `fullName`, `address`,`lattitude`,`logingitude`,`extraInfo`) VALUES ('$userid','$type','$username','$address','','','')");
                $addressId = $em->getConnection()->lastInsertId();
            } else {
                $res = $em->getConnection()->exec("update billing_address set address='$address' where id='$addressid'");
                $addressId = $addressid;
            }
//getapi key
            $sql = $connection->prepare("SELECT * from customer where id='$userid'");
            $sql->execute();
            $row = $sql->fetchAll();
            foreach ($row as $ra) {
            }
            $apiKey = $ra['apiKey'];
            $date = date('d-m-Y');
            $postvar = 'branch=' . $branch . '&userId=' . $userid . '&note=' . $note . '&walletType=' . $walletType . '&walletBalance=' . $walletBalance . '&apiKey=' . $apiKey . '&restId=' . $restId . '&addressId=' . $addressid . '&orderType=' . $orderType . '&paymentType=' . $payment . '&promocode=' . $promocode . '&fix_time=' . $fix_time . '&channel=Admin&fixdate=' . $fixDate . '&membership_active=' . $ra['membership'] . '&membership=0';

            $size = sizeof($itemid);
            $count = 0;
            foreach ($itemid as $it) {

                $id = $itemid;
                $vid = $variationId;
                $qty = $qty;
                $postvar .= "&items[" . $count . "][productId]=";
                $postvar .= $id[$count];
                $postvar .= "&items[" . $count . "][priceVariation]=";
                $postvar .= $vid[$count];
                $postvar .= "&items[" . $count . "][quantity]=";
                $postvar .= $qty[$count];
                $count++;
            }
            // echo $_SERVER['SERVER_NAME'];
            // echo ;
            $url = 'https://' . $_SERVER['SERVER_NAME'] . '/api/app-manager/get-functionality/order/new-order';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                $postvar);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            curl_close($ch);

            $data = json_decode($server_output);
// $data->status;

       // return new response($server_output);
            if ($data == "" || $data == (object) []) {
                $request->getSession()->getFlashBag()->add('error', "something went wrong!");
                return $this->redirectToRoute('create_order');

            }

            if ($data->data[0] == "Successfully created one order") {
                $request->getSession()->getFlashBag()->add('success', "New Order Created successfully!");
// return $this->redirectToRoute('create_order');
                $orderid = $data->order->id;

                return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderid));

            } else {
                $request->getSession()->getFlashBag()->add('error', $data->data[0]);
                return $this->redirectToRoute('create_order');

            }
        }
    }
    public function loyaltys($id, $branch, $reg)
    // public function loyaltyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        // $id=10024;
        // $branch=999;
        // $reg='';
        $helper = $this->container->get('function_helper');
        $loyalty = $connection->prepare("SELECT * from loyalty where branch='$branch'");
        $loyalty->execute();
        $loyalorder = $loyalty->fetchAll();
        foreach ($loyalorder as $res) {
            # code...
        }
        $order = $connection->prepare("SELECT * from customer_order where id ='$id'");
        $order->execute();
        $orderresp = $order->fetchAll();
        foreach ($orderresp as $resp) {
            # code...
        }
        $customer = $resp['customer_d'];
        $statement = $connection->prepare("SELECT a.*,b.loyalty as loyal from  customer_order_items as a join  price_variation as b on a.itemId=b.id where a.order_d='$id'");
        $statement->execute();
        $orders = $statement->fetchAll();
        foreach ($orders as $or) {
            $itemId = $or['itemId'];
            $variationName = $or['priceVariavtion'];
            if ($res['status'] == '1') {
                return array('status' => false, 'res' => 'Loyalty Disabled');
            }

            $price = $or['price'];
            $quantity = $or['quantity'];
            $loyalProint = $or['loyal'];
            $points = $loyalProint * $quantity;
            $ids = $or['id'];

            $em->getConnection()->exec("update customer_order_items set loyalty='$points' where id='$ids'");

        }
        $customer = $resp['customer_d'];
        $statement = $connection->prepare("SELECT sum(loyalty) as loyal from  customer_order_items where order_d='$id'");
        $statement->execute();
        $orders = $statement->fetchAll();

        foreach ($orders as $resps) {
            # code...
        }

        $points = $resps['loyal'];

        $note = "Congratulation, " . $points . " Points added to your wallet for completing order #" . $id . " on " . date('d-m-Y');
        $mode = 'Loyalty';
        if ($points >= 0) {
            $prepaidBalance = $this->getBalanceAction($customer, 3, $points, $mode, $note, 'lamo', $branch);

            $helper->sendGCM($note, $reg, '2', $id);
        }

        return $orders;
    }

    public function cancelOrder($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * from customer_order where id='$id'");
        $statement->execute();
        $mest = $statement->fetchAll();
        foreach ($mest as $order) {
        }

        $wallet = $order['wallet'];
        $loyalty = $order['loyalty'];
        $customer = $order['customer_d'];
        $branch = $order['branch'];
        $paymentType = $order['paymentType'];
        $amount = $order['orderAmount'];

        if ($loyalty != 0) {
            $note = 'Points Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 3, $loyalty, 'Refund', $note, 0, $branch);
        }
        if ($wallet != 0) {
            $note = $wallet . ' Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 0, $wallet, 'Refund', $note, 0, $branch);
        }
        if ($paymentType == 'paytm' || $paymentType == 'online' || $paymentType == 'razor') {
            $note = $amount . ' Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 0, $amount, 'Refund', $note, 0, $branch);
        }

        return 0;
    }
    public function getBalanceAction($id, $type, $credits, $mode, $note, $duration, $branch)
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
                $loyalty = $da->getLoyalty();
                if ($type == 0) {
                    $amount = $prepaid + $credits;
                    $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$id'");
                } elseif ($type == 3) {
                    $loyaltyBalance = $this->loyaltyBalance($id);

                    $amount = $loyaltyBalance + $credits;
                    $em->getConnection()->exec("update wallet set loyalty='$amount' where user='$id'");
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
    public function loyaltyBalance($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sq = $connection->prepare("SELECT * from wallet_logs where ref='$id'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return 0;

        } else {
            foreach ($finalresponse as $ra) {

            }
            return $ra['balance'];

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
//function to create logs
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
    public function createOrderAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statements = $connection->prepare("SELECT * FROM `customer` where isActive='1' and branch='$branch'");
        $statements->execute();
        $customer = $statements->fetchAll();
        $data1 = array();
        $data2 = array();
        //items start
        $statement = $connection->prepare("SELECT * FROM `menu_item`  where isActive=1 and branch='$branch'");
        // $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $ress) {
                $id = $ress['id'];
                if ($ress['type'] == '1') {
                    $statement = $connection->prepare("SELECT a.id as mid,a.isActive,a.salePrice,a.totalQty,a.itemName,a.type,b.* FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id' and b.status='0'");
                    $statement->execute();
                    $result = $statement->fetchAll();
                    if (empty($result)) {
                        //$data1 = array();
                    } else {
                        foreach ($result as $res) {
                            $qty = $ress['totalQty'];
                            if ($qty == '0' || $qty == '') {
                                $qty = 1;
                            } else {
                                $qty = $qty;
                            }
                            $pr = $res['price'];
                            $salesprice = $ress['salePrice'];
                            if ($pr == '' || $pr == '0') {
                                $pr = $res['mrp'];
                                $prs = $pr * $salesprice / 100;
                                $iprice = $prs + $salesprice;
                            } else {
                                $pr = $res['mrp'];
                                $prs = $pr * $salesprice / 100;
                                $resp = $prs + $salesprice;
                                $pr = $res['price'];
                                $prs = $pr * $resp / 100;
                                $iprice = -($prs - $resp);
                            }
                            if ($res['weight'] == '0' || $res['weight'] == '') {
                                $weight = 1;
                            } else {
                                $weight = $res['weight'];
                            }
                            $stock = round($qty / $weight);
                            $id = $res['id'];
                            $data1[] = array('id' => $id, 'itemName' => $res['itemName'], 'stock' => $stock, 'name' => $res['variationName'], 'price' => round($iprice), 'type' => $res['type'], 'mid' => $res['mid']);
                        }
                    }
                } else {
                    $statement = $connection->prepare("SELECT a.id as mid,a.isActive,a.salePrice,a.totalQty,a.itemName,a.type,b.* FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id' and b.status='0'");
                    $statement->execute();
                    $result = $statement->fetchAll();
                    if (empty($result)) {
                        //$data2 = array();
                    } else {
                        foreach ($result as $res) {
                            $id = $res['id'];
                            if ($res['mrp'] == 0 || $res['mrp'] == '') {
                                $price = $res['price'];
                            } elseif ($res['price'] == 0 || $res['price'] == '') {
                                $price = $res['mrp'];
                            } else {
                                $price = $res['price'];
                            }
                            $data2[] = array('id' => $res['id'], 'itemName' => $res['itemName'], 'stock' => $res['stock'], 'name' => $res['variationName'], 'price' => $price, 'type' => $res['type'], 'mid' => $res['mid']);
                        }
                    }
                }
            }
            $data = array_merge($data1, $data2);
            $sql = $connection->prepare("SELECT * FROM `location` where branch ='$branch'");
            $sql->execute();
            $location = $sql->fetchAll();
            //items end
            return $this->render('AppBundle:Admin:Orders/create.html.twig', array(
                'menuItems' => $data, "customer" => $customer, "location" => $location,
            ));
        }
    }

    public function getSlotByIdAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $areaid = $request->get('id');
        $branch = 999;

        $sql = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st  from slots where area='$areaid' order by st ASC");
        $sql->execute();
        $data = $sql->fetchAll();
        if (count($data) == 0) {
            return new JsonResponse(array());
        } else {
            $weekOfdays = array();

            $current_date = time(); //get current date.
            $next = strtotime('+2 days');
            while ($current_date <= $next) {
                $weekOfdays[] = date('d-m-Y', $current_date);
                $current_date = strtotime('+1 day', $current_date); // add next date
            }
            // print_r($weekOfdays);
            $rows = array();
            foreach ($weekOfdays as $date) {

                $sqls = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and 1 order by st asc");
                $sqls->execute();
                $datas = $sqls->fetchAll();
                foreach ($datas as $d) {
                    $time = $d['start'] . ' - ' . $d['end'];

                    $sq = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st  from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and orders >= (SELECT COUNT(*) FROM `customer_order` WHERE fixtime='$time' and fixdate='$date' and area in(select b.title from slots as a join location as b on a.area=b.id where a.area='$areaid')) order by st asc");
                    $sq->execute();
                    $finalresponse = $sq->fetchAll();
                    // $frows='';
                    foreach ($finalresponse as $fi) {
                        $difference = strtotime(date('h:i A')) - strtotime($fi['start']);
                        $next = $this->getLastSlot($branch);
                        if ($next == 0 || $next == null) {
                            $enddifference = strtotime(date('h:i A')) - strtotime($fi['end']);
                        } else {
                            $now = date('h:i A'); // Seconds since 1970-01-01 00:00:00
                            $minutes = $next;
                            $seconds = ($minutes * 60); // 2400 seconds
                            // $future  = ($now + $seconds);
                            // echo $res=date($fi['end'],strtotime('-'.$next.' minutes'));
                            $To = date("h:i A", strtotime($fi['end']) - ($next * 60));

                            $enddifference = strtotime(date('h:i A')) - strtotime($To);

                        }

                        if ($date == date('d-m-Y') && $difference > 0 && $enddifference >= 0) {
                            // $frows='';
                        } else {
                            $frows[] = array("date" => $date, "time" => $fi['start'] . ' - ' . $fi['end']);
                        }
                    }

                }
            }
            if ($frows == '') {
                return new JsonResponse(array());
            } else {
                $res = array_map("unserialize", array_unique(array_map("serialize", $frows)));

                foreach ($res as $response) {
                    // if($response['date']==date('d-m-Y'))
                    // {

                    // }
                    // else
                    // {
                    $rows[] = array("date" => $response['date'], "time" => $response['time']);

                    // }

                }
                return new JsonResponse($rows);
            }

        }
    }
    public function getLastSlot($branch)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where `id`='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {

            return $res['slot'];
        }
    }
    public function thermalPrintAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $result['data'] = [];
        $message = "All";
        $id = $request->get('id');
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id ='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.mobileNo,b.email,b.gst FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$id'");
        $statement->execute();
        $mes = $statement->fetchAll();
        $statements = $connection->prepare("SELECT * FROM `customer_order_items` where order_d='$id' order by tax ASC");
        $statements->execute();
        $items = $statements->fetchAll();

        $statements = $connection->prepare("SELECT tax,sum(subTotal) as subTotal FROM `customer_order_items` where order_d='$id' GROUP by tax order by tax asc");
        $statements->execute();
        $tax = $statements->fetchAll();
        return $this->render('AppBundle:Admin:Orders/thermal.html.twig', array(
            'orders' => $mes,
            'restaurant' => $restaurant,
            'items' => $items,
            'tax' => $tax,
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function normalPrintAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $result['data'] = [];
        $message = "All";
        $id = $request->get('id');
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        $statement = $connection->prepare("SELECT a.*,b.mobileNo,b.email,b.gst FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$id'");
        $statement->execute();
        $mes = $statement->fetchAll();
        $statements = $connection->prepare("SELECT * FROM `customer_order_items` where order_d='$id' order by tax ASC");
        $statements->execute();
        $items = $statements->fetchAll();

        $statements = $connection->prepare("SELECT tax,subTotal  as subTotal FROM `customer_order_items` where order_d='$id' GROUP by tax,subTotal order by tax asc");
        $statements->execute();
        $tax = $statements->fetchAll();
        return $this->render('AppBundle:Admin:Orders/print.html.twig', array(
            'orders' => $mes,
            'restaurant' => $restaurant,
            'items' => $items,
            'tax' => $tax,
            "numberFormat" => $this->getNumberFormat()
        ));
    }
    public function getMenuItemAction()
    {
        $em = $this->getDoctrine()->getManager();

        // $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation)");

        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $menu[] = array('ids' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'alert' => $res['alert'], 'price_variation' => $this->priceVariation($res['id']));
        }
        return $menu;

    }

    public function priceVariation($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * FROM `price_variation` where menu_item_id='$id'  and stock is not null");

        $statement->execute();
        $menus = $statement->fetchAll();

        foreach ($menus as $res) {
            $menu[] = array('id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variation_name' => $res['variationName'], 'price' => $res['price'], 'priority' => $res['priority'], 'mrp' => $res['mrp'], 'stock' => $res['stock'], 'max_item' => $res['maxItem'], 'status' => $res['status'], 'min_item' => $res['minItem'], 'alert' => $res['alert']);
        }
        return $menu;
    }
    public function reportAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $request->getSession()->set('prev-path', $request->getRequestUri());
        $result['data'] = [];
        $message = "All";
        $status = $request->get('status');
        $time = $request->get('time');
        $date = $request->get('date');
        $area = $request->get('area');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `location`");
        $statement->execute();
        $mes = $statement->fetchAll();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        foreach ($restaurant as $rest) {
            # code...
        }
        $order = array();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where fixDate >= date_format(NOW(), '%d-%m-%Y') and orderStatus not in('delivered','completed','cancelled') and orderType in('Delivery','pickup') and branch='$branch'");
        $sql->execute();
        $order = $sql->fetchAll();
        foreach ($order as $resp) {

            $fixtime = $resp['fixtime'];
            $response = explode('-', $fixtime);
            $fixtime = trim($response[1]);
            $date = date('Y-m-d');
            $sql = $connection->prepare("SELECT a.*,b.mobileNo FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.fixDate >= date_format(NOW(), '%d-%m-%Y') and a.orderStatus not in('delivered','completed','cancelled') and a.orderType in('Delivery','pickup') and a.branch='$branch' and NOW() < str_to_date(CONCAT('$date','$fixtime') , '%Y-%m-%d %l:%i %p')");
            $sql->execute();
            $order = $sql->fetchAll();
        }
        return $this->render('AppBundle:Admin:Orders/orderList.html.twig', [
            'message' => $message,
            'orders' => $order,
            'orderStatus' => $this->orderStatusAction($status),
            'status' => $status,
            "area" => $area,
            "date" => $date,
            "all" => $this->status('all'),
            "received" => $this->status('received'),
            "processing" => $this->status('processing'),
            "dispatched" => $this->status('dispatched'),
            "ready" => $this->status('ready'),
            "delayed" => $this->getDelayedOrders(),
            "reschedule" => $this->status('reschedule'),
            "delivered" => $this->status('delivered'),
            "cancelled" => $this->status('cancelled'),
            "completed" => $this->status('completed'),
            "picker" => $this->status('pick'),
            "onway" => $this->status('onway'),
            "failed" => $this->status('failed'),
            "date_d" => '',
            "area_d" => '',
            "time_d" => '',
            "type" => '',
            "currency" => $rest['currencyFormat'],
            "s" => 0,

        ]);
    }

    public function filterOrderListAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $request->getSession()->set('prev-path', $request->getRequestUri());
        $result['data'] = [];
        $message = "All";
        $status = $request->get('status');
        $time = $request->get('time');
        $date = $request->get('date');
        $area = $request->get('area');
        $type = $request->get('type');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $order = $em->createQueryBuilder()
            ->select('customerOrder')
            ->from('AppBundle:CustomerOrder', 'customerOrder')
            ->leftJoin('customerOrder.customerOrderItems', 'item');

        if ($date != '0' || $date != '') {
            $order = $order->andWhere('customerOrder.fixdate LIKE  :date')
                ->setParameter('date', '%' . $date . '%');
        }

        if ($type != '0' || $type != '') {
            $order = $order->andWhere('customerOrder.orderType LIKE  :type')
                ->setParameter('type', $type);
        }

        if ($area != '0') {
            $order = $order->andWhere('customerOrder.area LIKE  :area')
                ->setParameter('area', $area);

        }

        if ($time != '0') {
            $order = $order->andWhere('customerOrder.fixtime LIKE  :time')
                ->setParameter('time', '%' . $time . '%');

        }
if($status=='today')
{
$order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'received');
}
else
{
$order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', $status);
}

        $order = $order->andWhere('customerOrder.branch = :branch')
            ->setParameter('branch', $branch);
        //     $order=$order->andWhere('customerOrder.orderType = :type')
        // ->setParameter('type','Delivery');
        $order = $order->addOrderBy('customerOrder.id', 'DESC')
            ->getQuery()
            ->getResult();

        if ($result['data'] != []) {
            $order = [];
        }
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `location` where branch='$branch'");
        $statement->execute();
        $mes = $statement->fetchAll();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        foreach ($restaurant as $rest) {
            # code...
        }
        return $this->render('AppBundle:Admin:Orders/orderList.html.twig', [
            'message' => $message,
            'orders' => $order,
            'orderStatus' => $this->orderStatusAction($status),
            'status' => $status,
            "area" => $mes,
            "date" => $date,
            "all" => $this->status('all'),
            "received" => $this->status('received'),
            "processing" => $this->status('processing'),
            "dispatched" => $this->status('dispatched'),
            "ready" => $this->status('ready'),
            "delivered" => $this->status('delivered'),
            "cancelled" => $this->status('cancelled'),
            "picker" => $this->status('picker'),
            "completed" => $this->status('completed'),
            "picker" => $this->status('pick'),
            "failed" => $this->status('failed'),
            "delayed" => $this->getDelayedOrders(),
            "onway" => $this->status('onway'),
            "reschedule" => $this->status('reschedule'),
            "date_d" => $date,
            "area_d" => $area,
            "time_d" => $time,
            "type" => $type,
            "currency" => $rest['currencyFormat'],
            "s" => 1,

        ]);
    }
    public function getDelayedOrders()
    {

        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $order = array();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where fixDate >= date_format(NOW(), '%d-%m-%Y') and orderStatus not in('delivered','completed','cancelled') and orderType in('Delivery','pickup') and branch='$branch'");
        $sql->execute();
        $order = $sql->fetchAll();
        foreach ($order as $resp) {

            $fixtime = $resp['fixtime'];
            $response = explode('-', $fixtime);
            $fixtime = trim($response[1]);
            $date = date('Y-m-d');
            $sql = $connection->prepare("SELECT a.*,b.mobileNo FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.fixDate >= date_format(NOW(), '%d-%m-%Y') and a.orderStatus not in('delivered','completed','cancelled') and a.orderType in('Delivery','pickup') and a.branch='$branch' and NOW() < str_to_date(CONCAT('$date','$fixtime') , '%Y-%m-%d %l:%i %p')");
            $sql->execute();
            $order = $sql->fetchAll();
        }
        return count($order);
    }
    public function pickupListAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $request->getSession()->set('prev-path', $request->getRequestUri());
        $result['data'] = [];
        $message = "All";
        $status = $request->get('status');
        $time = $request->get('time');
        $date = $request->get('date');
        $area = $request->get('area');

        if ($status == "received") {
            $status = "received";
        }

        $order = $em->createQueryBuilder()
            ->select('customerOrder')
            ->from('AppBundle:CustomerOrder', 'customerOrder')
            ->leftJoin('customerOrder.customerOrderItems', 'item');

        if ($date == '') {
            $date = date("d-m-Y");
        } else {
            $date = $date;
        }
        if ($status == 'today') {
            $order = $order->andWhere('customerOrder.fixdate LIKE  :date')
                ->setParameter('date', '%' . $date . '%');
        }

        if ($status == "received") {
            $message = "Pending";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'received');

        } elseif ($status == "delayed") {
            $message = "Delayed";
            $dateThreshold = new \DateTime();
            $dateThreshold->modify("-15minutes");
            $order = $order->andWhere('(customerOrder.orderStatus = :pending and customerOrder.orderDate < :timeGap) or (customerOrder.orderStatus = :processing and customerOrder.proccessTime < :timeGap) or (customerOrder.orderStatus = :dispatched and customerOrder.dispatchTime < :timeGap) or (customerOrder.orderStatus = :onway and customerOrder.onwayTime < :timeGap) or (customerOrder.orderStatus = :ready and customerOrder.readyTime < :timeGap)')
                ->setParameter('pending', 'received')
                ->setParameter('processing', 'processing')
                ->setParameter('dispatched', 'dispatched')
                ->setParameter('onway', 'onway')
                ->setParameter('ready', 'ready')
                ->setParameter('timeGap', $dateThreshold);
        } elseif ($status == "processing") {
            $message = "Processing";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'processing');
        } elseif ($status == "ready") {
            $message = "Item ready";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'ready');
        } elseif ($status == "out-for-delivery") {
            $message = "Out for delivery";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'dispatched');
        } elseif ($status == "onway") {
            $message = "Item on the way";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'onway');
        } elseif ($status == "delivered") {

            $message = "Delivered";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'delivered');
        } elseif ($status == "completed") {

            $message = "Completed";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'completed');
        } elseif ($status == "cancelled") {
            $message = "Cancelled";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'cancelled');

        } else {

        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $order = $order->andWhere('customerOrder.branch = :branch')
            ->setParameter('branch', $branch);
        $order = $order->andWhere('customerOrder.orderType = :type')
            ->setParameter('type', 'pickup');
        $order = $order->addOrderBy('customerOrder.sortTime', 'DESC')
            ->getQuery()
            ->getResult();

        if ($result['data'] != []) {
            $order = [];
        }
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `location`");
        $statement->execute();
        $mes = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Pickup/list.html.twig', [
            'message' => $message,
            'orders' => $order,
            'orderStatus' => $this->orderStatusAction($status),
            'status' => $status,
            "area" => $mes,
            "date" => $date,
            "all" => $this->statusL('all'),
            "received" => $this->statusL('received'),
            "processing" => $this->statusL('processing'),
            "dispatched" => $this->statusL('dispatched'),
            "ready" => $this->statusL('ready'),
            "delivered" => $this->statusL('delivered'),
            "cancelled" => $this->statusL('cancelled'),
            "completed" => $this->statusL('completed'),

        ]);
    }

    public function expressListAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $request->getSession()->set('prev-path', $request->getRequestUri());
        $result['data'] = [];
        $message = "All";
        $status = $request->get('status');
        $time = $request->get('time');
        $date = $request->get('date');
        $area = $request->get('area');

        if ($status == "received") {
            $status = "received";
        }

        $order = $em->createQueryBuilder()
            ->select('customerOrder')
            ->from('AppBundle:CustomerOrder', 'customerOrder')
            ->leftJoin('customerOrder.customerOrderItems', 'item');

        if ($date == '') {
            $date = date("d-m-Y");
        } else {
            $date = $date;
        }
        if ($status == 'today') {
            $order = $order->andWhere('customerOrder.fixdate LIKE  :date')
                ->setParameter('date', '%' . $date . '%');
        }

        if ($status == "received") {
            $message = "Pending";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'received');

        } elseif ($status == "delayed") {
            $message = "Delayed";
            $dateThreshold = new \DateTime();
            $dateThreshold->modify("-15minutes");
            $order = $order->andWhere('(customerOrder.orderStatus = :pending and customerOrder.orderDate < :timeGap) or (customerOrder.orderStatus = :processing and customerOrder.proccessTime < :timeGap) or (customerOrder.orderStatus = :dispatched and customerOrder.dispatchTime < :timeGap) or (customerOrder.orderStatus = :onway and customerOrder.onwayTime < :timeGap) or (customerOrder.orderStatus = :ready and customerOrder.readyTime < :timeGap)')
                ->setParameter('pending', 'received')
                ->setParameter('processing', 'processing')
                ->setParameter('dispatched', 'dispatched')
                ->setParameter('onway', 'onway')
                ->setParameter('ready', 'ready')
                ->setParameter('timeGap', $dateThreshold);
        } elseif ($status == "processing") {
            $message = "Processing";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'processing');
        } elseif ($status == "ready") {
            $message = "Item ready";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'ready');
        } elseif ($status == "out-for-delivery") {
            $message = "Out for delivery";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'dispatched');
        } elseif ($status == "onway") {
            $message = "Item on the way";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'onway');
        } elseif ($status == "delivered") {

            $message = "Delivered";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'delivered');
        } elseif ($status == "completed") {

            $message = "Completed";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'completed');
        } elseif ($status == "cancelled") {
            $message = "Cancelled";
            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', 'cancelled');

        } else {

        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $order = $order->andWhere('customerOrder.branch = :branch')
            ->setParameter('branch', $branch);
        $order = $order->andWhere('customerOrder.orderType = :type')
            ->setParameter('type', 'express');
        $order = $order->addOrderBy('customerOrder.sortTime', 'DESC')
            ->getQuery()
            ->getResult();

        if ($result['data'] != []) {
            $order = [];
        }
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `location` where branch='$branch'");
        $statement->execute();
        $mes = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Pickup/list.html.twig', [
            'message' => $message,
            'orders' => $order,
            'orderStatus' => $this->orderStatusAction($status),
            'status' => $status,
            "area" => $mes,
            "date" => $date,
            "all" => $this->statusL('all'),
            "received" => $this->statusL('received'),
            "processing" => $this->statusL('processing'),
            "dispatched" => $this->statusL('dispatched'),
            "ready" => $this->statusL('ready'),
            "delivered" => $this->statusL('delivered'),
            "cancelled" => $this->statusL('cancelled'),
            "completed" => $this->statusL('completed'),

        ]);
    }

    public function reportJsonAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $result['data'] = [];
        $message = "All";
        $status = $request->get('status');
        $time = $request->get('time');
        $date = $request->get('date');
        $area = $request->get('area');

        if ($date == '') {
            $date = date("d-m-Y");
        } else {
            $date = $date;
        }

        if ($area != '0') {
            if ($time == '0') {

                $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.fixDate like '%$date%' and a.area='$area' and 1 order by  a.orderDate desc");
            } else {
                $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.fixDate like '%$date%' and a.area='$area' and a.fixtime='$time' order by  a.orderDate desc");
            }
        } else {
            $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.fixDate like '%$date%' and 1 order by  a.orderDate desc");
        }

        $statement->execute();
        $order = $statement->fetchAll();
        $res = '';
        if (count($order) == 0) {
            $res .= '<tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data Found!</td></tr>';
            return new response($res);

        } else {

            foreach ($order as $orders) {

                $res .= "<tr><td>";
                $res .= '<input type="checkbox" name="all[]" class="tst" value="' . $orders['id'] . '">';
                if ($orders['trayStatus'] == '0' || $orders['trayStatus'] == '' || $orders['trayStatus'] == null) {
                    $res .= '<a href="/app-manager/' . $orders['id'] . '/order-update" title="Edit">' . $orders['id'] . '</a><br>';
                }
                if ($orders['trayStatus'] == '3') {
                    $res .= '<a href="/app-manager/' . $orders['id'] . '/order-update" title="Edit" style="color:#e91e63;font-weight:400;">' . $orders['id'] . '</a><br>';
                }
                if ($orders['trayStatus'] == '1') {
                    $res .= '<a href="/app-manager/' . $orders['id'] . '/order-update" title="Edit" style="color:#F44337;font-weight:400;">' . $orders['id'] . '</a><br>';
                }
                if ($orders['trayStatus'] == '2') {
                    $res .= '<a href="/app-manager/' . $orders['id'] . '/order-update" title="Edit" style="color:#014c0a;font-weight:400;">' . $orders['id'] . '</a><br>';
                }

                $res .= "</td>";
                $res .= "<td>";
                $res .= '<small class="text-sm">' . $orders['customerName'] . '<br>' . $orders['mobileNo'] . '<br>' . $orders['email'] . '</small>';
                $res .= "</td>";
                $res .= "<td>";
                $res .= '<small class="text-sm">' . $orders['address'] . '</small> <span style="color: #000000;font-size: 10px;text-transform: uppercase;">Delivery Area : ' . $orders['area'] . ' <br> Delivery Time : ' . $orders['fixtime'] . ' - ' . $orders['fixDate'] . '</span></small>';
                $res .= "</td>";
                $res .= "<td>";
                $res .= '<small class="text-sm">' . $orders['paymentType'] . ',' . '₹' . $orders['orderAmount'] . '<br>' . $orders['orderDate'] . '</small>';
                $res .= "</td>";
                $res .= "<td>";
                $res .= '<span style="color:green;font-size:10px;font-weight:bold;text-transform:uppercase;">' . $orders['orderStatus'] . '</span><br>';
                $res .= '<span style="font-size:10px;font-weight:bold;">Tray.No :';
                if ($orders['tray'] == '0' || $orders['tray'] == '') {
                    $res .= 'Not Assigned';
                } else {
                    $res .= $orders['tray'];
                }

                $res .= '</span><br>';
                $res .= '<a class="btn" href="/app-manager/' . $orders['id'] . '/order-update" style="width:150px;line-height: 9px;height: 25px !important;font-size: 12px;font-weight: 400 !important;">Update</a>';
                $res .= "</td>";
                $res .= "</tr>";

            }
            return new response($res);
        }

    }
    public function statusMember($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * from membership_history  where ref='$id'");
        $statement->execute();
        $memebr = $statement->fetchAll();
        if (count($memebr) == 0) {
        } else {
            $statement = $connection->prepare("SELECT * from customer_order  where id='$id'");
            $statement->execute();
            $menus = $statement->fetchAll();
            if (count($menus) == 0) {
                $data = array();
            } else {
                foreach ($menus as $res) {
                    $userid = $res['customer_d'];
                    $em->getConnection()->exec("update customer set membership='1' where id='$userid'");
                    $em->getConnection()->exec("update membership_history set status='0' where ref='$id'");
                }
            }
        }
    }
    public function status($status)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $result['data'] = [];
        $message = "All";
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($status == 'all') {
            $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray FROM `customer_order` as a join customer as b on a.customer_d=b.id where  1 and a.branch='$branch' order by  a.orderDate desc");
        } else {
            $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.orderStatus='$status' and 1 and a.branch='$branch' order by  a.orderDate desc");

        }
        $statement->execute();
        $order = $statement->fetchAll();
        return count($order);
    }
    public function statusL($status)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $result['data'] = [];
        $message = "All";
        if ($status == 'all') {
            $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.orderType='pickup' order by  a.orderDate desc");
        } else {
            $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.orderStatus='$status' and  a.orderType='pickup' order by  a.orderDate desc");

        }
        $statement->execute();
        $order = $statement->fetchAll();
        return count($order);
    }
    public function orderStatusAction($type)
    {
        $orderStatus = [];
        $orderStatus["Received"] = "received";
        $orderStatus["Processing"] = "processing";
        $orderStatus["Order ready"] = "ready";
        $orderStatus["Out for delivery"] = "dispatched";
        $orderStatus["Delivered"] = "delivered";
        $orderStatus["Cancelled"] = "cancelled";
        $orderStatus["Completed"] = "completed";

        return $orderStatus;
    }
    public function editPickupAction(Request $request, CustomerOrder $customerOrder)
    {
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $helper = $this->container->get('function_helper');
        $trans = $this->container->get('transaction_helper');
        $oldOrderStatus = $customerOrder->getOrderStatus();
        $form = $this->createForm('AppBundle\Form\CustomerOrderType', $customerOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $delivery = $request->get('appbundle_customerorder[deliveryBoy]');
                $st = $customerOrder->getOrderStatus();
                $id = $customerOrder->getId();
                $res = $em->getConnection()->exec("update customer_order set orderStatus='$st',deliveryBoy='$delivery' where id='$id'");

                if ($oldOrderStatus != $customerOrder->getOrderStatus()) {
                    if ($customerOrder->getOrderStatus() == 'processing') {

                        $customerOrder->setProccessTime(new \Datetime());
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {
                            $helper->sendGCM('Your order is processing now.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'ready') {
                        $customerOrder->setReadyTime(new \Datetime());
                    } elseif ($customerOrder->getOrderStatus() == 'dispatched') {
                        $em = $this->getDoctrine()->getManager();
                        $out = $em->getRepository('AppBundle:User')->findById($delivery); // print_r($menus);
                        foreach ($out as $res) {
                            $da = $res->getMobileNumber();
                            $dRegistration = $res->getRegistrationKey();
                            $name = $res->getFirstName() . ' ' . $res->getLastName();
                            $otp = mt_rand(1111, 9999);
                            $id = $customerOrder->getId();
                            $em->getConnection()->exec("update customer_order set restoAppFee='$otp' where id='$id'");
                            $helper->sendStatus($customerOrder->getCustomer()->getMobileNumber(), array($name, $da, $otp), 'out');
                            $helper->sendStatus($da, $id, 'dout');
                            $helper->sendGCM('Your order is out for delivery.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                            $helper->sendGCM('You have new order!', $dRegistration, '2', $customerOrder->getId());
                            $customerOrder->setDispatchTime(new \Datetime());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'onway') {
                        $customerOrder->setDispatchTime(new \Datetime());
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {
                            $helper->sendGCM('Your order is on the way.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'delivered') {
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {
                            // $time = date('Y-m-d H:i:s');
                            // $customerOrder->setDeliveryTime($time);
                            //
                            // $helper->sendStatus($customerOrder->getCustomer(),'Your order is delivered. Thank you for choosing us!');
                            $helper->sendStatus($customerOrder->getCustomer()->getMobileNumber(), $customerOrder->getId(), 'delivered');

                            $helper->sendGCM('Your order is delivered.Thank you for choosing us!', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                            $this->statusMember($customerOrder->getId());

                        }
                    } elseif ($customerOrder->getOrderStatus() == 'completed') {
                        // $helper->sendStatus($customerOrder->getCustomer(),'Thank you for your purchase. Your order has been delivered.');
                        $this->statusMember($customerOrder->getId());

                        $helper->sendGCM('Thank you for your purchase. Your order has been delivered.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        $customerOrder->setCompleteTime(new \Datetime());
                    } elseif ($customerOrder->getOrderStatus() == 'cancelled') {
                        $helper->sendGCM('Your Order is cancelled.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());

                        $cancelledFlag = true;
                        $customerOrder->setCancelTime(new \Datetime());
                        $this->cancelOrder($id);
                    }
                }

                $em = $this->getDoctrine()->getManager();
                $customerOrder->setSortTime(new \Datetime());
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Order updated successfully");
                return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $customerOrder->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());

            }
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        $id = $customerOrder->getId();
        $sqls = $connection->prepare("SELECT * FROM `user` as a JOIN customer_order as b on a.id=b.deliveryBoy where b.id='$id'");
        $sqls->execute();
        $deliveryrow = $sqls->fetchAll();
        if (count($deliveryrow) == 0) {
            $name = '';
            $mobile = '';
        } else {
            foreach ($deliveryrow as $resp) {
            }
            $name = $resp['firstName'] . ' ' . $resp['lastName'];
            $mobile = $resp['mobileNumber'];
        }

        return $this->render('AppBundle:Admin:Pickup/edit.html.twig', array(
            'order' => $customerOrder,
            'form' => $form->createView(),
            'myExtend' => $myExtend,
            'restaurant' => $restaurant,
            'dname' => $name,
            'dmobile' => $mobile,
        ));
    }
    public function editOrderAction(Request $request, CustomerOrder $customerOrder)
    {
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $helper = $this->container->get('function_helper');
        $trans = $this->container->get('transaction_helper');
        $oldOrderStatus = $customerOrder->getOrderStatus();
        $form = $this->createForm('AppBundle\Form\CustomerOrderType', $customerOrder);
        $form->handleRequest($request);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $delivery = $request->get('delivery_boy');
                $fixdate = $request->get('fixdate');
                $fixtime = $request->get('fixtime');
                $picker = $request->get('picker');
                $st = $customerOrder->getOrderStatus();

                $id = $customerOrder->getId();

                if ($st == 'reschedule' || $st == 'Reschedule') {
                    if ($fixtime == '' || $fixtime == null) {
                        $request->getSession()->getFlashBag()->add('error', "Please select slot!");
                        return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $id));
                    } else {
                        $customerOrder->setOrderStatus('ready');
                        $res = $em->getConnection()->exec("update customer_order set orderStatus='ready',fixtime='$fixtime',fixDate='$fixdate' where id='$id'");
                        $helper->sendStatus($customerOrder->getCustomer()->getMobileNumber(), $id, 'reschedule');
                    }
                }
                if ($picker == '' || $picker == null) {
                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$st' where id='$id'");
                } else {
                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$st',picker='$picker' where id='$id'");
                    $out = $em->getRepository('AppBundle:User')->findById($picker); // print_r($menus);
                    foreach ($out as $res) {
                        $da = $res->getMobileNumber();
                        $dRegistration = $res->getRegistrationKey();
                        $helper->sendGCM('You have new order!', $dRegistration, '2', $id);
                    }
                }
                if ($delivery == '' || $delivery == null) {
                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$st' where id='$id'");
                } else {
                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$st',deliveryBoy='$delivery' where id='$id'");
                }

// print("update customer_order set orderStatus='$st' where id='$id'");
                // return new response($delivery);

                if ($oldOrderStatus != $customerOrder->getOrderStatus()) {
                    if ($customerOrder->getOrderStatus() == 'processing') {

                        $customerOrder->setProccessTime(new \Datetime());
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {
                            $helper->sendGCM('Your order is processing now.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'ready') {
                        $customerOrder->setReadyTime(new \Datetime());
                        if($customerOrder->getOrderType()=='pickup')
                        {
                      $statement = $connection->prepare("SELECT b.*,a.landmark FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$customerOrder->getId()'");
            $statement->execute();
            $mes = $statement->fetchAll();
            foreach ($mes as $resp) {
            }
            $mobile = $resp['mobileNo'];
            $registrationKey = $resp['registrationKey'];
            $landmark = $resp['landmark'];
            $helper->sendStatus($mobile, array($order, $landmark), 'pickup');
                $helper->sendGCM('Your order #'.$order.' is ready for pickup from '.$landmark.'.', $registrationKey, '2', $order);
            }
                    } elseif ($customerOrder->getOrderStatus() == 'dispatched' || $customerOrder->getOrderStatus() == 'Out for delivery') {
// return new response("update customer_order set restoAppFee='$otp' where id='$id'");
                        $em = $this->getDoctrine()->getManager();
                        $out = $em->getRepository('AppBundle:User')->findById($delivery); // print_r($menus);
                        foreach ($out as $res) {
                            $da = $res->getMobileNumber();
                            $dRegistration = $res->getRegistrationKey();
                            $name = $res->getFirstName() . ' ' . $res->getLastName();
                            $otp = mt_rand(1111, 9999);
                            $id = $customerOrder->getId();
                            $em->getConnection()->exec("update customer_order set restoAppFee='$otp' where id='$id'");
                            $helper->sendGCM('You have new order!', $dRegistration, '2', $customerOrder->getId());

                            $helper->sendStatus($customerOrder->getCustomer()->getMobileNumber(), array($name, $da, $otp), 'out');
                            $helper->sendStatus($da, $id, 'dout');
// return $otp;
                            $helper->sendGCM('Your order is out for delivery.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                            $customerOrder->setDispatchTime(new \Datetime());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'onway') {
                        $customerOrder->setDispatchTime(new \Datetime());
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {
                            $helper->sendGCM('Your order is on the way.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'delivered') {
// $time = date('Y-m-d H:i:s');
                        //                         $customerOrder->setDeliveryTime($time);
                        if ($customerOrder->getCustomer()->getRegistrationKey() != null) {

                            // $helper->sendStatus($customerOrder->getCustomer(),'Your order is delivered. Thank you for choosing us!');
                            $helper->sendStatus($customerOrder->getCustomer()->getMobileNumber(), $customerOrder->getId(), 'delivered');
                            $this->statusMember($customerOrder->getId());

                            $helper->sendGCM('Your order is delivered.Thank you for choosing us!', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        }
                    } elseif ($customerOrder->getOrderStatus() == 'completed') {
                        // $helper->sendStatus($customerOrder->getCustomer(),'Thank you for your purchase. Your order has been delivered.');

                        $this->statusMember($customerOrder->getId());

                        $helper->sendGCM('Thank you for your purchase. Your order has been delivered.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());
                        $customerOrder->setCompleteTime(new \Datetime());
                        $this->loyaltys($customerOrder->getId(), $branch, $customerOrder->getCustomer()->getRegistrationKey());

                    } elseif ($customerOrder->getOrderStatus() == 'cancelled') {
                        $helper->sendGCM('Your Order is cancelled.', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());

                        $cancelledFlag = true;
                        $customerOrder->setCancelTime(new \Datetime());
                        $this->cancelOrder($id);
                    } elseif ($customerOrder->getOrderStatus() == 'reschedule') {
                        $customerOrder->setOrderStatus('ready');

                    }

                }

                $em = $this->getDoctrine()->getManager();
                $customerOrder->setSortTime(new \Datetime());
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Order updated successfully");
                return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $customerOrder->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());

            }
        }

        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        $id = $customerOrder->getId();
        $sqls = $connection->prepare("SELECT * FROM `user` as a JOIN customer_order as b on a.id=b.deliveryBoy where b.id='$id'");
        $sqls->execute();
        $deliveryrow = $sqls->fetchAll();
        if (count($deliveryrow) == 0) {
            $name = '';
            $mobile = '';
        } else {
            foreach ($deliveryrow as $resp) {
            }
            $name = $resp['firstName'] . ' ' . $resp['lastName'];
            $mobile = $resp['mobileNumber'];
        }
        $pickersqls = $connection->prepare("SELECT * FROM `user` as a JOIN customer_order as b on a.id=b.picker where b.id='$id'");
        $pickersqls->execute();
        $picker = $pickersqls->fetchAll();
        if (count($picker) == 0) {
            $pname = '';
            $pmobile = '';
        } else {
            foreach ($picker as $resp) {
            }
            $pname = $resp['firstName'] . ' ' . $resp['lastName'];
            $pmobile = $resp['mobileNumber'];
        }
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $restaurant = $sql->fetchAll();
        foreach ($restaurant as $rest) {
            # code...
        }
        $sql = $connection->prepare("SELECT * FROM `location` where branch ='$branch'");
        $sql->execute();
        $location = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Orders/orderForm.html.twig', array(
            'order' => $customerOrder,
            'form' => $form->createView(),
            'myExtend' => $myExtend,
            'restaurant' => $restaurant,
            'dname' => $name,
            'dmobile' => $mobile,
            'pname' => $pname,
            'pmobile' => $pmobile,
            'location' => $location,
            "currency" => $rest['currencyFormat'],
            "numberFormat" => $this->getNumberFormat()

        ));
    }

    public function exportOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $status = $request->get('orderStatuss');
        $time = $request->get('times');
        $date = $request->get('dates');
        $area = $request->get('areas');
        $statuss = $request->get('status');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $from = $request->get('from');
        $to = $request->get('to');

        if ($date == '') {
            $date = date("d-m-Y");
        } else {
            $date = $date;
        }
        if (isset($_POST['order'])) {

            if ($area != '0') {
                if ($time == '0') {

                    $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area,c.itemName,c.priceVariavtion,c.quantity,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id join customer_order_items as c on a.id=c.order_d where a.fixDate like '%$date%' and a.area='$area' and a.orderStatus='$status'  and a.branch='$branch' and 1 order by  a.orderDate desc");
                } else {
                    $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area,c.itemName,c.priceVariavtion,c.quantity,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id join customer_order_items as c on a.id=c.order_d where a.fixDate like '%$date%' and a.area='$area' and a.orderStatus='$status'  and a.branch='$branch'  order by  a.orderDate desc");
                }
            } else {
                $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area,c.itemName,c.priceVariavtion,c.quantity,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id join customer_order_items as c on a.id=c.order_d where a.fixDate like '%$date%' and  a.orderStatus='$status' and a.branch='$branch'  order by  a.orderDate desc");
            }

            $statement->execute();
            $order = $statement->fetchAll();
            if (count($order) == '0') {
                $data[] = array("orderId" => '', "Customer Name" => '', 'Mobile Number' => '', 'address' => '', 'Order Date' => '', 'delivery date' => '', 'Delivery Time' => '', 'Area' => '', 'Item Name' => '', 'Quantity' => '', 'Variation' => '');
            } else {
                foreach ($order as $da) {
                    # code...

                    $data[] = array("orderId" => $da['id'], "Customer Name" => $da['customerName'], 'Mobile Number' => $da['mobileNo'], 'address' => $da['address'], 'Order Date' => $da['orderDate'], 'delivery date' => $da['fixDate'], 'Delivery Time' => $da['fixtime'], 'Area' => $da['area'], 'Item Name' => $da['itemName'], 'Variation' => $da['priceVariavtion'], 'Quantity' => $da['quantity']);
                }
            }
            $this->array_csv_downloadAction($data, 'order.csv');
        } elseif (isset($_POST['packing'])) {
            if ($area != '0') {
                if ($time == '0') {

                    $statement = $connection->prepare("SELECT itemName,priceVariavtion,sum(quantity) as quantity FROM `customer_order_items` WHERE order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area') GROUP BY itemName,priceVariavtion");
                } else {

                    $statement = $connection->prepare("SELECT itemName,priceVariavtion,sum(quantity) as quantity FROM `customer_order_items` WHERE order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area' and fixtime='$time') GROUP BY itemName,priceVariavtion");
                }
            } else {
                $statement = $connection->prepare("SELECT itemName,priceVariavtion,sum(quantity) as quantity FROM `customer_order_items` WHERE order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%') GROUP BY itemName,priceVariavtion");
            }

            $statement->execute();
            $order = $statement->fetchAll();
            if (count($order) == '0') {
                $data[] = array('Item Name' => '', 'Variation' => '', 'quantity' => '');
            } else {
                foreach ($order as $da) {
                    # code...

                    $data[] = array('Item Name' => $da['itemName'], 'Variation' => $da['priceVariavtion'], 'quantity' => $da['quantity']);
                }
            }
            $this->array_csv_downloadAction($data, 'packing-list.csv');

        } else {
            if ($area != '0') {
                if ($time == '0') {

                    $statement = $connection->prepare("SELECT * FROM `customer_order_items` as a join customer_order as b on a.order_d=b.id  WHERE a.order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area')");
                    $statements = $connection->prepare("SELECT tax,sum(subTotal) as subTotal FROM `customer_order_items` where  order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area') GROUP by tax order by tax asc");
                } else {

                    $statement = $connection->prepare("SELECT * FROM `customer_order_items` as a join customer_order as b on a.order_d=b.id  WHERE a.order_d in(SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area' and fixtime='$time')");
                    $statements = $connection->prepare("SELECT tax,sum(subTotal) as subTotal FROM `customer_order_items` where  order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%' and area='$area' and fixtime='$time')  GROUP by tax order by tax asc");

                }
            } else {
                $statement = $connection->prepare("SELECT * FROM `customer_order_items` as a join customer_order as b on a.order_d=b.id  WHERE a.order_d  in(SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%')");
                $statements = $connection->prepare("SELECT tax,sum(subTotal) as subTotal FROM `customer_order_items` where  order_d in (SELECT id from customer_order where orderStatus='$status' and fixDate like '%$date%')  GROUP by tax,subTotal order by tax asc");
            }

            $statement->execute();
            $order = $statement->fetchAll();

            $statements->execute();

            $tax = $statements->fetchAll();

            $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
            $sql->execute();
            $restaurant = $sql->fetchAll();

            return $this->render('AppBundle:Admin:Orders/multithermal.html.twig', array(
                'orders' => $order,
                'restaurant' => $restaurant,
                'items' => $order,
                'tax' => $tax,
            ));

        }
        return $this->redirectToRoute('restaurant_all_orders_list', array('status' => 'today'));

    }

    public function array_csv_downloadAction($array, $filename, $delimiter = ",")
    {
        ob_start();

        header("Content-Type: text/csv; charset=utf-8");
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        // clean output buffer
        ob_end_clean();

        $handle = fopen('php://output', 'w');

        // use keys as column titles
        fputcsv($handle, array_keys($array['0']));

        foreach ($array as $value) {
            fputcsv($handle, $value, $delimiter);
        }

        fclose($handle);

        // flush buffer
        ob_flush();

        // use exit to get rid of unexpected output afterward
        exit();
    }

    public function createTrayNumberAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $orderId = $request->get('orderid');
        $traynumber = $request->get('traynumber');
        $res = $em->getConnection()->exec("update customer_order set tray='$traynumber' where id='$orderId'");
        $request->getSession()->getFlashBag()->add('success', "Tray number updated successfully!");
        return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderId));

    }
    public function updatePaymentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $orderId = $request->get('orderid');
        $note = $request->get('note');
        $transactionId = $request->get('transactionId');
        $mode = $request->get('mode');
        $status = $request->get('status');
        $res = $em->getConnection()->exec("update customer_order set paymentStatus='paid',note='$note',paymentType='$mode',transactionId='$transactionId' where id='$orderId'");
        $request->getSession()->getFlashBag()->add('success', "Payment status updated");
        return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderId));

    }
    public function updatePaymentPendingAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $orderId = $request->get('orderid');
        $note = $request->get('note');
        $res = $em->getConnection()->exec("update customer_order set paymentStatus='pending',note='$note',paymentType='',transactionId='' where id='$orderId'");
        $request->getSession()->getFlashBag()->add('success', "Payment status updated");
        return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderId));

    }

    public function updateTrayNumberAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $orderId = $request->get('orderid');
        $id = $request->get('id');
        $qty = $request->get('qty');
        $oqty = $request->get('oqty');
        $count = 0;
        if ($id == '0' || $id == '') {
            $request->getSession()->getFlashBag()->add('error', "please add tray items!!");
            return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderId));
        } else {
            foreach ($id as $i) {
                $ids = $id[$count];
                $qtys = $qty[$count];
                $oq = $oqty[$count];
                if ($qtys > $oq) {
                    $qt = $qtys;
                    $status = 2;
                } elseif ($qtys == $oq) {
                    $qt = $oq;
                    $status = 2;
                } else {
                    $qt = $qtys;
                    $status = 1;

                }
                $res = $em->getConnection()->exec("update customer_order set trayStatus='2' where id='$orderId'");

                $res = $em->getConnection()->exec("update customer_order_items set trayQty='$qt',isTray='$status' where id='$ids'");
                $count++;
            }

            $request->getSession()->getFlashBag()->add('success', "Tray quantity updated successfully!");
            return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $orderId));
        }
    }

    public function updatePickUpStatusAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $trans = $this->container->get('transaction_helper');
        $status = $request->get('status');
        $orderStatus = $request->get('orderStatus');

        $date = date("Y-m-d h:i:s");
        $delivery = $request->get('delivery');

        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select order!");
            return $this->redirectToRoute('restaurant_all_pickup_list', array('status' => $status));
        } else {
            $checkbox = $_POST['all'];
            foreach ($checkbox as $userid) {

                $statement = $connection->prepare("SELECT b.* FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$userid'");
                $statement->execute();
                $mes = $statement->fetchAll();
                foreach ($mes as $me) {
                    $id = $me['id'];

                    $user = $me['id'];
                    $mobile = $me['mobileNo'];
                    $name = $me['username'];
                    $apiKey = $me['apiKey'];
                    $registrationKey = $me['registrationKey'];

                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',deliveryBoy='$delivery' where id='$userid'");
                    if ($orderStatus == 'processing') {
                        $res = $em->getConnection()->exec("update customer_order set proccessTime='$date' where id='$userid'");
                        $helper->sendGCM('Your order is processing now.', $registrationKey, '2', $userid);
                    } elseif ($orderStatus == 'ready') {
                        $res = $em->getConnection()->exec("update customer_order set readyTime='$date' where id='$userid'");
                        $helper->sendGCM('Your order is ready for pickup.', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'dispatched') {
                        $res = $em->getConnection()->exec("update customer_order set dispatchTime='$date' where id='$userid'");
                        $out = $em->getRepository('AppBundle:User')->findById($delivery); // print_r($menus);
                        foreach ($out as $res) {
                            $da = $res->getMobileNumber();
                            $dRegistration = $res->getRegistrationKey();
                            $name = $res->getFirstName() . ' ' . $res->getLastName();
                            $otp = mt_rand(1111, 9999);
                            $em->getConnection()->exec("update customer_order set restoAppFee='$otp' where id='$userid'");
                            $helper->sendStatus($mobile, array($name, $da, $otp), 'out');
                            $helper->sendStatus($da, $id, 'dout');
                            $helper->sendGCM('You have new order!', $dRegistration, '2', $customerOrder->getId());
                            $helper->sendGCM('Your order is out for delivery.', $registrationKey, '2', $userid);

                        }
                    } elseif ($orderStatus == 'onway') {
                        $res = $em->getConnection()->exec("update customer_order set dispatchTime='$date' where id='$userid'");
                        $helper->sendGCM('Your order is on the way.', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'delivered') {
                        $res = $em->getConnection()->exec("update customer_order set deliveryTime='$date' where id='$userid'");
                        $helper->sendStatus($mobile, $userid, 'delivered');
                        $helper->sendGCM('Your order is delivered. Thank you for choosing us!', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'completed') {
                        $res = $em->getConnection()->exec("update customer_order set completeTime='$date' where id='$userid'");
                        // $helper->sendStatus($mobile,'Thank you for your purchase. Your order has been delivered.');
                        $helper->sendGCM('Thank you for your purchase. Your order has been delivered.', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'cancelled') {
                        $res = $em->getConnection()->exec("update customer_order set cancelTime='$date' where id='$userid'");
                        $helper->sendStatus($mobile, $userid, 'cancelled');

                        $helper->sendGCM('Your order is cancelled.', $registrationKey, '2', $userid);

                    }
                }
            }

            $request->getSession()->getFlashBag()->add('success', "order status updated!");
            return $this->redirectToRoute('restaurant_all_pickup_list', array('status' => $status));
        }
    }
    public function updateOrderStatusAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $trans = $this->container->get('transaction_helper');
        $status = $request->get('status');
        $orderStatus = $request->get('orderStatus');

        $date = date("Y-m-d h:i:s");
        $delivery = $request->get('delivery');
        $picker = $request->get('picker');

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select order!");
            return $this->redirectToRoute('restaurant_all_orders_list', array('status' => $status));
        } else {
            $checkbox = $_POST['all'];
            $order_d = implode(', ', $checkbox);
            if (isset($_POST['print'])) {
                if (count($checkbox) == '0') {
                    $list = 0;
                    // return new response('ddd');
                    return $this->render('AppBundle:Admin:Orders/multithermal.html.twig', array(
                        'orders' => array(),
                        'restaurant' => array(),
                        'items' => array(),
                        'tax' => array(),
                        'yes' => 1,
                    ));

                } else {
                    $connection = $em->getConnection();
                    $statement = $connection->prepare("SELECT * FROM `customer_order_items` as a join customer_order as b on a.order_d=b.id  WHERE a.order_d in($order_d) ");
                    $orderdata = $connection->prepare("SELECT * FROM `customer` as a join customer_order as b on a.id=b.customer_d  WHERE b.id in($order_d)");
                    $statements = $connection->prepare("SELECT tax,sum(subTotal) as subTotal,order_d FROM `customer_order_items` where  order_d in($order_d)  GROUP by tax,order_d order by tax asc");
                    $statement->execute();
                    $order = $statement->fetchAll();
                    $orderdata->execute();
                    $orderres = $orderdata->fetchAll();
                    $statements->execute();
                    $tax = $statements->fetchAll();
                    $sql = $connection->prepare("SELECT * FROM `restaurants` where id = '$branch'");
                    $sql->execute();
                    $restaurant = $sql->fetchAll();

                    return $this->render('AppBundle:Admin:Orders/multithermal.html.twig', array(
                        'orders' => $orderres,
                        'restaurant' => $restaurant,
                        'items' => $order,
                        'tax' => $tax,
                        'yes' => 0,

                    ));

                }
            }
            foreach ($checkbox as $userid) {

                $statement = $connection->prepare("SELECT b.* FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$userid'");
                $statement->execute();
                $mes = $statement->fetchAll();
                foreach ($mes as $me) {

                    $id = $me['id'];
                    $user = $me['id'];
                    $mobile = $me['mobileNo'];
                    $name = $me['username'];
                    $apiKey = $me['apiKey'];
                    $registrationKey = $me['registrationKey'];

                    $res = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',deliveryBoy='$delivery' where id='$userid'");
                    if ($orderStatus == 'processing') {
                        $res = $em->getConnection()->exec("update customer_order set proccessTime='$date' where id='$userid'");
                        $helper->sendGCM('Your order is processing now.', $registrationKey, '2', $userid);
                    } elseif ($orderStatus == 'pick') {
                        $res = $em->getConnection()->exec("update customer_order set picker='$picker' where id='$userid'");

                    } elseif ($orderStatus == 'ready') {
                        $res = $em->getConnection()->exec("update customer_order set readyTime='$date' where id='$userid'");

                    } elseif ($orderStatus == 'dispatched') {
                        $res = $em->getConnection()->exec("update customer_order set dispatchTime='$date' where id='$userid'");
                        $out = $em->getRepository('AppBundle:User')->findById($delivery); // print_r($menus);
                        foreach ($out as $res) {
                            $da = $res->getMobileNumber();
                            $name = $res->getFirstName() . ' ' . $res->getLastName();
                            $otp = mt_rand(1111, 9999);
                            $em->getConnection()->exec("update customer_order set restoAppFee='$otp' where id='$userid'");
                            $helper->sendStatus($mobile, array($name, $da, $otp), 'out');
                            $helper->sendStatus($da, $id, 'dout');
                            $helper->sendGCM('Your order is out for delivery.', $registrationKey, '2', $userid);

                        }
                    } elseif ($orderStatus == 'onway') {
                        $res = $em->getConnection()->exec("update customer_order set dispatchTime='$date' where id='$userid'");
                        $helper->sendGCM('Your order is on the way.', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'delivered') {
                        $res = $em->getConnection()->exec("update customer_order set deliveryTime='$date' where id='$userid'");
                        $helper->sendStatus($mobile, $userid, 'delivered');
                        $helper->sendGCM('Your order is delivered. Thank you for choosing us!', $registrationKey, '2', $userid);

                    } elseif ($orderStatus == 'completed') {
                        $res = $em->getConnection()->exec("update customer_order set completeTime='$date' where id='$userid'");
                        // $helper->sendStatus($mobile,'Thank you for your purchase. Your order has been delivered.');
                        $helper->sendGCM('Thank you for your purchase. Your order has been delivered.', $registrationKey, '2', $userid);
                        $this->statusMember($userid);

                    } elseif ($orderStatus == 'cancelled') {
                        $res = $em->getConnection()->exec("update customer_order set cancelTime='$date' where id='$userid'");
                        $helper->sendStatus($mobile, $userid, 'cancelled');
                        $this->cancelOrder($userid);

                        $helper->sendGCM('Your order is cancelled.', $registrationKey, '2', $userid);

                    }
                }
            }

            $request->getSession()->getFlashBag()->add('success', "order status updated!");
            return $this->redirectToRoute('restaurant_all_orders_list', array('status' => $status));
        }
    }

    public function updateOrderAction(Request $request)
    {
        // editOrder
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $order = $request->get('order');
        $price = $request->get('price');
        $id = $request->get('id');
        $qty = $request->get('qty');
        $oqty = $request->get('oqty');
        $loyalty = $request->get('loyalty');
        // $promocheck=$request->get('promocheck');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $count = 0;
        if ($id == '0' || $id == '') {
            $request->getSession()->getFlashBag()->add('error', "please select order items");
            return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $order));
        } else {
            foreach ($id as $i) {
                $ids = $id[$count];
                $qtys = $_POST['qty'][$count];
                $oqty = $_POST['oqty'][$count];
                $loyalty = $_POST['loyalty'][$count];
                $reason = $_POST['reason'][$count];
                $prices = $price[$count];
                $tq = $prices * $qtys;
                //calculate loyalty
                $diffQty = $oqty - $qtys;
                // return new response('hehe');
                $oprice = $prices * $oqty;
                if ($loyalty != 0) {
                    $one = $loyalty / $oqty;
                    $loyaltyresp = $one * $qtys;
                } else {
                    $loyaltyresp = $loyalty;
                }
                $dprice=$prices*$diffQty;
                if ($diffQty > 0) {
                    $loyaltys = $this->saveLoyalty($i, $order, $loyalty);
                    $resp = $this->saveQty($i, $order, $diffQty);
                    $resp = $this->savePrice($i, $order, $dprice);
                    $statement = $connection->prepare("SELECT a.quantity,b.* FROM `customer_order_items` as a join price_variation as b on a.itemId=b.id where a.order_d='$order'");
                    $statement->execute();
                    $mes = $statement->fetchAll();
                    foreach ($mes as $me) {
                        $stock = $me['quantity'];
                        $cstock = $me['stock'];
                        $ids = $me['id'];
                        $mesd = $me['menu_item_id'];
                        $minus = $stock + $cstock;
                        $em->getConnection()->exec("update price_variation set stock='$minus' where 1 and id='$ids'");
                        $statement = $connection->prepare("SELECT * from menu_item where id='$mesd'");
                        $statement->execute();
                        $mesds = $statement->fetchAll();
                        foreach ($mesds as $med) {}
                        // print_r($mesd);
                        $stock = $me['quantity'];
                        $cstock = $med['totalQty'];
// return new response('ss');
                        $minus = $stock + $cstock;
// echo $mesd
                        //       return new response('ss');
                        $em->getConnection()->exec("update menu_item set totalQty='$minus' where 1 and id='$mesd'");
                    }
                    if ($qtys == '0') {
                        // print("delete from customer_order_items  where id='$ids'");
                        $res = $em->getConnection()->exec("delete from customer_order_items  where id='$i'");
                    } else {
                        $res = $em->getConnection()->exec("update customer_order_items set quantity='$qtys',actualAmount='$tq',subTotal='$tq',loyalty='$loyaltyresp',reason='$reason',edited=1 where id='$i'");
                        // print("update customer_order_items set quantity='$qtys',actualAmount='$tq',subTotal='$tq',loyalty='$loyaltyresp',reason='$reason' where id='$i'");
                        // return new JsonResponse(0);
                    }

                }
                $count++;
            }
            $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
            $statement->execute();
            $menus = $statement->fetchAll();
            foreach ($menus as $res) {
                $delivery = $res['deliveryCharge'];
                $customer = $res['customer_d'];
                $paymentType = $res['paymentType'];
                $branch = $res['branch'];
                $promocode = $res['promocode'];

                $totalDiscount = $res['totalDiscount'];
                $sql = $connection->prepare("select sum(subTotal) as sum from customer_order_items where order_d='$order'");
                $sql->execute();
                $sqlquery = $sql->fetchAll();
                if(count($sqlquery)==0)
                {
                    $total=0;
$actualAmount = 0;

                }
                else
                {
                $total = $sqlquery[0]['sum'];   
                $actualAmount = $total;

                }

                if(isset($_POST['promocheck']))
                {
                    $totalDiscount=0;
                if ($totalDiscount != 0) {
                    $totalDiscount = $total - $totalDiscount;
                    $final = $totalDiscount + $delivery;
                } else {
                    $totalDiscount = $totalDiscount;
                    $final = $total + $delivery;
                }
                }
                else
                {
                if ($totalDiscount != 0) {
                    $totalDiscount = $total - $totalDiscount;
                    $final = $totalDiscount + $delivery;
                } else {
                    $totalDiscount = $totalDiscount;
                    $final = $total + $delivery;
                }
            }
                // return new response('hehe');
if($actualAmount=='')
{
    $actualAmount=0;
}
else
{
    $actualAmount=$actualAmount;
}
                $restaurant = $em->getRepository('AppBundle:CustomerOrder')->find($order);
                if(isset($_POST['promocheck']))
                {
                $em->getConnection()->exec("update customer_order set actualAmount='$actualAmount',orderAmount='$final',totalDiscount=0,promocode=null where id='$order'");
            }
            else
            {
                 $em->getConnection()->exec("update customer_order set actualAmount='$actualAmount',orderAmount='$final' where id='$order'");
            }
                // $helper->sendOrderMessageCustomer($res['customer_d'],$restaurant,$branch);
                $wallet = $res['total_price'];
                if ($res['loyalty'] == '0') {
                    $loyalty = 0;
                } else {
                    $loyalty = $res['loyalty'] / $res['qty'];
                }
                if ($wallet != 0 && $paymentType != 'cod') {
                    $note = $wallet . ' Refunded for the order number #' . $order;
                    $this->getBalanceAction($customer, 0, $wallet, 'Refund', $note, 0, $branch);
                        $em->getConnection()->exec("update customer_order set total_price=0 where 1 and id='$order'");
                }
                if ($loyalty != 0 && $paymentType != 'cod') {
                    // $note = 'Points Refunded for the order number #' . $order;
                    // $this->getBalanceAction($customer, 3, $loyalty, 'Refund', $note, 0, $branch);
                }


            }
 $customerOrder = new CustomerOrder();
                $customerOrder = $em->getRepository('AppBundle:CustomerOrder')->find($res['id']);
$helper->sendOrderMessageCustomerRefund($res['customer_d'],$customerOrder,$branch);
// return new response('hehe');
            $request->getSession()->getFlashBag()->add('success', "order edited succesfully!");
            return $this->redirectToRoute('restaurant_orders_panel_update', array('id' => $order));
        }
    }

    public function saveLoyalty($ids, $order, $loyalty)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

        }
        $loyaltySum = $res['total_loyalty'];
        $total = $loyaltySum + $loyalty;
        $em->getConnection()->exec("update customer_order set total_loyalty='$total' where id='$order'");
    }

    public function saveQty($ids, $order, $diffQty)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

        }
        $qtySum = $res['total_quantity'];
        $total = $qtySum + $diffQty;
        $em->getConnection()->exec("update customer_order set total_quantity='$total' where id='$order'");

    }

    public function savePrice($ids, $order, $price)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

        }
        $qtySum = $res['total_price'];
        $total = $qtySum + $price;
        $em->getConnection()->exec("update customer_order set total_price='$total' where id='$order'");

    }
    public function filterOrderListAjaxAction(Request $request)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $request->getSession()->set('prev-path', $request->getRequestUri());
        $result['data'] = [];
        $message = "All";
        $date = $request->get('date');
        $date = $request->get('date');
        $status = $request->get('status');
        $time = $request->get('time');
        $area = $request->get('area');
        $type = $request->get('type');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $order = $em->createQueryBuilder()
            ->select('customerOrder')
            ->from('AppBundle:CustomerOrder', 'customerOrder')
            ->leftJoin('customerOrder.customerOrderItems', 'item');

                if ($status != "0") {

            $order = $order->andWhere('customerOrder.orderStatus = :status')
                ->setParameter('status', $status);
        }   

     
        if ($date != '0' || $date != '') {
            $order = $order->andWhere('customerOrder.fixdate LIKE  :date')
                ->setParameter('date', '%' . $date . '%');
        }
        if ($area != '0') {
            $order = $order->andWhere('customerOrder.area LIKE  :area')
                ->setParameter('area', $area);
        }
        if ($time != '0') {
            $order = $order->andWhere('customerOrder.fixtime LIKE  :time')
                ->setParameter('time', '%' . $time . '%');
        }
        if ($type != '0') {
            $order = $order->andWhere('customerOrder.orderType LIKE  :type')
                ->setParameter('type', '%' . $type . '%');
        }
        $order = $order->andWhere('customerOrder.branch = :branch')
            ->setParameter('branch', $branch);
        //     $order=$order->andWhere('customerOrder.orderType = :type')
        // ->setParameter('type','Delivery');
        $order = $order->addOrderBy('customerOrder.id', 'DESC')
            ->getQuery()
            ->getResult();
        if (empty($order)) {
            $data = [];
        } else {
            foreach ($order as $o) {
                $id = $o->getId();
                $trayStatus = $o->getTrayStatus();
                $otype = $o->getOrderType();
                $ostatus = $o->getOrderStatus();
                $otray = $o->getTray();
                $area = $o->getArea();
                $customerName = $o->getCustomerName();
                $customer = $o->getCustomer();
                $mobileNumber = $customer->getMobileNumber();
                $fixtime = $o->getFixtime();
                $fixdate = $o->getFixdate();
                $paymentType = $o->getPaymentType();
                $orderAmount = round($o->getOrderAmount() + $o->getLoyalty() + $o->getWallet(), 2);
                if ($trayStatus === '0' || $trayStatus === '' || $trayStatus === null) {
                    $status = '<a href="' . $this->generateUrl('restaurant_orders_panel_update', array('id' => $id)) . '" title="Edit"><span class="id">' . $id . '</span></a>';
                }
                if ($trayStatus === '3') {
                    $status = '<a href="' . $this->generateUrl('restaurant_orders_panel_update', array('id' => $id)) . '" title="Edit"><span class="id">' . $id . '</span></a>';
                }
                if ($trayStatus === '1') {
                    $status = '<a href="' . $this->generateUrl('restaurant_orders_panel_update', array('id' => $id)) . '" title="Edit"><span class="id">' . $id . '</span></a>';
                }
                if ($trayStatus === '2') {
                    $status = '<a href="' . $this->generateUrl('restaurant_orders_panel_update', array('id' => $id)) . '" title="Edit"><span class="id">' . $id . '</span></a>';
                }
                $url = $this->generateUrl('restaurant_orders_panel_update', array('id' => 4));
                if ($otype == 'Delivery' || $otype == 'delivery') {
                    $orderType = '<span class="badge badge-success">Home Delivery</span><br>';
                } elseif ($otype == 'pickup') {
                    $orderType = '<span class="badge badge-info">Pickup From Store</span><br>';
                } else {
                    $orderType = '<span class="badge badge-danger">Express Delivery</span><br>';
                }
                if ($ostatus == 'dispatched') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #FF5722;color: #fff;">Out For Delivery</span>';
                } elseif ($ostatus == 'ready') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #4CAF50;color: #fff;">Order Ready</span>';
                } elseif ($ostatus == 'onway') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #4CAF50;color: #fff;">Out for Delivery</span>';
                } elseif ($ostatus == 'received') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #3F51B5;color: #fff;">Received</span>';
                } elseif ($ostatus == 'processing') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #009688;color: #fff;">Processing</span>';
                } elseif ($ostatus == 'out for delivery') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #009688;color: #fff;">Assigned Delivery</span>';
                } elseif ($ostatus == 'delivered') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #4CAF50;color: #fff;">delivered</span>';
                } elseif ($ostatus == 'delivered') {
                    $orderStatus = '<span class="badge badge-primary" style="background: #4CAF50;color: #fff;">delivered</span>';
                } elseif ($ostatus == 'cancelled') {
                    $orderStatus = '<span class="badge badge-primary" style="background: red;color: #fff;">Cancelled</span>';
                } elseif ($ostatus == 'completed') {
                    $orderStatus = '<span class="badge badge-primary" style="background: green;color: #fff;">Completed</span>';
                } else {
                    $orderStatus = '<span class="badge badge-primary">' . $ostatus . '</span>
                    ';
                }
                if ($otray == '0' || $otray == '' || $otray !== null) {
                    $tray = 'Not Assigned';
                } else {
                    $tray = $otray;
                }
                $data[] = array(
                    "id" => '<input type="checkbox" name="all[]" class="tst" value="' . $id . '">
                ' . $status,
                    "customerdetails" => '<p>' . $customerName . '</p>' . $mobileNumber . '<p></p>
                    ',
                    "shipping" => $orderType . '<span style="color: #000000;font-size: 12px;text-transform: uppercase;">Delivery Area :' . $area . ' <br> Delivery Time : ' . $fixtime . ' - ' . $fixdate . '</span>',
                    "orderInfo" => '<p>' . $paymentType . ', ' . $orderAmount . '</p>' . $orderStatus,
                    "action" => '<p style="font-size:10px;font-weight:bold;">  Tray.No :.' . $tray . '</p>
                    <a class="btn btn-outline-primary btn-sm" href="' . $this->generateUrl('restaurant_orders_panel_update', array('id' => $id)) . '">
                        Update
                    </a>',
                );
            }
        }
        /* $response = array(
        "status" => $status,
        "time" => $time,
        "date" => $date,
        "area" => $area,
        "type" => $type,
        "order" => $order,
        );*/
        $response = array(
            "data" => $data,
        );
        return new JsonResponse($response);
    }

    public function getNumberFormat(){

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
  
        $statement = $em->getConnection()->prepare("SELECT * FROM `restaurants` where `id` = '$branch'");
        $statement->execute();
        $res = $statement->fetchAll(); 

        if(count($res) != 0){

          return $res[0]['number_format'];
          
        //   if($res['number_format'] == 0){
  
        //     return round($number);
  
        //   }else if($res['number_format'] == 1){
  
        //     //number_format(number,decimals,decimalpoint,separator)
        //     return (float)number_format($number, 2,".","");
  
        //   }
  
        }
  
      }

//////////////////////
}
