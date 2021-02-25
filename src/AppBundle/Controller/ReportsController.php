<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReportsController extends Controller
{

    public function deliveryBoyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Reports/deliveryBoy.html.twig');
    }
    public function itemSalesReportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT a.itemName,b.variationName,b.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
        $statement->execute();
        $menu = $statement->fetchAll();
        $myExtend = 'Admin';
        $sql = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price,sum(cost) as cost FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where 1 and branch='$branch' and orderStatus='completed') and 1 GROUP BY itemName,priceVariavtion,itemId order by quantity desc");
// print("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery) and $itemquery GROUP BY itemName,priceVariavtion,itemId");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            $data = $row;
        }

        // $statement = $connection->prepare("SELECT * FROM `brands` WHERE branch ='$branch'");
        // $statement->execute();
        // $brands = $statement->fetchAll();

        return $this->render('AppBundle:Admin:Reports/itemSales.html.twig', array(
            'myExtend' => $myExtend,
            'items' => $menu,
            'data' => $data,
            'from' => '',
            'to' => '',
            'itemid' => '',
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function profitAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT a.itemName,b.variationName,b.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
        $statement->execute();
        $menu = $statement->fetchAll();

        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/profit.html.twig', array(
            'myExtend' => $myExtend,
            'items' => $menu,
            'data' => array(),
            'from' => '',
            'to' => '',
            'itemid' => '',
            'type' => '0',
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function searchReportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        // $user = $this->get('security.token_storage')->getToken()->getUser();
        // $branch = $user->getBranch();
        // $statement = $connection->prepare("SELECT * from search_history where branch='$branch' order by id desc");
        // $statement->execute();
        // $data = $statement->fetchAll();
        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/search.html.twig', array(
            'myExtend' => $myExtend,
            'items' => array(),
            'data' => array(),
            'from' => '',
            'to' => '',
            'itemid' => '',
            'type' => '0',
            "numberFormat" => $this->getNumberFormat()
        ));
    }
    public function profitFilterAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $fromDate = $request->get('fromDate');
        $toDate = $request->get('toDate');
        $item = $request->get('item');
        $type = $request->get('type');
        if ($type == 0) {
            if ($fromDate == '' && $toDate == '') {
                $datequery = '1';
            } else {
                $datequery = "DATE_FORMAT(orderDate, '%d-%m-%Y') between '$fromDate' and '$toDate'";
            }
            if ($item == '0' || $item == '') {
                $itemquery = '1';
            } else {
                $itemquery = "itemId='$item'";
            }

// SELECT * from price_variation as a join customer_order_items as b on a.id=b.itemId where order_d in(100286)

            $sql = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price,sum(cost) as cost FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery and branch='$branch' and orderStatus='completed') and $itemquery GROUP BY itemName,priceVariavtion,itemId order by quantity desc");
// print("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery) and $itemquery GROUP BY itemName,priceVariavtion,itemId");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {
                $data = array();
            } else {
                $data = $row;
            }
