<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReportApiController extends Controller
{
    public function getTodaysSaleAction(Request $request)
    {
        $result['todays']=0;
        $result['months']=0;
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $restaurantId=$request->get('restId');
        $currentDate=new \Datetime();
        $currentDate=$currentDate->format('d-m-Y');
        $count=$em->createQueryBuilder()
                ->select('sum(orders.orderAmount) as amount')
                ->from('AppBundle:CustomerOrder', 'orders')
                ->leftJoin('orders.restaurant','rest')
                ->where("DATE_FORMAT(orders.orderDate, '%d-%m-%Y') = :todayDate")
                ->andWhere('orders.orderStatus = :delivered or orders.orderStatus = :completed')
                ->setParameter('delivered',"delivered")
                ->setParameter('completed',"completed")
                ->setParameter('todayDate',$currentDate);

        if($restaurantId!=null){
            $count=$count->andWhere('rest.id = :restId')
                    ->setParameter('restId',$restaurantId); 
        }
        $count=$count->getQuery()->getOneOrNullResult();
        if(array_key_exists('amount',$count)){
            $result['todays']=0;
        }
        //monthly sale
        $currentDate=new \Datetime();
        $currentDate=$currentDate->format('m-Y');
        $count1=$em->createQueryBuilder()
                ->select('sum(orders.orderAmount) as amount')
                ->from('AppBundle:CustomerOrder', 'orders')
                ->leftJoin('orders.restaurant','rest')
                ->where("DATE_FORMAT(orders.orderDate, '%m-%Y') = :todayDate")
                ->andWhere('orders.orderStatus = :delivered or orders.orderStatus = :completed')
                ->setParameter('delivered',"delivered")
                ->setParameter('completed',"completed")
                ->setParameter('todayDate',$currentDate);

        if($restaurantId!=null){
            $count1=$count1->andWhere('rest.id = :restId')
                    ->setParameter('restId',$restaurantId); 
        }
        $count1=$count1->getQuery()->getOneOrNullResult();
        if(array_key_exists('amount',$count1)){
            $result['months']=$count1['amount'];
        }
        return $result;
    }
    
    public function getMonthlySaleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $restaurantId=$request->get('restId');
        
        $currentDate=new \Datetime();
        $currentDate=$currentDate->format('m-Y');
        $count=$em->createQueryBuilder()
                ->select('sum(orders.orderAmount) as amount')
                ->from('AppBundle:CustomerOrder', 'orders')
                ->leftJoin('orders.restaurant','rest')
                ->where("DATE_FORMAT(orders.orderDate, '%m-%Y') = :todayDate")
                ->andWhere('orders.orderStatus = :delivered or orders.orderStatus = :completed')
                ->setParameter('delivered',"delivered")
                ->setParameter('completed',"completed")
                ->setParameter('todayDate',$currentDate);

        if($restaurantId!=null){
            $count=$count->andWhere('rest.id = :restId')
                    ->setParameter('restId',$restaurantId); 
        }
        $count=$count->getQuery()->getOneOrNullResult();
        return $count;
    }

    //to get delivery boy perticular order list
    public function getTodaysDeliveredOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $apiKey=$request->get('apiKey');

        $deliveryBoy = $em->createQueryBuilder()
                    ->select('u')
                    ->from('AppBundle:DeliveryBoy', 'u')
                    ->where('u.apiKey = :apiKey')
                    ->andWhere('u.isActive = true')
                    ->setParameter('apiKey',$apiKey)
                    ->getQuery()
                    ->getResult();
        if(sizeof($deliveryBoy)>0):
            $deliveryBoy=$deliveryBoy[0];
        else:
            $result['data'][]="Delivery boy not authenticted";
        endif;

        $date=$request->get('reqDate');
        $currentDate=new \Datetime();
        if($date==null){
            $result['data'][]="Date must be given";
        }else{
            try{
                $currentDate=new \Datetime($date);
            }catch(\Exception $e){
                $result['data'][]=$e->getMessage();
            }
        }
        if($result['data']!=[]){
            return $result;
        }
        $currentDate=$currentDate->format('d-m-Y');
        $result['data']=$em->createQueryBuilder()
                ->select('orders')
                ->from('AppBundle:CustomerOrder', 'orders')
                ->leftJoin('orders.deliveryBoy','boy')
                ->where("DATE_FORMAT(orders.deliveryTime, '%d-%m-%Y') = :todayDate")
                ->andWhere('orders.orderStatus = :delivered or orders.orderStatus = :completed')
                ->andWhere('boy.id = :deliverId')
                ->setParameter('delivered',"delivered")
                ->setParameter('completed',"completed")
                ->setParameter('deliverId',$deliveryBoy->getId())
                ->setParameter('todayDate',$currentDate)
                ->getQuery()->getArrayResult();
        $result['status']=true;
        return $result;
    }
}
