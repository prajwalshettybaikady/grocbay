<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\StockReturn;
use AppBundle\Entity\ReturnLogs;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletDue;
use AppBundle\Entity\WalletLogs;
use AppBundle\Entity\MenuItem;
use AppBundle\Entity\Promocode;
use AppBundle\Entity\PromoUsage;
use AppBundle\Entity\DeliveryBoy;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\ShoppingCart;
use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\PackageExtras;
use AppBundle\Entity\OrderItemExtras;
use AppBundle\Entity\RestaurantRatings;
use AppBundle\Entity\CustomerOrderItems;
use AppBundle\Entity\ShoppingLists;
use AppBundle\Entity\ShoppingListsName;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RestaurantApiController extends Controller
{

// getPrepaidBalance
      public function getPrepaidBalanceAction(Request $request)
 {
    $em = $this->getDoctrine()->getManager();

   $ref = $request->get('userId');
        $re=$em->getRepository('AppBundle:Wallet')->findByUser($ref);
        if(empty($re))
{

$res[]=array("postpaid"=>0,"prepaid"=>0);
}
else
{
foreach ($re as $da) {
    $prepaid=$da->getPrepaid();
    $postpaid=$da->getPostpaid();
    $res[]=array("postpaid"=>$postpaid,"prepaid"=>$prepaid);
  }

   }   
return $res;
 }

 //get logs
 
public function getLogsAction(Request $request)
 {
    $em = $this->getDoctrine()->getManager();

   $ref = $request->get('userId');
      $type = $request->get('type');

 $re=$em->getRepository('AppBundle:WalletLogs')->findBy(array("ref"=>$ref,'type'=>$type), array('id' => 'desc'));
  // $em->getConnection()->exec( "SELECT * from wallet as a join wallet_logs as b where ");
if(empty($re))
{
$res[]=array("data"=>array());
}
else
{
foreach ($re as $da) {
    
    $res[]=array("data"=>$da);
  }
  }   
return $res;
 }
 public function getFeaturedAction(Request $request)
 {
    $rows=$request->get('rows');
    $em = $this->getDoctrine()->getManager();
if($rows==0)
{
     $connection = $em->getConnection();
$statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation) order by a.id desc");

$statement->execute();
$menus = $statement->fetchAll();
foreach ($menus as $res)
{
$menu[]=array('id'=>$res['id'],'category_id'=>$res['category_id'],'item_name'=>$res['itemName'],'item_slug'=>$res['itemSlug'],'veg_type'=>$res['vegType'],'item_featured_image'=>$res['itemFeaturedImage'],'regular_price'=>$res['regularPrice'],'sale_price'=>$res['salePrice'],'is_active'=>$res['isActive'],'sales_tax'=>$res['salesTax'],'total_qty'=>$res['totalQty'],'brand'=>$res['categoryName'],'alert'=>$res['alert'],'price_variation'=>$this->priceVariation($res['id']));
}
if($menu=='')
{
   return $data=array();
}
else
{
    return $data=$menu;
}   
}
else
{
        $connection = $em->getConnection();
$statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation) order by a.id desc limit 5 OFFSET 0");

$statement->execute();
$menus = $statement->fetchAll();
foreach ($menus as $res)
{
$menu[]=array('id'=>$res['id'],'category_id'=>$res['category_id'],'item_name'=>$res['itemName'],'item_slug'=>$res['itemSlug'],'veg_type'=>$res['vegType'],'item_featured_image'=>$res['itemFeaturedImage'],'regular_price'=>$res['regularPrice'],'sale_price'=>$res['salePrice'],'is_active'=>$res['isActive'],'sales_tax'=>$res['salesTax'],'total_qty'=>$res['totalQty'],'brand'=>$res['categoryName'],'alert'=>$res['alert'],'price_variation'=>$this->priceVariation($res['id']));
}
if($menu=='')
{
   return $data=array();
}
else
{
    return $data=$menu;
}   
}
    
        $result['data']=$data;
        return $result;
 }
  public function getDiscountAction(Request $request)
 {
    $em = $this->getDoctrine()->getManager();

    $restList=$em->createQueryBuilder()
                    ->select('menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:MenuItem', 'menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
                     ->where('menuItem.category=15')
                    ->orderby('menuItem.itemName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;
        return $result;
 }

    public function deliveryNewOrderAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();
        
        $id=$request->get('id');
        $mode=$request->get('mode');

        if($mode=='0')
        {
        $menus=$em->getRepository('AppBundle:CustomerOrder')->findBy(array("deliveryBoy"=>$id,'orderStatus'=>'dispatched'));   
        }
         if($mode=='1')
        {
        $menus=$em->getRepository('AppBundle:CustomerOrder')->findBy(array("deliveryBoy"=>$id,'orderStatus'=>'onway'));   
        }
         if($mode=='2')
        {
        $menus=$em->getRepository('AppBundle:CustomerOrder')->findBy(array("deliveryBoy"=>$id,'orderStatus'=>'delivered'));   
        }
      
        return $data['data']=$menus;
    }

    public function deliveryLoginAction(Request $request)
    {
        $user=new User;
        $em = $this->getDoctrine()->getManager();
        
        $mobile=$request->get('mobile');
        $password=$request->get('password');
        $pwd=$user->setPassword($password);
        // $pass=$pwd->getPassword();

        $pass='$2y$13$bw7IQgMVyCGocpZJIbqgwOe51Ze9w3WC14NwgyCNChuzrV0FLMjAy';
$out=$em->getRepository('AppBundle:User')->findBy(array('mobileNumber' =>$mobile,'password' =>$pass,'userType'=>'Delivery'));
        if(empty($out))
        {
        $data=array("status"=>400,"data"=>array());
        }
        else
        {
        foreach ($out as $res)
        {
     $x[]=$res;
     $data=array("status"=>200,"data"=>$x);
        }     
        }
        return $data;
    }

 
     public function getAdsAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:Advertisement')->findBy(array('isActive'=>'1','advertisementType'=>'2'));

        return $data['data']=$menus;
    }
     public function getBrandsAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

        // $menus=$em->getRepository('AppBundle:Brands')->findByIsActive('1');