// return new response('gg');
            $statement = $connection->prepare("SELECT a.itemName,b.variationName,a.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
            $statement->execute();
            $menu = $statement->fetchAll();
            $myExtend = 'Admin';
            return $this->render('AppBundle:Admin:Reports/profit.html.twig', array(
                'myExtend' => $myExtend,
                'items' => $menu,
                'data' => $data,
                'from' => $fromDate,
                'to' => $toDate,
                'itemid' => $item,
                'type' => $type,
                "numberFormat" => $this->getNumberFormat()
            ));
        } else {
            if ($fromDate == '' && $toDate == '') {
                $datequery = '1';
            } else {
                $datequery = "DATE_FORMAT(orderDate, '%d-%m-%Y') between '$fromDate' and '$toDate'";
            }
            if ($item == '0' || $item == '') {
                $itemquery = '1';
            } else {
                $itemquery = "itemId='$item'";
            }

// SELECT * from price_variation as a join customer_order_items as b on a.id=b.itemId where order_d in(100286)

            $sql = $connection->prepare("SELECT * from customer_order where $datequery and branch='$branch' and orderStatus='completed'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {
                $data = array();
            } else {
                $data = $row;
            }
            // return new response('gg');
            $statement = $connection->prepare("SELECT a.itemName,b.variationName,a.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
            $statement->execute();
            $menu = $statement->fetchAll();
            $myExtend = 'Admin';
            return $this->render('AppBundle:Admin:Reports/profit.html.twig', array(
                'myExtend' => $myExtend,
                'items' => $menu,
                'data' => $data,
                'from' => $fromDate,
                'to' => $toDate,
                'itemid' => $item,
                'type' => $type,
                "numberFormat" => $this->getNumberFormat()
            ));
        }
    }
    public function itemSalesReportListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * from customer_order_items where itemId='$id' and order_d in(SELECT id from customer_order where orderStatus='completed' and branch='$branch')");
        $statement->execute();
        $data = $statement->fetchAll();
        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/itemSalesList.html.twig', array(
            'myExtend' => $myExtend,
            'data' => $data,
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function deliveryBoyReportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
// $id=$request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("select * from user where userType='Delivery' and branch='$branch'");
        $statement->execute();
        $data = $statement->fetchAll();
        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/deliveryBoy.html.twig', array(
            'myExtend' => $myExtend,
            'delivery' => $data,
            'data' => array(),
            'boy' => 0,
            'status' => 0,
        ));
    }

    public function filterDeliveryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $status = $request->get('status');
        $deliveryBoy = $request->get('deliveryBoy');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($deliveryBoy == '0') {
            $delquery = "deliveryBoy!=''";
        } else {
            $delquery = "deliveryBoy='$deliveryBoy'";
        }
        if ($status == '0' || $status == '') {
            $statusquery = '1';
        } else {
            $statusquery = "orderStatus='$status'";
        }

// SELECT * from price_variation as a join customer_order_items as b on a.id=b.itemId where order_d in(100286)
        $sql = $connection->prepare("SELECT * FROM `customer_order` WHERE $delquery and $statusquery and branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            foreach ($row as $resp) {
                $data[] = array('id' => $resp['id'], 'area' => $resp['area'], 'deliveryBoy' => $this->getdName($resp['deliveryBoy']), 'paymentType' => $resp['paymentType'], 'orderStatus' => $resp['orderStatus'], 'dboy' => $resp['deliveryBoy']);
            }
// $data=$row;
        }
// return new response('ahah');
        $statement = $connection->prepare("select * from user where userType='Delivery' and branch='$branch'");
        $statement->execute();
        $delivery = $statement->fetchAll();
        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/deliveryBoy.html.twig', array(
            'myExtend' => $myExtend,
            'delivery' => $delivery,
            'data' => $data,
            'boy' => $deliveryBoy,
            'status' => $status,
        ));
    }
    public function getdName($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select * from user where id='$id'");
        $statement->execute();
        $delivery = $statement->fetchAll();
        foreach ($delivery as $res) {

            return $res['firstName'] . ' ' . $res['lastName'];
        }
    }
    public function restaurantAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Reports/restaurants.html.twig');
    }

    public function customerAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Admin:Reports/customer.html.twig');
    }

    public function orderAction(Request $request)
    {
        $myExtend = "Admin";
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        // replace this example code with whatever you need
        $customers = $em->getRepository('AppBundle:Customer')->findAll();
        return $this->render('AppBundle:Admin:Reports/order.html.twig', array(
            'myExtend' => $myExtend,
            'customer' => $customers,
            'data' => array(),
            'fromDate' => '',
            'toDate' => '',
            'status' => '',
            'customerdata' => '',
            "numberFormat" => $this->getNumberFormat()
        ));
    }
    public function filterItemsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $fromDate = $request->get('fromDate');
        $toDate = $request->get('toDate');
        $item = $request->get('item');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($fromDate == '' && $toDate == '') {
            $datequery = '1';
        } else {
            $datequery = "DATE_FORMAT(orderDate, '%d-%m-%Y') between '$fromDate' and '$toDate'";
        }
        if ($item == '0' || $item == '') {
            $itemquery = '1';
        } else {
            $itemquery = "itemId='$item'";
        }

       

// SELECT * from price_variation as a join customer_order_items as b on a.id=b.itemId where order_d in(100286)

        $sql = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery and branch='$branch' and orderStatus='completed') and $itemquery GROUP BY itemName,priceVariavtion,itemId");

        
// print("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery) and $itemquery GROUP BY itemName,priceVariavtion,itemId");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            $data = $row;
        }
       
