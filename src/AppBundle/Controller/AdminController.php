<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Restaurants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

public function salesAction(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
      $connection=$em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
   $sql = $connection->prepare("SELECT DISTINCT(customer_d) FROM customer_order WHERE YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = MONTH(CURRENT_DATE()) and branch='$branch'");
   $sql->execute();
   $customer = $sql->fetchAll();

   $sql = $connection->prepare("SELECT * FROM `stock_return` where status='0' and branch='$branch'");
   $sql->execute();
   $status = $sql->fetchAll();

   $sql = $connection->prepare("SELECT DISTINCT(customer_d) AS Total_Amount FROM customer_order WHERE YEAR(orderDate) = YEAR(CURDATE() - INTERVAL 1 MONTH) AND MONTH(orderDate) = MONTH(CURDATE() - INTERVAL 1 MONTH) and orderStatus='completed' and branch='$branch'");
   $sql->execute();
   $lm = $sql->fetchAll();

$month=date('m');
   $sql = $connection->prepare("SELECT * FROM `customer_order` where YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = '$month' and branch='$branch'");
   $sql->execute();
   $total_order = $sql->fetchAll();

   $sql = $connection->prepare("SELECT * FROM `menu_item` where isActive='1' and branch='$branch'");
   $sql->execute();
   $items = $sql->fetchAll();
$resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive='1' and totalQty < alert");
$resps->execute();
$ress=$resps->fetchAll();
if(count($ress)==0)
{
$resdata=array();
}
else
{
  foreach ($ress as $re) {
   $resdata[]=array('id'=>$re['id'],'itemName'=>$re['itemName'],'isActive'=>$re['isActive'],'type'=>$re['type'],'alert'=>$re['alert'],'variationName'=>"1 KG",'stock'=>$re['totalQty']);
  }
}
## Fetch records
$empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' and b.stock<b.minItem and status=0 and a.branch='$branch'");
$empQuery->execute();
$res=$empQuery->fetchAll();
$data = array();
// $response=array_merge($res,$resdata);
 if(isset($res))
{
$stock=array_merge($res,$resdata);
}
else
{
  $stock=array_merge($resdata);
}

   $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = MONTH(CURRENT_DATE()) and orderStatus='completed' and branch='$branch'");
   $sqls->execute();
   $sale = $sqls->fetchAll();
   foreach($sale as $sa)
   {

   }
$month = time();
for ($i = 1; $i <= 12; $i++) {
  $month = strtotime('last month', $month);
  $months[] = array('month'=>date("M", $month),'id'=>date("m", $month));

}

        return $this->render('AppBundle:Admin:Pages/billing.html.twig',
            array(
                "customer"=>count($customer),
                "lm"=>count($lm),
                "orders"=>count($items),
                "orders_sale"=>count($total_order),
                "item"=>count($items),
                "stock"=>count($stock),
                "sales"=>$sa['sales'],
                "month"=>$months,
                "m"=>date('m')

                       ));
    }
  // 
public function viewCustomerReportMonthAction(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
      $connection=$em->getConnection();
      $month=$request->get('id');
              $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
         $sql = $connection->prepare("SELECT * from customer where id in(SELECT DISTINCT(customer_d) FROM customer_order WHERE YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = '$month' and branch='$branch')");
   $sql->execute();
   $data = $sql->fetchAll();
   return $this->render('AppBundle:Admin:Customers/customerList.html.twig',
            array("customers"=>$data,));
 }
 public function viewOrderReportMonthAction(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
      $connection=$em->getConnection();
            $month=$request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
   $sql = $connection->prepare("SELECT * FROM `customer_order` where YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = '$month' and orderStatus='completed' and branch='$branch'");
   $sql->execute();
   $data = $sql->fetchAll();
   return $this->render('AppBundle:Admin:Billing/billingCustomer.html.twig',
            array("data"=>$data));
 }
  public function viewOrderSaleReportMonthAction(Request $request)
    {
         $em = $this->getDoctrine()->getManager();
      $connection=$em->getConnection();
            $month=$request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
   $sql = $connection->prepare("SELECT * FROM `customer_order` where YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = '$month' and branch='$branch'");
   $sql->execute();
   $data = $sql->fetchAll();
   return $this->render('AppBundle:Admin:Billing/billingCustomer.html.twig',
            array("data"=>$data));
 }
public function getSalesAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $connection=$em->getConnection();
  $month=$request->get('month');
  $year=$request->get('year');
          $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