$menus=$em->getRepository('AppBundle:Brands')->findBy(array("parent_id"=>NULL));
        return $data['data']=$menus;
    }

    //for providing customer side operations
    public function searchProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $restList=$em->createQueryBuilder()
                    ->select('menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:MenuItem', 'menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
                    ->orderby('menuItem.itemName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;

        return $result;
    }
 public function bannerAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:Advertisement')->findBy(array('isActive'=>'1','advertisementType'=>'1'));

        return $data['data']=$menus;
    }
 public function getCategoryAction(Request $request)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $menus=$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id'=>$id));
        return $data['data']=$menus;
    }
public function getMenuItemAction(Request $request) 
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $start=$request->get('start');
        $end=$request->get('end');;
       // $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
        $connection = $em->getConnection();
$statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.category_id='$id' and a.id in(select menu_item_id from price_variation) limit 5 OFFSET $start");

$statement->execute();
$menus = $statement->fetchAll();
foreach ($menus as $res)
{
$menu[]=array('id'=>$res['id'],'category_id'=>$res['category_id'],'item_name'=>$res['itemName'],'item_slug'=>$res['itemSlug'],'veg_type'=>$res['vegType'],'item_featured_image'=>$res['itemFeaturedImage'],'regular_price'=>$res['regularPrice'],'sale_price'=>$res['salePrice'],'is_active'=>$res['isActive'],'sales_tax'=>$res['salesTax'],'total_qty'=>$res['totalQty'],'brand'=>$res['categoryName'],'alert'=>$res['alert'],'price_variation'=>$this->priceVariation($res['id']));
}
if($menu=='')
{
   return $data['data']=array();
}
else
{
    return $data['data']=$menu;
}
        
    }

public function priceVariation($id)
    {
                $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

$statement = $connection->prepare("SELECT * FROM `price_variation` where menu_item_id='$id' and 1 and stock is not null");

$statement->execute();
$menus = $statement->fetchAll();
foreach ($menus as $res)
{
$menu[]=array('id'=>$res['id'],'menu_item_id'=>$res['menu_item_id'],'variation_name'=>$res['variationName'],'price'=>$res['price'],'priority'=>$res['priority'],'mrp'=>$res['mrp'],'stock'=>$res['stock'],'max_item'=>$res['maxItem'],'status'=>$res['status'],'min_item'=>$res['minItem'],'alert'=>$res['alert']);
}
return $menu;
}
    
public function getMenuItemByBrandAction(Request $request)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $start=$request->get('start');
        $end=$request->get('end');;
       // $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
        $connection = $em->getConnection();
$statement = $connection->prepare("SELECT * FROM `menu_item` where brand='$id' and isActive='1'  limit 5 OFFSET $start");

