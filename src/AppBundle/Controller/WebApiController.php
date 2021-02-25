<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DeliveryBoy;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\RestaurantRatings;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
class WebApiController extends Controller
{


    public function getOrderCountAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']=[];
        $result['delayed']=0;
        $result['pending']=0;
        
        $helper=$this->container->get('function_helper');

        
        try{
            $pending=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('orders.orderStatus = :status')
                    ->setParameter('status','received');
            $pending=$pending->getQuery()
                            ->getOneOrNullResult();


            $dateThreshold = new \DateTime();
            $dateThreshold->modify("-15minutes");

            $delayed=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('(orders.orderStatus = :pending and orders.orderDate < :timeGap) or (orders.orderStatus = :processing and orders.proccessTime < :timeGap) or (orders.orderStatus = :dispatched and orders.dispatchTime < :timeGap) or (orders.orderStatus = :onway and orders.onwayTime < :timeGap) or (orders.orderStatus = :ready and orders.readyTime < :timeGap)')
                    ->setParameter('pending','received')
                    ->setParameter('processing','processing')
                    ->setParameter('dispatched','dispatched')
                    ->setParameter('onway','onway')
                    ->setParameter('ready','ready')
                    ->setParameter('timeGap',$dateThreshold);
            $delayed=$delayed->getQuery()
                            ->getOneOrNullResult();


            if($delayed==[]){
                $delayed=0;
            }else{
                $delayed=$delayed["countings"];
            }

            if($pending==[]){
                $pending=0;
            }else{
                $pending=$pending["countings"];
            }
            
            $result['pending']=$pending;
            $result['delayed']=$delayed;
            $result['status']=true;
        }catch(\Exception $e){
            $result['data'][]=$e->getMessage();
        }
        return $result;
    }


    public function getDashStatsAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']=[];
        $result['delayed']=0;
        $result['pending']=0;
        try{
            $currentDate=new \Datetime($request->get('reqDate'));
        }catch(\Exception $e){
            $currentDate=new \Datetime();
        }
        
        $helper=$this->container->get('function_helper');
        
        try{
            $pending=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('orders.orderStatus = :status')
                    ->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                    ->setParameter('todayDate',$currentDate->format('d-m-Y'))
                    ->setParameter('status','received')
                    ->getQuery()
                    ->getOneOrNullResult();

            if($pending==[]){
                $pending=0;
            }else{
                $pending=$pending["countings"];
            }

            $processing=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('orders.orderStatus = :processing or orders.orderStatus = :dispatched or orders.orderStatus = :onway or orders.orderStatus = :ready')
                    ->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                    ->setParameter('todayDate',$currentDate->format('d-m-Y'))
                    ->setParameter('processing','processing')
                    ->setParameter('dispatched','dispatched')
                    ->setParameter('onway','onway')
                    ->setParameter('ready','ready')
                    ->getQuery()
                    ->getOneOrNullResult();

            if($processing==[]){
                $processing=0;
            }else{
                $processing=$processing["countings"];
            }

            $delivered=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('orders.orderStatus = :status')
                    ->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                    ->setParameter('todayDate',$currentDate->format('d-m-Y'))
                    ->setParameter('status','delivered')
                    ->getQuery()
                    ->getOneOrNullResult();

            if($delivered==[]){
                $delivered=0;
            }else{
                $delivered=$delivered["countings"];
            }

            $cancelled=$em->createQueryBuilder()
                    ->select('count(orders.id) as countings')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->where('orders.orderStatus = :status')
                    ->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                    ->setParameter('todayDate',$currentDate->format('d-m-Y'))
                    ->setParameter('status','cancelled')
                    ->getQuery()
                    ->getOneOrNullResult();

            if($cancelled==[]){
                $cancelled=0;
            }else{
                $cancelled=$cancelled["countings"];
            }
            
            $result['pending']=$pending;
            $result['processing']=$processing;
            $result['delivered']=$delivered;
            $result['cancelled']=$cancelled;
            $result['status']=true;
        }catch(\Exception $e){
            $result['data'][]=$e->getMessage();
        }
        return $result;
    }

    public function removeRestaurantReviewAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']=[];
        
        $helper=$this->container->get('function_helper');
        $reviewId=$request->get('reviewId');
        $review=null;
        if($helper->testNull($reviewId)){ 
            $result['data'][]="Invalid review"; 
        }else{
            $review=$em->getRepository('AppBundle:RestaurantRatings')->find($reviewId);
            
            if(!($review instanceof RestaurantRatings)){ return $result['data'][]="Invalid review"; }
        }
        if($result['data']!=[]){
            return $result;
        }
        $restaurant=$em->getRepository('AppBundle:RestaurantRatings')->find(999);
        try{
            $em->remove($review);
            $em->flush();
            $star5=(array)$em->createQueryBuilder()
                    ->select('count(star5.id) as countings','sum(star5.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star5')
                    ->where('star5.ratings = 5')
                    ->getQuery()
                    ->getSingleResult(); 
            $star4=(array)$em->createQueryBuilder()
                    ->select('count(star4.id) as countings','sum(star4.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star4')
                    ->where('star4.ratings = 4')
                    ->getQuery()
                    ->getSingleResult();
            $star3=(array)$em->createQueryBuilder()
                    ->select('count(star3.id) as countings','sum(star3.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star3')
                    ->where('star3.ratings = 3')
                    ->getQuery()
                    ->getSingleResult();
            $star2=(array)$em->createQueryBuilder()
                    ->select('count(star2.id) as countings','sum(star2.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star2')
                    ->where('star2.ratings = 2')
                    ->getQuery()
                    ->getSingleResult();
            $star1=(array)$em->createQueryBuilder()
                    ->select('count(star1.id) as countings','sum(star1.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star1')
                    ->where('star1.ratings = 1')
                    ->getQuery()
                    ->getSingleResult();
            $top=(5 * $star5['total'] + 4 * $star4['total'] + 3 * $star3['total'] + 2 * $star2['total'] + 1 * $star1['total']);
            $devicer=($star5['total']+$star4['total']+$star3['total']+$star2['total']+$star1['total']);
            if($devicer == 0){
                $popularity=0;
            }else{
                $popularity= $top/ $devicer;
            }
            if($restaurant instanceof Restaurants){
                $restaurant->setPopularity($popularity);
                $em->flush();
            }
            $result['status']=true;
        }catch(\Exception $e){
            $result['data'][]=$e->getMessage();
        }
        return $result;
    }

    public function getOrderReportAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']=[];
        
        $helper=$this->container->get('function_helper');

        //receive the data
        $fromDate = new \Datetime($request->get('fromDate'));
        $toDate = $request->get('toDate');
        $status=$request->get('status');
        $customer=$request->get('customer');

        $orders=$em->createQueryBuilder()
                    ->select('orders')
                    ->from('AppBundle:CustomerOrder', 'orders')
                    ->leftJoin('orders.customer','customer');
        if($toDate==null){
            $orders=$orders->andWhere("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                            ->setParameter('todayDate',$fromDate->format('d-m-Y'));
        }else{
            $toDate=new \Datetime($toDate);
            $orders=$orders->andWhere("orders.orderDate BETWEEN :fromDate and :toDate")
                            ->setParameter('fromDate',$fromDate)
                            ->setParameter('toDate',$toDate);
        }

        if($status=="completed"){
            $orders=$orders->andWhere("orders.orderStatus = :delivered or orders.orderStatus = :completed")
                            ->setParameter('delivered',"delivered")
                            ->setParameter('completed',"completed");
        }elseif($status=="cancelled"){
            $orders=$orders->andWhere("orders.orderStatus = :cancelled")
                            ->setParameter('cancelled',"cancelled");
        }


        if($customer != null){
            $orders=$orders->andWhere("customer.id = :customerId")
                            ->setParameter('customerId',$customer);
        }
        $result['status']=true;
        $result['data']=$orders->getQuery()->getArrayResult();
        return $result;
    }

    public function customerListAction(Request $request){
    	$em = $this->getDoctrine()->getManager();
        $main_c  = $em->createQueryBuilder()
                        ->select('cust')
                        ->from('AppBundle:Customer', 'cust')
                        ->orderby('cust.username','ASC')
                        ->getQuery()
                        ->getArrayResult();
        return $main_c;
    }

    public function getMonthlyDashStatsAction(Request $request){
    	$em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $year=$request->get('year');

        //jan
        $result['jan']['pending']=$helper->getMonthlyStats('01-'.$year,'received');
        $result['jan']['completed']=$helper->getMonthlyStats('01-'.$year,'delivered') + $helper->getMonthlyStats('01-'.$year,'completed');
        $result['jan']['cancelled']=$helper->getMonthlyStats('01-'.$year,'cancelled');

        //feb
        $result['feb']['pending']=$helper->getMonthlyStats('02-'.$year,'received');
        $result['feb']['completed']=$helper->getMonthlyStats('02-'.$year,'delivered') + $helper->getMonthlyStats('02-'.$year,'completed');
        $result['feb']['cancelled']=$helper->getMonthlyStats('02-'.$year,'cancelled');

        //mar
        $result['mar']['pending']=$helper->getMonthlyStats('03-'.$year,'received');
        $result['mar']['completed']=$helper->getMonthlyStats('03-'.$year,'delivered') + $helper->getMonthlyStats('03-'.$year,'completed');
        $result['mar']['cancelled']=$helper->getMonthlyStats('03-'.$year,'cancelled');

        //apr
        $result['apr']['pending']=$helper->getMonthlyStats('04-'.$year,'received');
        $result['apr']['completed']=$helper->getMonthlyStats('04-'.$year,'delivered') + $helper->getMonthlyStats('04-'.$year,'completed');
        $result['apr']['cancelled']=$helper->getMonthlyStats('04-'.$year,'cancelled');

        //may
        $result['may']['pending']=$helper->getMonthlyStats('05-'.$year,'received');
        $result['may']['completed']=$helper->getMonthlyStats('05-'.$year,'delivered') + $helper->getMonthlyStats('05-'.$year,'completed');
        $result['may']['cancelled']=$helper->getMonthlyStats('05-'.$year,'cancelled');

        //jun
        $result['jun']['pending']=$helper->getMonthlyStats('06-'.$year,'received');
        $result['jun']['completed']=$helper->getMonthlyStats('06-'.$year,'delivered') + $helper->getMonthlyStats('06-'.$year,'completed');
        $result['jun']['cancelled']=$helper->getMonthlyStats('06-'.$year,'cancelled');

        //jul
        $result['jul']['pending']=$helper->getMonthlyStats('07-'.$year,'received');
        $result['jul']['completed']=$helper->getMonthlyStats('07-'.$year,'delivered') + $helper->getMonthlyStats('07-'.$year,'completed');
        $result['jul']['cancelled']=$helper->getMonthlyStats('07-'.$year,'cancelled');

        //aug
        $result['aug']['pending']=$helper->getMonthlyStats('08-'.$year,'received');
        $result['aug']['completed']=$helper->getMonthlyStats('08-'.$year,'delivered') + $helper->getMonthlyStats('08-'.$year,'completed');
        $result['aug']['cancelled']=$helper->getMonthlyStats('08-'.$year,'cancelled');

        //sep
        $result['sep']['pending']=$helper->getMonthlyStats('09-'.$year,'received');
        $result['sep']['completed']=$helper->getMonthlyStats('09-'.$year,'delivered') + $helper->getMonthlyStats('09-'.$year,'completed');
        $result['sep']['cancelled']=$helper->getMonthlyStats('09-'.$year,'cancelled');

        //oct
        $result['oct']['pending']=$helper->getMonthlyStats('10-'.$year,'received');
        $result['oct']['completed']=$helper->getMonthlyStats('10-'.$year,'delivered') + $helper->getMonthlyStats('10-'.$year,'completed');
        $result['oct']['cancelled']=$helper->getMonthlyStats('10-'.$year,'cancelled');

        //nov
        $result['nov']['pending']=$helper->getMonthlyStats('11-'.$year,'received');
        $result['nov']['completed']=$helper->getMonthlyStats('11-'.$year,'delivered') + $helper->getMonthlyStats('11-'.$year,'completed');
        $result['nov']['cancelled']=$helper->getMonthlyStats('11-'.$year,'cancelled');

        //dec
        $result['dec']['pending']=$helper->getMonthlyStats('12-'.$year,'received');
        $result['dec']['completed']=$helper->getMonthlyStats('12-'.$year,'delivered') + $helper->getMonthlyStats('12-'.$year,'completed');
        $result['dec']['cancelled']=$helper->getMonthlyStats('12-'.$year,'cancelled');
        return $result;
    }
      public function getneworderAction(Request $request)
  {
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
$id=$request->get('id');

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
 $new=count($row);

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and orderType ='pickup' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
 $pickup=count($row);

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='onway'  and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
 $onway=count($row);

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and orderType ='Delivery' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
 $delivery=count($row);

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and orderType ='express' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
 $express=count($row);

 $sql = $connection->prepare("SELECT * from restaurants where  id='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
foreach ($row as $res) {
}
$branch= '<h3>'.$res['restaurantName'].'</h3><p>'.$res['restaurantLocation'].'</p>';

$resp=array('onway'=>$onway,'new'=>$new,'pickup'=>$pickup,'delivery'=>$delivery,'express'=>$express,'branch'=>$branch);
return new jsonResponse($resp);
  }
        public function getnewpickupAction(Request $request)
  {
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
$id=$request->get('id');

 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and orderType ='pickup' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
    return count($row);

  }
          public function getnewExpressAction(Request $request)
  {
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
$id=$request->get('id');
 $sql = $connection->prepare("SELECT * from customer_order where  orderStatus='received' and orderType ='express' and branch='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
    return count($row);

  }

public function getShopDetailsAction(Request $request)
  {
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
$id=$request->get('id');
 $sql = $connection->prepare("SELECT * from restaurants where  id='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
foreach ($row as $res) {

return '<h3>'.$res['restaurantName'].'</h3><p>'.$res['restaurantLocation'].'</p>';

}
  }
  
}