//   print("SELECT DISTINCT(customer_d) FROM customer_order WHERE YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = '$month' and 1");
   $sql = $connection->prepare("SELECT DISTINCT(customer_d) FROM customer_order WHERE YEAR(orderDate) = '$year' AND MONTH(orderDate) = '$month' and branch='$branch'");
   $sql->execute();
   $customer = $sql->fetchAll();

   $sql = $connection->prepare("SELECT * FROM `stock_return` where status='0' and branch='$branch'");
   $sql->execute();
   $status = $sql->fetchAll();

   $sql = $connection->prepare("SELECT DISTINCT(customer_d) AS Total_Amount FROM customer_order WHERE YEAR(orderDate) = '$year' AND MONTH(orderDate) = MONTH(CURDATE() - INTERVAL 1 MONTH)  and branch='$branch'");
   $sql->execute();
   $lm = $sql->fetchAll();

   $sql = $connection->prepare("SELECT * FROM `menu_item` where isActive='1' and branch='$branch'");
   $sql->execute();
   $items = $sql->fetchAll();

   $sql = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where b.stock < 1  and a.branch='$branch'");
   $sql->execute();
   $stock = $sql->fetchAll();
$sql = $connection->prepare("SELECT * FROM `customer_order` where YEAR(orderDate) = '$year' AND MONTH(orderDate) = '$month' and branch='$branch'");
   $sql->execute();
   $total_order = $sql->fetchAll();
   $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where YEAR(orderDate) = '$year' AND MONTH(orderDate) = '$month' and orderStatus='completed'  and branch='$branch'");
   $sqls->execute();
   $sale = $sqls->fetchAll();
   foreach($sale as $sa)
   {

   }
$month = time();
for ($i = 1; $i <= 12; $i++) {
  $month = strtotime('last month', $month);
  $months[] = array('month'=>date("M", $month),'id'=>date("m", $month));

}


        return $this->render('AppBundle:Admin:Pages/billing.html.twig',
            array(
                "customer"=>count($customer),
                "lm"=>count($lm),
                "orders"=>count($items),
                "item"=>count($items),
                "stock"=>count($stock),
                "sales"=>$sa['sales'],
                "month"=>$months,
                "orders_sale"=>count($total_order),
                "m"=>$request->get('month')
                       ));
}

    public function dashboardAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from customer where 1 and branch='$branch'");
        $sql->execute();
        $customer = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `stock_return` where status='0' and branch='$branch'");
        $sql->execute();
        $status = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where orderStatus='RECEIVED'  and branch='$branch'");
        $sql->execute();
        $orders = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `menu_item` where isActive!='2' and branch='$branch'");
        $sql->execute();
        $items = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where 1");
        $sql->execute();
        $totalorders = $sql->fetchAll();

        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive='1' and totalQty < alert and branch='$branch'");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
## Fetch records
        $empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock,b.status FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' and b.stock<b.minItem and a.branch='$branch' and b.status='0' and a.isActive=1");
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
// $response=array_merge($res,$resdata);
        if (isset($res)) {
            $stock = array_merge($res, $resdata);
        } else {
            $stock = array_merge($resdata);
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $sale = $sqls->fetchAll();
        foreach ($sale as $sa) {
        }

//ge latest orders
        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch' order by id desc limit 6 ");
        $sqls->execute();
        $latestOrders = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch'  and orderStatus='onway'");
        $sqls->execute();
        $dispatched = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `customer` where branch='$branch' order by id desc limit 6 ");
        $sqls->execute();
        $latesCustomers = $sqls->fetchAll();
        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch'");
        $sqls->execute();
        $all_orders = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `sub_category` where branch='$branch' and parent_id is null");
        $sqls->execute();
        $categories = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `brands` where branch='$branch'");
        $sqls->execute();
        $brands = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where orderStatus='completed' and branch='$branch' and  DATE(`orderDate`) = CURDATE()");
        $sqls->execute();
        $todaySale = $sqls->fetchAll();
        foreach ($todaySale as $todaySalerow) {
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 2 DAY) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $yesterdaySale = $sqls->fetchAll();
        foreach ($yesterdaySale as $yesterdayrow) {
        }
        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 1 WEEK) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $weekSale = $sqls->fetchAll();
        foreach ($weekSale as $weekrow) {
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 1 Month) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $monthSale = $sqls->fetchAll();
        foreach ($monthSale as $monthrow) {
        }

        $sqls = $connection->prepare("SELECT * from restaurants where id='$branch'");
        $sqls->execute();
        $branchrow = $sqls->fetchAll();
        foreach ($branchrow as $currency) {
        }

        $sqls = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where 1 and branch='$branch' and orderStatus='completed') and 1 GROUP BY itemName,priceVariavtion,itemId order by quantity desc limit 5");
        $sqls->execute();
        $itemSale = $sqls->fetchAll();