$statement->execute();
$menus = $statement->fetchAll();
foreach ($menus as $res)
{
$menu[]=array('id'=>$res['id'],'category_id'=>$res['category_id'],'item_name'=>$res['itemName'],'item_slug'=>$res['itemSlug'],'veg_type'=>$res['vegType'],'item_featured_image'=>$res['itemFeaturedImage'],'regular_price'=>$res['regularPrice'],'sale_price'=>$res['salePrice'],'is_active'=>$res['isActive'],'sales_tax'=>$res['salesTax'],'total_qty'=>$res['totalQty'],'brand'=>$res['brand'],'alert'=>$res['alert'],'price_variation'=>$this->priceVariation($res['id']));
}
        return $data['data']=$menu;
    }
    public function searchCategorizedProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        
        $restList=$em->createQueryBuilder()
                    ->select('mainCat','menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:SubCategory', 'mainCat')
                    ->leftJoin('mainCat.menuItem','menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
                    ->where('menuItem.isActive = :truet')
                    ->setParameter('truet',true)
                    ->orderby('mainCat.categoryName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;

        return $result;
    }

    public function restaurantRatingsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $edit=false;
        
        //authentication
        $apiKey=$request->get('apiKey');
        $reviews=$request->get('reviews');
        $rating=$request->get('ratings');
        $restaurant=$customer=null;
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        if($helper->testNull($rating)){ 
            $result['data'][]="Invalid ratings"; 
        }

        if($result['data']==[]){
            $ratings=$em->createQueryBuilder()
                        ->select('ratings')
                        ->from('AppBundle:RestaurantRatings', 'ratings')
                        ->leftJoin('ratings.customer','customer')
                        ->andWhere('customer.id = :customerId')
                        ->setParameter('customerId',$customer->getId())
                        ->getQuery()
                        ->getResult();
            $rate=null;
            if($ratings == []){
                $rate = new RestaurantRatings();
                $rate->setCustomer($customer);
                $em->persist($rate);
            }else{
                $rate = $ratings[0];
            }
            $rate->setReviews($reviews);
            $rate->setRatings($rating);
            $em->flush();
            $star5=(array)$em->createQueryBuilder()
                    ->select('count(star5.id) as countings','sum(star5.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star5')
                    ->andWhere('star5.ratings = 5')
                    ->getQuery()
                    ->getSingleResult(); 
            $star4=(array)$em->createQueryBuilder()
                    ->select('count(star4.id) as countings','sum(star4.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star4')
                    ->andWhere('star4.ratings = 4')
                    ->getQuery()
                    ->getSingleResult();
            $star3=(array)$em->createQueryBuilder()
                    ->select('count(star3.id) as countings','sum(star3.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star3')
                    ->andWhere('star3.ratings = 3')
                    ->getQuery()
                    ->getSingleResult();
            $star2=(array)$em->createQueryBuilder()
                    ->select('count(star2.id) as countings','sum(star2.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star2')
                    ->andWhere('star2.ratings = 2')
                    ->getQuery()
                    ->getSingleResult();
            $star1=(array)$em->createQueryBuilder()
                    ->select('count(star1.id) as countings','sum(star1.ratings) as total')
                    ->from('AppBundle:RestaurantRatings', 'star1')
                    ->andWhere('star1.ratings = 1')
                    ->getQuery()
                    ->getSingleResult();
            $popularity=(5 * $star5['total'] + 4 * $star4['total'] + 3 * $star3['total'] + 2 * $star2['total'] + 1 * $star1['total']) / ($star5['total']+$star4['total']+$star3['total']+$star2['total']+$star1['total']);
            $restaurant->setPopularity($popularity);
            $em->flush();
            $result['data'][]="Ratings updated";
            $result['status']=true;
        }


        return $result;
    }

    public function getRestaurantRatingsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $restaurant=null;
        $ratings=$em->createQueryBuilder()
                ->select('ratings','customer')
                ->from('AppBundle:RestaurantRatings', 'ratings')
                ->leftJoin('ratings.customer','customer')
                ->getQuery()
                ->getArrayResult();
        $result['data']=$ratings;
        $result['status']=true;
        return $result;
    }

    public function getRestaurantDetailsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $restaurant=$em->createQueryBuilder()
                ->select('rest')
                ->from('AppBundle:Restaurants', 'rest')
                ->where('rest.id = :restId')
                ->setParameter('restId',999)
                ->getQuery()
                ->getArrayResult();
        $result['data']=$restaurant;
        $result['status']=true;
        return $result;
    }
    public function getPrivacyPolicyAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $restaurant=$em->createQueryBuilder()
                ->select('rest')
                ->from('AppBundle:Restaurants', 'rest')
                ->where('rest.id = :restId')
                ->setParameter('restId',999)
                ->getQuery()
                ->getArrayResult();
        $result['data']=$restaurant;
        $result['status']=true;
        return $result;
    }

    public function makeOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $trans=$this->container->get('transaction_helper');
        $result['status']=false;
        $result['data']=[];
        $result['promoError']=false;
        $result['promoErrorData']=[];
        $result['promoAmount']=0;
        $customerOrder = new CustomerOrder();
        $promoFlag=false;
        if( $request->get('_route') == "api_promocode_test"){
            $promoFlag=true;
        }
        //receive the data
        $apiKey=$request->get('apiKey');
        $addressId=$request->get('addressId');
        $orderType=$request->get('orderType');
        $paymentType=$request->get('paymentType');
        $items=$request->get('items');
        $walletType=$request->get('walletType');
        $walletBalance=$request->get('walletBalance');
        $userId=$request->get('userId');


        //if promocode check
        
        $promocodeId=$request->get('promocode');
        $promocode=null;
        if($helper->testNull($promocodeId)){ 
            if($promoFlag==true)
                $result['promoError']=true;
            $result['promoErrorData'][]="Invalid Promocode"; 
        }else{
            $currentDate=new \Datetime();
            $promocode=$em->createQueryBuilder()
                    ->select('promocode')
                    ->from('AppBundle:Promocode', 'promocode')
                    ->where(":curDate BETWEEN promocode.startDate and promocode.endDate")
                    ->andWhere('promocode.isActive = true')
                    ->andWhere('promocode.promoCode = :promocodeId')
                    ->setParameter('curDate',$currentDate)
                    ->setParameter('promocodeId',$promocodeId)
                    ->getQuery()
                    ->getOneOrNullResult();
            if(!($promocode instanceof Promocode)){
                $result['promoError']=true;
                $result['promoErrorData'][]="Invalid promocode";
            }
        }

        if($promoFlag == true && $result['promoError'] == true){
            return $result;
        }


        $restaurant=$customer=null;
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $restaurant=$em->getRepository('AppBundle:Restaurants')->find(999);

        if($helper->testNull($orderType)){ 
            $result['data'][]="Invalid order type"; 
        }
        if($helper->testNull($paymentType)){ 
            $result['data'][]="Invalid payment type"; 
        }
        if($helper->testNull($addressId)){ 
            $result['data'][]="Invalid address id"; 
        }else{
            $fl=true;
            foreach($customer->getBillingAddress() as $address){
                if($address->getId() == $addressId){
                    $customerOrder->setAddress($address->getAddress());
                    $customerOrder->setLogitude($address->getLattitude());
                    $customerOrder->setLatitude($address->getLogingitude());
                    $customerOrder->setCustomerName($address->getFullName());
                    $customerOrder->setLandmark($address->getExtraInfo());
                    $fl=false;
                }
            }
            if($fl){
                $result['data'][]='Please select address from customer address';
            }
        }

        if($result['data']!=[]){
            return $result;
        }

    $timeText=$request->get('fix_time');

            
        $customerOrder->setOrderDate(new \Datetime());
        $customerOrder->setSortTime(new \Datetime());
        $customerOrder->setCustomer($customer);

    $customerOrder->setFixtime($timeText);


        $total=0;
        if(is_array($items)){
            foreach($items as $item){
                $customerOrderItem=new CustomerOrderItems();
$customerOrderItem->setCustomerOrder($customerOrder);

                $flag=0;
                $varFlag=0;
                if($helper->testNull($item['productId'])){ 
                    $result['data'][]="Invalid productId"; 
                    $flag++;
                }else{
                    $menuItem=$em->getRepository('AppBundle:MenuItem')->find($item['productId']);
                    
                    if(!($menuItem instanceof MenuItem)){ 
                        $result['data'][]="Invalid menu item"; 
                        $flag++;
                    }else{



                        $customerOrderItem->setItemId($menuItem->getId());
                        $customerOrderItem->setItemName($menuItem->getItemName());


                        if(sizeof($menuItem->getPriceVariation()) > 0){ 
                            foreach($menuItem->getPriceVariation() as $variation){

                                 $minus=$variation->getStock()-$item['quantity'];
                                 $ids=$variation->getId();
 // minus stock
$em->getConnection()->exec( "update price_variation set stock='$minus' where 1 and id='$ids'");


// //end of minus
// if($walletType==3)
// {
// }
// else
// {
// // paymentType
// }

                                if($item['priceVariation'] == $variation->getId()){
                                    $customerOrderItem->setPriceVariavtion($variation->getVariationName());
                                    $customerOrderItem->setPrice($variation->getPrice());

                                    $varFlag++;
                                }
                            }
                            if($varFlag==0){
                                $result['data'][]="Invalid variation details"; 
                                $flag++;
                            }
                        }else{
                            if($menuItem->getSalePrice()){
                                $customerOrderItem->setPrice($menuItem->getSalePrice());
                            }else{
                                $customerOrderItem->setPrice($menuItem->getRegularPrice());
                            }
                        }
                        if($helper->testNull($item['quantity'])){ 
                            $result['data'][]="Invalid quantity"; 
                            $flag++;
                        }else{
                            $customerOrderItem->setQuantity($item['quantity']);
                        }
                        $customerOrderItem->setActualAmount($customerOrderItem->getPrice() * $customerOrderItem->getQuantity());

 
                        //toppings validation
                        $extraAmount=0;
                        if(array_key_exists('extras',$item)){
                            if(is_array($item['extras'])){
                                foreach($item['extras'] as $extra){
                                    if(array_key_exists('extraId',$extra)){
                                        $extraPackage=$em->getRepository('AppBundle:PackageExtras')->find($extra['extraId']);
                                        if($extraPackage instanceof PackageExtras){
                                            if($extraPackage->getExtraPackage()->getMenuItem()->getId() == $menuItem->getId()){
                                                $orderItemExtras=new OrderItemExtras();
                                                $orderItemExtras->setTypeName($extraPackage->getExtraPackage()->getPackageName());
                                                $orderItemExtras->setItemName($extraPackage->getTypeName());
                                                $orderItemExtras->setPrice($extraPackage->getPrice());
                                                $orderItemExtras->setCustomerOrderItems($customerOrderItem);
                                                $extraAmount=$extraAmount+$orderItemExtras->getPrice();
                                            }else{
                                                $flag++;
                                                $result['data'][]="Invalid package selected from menu item";
                                            }
                                        }else{
                                            $flag++;
                                            $result['data'][]="Invalid package selected";
                                        }
                                    }
                                }
                            }
                        }
                        $customerOrderItem->setExtraAmount($extraAmount);
                        $customerOrderItem->setSubTotal($customerOrderItem->getActualAmount() + $customerOrderItem->getExtraAmount());
                        $total=$total+$customerOrderItem->getSubTotal();
                    }
                }

                if($flag==0){
                    $em->persist($customerOrderItem);
                }
            }
        }else{
            $result['data'][]="No items given"; 
            $flag=true;
        }
        $customerOrder->setActualAmount($total);


        
        if(($flag==false && $promoFlag==true) || ($flag==false && $promocode!=null)){
            //check usage limits
            $userLimit=1;
            $oldPromoUsage=null;
            if($promocode->getUsageType() == "limited"){
                $promousage = $em->createQueryBuilder()
                                ->select('promoUsage')
                                ->from('AppBundle:PromoUsage', 'promoUsage')
                                ->leftJoin('promoUsage.customer','customer')
                                ->leftJoin('promoUsage.promocode','promocode')
                                ->where('promocode.id = :promocodeId')
                                ->andWhere('customer.id = :customerId')
                                ->setParameter('promocodeId',$promocode->getId())
                                ->setParameter('customerId',$customer->getId())
                                ->getQuery()
                                ->getResult();


                if(sizeof($promousage)>0){
                    $oldPromoUsage=$promousage[0];
                    $oldPromoUsage->setCount($oldPromoUsage->getCount());
                }else{
                    $oldPromoUsage=new PromoUsage();
                    $oldPromoUsage->setCustomer($customer);
                    $oldPromoUsage->setPromocode($promocode);
                    $oldPromoUsage->setCount(0);
                    $em->persist($oldPromoUsage);
                }

                $userLimit=$promocode->getUsageLimit()-$oldPromoUsage->getCount();
                $oldPromoUsage->setCount($oldPromoUsage->getCount()+1);
            }
            if($userLimit <= 0){
                $result['promoError']=true;
                $result['promoErrorData'][]="Limit exceeded";
            }
            //check user target
            if($promocode->getNewUsersOnly()){
                if(sizeof($customer->getCustomerOrder()) > 0){
                    $result['promoError']=true;
                    $result['promoErrorData'][]="Promocode expired";
                }
            }


            //checking order limit validation
            if($promocode->getMinOrderAmountValidation()){
                if($customerOrder->getActualAmount() < $promocode->getMinOrderAmount()){
                    $result['promoError']=true;
                    $result['promoErrorData'][]="Minimum order amount required is ".$promocode->getMinOrderAmount();
                }
            }

            //calculating order amount
            if($promocode->getDiscountType()=="amount"){ 
                $discAmount=$promocode->getDiscountValue();
            }else{
                $discAmount=($customerOrder->getActualAmount() * $promocode->getDiscountValue())/100;
            }
            if($customerOrder->getActualAmount() < $discAmount){
                $result['promoError']=true;
                $result['promoErrorData'][]="Invalid promocode status";
            }else{
                if($result['promoError']==false){
                    $result['promoAmount']=$discAmount;
                    $customerOrder->setPromocode($promocode->getPromoCode());
                    $customerOrder->setTotalDiscount($discAmount);
                } 
            }
        }
        $minOrderAmount=0;
        $deliveryCharge=0;
        $taxRate=5;
        $taxType='inclusive';
        $serviceFee=0;
        if($restaurant instanceof Restaurants){
            $minOrderAmount=$restaurant->getMinOrderAmount();
            $deliveryCharge=$restaurant->getDeliveryCharge();
            $taxRate=$restaurant->getTax();
            $taxType=$restaurant->getTaxType();
            $serviceFee=$restaurant->getServiceFee();
        }
        $tax=($taxRate * $customerOrder->getActualAmount())/100;
        $customerOrder->setTotalTax($tax);

        if($customerOrder->getActualAmount()<$minOrderAmount){
            $customerOrder->setDeliveryCharge($deliveryCharge);
        }else{
            $customerOrder->setDeliveryCharge("0");
        }
        $totalAmount=$customerOrder->getActualAmount() + $customerOrder->getDeliveryCharge() - $customerOrder->getTotalDiscount();
        if($taxType=='exclusive'){
            $totalAmount=$totalAmount + $tax;
        }
        $customerOrder->setOrderAmount($totalAmount);

        //calculate appfoodra fee
        $payAmount=$customerOrder->getOrderAmount() * $serviceFee / 100;
        $customerOrder->setRestoAppFee($payAmount);
        $customerOrder->setRestPay($customerOrder->getOrderAmount() - $payAmount);

        $customerOrder->setOrderType($orderType);
        $customerOrder->setPaymentType(strtolower($paymentType));
        $customerOrder->setPaymentStatus("pending");
        $customerOrder->setOrderStatus("received");

        if($flag==false && $promoFlag==false){
            try{

                $em->persist($customerOrder);
                $em->flush();
                if($restaurant instanceof Restaurants){
                 $user=$em->createQueryBuilder()
                            ->select('customer','address')
                            ->from('AppBundle:Customer', 'customer')
                            ->leftJoin('customer.billingAddress','address')
                            ->andWhere('customer.apiKey = :customerId')
                            ->setParameter('customerId',$request->get('apiKey'))
                            ->getQuery()
                            ->getArrayResult();
                    // array of ForumUser objects
                            //for send email  to admin
             // $helper->sendOrderMessage($customerOrder);
         // $helper->sendOrderMessage("9632618670",5569595959);

                    //for send sms to user
                    $helper->decodeJson(json_encode($user),$customerOrder);

                }


                $result['data'][]="Successfully created one order";
                $this->walletAction($walletType,$walletBalance,$userId,$paymentType,'154545');

                $result['status']=true;
            }catch(\Exception $e){
                $result['data'][]=$e->getMessage();
            }
            $order=$em->createQueryBuilder()
                    ->select('customerOrder','item')
                    ->from('AppBundle:CustomerOrder','customerOrder')
                    ->leftJoin('customerOrder.customerOrderItems','item')
                    ->where('customerOrder.id = :orderId')
                    ->setParameter('orderId',$customerOrder->getId())
                    ->getQuery()
                    ->getArrayResult();
            if($order != []){
                $result['order']=$order[0];
            }
        }

        return $result;
    }

    public function getAllCategoriesAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $parentId=$request->get('parentId');
                $mode=$request->get('mode');

        $restaurant=null;
        if(!$helper->testNull($parentId)){ 
            
/*      $ratings =$em->createQueryBuilder()
                ->select('subcategory')
                ->from('AppBundle:SubCategory', 'subcategory')
            ->where('subcategory.parent_id = :parentId')
                    ->setParameter('parentId',$parentId)
                ->getQuery()
                ->getArrayResult();
*/
                  $ratings=$em->createQueryBuilder()
                    ->select('mainCat','menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:SubCategory', 'mainCat')
                    ->leftJoin('mainCat.menuItem','menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
  //                  ->where('menuItem.isActive = :truet')
//                    ->setParameter('truet',true)
                      ->where('mainCat.parent_id = :parentId')
                        ->setParameter('parentId',$parentId)
                      ->andwhere('priceVariation.status = :status')
                        ->setParameter('status','0')
                    ->orderby('mainCat.categoryName','DESC')
                    ->getQuery()
                    ->getArrayResult();

        
        }
        elseif($mode=='getAll')
            {
        $da=$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>NULL));     // print_r($menus);
        foreach ($da as $res) {
           
            $rat=$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>$res->getId()));
          $ratings[]=array('id'=>$res->getId(),'category_name'=>$res->getCategoryName(),'category_slug'=>$res->getCategorySlug(),'icon_image'=>$res->getIconImage(),'banner_image'=>$res->getBannerImage(),'SubCategory'=>$this->getSubcategoryByIdAction($res->getId()));
        }
            }
            else{
       $ratings = $em->createQueryBuilder()
                ->select('subcategory')
                ->from('AppBundle:SubCategory', 'subcategory')
            ->where('subcategory.parent_id is NULL')
                ->getQuery()
                ->getArrayResult();

              
        }

        
        
        $result['data']=$ratings;
        $result['status']=true;
        return $result;
    }
    public function getSubcategoryByIdAction($id)
    {
          $em = $this->getDoctrine()->getManager();
   $da=$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>$id));
   foreach ($da as $res) {
          $ratings[]=array('id'=>$res->getId(),'category_name'=>$res->getCategoryName(),'category_slug'=>$res->getCategorySlug(),'icon_image'=>$res->getIconImage(),'banner_image'=>$res->getBannerImage());
         
      }
       return $ratings;
    }
    