// return new response('gg');
        $statement = $connection->prepare("SELECT a.itemName,b.variationName,a.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
        $statement->execute();
        $menu = $statement->fetchAll();
        $myExtend = 'Admin';

        $statement = $connection->prepare("SELECT a.itemName,b.variationName,a.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");

        return $this->render('AppBundle:Admin:Reports/itemSales.html.twig', array(
            'myExtend' => $myExtend,
            'items' => $menu,
            'data' => $data,
            'from' => $fromDate,
            'to' => $toDate,
            'itemid' => $item,
            "numberFormat" => $this->getNumberFormat()
        ));
    }
    public function filterOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $myExtend = "Admin";

        $result['status'] = false;
        $result['data'] = [];

        $helper = $this->container->get('function_helper');

        //receive the data
        $fromDate = new \Datetime($request->get('fromDate'));
        $toDate = $request->get('toDate');
        $status = $request->get('status');
        $customer = $request->get('customer');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $orders = $em->createQueryBuilder()
            ->select('orders')
            ->from('AppBundle:CustomerOrder', 'orders')
            ->leftJoin('orders.customer', 'customer');
        if ($toDate == null) {
            $orders = $orders->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                ->setParameter('todayDate', $fromDate->format('d-m-Y'));
        } else {
            $toDate = new \Datetime($toDate);
            $orders = $orders->andWhere("orders.orderDate BETWEEN :fromDate and :toDate")
                ->setParameter('fromDate', $fromDate)
                ->setParameter('toDate', $toDate);
        }

        if ($status == "completed") {
            $orders = $orders->andWhere("orders.orderStatus = :delivered or orders.orderStatus = :completed")
                ->setParameter('delivered', "delivered")
                ->setParameter('completed', "completed");
        } elseif ($status == "cancelled") {
            $orders = $orders->andWhere("orders.orderStatus = :cancelled")
                ->setParameter('cancelled', "cancelled");
        }

        if ($customer != null) {
            $orders = $orders->andWhere("customer.id = :customerId")
                ->setParameter('customerId', $customer);
        }
        $orders = $orders->andWhere("orders.branch = :branch")
            ->setParameter('branch', $branch);
        $result['status'] = true;
        $order = $orders->getQuery()->getArrayResult();
        // return new jsonresponse($result);
        $ref = array();
        foreach ($order as $da) {
            $id = $da['id'];
            $ref[] = $id;
        }
        // return new jsonresponse($ref);
        $order_d = implode(', ', $ref);
        $customers = $em->getRepository('AppBundle:Customer')->findAll();

        $customers = $em->getRepository('AppBundle:Customer')->findAll();
        if (isset($_POST['filter'])) {
            return $this->render('AppBundle:Admin:Reports/order.html.twig', array(
                'myExtend' => $myExtend,
                'customer' => $customers,
                'data' => $orders->getQuery()->getArrayResult(),
                'fromDate' => $request->get('fromDate'),
                'toDate' => $request->get('toDate'),
                'status' => $status,
                'customerdata' => $customer,
                "numberFormat" => $this->getNumberFormat()
            ));
        }
        if (isset($_POST['packing'])) {
            $connection = $em->getConnection();
            if ($order_d == '') {
                $statement = $connection->prepare("SELECT itemName,priceVariavtion,sum(quantity) as quantity FROM `customer_order_items` WHERE order_d in (0) GROUP BY itemName,priceVariavtion");
            } else {
                $statement = $connection->prepare("SELECT itemName,priceVariavtion,sum(quantity) as quantity FROM `customer_order_items` WHERE order_d in ($order_d) GROUP BY itemName,priceVariavtion");
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

        }
        if (isset($_POST['order'])) {
            $connection = $em->getConnection();
            if ($order_d == '') {
                $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area,c.itemName,c.priceVariavtion,c.quantity,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id join customer_order_items as c on a.id=c.order_d where a.id in(0) and 1 order by  a.orderDate desc");
            } else {
                $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area,c.itemName,c.priceVariavtion,c.quantity,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id join customer_order_items as c on a.id=c.order_d where a.id in($order_d) and 1 order by  a.orderDate desc");
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
            $this->array_csv_downloadAction($data, 'order-list.csv');

        }
        if (isset($_POST['print'])) {
            if (count($order) == '0') {
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
                $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
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

    public function brandSalesReportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
       
        $myExtend = 'Admin';

        $sql = $connection->prepare("SELECT b.categoryName,a.brand,sum(a.quantity) as quantity,sum(a.actualAmount) as price FROM `customer_order_items` as a join brands as b on a.brand=b.id  WHERE a.order_d in(SELECT id from customer_order where 1 and branch='$branch') and 1 GROUP BY categoryName,brand");

        // print("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery) and $itemquery GROUP BY itemName,priceVariavtion,itemId");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            $data = $row;
        }

        $statement = $connection->prepare("SELECT * FROM `brands` WHERE branch ='$branch'");
        $statement->execute();
        $brands = $statement->fetchAll();

        return $this->render('AppBundle:Admin:Reports/brandSales.html.twig', array(
            'myExtend' => $myExtend,
            'data' => $data,
            'from' => '',
            'to' => '',
            'itemid' => '',
            'brands' => $brands,
            'brandid' => '',
            // 'filtertype' => 'filterbyitem'
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function filterBrandsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $fromDate = $request->get('fromDate');
        $toDate = $request->get('toDate');
        $brand = $request->get('brand');
        // $filtertype = $request->get('filterby'); 
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($fromDate == '' && $toDate == '') {
            $datequery = '1';
        } else {
            $datequery = "DATE_FORMAT(orderDate, '%d-%m-%Y') between '$fromDate' and '$toDate'";
        }

        if ($brand == '0' || $brand == '') {
            $brandquery = '1';
        } else {
            $brandquery = "brand='$brand'";
        }

        // if($filtertype == ''){
        //     $filtertype = 'filterbyitem';
        // }

// SELECT * from price_variation as a join customer_order_items as b on a.id=b.itemId where order_d in(100286)

        // if($filtertype == 'filterbyitem'){
        //     $sql = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery and branch='$branch' and orderStatus='completed') and $itemquery GROUP BY itemName,priceVariavtion,itemId");
        // }else if($filtertype == 'filterbybrand'){
        //     $sql = $connection->prepare("SELECT coi.itemId,coi.itemName,coi.priceVariavtion,sum(coi.quantity) as quantity,sum(coi.actualAmount) as price $brandcolumn FROM `customer_order_items` coi $brandjoin WHERE order_d in(SELECT id from customer_order where $datequery and branch='$branch' and orderStatus='completed') and $brandquery  GROUP BY coi.itemName,coi.priceVariavtion,coi.itemId$brandcolumn");
        // }

        // $sql = $connection->prepare("SELECT coi.itemId,coi.itemName,coi.priceVariavtion,sum(coi.quantity) as quantity,sum(coi.actualAmount) as price, b.categoryName FROM `customer_order_items` coi inner join brands b on coi.brand=b.id WHERE order_d in(SELECT id from customer_order where $datequery and branch='$branch' and orderStatus='completed') and $brandquery  GROUP BY coi.itemName,coi.priceVariavtion,coi.itemId,b.categoryName");

        $sql = $connection->prepare("SELECT b.categoryName,a.brand,sum(a.quantity) as quantity,sum(a.actualAmount) as price FROM `customer_order_items` as a join brands as b on a.brand=b.id  WHERE a.order_d in(SELECT id from customer_order where $datequery and branch='$branch') and $brandquery GROUP BY categoryName,brand");

        
// print("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where $datequery) and $itemquery GROUP BY itemName,priceVariavtion,itemId");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            $data = $row;

            // foreach($data as $key => $d){
                
            //     $query = $connection->prepare("SELECT b.id,b.categoryName FROM `menu_item` mi inner join `brands` b on mi.brand = b.id where mi.id = ".$d['itemId']);
            //     $query->execute();
            //     $branddata = $query->fetchAll();

            //     if(count($branddata)!=0){
            //         $data[$key]['brandname'] = $branddata[0]['categoryName'];
            //     }else{
            //         $data[$key]['brandname'] = '';
            //     }
                
            // }

        }

        $myExtend = 'Admin';

        $statement = $connection->prepare("SELECT * FROM `brands` WHERE branch ='$branch'");
        $statement->execute();
        $brands = $statement->fetchAll();

        $statement = $connection->prepare("SELECT a.itemName,b.variationName,a.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");

        return $this->render('AppBundle:Admin:Reports/brandSales.html.twig', array(
            'myExtend' => $myExtend,
            'data' => $data,
            'from' => $fromDate,
            'to' => $toDate,
            'brands' => $brands,
            'brandid' => $brand,
            // 'filtertype' => $filtertype
            "numberFormat" => $this->getNumberFormat()
        ));
    }

    public function brandSalesReportListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * from customer_order_items where brand='$id' and order_d in(SELECT id from customer_order where orderStatus='completed' and branch='$branch')");
        $statement->execute(); 
        $data = $statement->fetchAll();
        $myExtend = 'Admin';
        return $this->render('AppBundle:Admin:Reports/itemSalesList.html.twig', array(
            'myExtend' => $myExtend,
            'data' => $data,
            "numberFormat" => $this->getNumberFormat()
        ));
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
  
        }
  
      }

      public function commissionAction(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
         
          $myExtend = 'Admin';
  
          $statement = $connection->prepare("SELECT * FROM `restaurants`");
          $statement->execute();
          $branches = $statement->fetchAll();
  
          return $this->render('AppBundle:Admin:Reports/commissionReport.html.twig', array(
              'myExtend' => $myExtend,
              'from' => '',
              'to' => '',
              'branches' => $branches,
              'branchid' => '',
              'commission' => 0,
              'numberFormat' => $this->getNumberFormat(),
              'commission_fees' => 0
          ));
      }

      public function filterCommissionAction(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $fromDate = $request->get('fromDate');
          $toDate = $request->get('toDate');
          $branch = $request->get('branch');
         
          if ($fromDate == '' && $toDate == '') {
              $datequery = '1';
          } else {
              $datequery = "DATE_FORMAT(orderDate, '%d-%m-%Y') between '$fromDate' and '$toDate'";
          }
  
          if ($branch == 'All') {
              $branchquery = '1';
          } else {
              $branchquery = "branch='$branch'";
          }
  
  
          $sql = $connection->prepare("SELECT sum(restPay) as totalcommission from customer_order where $datequery and $branchquery");
          
          $sql->execute();
          $row = $sql->fetchAll();
          if (count($row) == 0) {
              $data = 0;
          } else {
              $data = $row[0]['totalcommission'];
          }

          if($data == '' || $data == null)
            $data = 0;

          $sql = $connection->prepare("SELECT sum(restoAppFee) as totalcommissionfees from customer_order where $datequery and $branchquery");
            
          $sql->execute();
          $rowdata = $sql->fetchAll();
          if (count($rowdata) == 0) {
            $commission_fees = 0;
          } else {
            $commission_fees = $rowdata[0]['totalcommissionfees'];
          }

          $myExtend = 'Admin';
  
          $statement = $connection->prepare("SELECT * FROM `restaurants`");
          $statement->execute();
          $branches = $statement->fetchAll();
  
          return $this->render('AppBundle:Admin:Reports/commissionReport.html.twig', array(
              'myExtend' => $myExtend,
              'from' => $fromDate,
              'to' => $toDate,
              'branches' => $branches,
              'branchid' => $branch,
              'commission' => $data,
              'numberFormat' => $this->getNumberFormat(),
              'commission_fees' => $commission_fees
          ));
      }

      public function filterGstReportAction(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $myExtend = "Admin";
  
          $result['status'] = false;
          $result['data'] = [];
  
          $helper = $this->container->get('function_helper');
  
          //receive the data
          $fromDate = new \Datetime($request->get('fromDate'));
          $toDate = $request->get('toDate');
          $user = $this->get('security.token_storage')->getToken()->getUser();
          $branch = $user->getBranch();
          $orders = $em->createQueryBuilder()
              ->select('orders','customer')
              ->from('AppBundle:CustomerOrder', 'orders')
              ->leftJoin('orders.customer', 'customer'); 
          if ($toDate == null) {
              $orders = $orders->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                  ->setParameter('todayDate', $fromDate->format('d-m-Y'));
          } else {
              $toDate = new \Datetime($toDate);
              $orders = $orders->andWhere("orders.orderDate BETWEEN :fromDate and :toDate")
                  ->setParameter('fromDate', $fromDate)
                  ->setParameter('toDate', $toDate);
          }
  
          $orders = $orders->andWhere("orders.branch = :branch")
              ->setParameter('branch', $branch);
          $result['status'] = true;
          $order = $orders->getQuery()->getArrayResult();
          
          $customers = $em->getRepository('AppBundle:Customer')->findAll();
          if (isset($_POST['filter'])) {
              return $this->render('AppBundle:Admin:Reports/gstReport.html.twig', array(
                  'myExtend' => $myExtend,
                  'customer' => $customers,
                  'data' => $orders->getQuery()->getArrayResult(),
                  'fromDate' => $request->get('fromDate'),
                  'toDate' => $request->get('toDate'),
                  'numberFormat' => $this->getNumberFormat()
              ));
          }
          if (isset($_POST['export'])) {
             
              if (count($order) == '0') {
                  //$data[] = array('Sl.No' => '', 'Invoice No' => '', 'Date' => '', 'Customer' => '', 'GST No' => '', 'GST 0%' => '', 'GST 5%' => '', 'GST 12%' => '', 'GST 18%' => '', 'Invoice Amount' => '');
                  $data[] = array('BILL NO' => '', 'DATE' => '', 'CUSTOMER' => '', 'GST No' => '', 'GST 5 AMOUNT' => '',  'GST 5 SGST2.5%' => '',  'GST 5 SGST2.50%' => '','GST 12 AMOUNT' => '', 'GST 12 SGST 6%' => '', 'GST 12 SGST 6.0%' => '', 'GST 18 AMOUNT' => '', 'GST 18 SGST 9%' => '', 'GST 18 SGST 9.0%' => '', 'EXEMPTED' => '');
              } else {
                  //$sl = 1; 
                  foreach ($order as $da) { 
                      # code...
                    
                    $gst_amount_05 = $da['orderAmount']*0.05;
                    $gst_sgst_05 = $da['orderAmount']*0.025;
                    $gst_amount_12 = $da['orderAmount']*0.12;
                    $gst_sgst_12 = $da['orderAmount']*0.06;
                    $gst_amount_18 = $da['orderAmount']*0.18;
                    $gst_sgst_18 = $da['orderAmount']*0.09;

                    // $gst_05 = 'Amount: '.($da['orderAmount']*0.05).' | CGST: '.( ($da['orderAmount']*0.05) / 2).' | SGST: '.( ($da['orderAmount']*0.05) / 2);
                    // $gst_12 = 'Amount: '.($da['orderAmount']*0.12).' | CGST: '.( ($da['orderAmount']*0.12) / 2).' | SGST: '.( ($da['orderAmount']*0.12) / 2);
                    // $gst_18 = 'Amount: '.($da['orderAmount']*0.18).' | CGST: '.( ($da['orderAmount']*0.18) / 2).' | SGST: '.( ($da['orderAmount']*0.18) / 2);
                   
                      $data[] = array('BILL NO' => $da['id'], 'DATE' => $da['orderDate']->format('m-d-Y'), 'CUSTOMER' => $da['customerName'], 'GST No' => $da['customer']['gst'], 'GST 5 AMOUNT' => $gst_amount_05, 'GST 5 SGST2.5%' => $gst_sgst_05, 'GST 5 SGST2.5% ' => $gst_sgst_05, 'GST 12 AMOUNT' => $gst_amount_12, 'GST 12 SGST 6%' => $gst_sgst_12, 'GST 12 SGST 6% ' => $gst_sgst_12, 'GST 18 AMOUNT' => $gst_amount_18, 'GST 18 SGST 9%' => $gst_sgst_18, 'GST 18 SGST 9% ' => $gst_sgst_18, 'EXEMPTED' => '');
                      //$sl = $sl + 1;
                  }
              }
              $this->array_csv_downloadAction($data, 'gst-report.csv');
  
          }

          return $this->render('AppBundle:Admin:Reports/gstReport.html.twig', array(
            'myExtend' => $myExtend,
            'customer' => $customers,
            'data' => $orders->getQuery()->getArrayResult(),
            'fromDate' => $request->get('fromDate'),
            'toDate' => $request->get('toDate'),
            'numberFormat' => $this->getNumberFormat()
        ));
  
      }

      public function customerDueOrderReportAction(Request $request)
      {
              $em = $this->getDoctrine()->getManager();
              $connection = $em->getConnection();
      // $id=$request->get('id');
              $user = $this->get('security.token_storage')->getToken()->getUser();
              $branch = $user->getBranch();
              
              $myExtend = 'Admin';
              return $this->render('AppBundle:Admin:Reports/customerDueOrderReport.html.twig', array(
                  'myExtend' => $myExtend,
                  //'date' => "",
                  'data' => array(),
                  'fromDate' => '',
                  'toDate' => '',
              ));
      }
  
      public function filterCustomerDueOrderAction(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          //$date = $request->get('date');
          $fromdate = $request->get('fromDate');
          $toDate = $request->get('toDate');

          $date = $fromdate;
          $today = $toDate;
          
          $user = $this->get('security.token_storage')->getToken()->getUser();
          $branch = $user->getBranch();
  
        //   $r_date =  $date;
        //   $today = date('Y-m-d');
        //   if($date == 'last7'){
        //       $date = date('Y-m-d', strtotime('-7 days'));
        //   }else if($date == 'last15'){
        //       $date = date('Y-m-d', strtotime('-15 days'));
        //   }else if($date == 'last30'){
        //       $date = date('Y-m-d', strtotime('-30 days'));
        //   }else if($date == 'last3'){
        //       $date = date('Y-m-d', strtotime('-3 month'));
        //   }

  
          // $sql = $connection->prepare("SELECT c.* FROM `customer_order` co join customer c on co.customer_d = c.id WHERE DATE_FORMAT(co.orderDate, '%Y-%m-%d') not between  '$date' and '$today' and co.branch='$branch' group by co.orderDate desc");
          $sql = $connection->prepare("SELECT * FROM `customer` WHERE id not in (SELECT customer_d FROM `customer_order` WHERE DATE_FORMAT(orderDate, '%Y-%m-%d') between  '$date' and '$today' and branch='$branch' order by orderDate desc)");
          $sql->execute();
          $row = $sql->fetchAll();
          if (count($row) == 0) {
              $data = array();
          } else {
              foreach ($row as $resp) {
                  $data[] = array('id' => $resp['id'], 'username' => $resp['username'], 'mobileNo' => $resp['mobileNo'], 'email' => $resp['email'], 'area' => $resp['area']);
              }
  
          }
          
          if (isset($_POST['hdnpost']) && $_POST['hdnpost'] == 'export') {
              
              $sql = $connection->prepare("SELECT * FROM `customer` WHERE id not in (SELECT customer_d FROM `customer_order` WHERE DATE_FORMAT(orderDate, '%Y-%m-%d') between  '$date' and '$today' and branch='$branch' order by orderDate desc)");
              $sql->execute();
              $row = $sql->fetchAll();
              
              if (count($row) == '0') {
                  $csv[] = array('Customer Name' => '', 'Mobile No' => '', 'Email' => '', 'Area' => '');
              } else {
                  //$sl = 1; 
                  foreach ($row as $cs) { 
                      # code...
                   
                      $csv[] = array('Customer Name' => $cs['username'], 'Mobile No' => $cs['mobileNo'], 'Email' => $cs['email'], 'Area' => $cs['area']);
                      //$sl = $sl + 1;
                  }
              } 
              $this->array_csv_downloadAction($csv, 'customer-report.csv');
              
          }
  
          $myExtend = 'Admin';
          return $this->render('AppBundle:Admin:Reports/customerDueOrderReport.html.twig', array(
              'myExtend' => $myExtend,
              //'date' => $r_date,
              'data' => $data,
              'fromDate' => $date,
              'toDate' => $toDate,

          ));
      }

      public function filterSearchAction(Request $request)
      {
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $fromDate = $request->get('fromDate');
          $toDate = $request->get('toDate');
          
          $user = $this->get('security.token_storage')->getToken()->getUser();
          $branch = $user->getBranch();

          if ($fromDate == '' && $toDate == '') {
            $datequery = '1';
          } else {
            $datequery = "DATE_FORMAT(date, '%d-%m-%Y') between '$fromDate' and '$toDate'";
          }

          $sql = $connection->prepare("SELECT * from search_history where branch='$branch' and $datequery order by id desc");
  
          $sql->execute();
          $row = $sql->fetchAll();
          if (count($row) == 0) {
              $data = array();
          } else {
              foreach ($row as $resp) {
                  $data[] = array('id' => $resp['id'], 'search_value' => $resp['search_value'], 'time' => $resp['time']);
              }
  
          }
          
  
          $myExtend = 'Admin';
          return $this->render('AppBundle:Admin:Reports/search.html.twig', array(
                'myExtend' => $myExtend,
                'items' => array(),
                'data' => $data,
                'from' => $fromDate,
                'to' => $toDate,
                'itemid' => '',
                'type' => '0',
                "numberFormat" => $this->getNumberFormat()
          ));
      }

}