//channel
        $customercount = count($customer);

        $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'Web' and branch=$branch");
        $sql->execute();
        $webchannel = $sql->fetchAll();
        if ($customercount == 0) {
            $webchannel_per = 0;
            $androidchannel_per = 0;
            $ioschannel_per = 0;
            $androidchannel = array();
            $ioschannel = array();
            $webchannel = array();
        } else {
            $webchannel_per = intval(round((count($webchannel) / $customercount) * 100));
            $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'Android' and branch=$branch");
            $sql->execute();
            $androidchannel = $sql->fetchAll();
            $androidchannel_per = intval(round((count($androidchannel) / $customercount) * 100));
            $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'IOS' and branch=$branch");
            $sql->execute();
            $ioschannel = $sql->fetchAll();
            $ioschannel_per = intval(round((count($ioschannel) / $customercount) * 100));
        }

// USER ID SESSION
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
        $sql->execute();
        $store = $sql->fetchAll();
        if (count($store) == 0) {
            $currencyf = 0;
        } else {
            $currencyf = $store[0]['currencyFormat'];
        }

        $sql = $connection->prepare("SELECT * FROM `ticket` where `ticketStatus`='Open'");
        $sql->execute();
        $tickets = $sql->fetchAll();

        return $this->render('AppBundle:Admin:Pages/dashboard.html.twig',
            array(
                "customer" => count($customer),
                "currency" => $currencyf,
                "returns" => count($status),
                "orders" => count($orders),
                "item" => count($items),
                "dispatched" => count($dispatched),
                "stock" => count($stock),
                "sales" => $sa['sales'],
                "latestOrders" => $latestOrders,
                "latestCustomers" => $latesCustomers,
                "all_orders" => count($all_orders),
                "categories" => count($categories),
                "brands" => count($brands),
                "thisDaySale" => $todaySalerow['sales'],
                "previousDaySale" => $yesterdayrow['sales'],
                "monthDaySale" => $monthrow['sales'],
                "weekDaySale" => $weekrow['sales'],
                "itemSale" => $itemSale,
                "webchannel" => count($webchannel),
                "androidchannel" => count($androidchannel),
                "ioschannel" => count($ioschannel),
                "webchannel_per" => $webchannel_per,
                "androidchannel_per" => $androidchannel_per,
                "ioschannel_per" => $ioschannel_per,
                "totalorders" => count($totalorders),
                "store" => count($store),
                "tickets" => count($tickets),
            ));
    }

    public function branchViewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $branch = $request->get('id');
        $sql = $connection->prepare("SELECT * from customer where 1");
        $sql->execute();
        $customer = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `stock_return` where status='0' and branch='$branch'");
        $sql->execute();
        $status = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where orderStatus='RECEIVED'  and branch='$branch'");
        $sql->execute();
        $orders = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `menu_item` where isActive='1' and branch='$branch'");
        $sql->execute();
        $items = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * FROM `customer_order` where 1 ");
        $sql->execute();
        $totalorders = $sql->fetchAll();

        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive='1' and totalQty < alert and branch='$branch'");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
## Fetch records
        $empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock,b.status FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' and b.stock<b.minItem and a.branch='$branch' and b.status='0'");
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
// $response=array_merge($res,$resdata);
        if (isset($res)) {
            $stock = array_merge($res, $resdata);
        } else {
            $stock = array_merge($resdata);
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $sale = $sqls->fetchAll();
        foreach ($sale as $sa) {
        }

//ge latest orders
        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch' order by id desc limit 6 ");
        $sqls->execute();
        $latestOrders = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch'  and orderStatus='dispatched'");
        $sqls->execute();
        $dispatched = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `customer` where branch='$branch' order by id desc limit 6 ");
        $sqls->execute();
        $latesCustomers = $sqls->fetchAll();
        $sqls = $connection->prepare("SELECT * FROM `customer_order` where branch='$branch'");
        $sqls->execute();
        $all_orders = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `sub_category` where branch='$branch'");
        $sqls->execute();
        $categories = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT * FROM `brands` where branch='$branch'");
        $sqls->execute();
        $brands = $sqls->fetchAll();

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where orderStatus='completed' and branch='$branch' and  DATE(`orderDate`) = CURDATE()");
        $sqls->execute();
        $todaySale = $sqls->fetchAll();
        foreach ($todaySale as $todaySalerow) {
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 2 DAY) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $yesterdaySale = $sqls->fetchAll();
        foreach ($yesterdaySale as $yesterdayrow) {
        }
        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 1 WEEK) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $weekSale = $sqls->fetchAll();
        foreach ($weekSale as $weekrow) {
        }

        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM customer_order WHERE orderDate > DATE_SUB(NOW(), INTERVAL 1 Month) and orderStatus='completed' and branch='$branch'");
        $sqls->execute();
        $monthSale = $sqls->fetchAll();
        foreach ($monthSale as $monthrow) {
        }

        $sqls = $connection->prepare("SELECT * from restaurants where 1");
        $sqls->execute();
        $branchrow = $sqls->fetchAll();
        foreach ($branchrow as $currency) {
        }

        $sqls = $connection->prepare("SELECT itemId,itemName,priceVariavtion,sum(quantity) as quantity,sum(actualAmount) as price FROM `customer_order_items` WHERE order_d in(SELECT id from customer_order where 1 and branch='$branch' and orderStatus='completed') and 1 GROUP BY itemName,priceVariavtion,itemId order by quantity desc limit 5");
        $sqls->execute();
        $itemSale = $sqls->fetchAll();