public function getAllCategoriesIdAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $parentId=$request->get('parentId');
        $re=$em->getRepository('AppBundle:SubCategory')->findBy(array("parent_id"=>$parentId));

        $result['data']=$re;
        $result['status']=true;
        return $result;
    }
     //for providing customer side operations
    public function listProductsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $restList=$em->createQueryBuilder()
                    ->select('menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:MenuItem', 'menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
                    ->orderby('menuItem.itemName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;

        return $result;
    }


   public function searchProductAllAction(Request $request){
    $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
    $searchProduct=$request->get('item_name');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $restList=$em->createQueryBuilder()
                    ->select('menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:MenuItem', 'menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
            ->where('menuItem.itemName  LIKE :product')
            ->setParameter('product', '%'.$searchProduct.'%')
                    ->orderby('menuItem.itemName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;

        return $result;
   }

  public function addShoppingListsAction(Request $request){
    $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
    $searchProduct=$request->get('item_name');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $restList=$em->createQueryBuilder()
                    ->select('menuItem','extraPackage','packageExtras','category','priceVariation')
                    ->from('AppBundle:MenuItem', 'menuItem')
                    ->leftJoin('menuItem.extraPackage','extraPackage')
                    ->leftJoin('extraPackage.packageExtras','packageExtras')
                    ->leftJoin('menuItem.category','category')
                    ->leftJoin('menuItem.priceVariation','priceVariation')
            ->where('menuItem.itemName  LIKE :product')
            ->setParameter('product', '%'.$searchProduct.'%')
                    ->orderby('menuItem.itemName','DESC')
                    ->getQuery()
                    ->getArrayResult();
        $result['data']=$restList;

        return $result;
   }

   public function myShoppingListsAction(Request $request){
    $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }


    $shoppingListName=$em->createQueryBuilder()
                    ->select('shoppingListsName')
                    ->from('AppBundle:ShoppingListsName', 'shoppingListsName')
            ->where('shoppingListsName.customer = :customerId')
            ->setParameter('customerId',$customer->getId())
                    ->getQuery()
                    ->getArrayResult();
    if(empty($shoppingListName)){
        $result['data']=$shoppingListName;
        return $result;
    }
    
    $myListDetails = array();
    $i=0;
    foreach($shoppingListName as $listName){
        $myListDetails[$i]['shopping_list_id'] = $listName['id'];
        $myListDetails[$i]['shopping_list_name'] = $listName['name'];
        // $listDetails=$em->createQueryBuilder()
        //         ->select('shoppingLists','menuItem')
        //         ->from('AppBundle:ShoppingLists', 'shoppingLists')
        //         ->leftJoin('shoppingLists.item','menuItem')

        //         ->where('shoppingLists.listname = :listnameId')
        //     ->setParameter('listnameId',)
        //         ->getQuery()
        //         ->getArrayResult(); 
   $sql="SELECT b.*,c.* FROM `shopping_lists` as a join menu_item as b on a.item_id=b.id join price_variation as c on a.variation=c.id where a.listname_id=".$listName['id']."";
           $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();
  
  $listDetails=$stmt->fetchAll();
        $myListDetails[$i]['shopping_list_details'] = $listDetails;
     $i++;
    }
        

        $result['data']=$myListDetails;

        return $result;



        
   }


public function getAllShoppingListsAction(Request $request){
    $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=true;
        $result['data']=[];

        $apiKey=$request->get('apiKey');
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }


    $shoppingListName=$em->createQueryBuilder()
                    ->select('shoppingListsName')
                    ->from('AppBundle:ShoppingListsName', 'shoppingListsName')
            ->where('shoppingListsName.customer = :customerId')
            ->setParameter('customerId',$customer->getId())
                    ->getQuery()
                    ->getArrayResult();
    
    

        $result['data']=$shoppingListName;

        return $result;



        
   }


   public function addItemToListAction(Request $request){ 

    $em = $this->getDoctrine()->getManager();

        $helper=$this->container->get('function_helper');
        
    $result['status']=false;
        $result['data']=[];
        $edit=false;

        $apiKey=$request->get('apiKey');
        $itemId=$request->get('item_id');
          $variation=$request->get('var_id');
        $listId=$request->get('list_id');
    $qty = $request->get('qty');
    if($helper->testNull($itemId)){ 
        $result['data'][]='Invalid Item Id';
        return $result;
    }
        if($helper->testNull($listId)){ 
        $result['data'][]='Invalid listId';
        return $result;
    }
    

    $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }
    
    $restList=$em->createQueryBuilder()
                    ->select('menuItem')
            ->from('AppBundle:MenuItem', 'menuItem')
                ->where('menuItem.id = :product')
            ->setParameter('product', $itemId)
                    ->getQuery()
                    ->getArrayResult();

    $itemsData = explode(',',$itemId);

    

    if(is_array($itemsData)){
         foreach($itemsData as $item){
                   $menuItem=$em->getRepository('AppBundle:MenuItem')->find( $item);            
                if(!($menuItem instanceof MenuItem)){ 
                $result['data'][]='Invalid Item Id '.$item;
                return $result;
                }

        }
    }
    

    $list=$em->getRepository('AppBundle:ShoppingListsName')->find($listId);
            
        if(!($list instanceof ShoppingListsName)){ 
        $result['data'][]='Invalid List id';
        return $result;
        }

     foreach($itemsData as $item){
            $menuItem=$em->getRepository('AppBundle:MenuItem')->find( $item);
            $shoppingLists=new ShoppingLists();
            $shoppingLists->setCustomerId($customer);
            $shoppingLists->setItemId($menuItem);
            $shoppingLists->setVariation($variation);
            $shoppingLists->setQty($qty);
            $shoppingLists->setListNameId($list);
                try
                {
                $em->persist($shoppingLists);
                $em->flush();
                }
                catch(\Exception $e){
                $result['data']=$e->getMessage();
                return $result;
                }



        }
    $result['status']=true;
    $result['data']='Items added to list successfully';
    
    
        return $result; 
   }

   public function createListAction(Request $request){ 

    $em = $this->getDoctrine()->getManager();

        $helper=$this->container->get('function_helper');
        
    $result['status']=false;
        $result['data']=[];
        $edit=false;

        $apiKey=$request->get('apiKey');
        $listName=$request->get('list_name');
      
    if($helper->testNull($listName)){ 
        $result['data'][]='Please enter list name';
        return $result;
    }
       

    $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }
    
    
    $shoppingLists=new ShoppingListsName();
        
    $shoppingLists->setCustomer($customer);
    $shoppingLists->setName($listName);
            try{
                $em->persist($shoppingLists);
                $em->flush();
        $result['status']=true;
                $result['data']='List added successfully';
                    $result['id']=$shoppingLists->getId();  


         }catch(\Exception $e){
                $result['data']=$e->getMessage();
            }


        return $result; 
   }