//channel
        $customercount = count($customer);

        $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'Web'");
        $sql->execute();
        $webchannel = $sql->fetchAll();
        $webchannel_per = intval(round((count($webchannel) / $customercount) * 100));
        $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'Android'");
        $sql->execute();
        $androidchannel = $sql->fetchAll();
        $androidchannel_per = intval(round((count($androidchannel) / $customercount) * 100));
        $sql = $connection->prepare("SELECT * FROM `customer` where channel = 'IOS'");
        $sql->execute();
        $ioschannel = $sql->fetchAll();
        $ioschannel_per = intval(round((count($ioschannel) / $customercount) * 100));
// USER ID SESSION
        $sql = $connection->prepare("SELECT * FROM `restaurants` where 1");
        $sql->execute();
        $store = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/branchReport.html.twig',
            array(
                "customer" => count($customer),
                "currency" => $currency['currencyFormat'],
                "returns" => count($status),
                "orders" => count($orders),
                "item" => count($items),
                "dispatched" => count($dispatched),
                "stock" => count($stock),
                "sales" => $sa['sales'],
                "latestOrders" => $latestOrders,
                "latestCustomers" => $latesCustomers,
                "all_orders" => count($all_orders),
                "categories" => count($categories),
                "brands" => count($brands),
                "thisDaySale" => $todaySalerow['sales'],
                "previousDaySale" => $yesterdayrow['sales'],
                "monthDaySale" => $monthrow['sales'],
                "weekDaySale" => $weekrow['sales'],
                "itemSale" => $itemSale,
                "webchannel" => count($webchannel),
                "androidchannel" => count($androidchannel),
                "ioschannel" => count($ioschannel),
                "webchannel_per" => $webchannel_per,
                "androidchannel_per" => $androidchannel_per,
                "ioschannel_per" => $ioschannel_per,
                "totalorders" => count($totalorders),
                "store" => count($store),
            ));
    }
    public function allRestaurantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where 1");
        $sql->execute();
        $row = $sql->fetchAll();
        $response = array();
        foreach ($row as $res) {

            $response[] = array("id" => $res['id'], "restaurantname" => $res['restaurantName'], "primaryMobile" => $res['primaryMobile'], "primaryEmail" => $res['primaryEmail'], "restaurantLocation" => $res['restaurantLocation'], "isOpen" => $res['isOpen'], "sales" => $this->getMonthSale($res['id']));
        }return $this->render('AppBundle:Admin:Pages/restaurantList.html.twig', array('restaurants' => $response));
    }
    public function getMonthSale($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sqls = $connection->prepare("SELECT sum(orderAmount)as sales FROM `customer_order` where orderStatus='completed' and branch='$id'");
        $sqls->execute();
        $todaySale = $sqls->fetchAll();
        foreach ($todaySale as $todaySalerow) {
        }
        return $todaySalerow['sales'];
    }
    public function viewRestaurantAction(Request $request, Restaurants $restaurant)
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('AppBundle:Admin:Pages/restaurantView.html.twig', array('restaurant' => $restaurant));
    }

    public function createRestaurantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $restaurant = new Restaurants();
        $form = $this->createForm('AppBundle\Form\RestaurantsType', $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $restaurant->setRestaurantSlug(str_replace(" ", "-", strtolower($restaurant->getRestaurantName())));
                if ($restaurant->getIconFile() != null) {
                    $restaurant->iconUpload();
                }
                if ($restaurant->getBannerFile() != null) {
                    $restaurant->bannerUpload();
                }
                $restaurant->defaultUpload();

                // $restaurant->setDashboardColor($_POST['appbundle_restaurants[dashboardColor]']);
                $restaurant->setOpenTime(new \Datetime($restaurant->getOpenTime()));
                $restaurant->setCloseTime(new \Datetime($restaurant->getCloseTime()));
                $em->persist($restaurant);
                $em->flush();
                $check = $restaurant->getNested();
                $restid = $restaurant->getId();
                $em->getConnection()->exec("INSERT INTO `loyalty`(`branch`) VALUES ('$restid')");
// $em->getConnection()->exec("INSERT INTO `membership`(`branch`,`parent_id`,`status`,`name`) VALUES ('$restid',0,0,'Prime Plan')");
                $em->getConnection()->exec("update user set registrationKey='$check'");
                $this->createBrands($restid);
                $this->createCategory($restid);
                $request->getSession()->getFlashBag()->add('success', "New Branch Created!");
                return $this->redirectToRoute('restaurant_create');
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());

            }
        }

        return $this->render('AppBundle:Admin:Pages/restaurantForm.html.twig', array(
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ));
    }
    public function createCategory($branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sqls = $connection->prepare("SELECT * from sub_category where branch='0' and parent_id is null and 1");
        $sqls->execute();
        $datas = $sqls->fetchAll();

        foreach ($datas as $d) {
            $statement = $connection->prepare("SELECT * from sub_category");
            $statement->execute();
            $menus = $statement->fetchAll();
            $newid = count($menus);
            // $newid=$newid+10;
            $id = $d['id'];
            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,$branch,$id FROM sub_category where branch='0' and id='$id'");
            $newid = $em->getConnection()->lastInsertId();

            $this->createSubCategory($newid, $branch, $id);

        }

    }
    public function createSubCategory($id, $branch, $parents)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

// $parent=$this->getParent($branch,$parents);
        $sqls = $connection->prepare("SELECT * from sub_category where branch='0' and parent_id='$parents' and 1");
        $sqls->execute();
        $datas = $sqls->fetchAll();

        foreach ($datas as $d) {
            $ret = $d['id'];
            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,$id,featured,priority,status,nested,$branch,$ret FROM sub_category where id='$ret'");
            $newid = $em->getConnection()->lastInsertId();
            $this->createNestedCategory($newid, $branch, $ret);

        }
    }
    public function createNestedCategory($id, $branch, $parents)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

// $parent=$this->getParent($branch,$parents);
        $sqls = $connection->prepare("SELECT * from sub_category where branch='0' and parent_id='$parents' and 1");
        $sqls->execute();
        $datas = $sqls->fetchAll();

        foreach ($datas as $d) {
            $ret = $d['id'];

            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,$id,featured,priority,status,nested,$branch,$ret FROM sub_category where id='$ret'");
            $newid = $em->getConnection()->lastInsertId();

            $this->createNestedCategory($newid, $branch, $ret);

        }
    }
    public function createBrands($branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sqls = $connection->prepare("SELECT * from brands where branch='0'");
        $sqls->execute();
        $datas = $sqls->fetchAll();

        foreach ($datas as $d) {
            $id = $d['id'];
            $res = $em->getConnection()->exec("INSERT INTO brands(categorySlug,bannerImage,categoryDescription,parent_id,branch,categoryName,iconImage,ref) SELECT  categorySlug,bannerImage,categoryDescription,parent_id,$branch,categoryName,iconImage,$id FROM brands where branch='0' and id ='$id'");
        }
    }
    public function editRestaurantAction(Request $request, Restaurants $restaurant)
    {

        $form = $this->createForm('AppBundle\Form\RestaurantsType', $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {

                $restaurant->setRestaurantSlug(str_replace(" ", "-", strtolower($restaurant->getRestaurantName())));

                $restaurant->iconUpload();

                $restaurant->bannerUpload();
                $restaurant->defaultUpload();
                $em->flush();
                $check = $restaurant->getNested();
                $branch = $restaurant->getId();
                if ($check == '') {
                    $check = 0;
                }
                // $em->getConnection()->exec("update user set apiKey='$check' where branch='$branch'");
                $request->getSession()->getFlashBag()->add('success', "Shop Details Updated");
                return $this->redirectToRoute('restaurant_edit', array('id' => $restaurant->getId()));
            } catch (\Exception $e) {

                {
                    $request->getSession()->getFlashBag()->set('error', $e->getMessage());
                }
            }
        }
        return $this->render('AppBundle:Admin:Pages/restaurantForm.html.twig', array(
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ));
    }
}