public function deliveryStatusAction(Request $request)
{
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');

           $order=$request->get('id');
           $mobile=$request->get('mobile');
              $status=$request->get('status');
               // $data=$em->getRepository('AppBundle:Customer')->findById($user);

              if($status=='1')
              {
                $orderStatus='onway';
                 $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
                $helper->sendStatus($mobile,'Your order #'.$order.' is on the way.');
              }
       if($status=='2')
              {
                $orderStatus='cancelled';
                  $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
                  // $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',paymentStatus='paid' where id='$order'");
              }
              if($status=='3')
              {
               $orderStatus='returned';
                 $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
              }
               if($status=='4')
              {
               $orderStatus='delivered';
                $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',paymentStatus='paid' where id='$order'");
                 $helper->sendStatus($mobile,'Your order #'.$order.'  is delivered. Thank you for choosing us!');
              }
if($q)
{
$res=array("status"=>200);
}
else
{
$res=array("status"=>400);

}
      return $res; 
}
    public function removeItemFromListAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $shoppingListId=$request->get('shopping_list_id');

         //authentication
         $apiKey=$request->get('apiKey');

         $apiResult=$helper->authenticateCustomer($apiKey);
         if($apiResult['data']==[]){
             $customer=$apiResult['customer'];
         }else{
             $result['data']=$apiResult['data'];
             return $result;
         }
     

        if($shoppingListId!=null){
            $edit=true;
            $shoppingList=$em->getRepository('AppBundle:ShoppingLists')->find($shoppingListId);
            if($shoppingList==null){
                $result['data'][]="Invalid Shopping list id";
            }else{
                $em->remove($shoppingList);
                $em->flush();
                $result['status']=true;
                $result['data'][]="Item removed successfully";
            }
        }else{
            $result['data'][]="Invalid Shopping list id";
        }
        return $result;
    }

 public function removeShoppingListAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $helper=$this->container->get('function_helper');
        $result['status']=false;
        $result['data']=[];
        $shoppingListId=$request->get('shopping_list_id');

         //authentication
         $apiKey=$request->get('apiKey');

         $apiResult=$helper->authenticateCustomer($apiKey);
         if($apiResult['data']==[]){
             $customer=$apiResult['customer'];
         }else{
             $result['data']=$apiResult['data'];
             return $result;
         }
     
        if($shoppingListId!=null){
            $edit=true;
            $shoppingList=$em->getRepository('AppBundle:ShoppingListsName')->find($shoppingListId);
            if($shoppingList==null){
                $result['data'][]="Invalid Shopping list id";
            }else{
                $em->remove($shoppingList);
                $em->flush();
                $result['status']=true;
                $result['data'][]="shopping list removed successfully";
            }
        }else{
            $result['data'][]="Invalid Shopping list id";
        }
        return $result;
    }

    public function walletAction($walletType,$walletBalance,$userId,$paymentType,$customerOrder)
    {
        //add money to wallet
 $em = $this->getDoctrine()->getManager();
 $re=$em->getRepository('AppBundle:Wallet')->findByUser($userId);
  foreach ($re as $da)
    {
    $prepaid=$da->getPrepaid();
    $postpaid=$da->getPostpaid();
     $duration=$da->getDuration();
    if($walletType==0)
    {
    $amount=$prepaid-$walletBalance;
      $time=date('H-i a');

    $em->getConnection()->exec( "update wallet set prepaid='$amount' where user='$userId'");
     $this->addWalletLogsAction($userId,$walletBalance,0,date('d-m-Y'),$amount,$customerOrder,$walletType,'0',$time,$paymentType);

    }
    if($walletType==1)
    {
    $amount=$postpaid-$walletBalance;
    $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$userId'");
  $time=date('H-i a');
   $this->addWalletLogsAction($userId,$walletBalance,0,date('d-m-Y'),$amount,$customerOrder,$walletType,'0',$time,$paymentType);
   $this->addDuesAction($walletBalance,$amount,date('d-m-Y'),$duration,$userId,$customerOrder,'0');

    }
    }
}
// //function to create logs
public function addWalletLogsAction($ref,$debit,$credit,$date,$total,$note,$type,$status,$time,$mode)
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
//function for add due
function addDuesAction($credits,$amount,$date,$duration,$id,$note,$status)
{
  $em = $this->getDoctrine()->getManager();
  $wallet = new WalletDue();
  $wallet->setStatus($status);
  $wallet->setDate($date);
    $wallet->setUser($id);
  $wallet->setBalance($credits);
  $wallet->setPaid(0);
  $wallet->setRef($id);
  $wallet->setDueDate($duration);
  $wallet->setNote($credits);

  $em->persist($wallet);
  $em->flush();
}
public function getUserdataAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $id=$request->get('id');
  $data=$em->getRepository('AppBundle:Customer')->findById($id);

  return $data;
}
public function updateProfileAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $id=$request->get('id');
  $name=$request->get('name');
  $email=$request->get('email');
 $em->getConnection()->exec("update customer set username='$name',email='$email' where 1 and id='$id'");
 return array("status"=>0);
}
public function getNewOrderAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $id=$request->get('id');
  $data=$em->getRepository('AppBundle:Customer')->findById($id);

}
//add new return
public function newReturnAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $customerId=$request->get('customerId');
  $itemId=$request->get('itemId');
  $date=$request->get('date');
  $time=$request->get('time');
  $reason=$request->get('reason');
  $note=$request->get('note');
  $address=$request->get('address');
  $ref=mt_rand(10000,99999);

    $return = new StockReturn();
    $return->setCustomerId($customerId);
    $return->setReason($reason);
    $return->setNote($note);
    $return->setStatus(0);
    $return->setAddress($address);
    $return->setDate($date);
    $return->setRef($ref);
    $return->setDeliveryTime($time);
    $return->setAddedTime(date('d-m-Y H:i A'));
    $return->setMode($mode);
    $em->persist($return);
    $em->flush();
$items=json_decode($itemId);
    foreach($items as $item)
    {
    $logs = new ReturnLogs();
    $logs->setItemId($item->itemId);
    $logs->setQty($item->qty);
    $logs->setStatus(0);
    $logs->setref($ref);
    $em->persist($logs);
    $em->flush();  
    }
    return $data=array("status"=>200);
}
//////////////////////////////////////////////////////////////////////////
}

