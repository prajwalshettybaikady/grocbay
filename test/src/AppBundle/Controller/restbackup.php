<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MenuItem;
use AppBundle\Entity\PriceVariation;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletDue;
use AppBundle\Entity\WalletLogs;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\ExtraPackage;
use AppBundle\Entity\PackageExtras;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class RestaurantController extends Controller
{

//////////////////////////////////////////////////////
    public function loginAction(Request $request){
        return $this->render('AppBundle:Restaurant:User/login.html.twig');
    }

    public function dashboardAction(Request $request){
        return $this->render('AppBundle:Restaurant:User/dashboard.html.twig');
    }
    public function getCatAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $id = $request->request->get('data');
$out=$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>$id));     // print_r($menus);
          foreach ($out as $res) {
            $da=$res->getCategoryName();
            $id=$res->getId();
    
       $data[]=array('id'=>$id,'value'=>$da);


          }
           return new jsonresponse($data);
    }
        public function getDelAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();
$out=$em->getRepository('AppBundle:User')->findBy(array('userType' =>'Delivery','isActive'=>1)); 
// print_r($menus);
          foreach ($out as $res) {
            $da=$res->getFirstName();
            $id=$res->getId();
    
       $data[]=array('id'=>$id,'value'=>$da);


          }
           return new jsonresponse($data);
    }
/////////////////////////////////////////////
//main ajax
      public function mainAjaxAction(Request $request)
    {
 $em = $this->getDoctrine()->getManager();



}
/////////////////////////////////////////////
//main ajax
      public function addDurationPostpaidAction(Request $request)
    {
$em = $this->getDoctrine()->getManager();
$user = $request->request->get('userID');
$duration = $request->request->get('drop');
 $em->getConnection()->exec( "update wallet set duration='$duration' where 1 and user='$user'");
 return 0;
}
/////////////////////////////////////////////
//main ajax
      public function blockDurationPostpaidAction(Request $request)
    {
$em = $this->getDoctrine()->getManager();
$user = $request->request->get('userID');
$status = $request->request->get('status');
 $em->getConnection()->exec( "update wallet set status='$status' where 1 and user='$user'");
 return new response(0);
}
    //ajax
    public function variationAjaxAction(Request $request)
    {
 $em = $this->getDoctrine()->getManager();

$main = $request->request->get('main');
 $objj=json_decode($main);
  $gst=$objj->gst;
  $itemmrp=$objj->itemmrp;
  $itemdiscount=$objj->itemdiscount;
   $productID=$objj->productID;
  $itemName=$objj->itemName;
  $em->getConnection()->exec( "update price_variation set status='1' where 1 and menu_item_id='$productID'");
  $squery=$em->getRepository('AppBundle:MenuItem')->findById($productID);
foreach ($squery as $st) 
{
$itemtotalstock=$st->getTotalQty();
}
  $itemstock=$objj->itemstock;
  if($itemstock=='' || $itemstock=='0')
  {
    $itemstock=0;
  }
$finalitemstock=intval($itemstock)+intval($itemtotalstock);
///update data
$em->getConnection()->exec( "update menu_item set itemName='$itemName',totalQty='$finalitemstock',salePrice='$itemmrp',regularPrice='$itemdiscount',salesTax='$gst' where id='$productID'" );


 ///////////////////////////
$data = $request->request->get('data');
 $objs=json_decode($data);
foreach($objs as $obj)
{
 $productID=$obj->productID;
  $itemName=$obj->itemName;
 $variationID=$obj->id;
 $variationName=$obj->variationName;
 $type=$obj->type;
  $mrp=$obj->mrp;
  $discount=$obj->discount;
  $priority=$obj->priority;
  $qty=$obj->qty;
  $max=$obj->max;
  $min=$obj->min;

if($type=='v')
{
$menus=$em->getRepository('AppBundle:MenuItem')->find($productID);
 if($menus instanceof MenuItem){
    $ress=$menus->getId();
    $product = new PriceVariation();
    $product->setVariationName($variationName);
    $product->setPrice($discount);
    $product->setMrp($mrp);
    $product->setStock($qty);
    $product->setMenuItem($menus);
    $product->setPriority($priority);
    $product->setStatus('0');
    $product->setMaxItem($max);
     $product->setMinItem($min);
    $em->persist($product);
    $em->flush();
    }
$data='0';
}
else
{
 $ssquery=$em->getRepository('AppBundle:PriceVariation')->findById($variationID);
foreach ($ssquery as $sst) 
{
$sitemtotalstock=$sst->getStock();
}
  if($qty=='' || $qty=='0')
  {
    $qty=0;
  }
$sfinalitemstock=intval($qty)+intval($sitemtotalstock);
  $em->getConnection()->exec( "update price_variation set status='0',variationName='$variationName',price='$discount',mrp='$mrp',priority='$priority',stock='$sfinalitemstock',maxItem='$max',minItem='$min' where id='$variationID' and menu_item_id='$productID'");

$data='0';
}
}
return new JsonResponse($data);
    }


    //public function add variation data
    public function addVariationDataAction($name,$price,$mrp,$stock,$menuID,$priority)
    {
    $entityManager = $this->getDoctrine()->getManager();
    $product = new PriceVariation();
    $menuItem = new MenuItem();

    $product->setVariationName($name);
    $product->setPrice($price);
    $product->setMrp($mrp);
    $product->setStock($stock);
    $z=$menuItem->getId($menuID);
    $product->setMenuItem($z);

    $product->setPriority($priority);

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $entityManager->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    // $entityManager->flush();

    return new JsonResponse($itemstock);
    }
//////////////////////////////////////////////
public function menuCategoryAction(Request $request)
{
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:SubCategory')->findAll();
   
        return $this->render('AppBundle:Restaurant:Menu/dropDown.html.twig',array(
            'menuItems' => $menus
        ));
 }
 public function importCSVAction(Request $request)
  {
$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();

$fn=$_FILES["file"]["tmp_name"];
$file = fopen($fn, "r");
$count=1;
 while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
 // print_r($column);

$item_name=$column[0]; 
$type=$column[1]; 
$category=$column[2]; 
$image=$column[3]; 
$tax=$column[4]; 
$brand=$column[5]; 
$variation_name=$column[6]; 
$mrp=$column[7]; 
$discounted_price=$column[8]; 
$membership_mrp=$column[9]; 
$tax=$column[10]; 
$notify=$column[11]; 
$priority=$column[12]; 

//fucntion to check wheather item name is exist or not
$itemNameExist=$this->existAction("SELECT * FROM `menu_item` where itemName='$item_name'");
if($itemNameExist=='0')
{
//fucntion to check wheather item name is exist or not
$categoryExist=$this->existAction("SELECT * FROM `sub_category` where categoryName='$category'");

if($categoryExist!='0')
{
// $itemId=$this->rowgetidAction("SELECT * FROM `menu_item` where itemName='$item_name'");
 $catId=$this->rowgetidAction("SELECT * FROM `sub_category` where categoryName='$category'");
 $brandid=$this->rowgetidAction("SELECT * FROM `brands` where categoryName='$brand'");

// insert menu
// $insert=$em->getConnection()->exec("");

$stmt = $connection->prepare("INSERT INTO `menu_item`(`category_id`, `itemName`,`vegType`,`itemFeaturedImage`, `isActive`, `salesTax`,`brand`,`alert`) VALUES ('$catId','$item_name','$type','$image','0','$tax','$brandid','$notify')");
// $stmt->bindValue('v1', $v1);
// $stmt->bindValue('v2', $v2);
// $stmt->bindValue('v3', $v3);
$stmt->execute();

$id = $conn->lastInsertId();
$id = $em->lastInsertId();


    // then insert variation
   //fucntion to check wheather item name is exist or not
$variationExist=$this->existAction("SELECT * FROM `price_variation` where `price_variation`='$variation_name' and menu_item_id='$id'");
if($variationExist==0)
{
 // $this->addVariationDataAction($variation_name,$discounted_price,$mrp,'0',$id,$priority);
}


///////////////////////////////////////////////////////////////////////////////////////////////////
 
}
else
{
    //ignore
}

// SELECT * FROM `price_variation` where `price_variation`='' and menu_item_id=''
}
else
{
    //ignore
}




 $count++;
}  
        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig',array(
            'menuItems' => 1
        ));
  }

public function existAction($query)
{
$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$sql = $connection->prepare($query);
$sql->execute();
$row = $sql->fetchAll();
if(count($row)==0)
{
    return 0;
}
else
{
    return 1;
}

}
public function rowgetidAction($query)
{
$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$sql = $connection->prepare($query);
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {
    # code...
    return $res['id'];

}
}


public function bulkImportAction(Request $request)
{
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:SubCategory')->findAll();
   
        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig',array(
            'menuItems' => $menus
        ));
 }
public function bulkUpdateAction(Request $request)
{
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:SubCategory')->findAll();
   
        return $this->render('AppBundle:Restaurant:Menu/bulkUpdate.html.twig',array(
            'menuItems' => $menus
        ));
 }

 public function editBulkAction(Request $request)
{
    $id=$request->get('id');
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:MenuItem')->findByCategory($id);
  // print_r($menus);
        $test=$em->getRepository('AppBundle:MenuItem')->findByCategory($id);
          foreach ($menus as $res) {

        $da=$em->getRepository('AppBundle:MenuItem')->findById($res->getId());

          $data=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
foreach ($da as $du) 
{
    // $dat=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
    $dat=$em->getRepository('AppBundle:PriceVariation')->findBy( array('menuItem' =>$res->getId(),'status'=>0));

   
 $response[]=array('id'=>$du->getId(),'itemName'=>$du->getItemName(),'salesTax'=>$du->getSalesTax(),'totalQty'=>$du->getTotalQty(),'salePrice'=>$du->getSalePrice(),'regularPrice'=>$du->getRegularPrice(),'totalQty'=>$du->getTotalQty(),"variation"=>$dat);  

}
    

}

if(empty($menus)) 
{
   return $this->render('AppBundle:Restaurant:Menu/editBulk.html.twig',array(
            'menuItems' => '',"test"=>'',"dummy"=>''
        ));
}
else
{
 return $this->render('AppBundle:Restaurant:Menu/editBulk.html.twig',array(
            'menuItems' => $menus,"test"=>$data,"dummy"=>$response
        ));   
}
         
       
 }
  public function editBulkAjaxAction(Request $request)
{
    $id=$request->get('id');
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:MenuItem')->findByCategory($id);
  // print_r($menus);
        $test=$em->getRepository('AppBundle:MenuItem')->findByCategory($id);
          foreach ($menus as $res) {

        $da=$em->getRepository('AppBundle:MenuItem')->findById($res->getId());

          $data=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
foreach ($da as $du) 
{
    // $dat=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
    $dat=$em->getRepository('AppBundle:PriceVariation')->findBy( array('menuItem' =>$res->getId(),'status'=>0));

   
 $response[]=array('id'=>$du->getId(),'itemName'=>$du->getItemName(),'salesTax'=>$du->getSalesTax(),'totalQty'=>$du->getTotalQty(),'salePrice'=>$du->getSalePrice(),'regularPrice'=>$du->getRegularPrice(),'totalQty'=>$du->getTotalQty(),"variation"=>$dat);  

}
    

}

if(empty($data)) 
{
   return $this->render('AppBundle:Restaurant:Menu/ajax.html.twig',array(
            'menuItems' => $menus,"test"=>'',"dummy"=>''
        ));
}
else
{
 return $this->render('AppBundle:Restaurant:Menu/ajax.html.twig',array(
            'menuItems' => $menus,"test"=>$data,"dummy"=>$response
        ));   
}
         
       
 }
    public function addMenuItemAction(Request $request){
        $myExtend="Admin";
        $em = $this->getDoctrine()->getManager();
        $menuItem = new MenuItem();
        $form = $this->createForm('AppBundle\Form\MenuItemType', $menuItem);
        $form->handleRequest($request);

// print_r($form);
        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $menuItem->setItemSlug(str_replace(" ","-",strtolower($menuItem->getItemName())));
                if($menuItem->getItemFeaturedImageFile()!=null){
                    $menuItem->iconUpload();
                }
                $em->persist($menuItem);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"New item added sucessfully ");
                
            }catch(\Exception $e){
                $request->getSession()->getFlashBag()->add('error',$e->getMessage());
            }
        }

        return $this->render('AppBundle:Restaurant:Menu/addNew.html.twig',array(
            'form' => $form->createView(),
            'menuItem' => $menuItem,
            'myExtend' => $myExtend,
            'brands' =>$em->getRepository('AppBundle:Brands')->findAll(),
            'cat' =>$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>NULL))   


        ));
    }

    public function viewMenuItemAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:MenuItem')->findAll();

        return $this->render('AppBundle:Restaurant:Menu/viewMenu.html.twig',array(
            'menuItems' => $menus,
        ));
    }

    public function viewMenuItemDetailAction(Request $request, MenuItem $menuItem){
        $myExtend="Admin";
        $em = $this->getDoctrine()->getManager();
        $flag=false;
        $editId=$request->get('editId');
        if($editId!=null){
            $extraPackage=$em->getRepository('AppBundle:ExtraPackage')->find($editId);
            if($extraPackage instanceof ExtraPackage){
                $flag=true;
            }
        }
        
        $deleteId=$request->get('deleteId');
        if($deleteId!=null){
            $extraPackage=$em->getRepository('AppBundle:ExtraPackage')->find($deleteId);
            if($extraPackage instanceof ExtraPackage){
                $em->remove($extraPackage);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Extra package deleted suucessfully ");
                return $this->redirectToRoute('restaurant_view_single_menu_item',array('id'=>$menuItem->getId()));
            }
        }
        if($flag==false){
            $extraPackage = new ExtraPackage();
            $packageExtras = new PackageExtras();
            $extraPackage->addPackageExtra($packageExtras);
            $extraPackage->setMenuItem($menuItem);
        }
        $form = $this->createForm('AppBundle\Form\ExtraPackageType', $extraPackage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                if($flag==false){
                    $em->persist($extraPackage);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Extra package updated suucessfully ");
                return $this->redirectToRoute($redLink,array('id'=>$menuItem->getId()));
            }catch(\Exception $e){
                $request->getSession()->getFlashBag()->add('error',$e->getMessage());
            }
        }
        $extraPackages=$menuItem->getExtraPackage();
        return $this->render('AppBundle:Restaurant:Menu/viewItem.html.twig',array(
            'menuItem' => $menuItem,
            'form' => $form->createView(),
            'myExtend'=>$myExtend,
            'extraPackages' => $extraPackages,
            'flag'=>$flag
        ));
    }

    public function editMenuItemAction(Request $request, MenuItem $menuItem){
        $myExtend="Admin";
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('AppBundle\Form\MenuItemType', $menuItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $menuItem->setItemSlug(str_replace(" ","-",strtolower($menuItem->getItemName())));
                if($menuItem->getItemFeaturedImageFile()!=null){
                    if($menuItem->getItemFeaturedImage()!=null){
                        $menuItem->removeFeaturedImageUpload();
                    }
                    $menuItem->iconUpload();
                }
                $em->persist($menuItem);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Menu item Updated!");
                
            }catch(\Exception $e){
                $request->getSession()->getFlashBag()->add('error',$e->getMessage());
            }
        }

        return $this->render('AppBundle:Restaurant:Menu/addNew.html.twig',array(
            'form' => $form->createView(),
            'menuItem' => $menuItem,
            'myExtend'=>$myExtend,
            'brands' =>$em->getRepository('AppBundle:Brands')->findAll(),
            'cat' =>$em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' =>NULL))   
        ));
    }
///////////////////////////////////////////////////////////////////////////////////////////////
//function for add credits
    public function reccivePostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $ref = $request->get('id');
        $re=$em->getRepository('AppBundle:WalletDue')->findById($ref);
        foreach ($re as $da) {
        $bal=$da->getBalance();
   
        $amount=$bal-$credits;
        $em->getConnection()->exec( "update wallet_due set balance='$amount',paid='$credits' where id='$ref'");
        if($amount<0)
        {
        $em->getConnection()->exec( "update wallet_due set status='1' where id='$ref'");

        }
        $time=date('H-i a');
        $this->addWalletLogsAction($ref,0,$credits,date('d-m-Y'),$amount,'Added By MarketBhaav','0','0',$time,$mode);
        return new jsonresponse('0');
      }
      }
///////////////////////////////////////////////////////////////////////////////////////////////
//function for add credits
public function addCreditsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        // $data=$this->getBalanceAction($userID,'0',$em);
        $prepaidBalance=$this->getBalanceAction($userID,0,$credits,$mode,$note,'lamo');
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)
return new jsonresponse($prepaidBalance);
}

///////////////////////////////////////////////////////////////////////////////////////////////
//function for add credits
    public function addCreditsPostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        $duration = $request->get('duration');

        // $data=$this->getBalanceAction($userID,'0',$em);
        $prepaidBalance=$this->getBalanceAction($userID,1,$credits,$mode,$note,$duration);
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)

return new jsonresponse($prepaidBalance);

    }
///////////////////////////////////////////////////////////////////////////////////////////////
public function getBalanceAction($id,$type,$credits,$mode,$note,$duration)
{
    $em = $this->getDoctrine()->getManager();
    $re=$em->getRepository('AppBundle:Wallet')->findByUser($id);
    if(empty($re))
    {
   $addCredits=$this->addUserToWalletAction($id,$type,$credits,$mode);

    return $addCredits;
    }
    else
    {
    foreach ($re as $da) {
    $prepaid=$da->getPrepaid();
    $postpaid=$da->getPostpaid();
    if($type==0)
    {
    $amount=$prepaid+$credits;
    $em->getConnection()->exec( "update wallet set prepaid='$amount' where user='$id'");
    }
    else
    {
    $amount=$postpaid+$credits;
    $em->getConnection()->exec( "update wallet set postpaid='$amount' where user='$id'");
    // $this->addDuesAction($credits,$amount,date('d-m-Y'),$duration,$id,'Added By MarketBhaav',0);
    }
    $time=date('h-i a');
    $this->addWalletLogsAction($id,0,$credits,date('d-m-Y'),$amount,'Added By MarketBhaav',$type,'0',$time,$mode);
return $amount;
    }
    }
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
//functio to add credits
public function addUserToWalletAction($id,$type,$credits,$mode)
{
    $em = $this->getDoctrine()->getManager();
    $wallet = new Wallet();
    if($type==0)
    {
    $wallet->setPrepaid($credits);
    $wallet->setPostpaid(0);
    }
    else
    {
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
    $time=date('h-i a');
     $this->addWalletLogsAction($id,0,$credits,date('d-m-Y'),$credits,'Added By MarketBhaav',$type,'0',$time,$mode);
    return $id;
}
//function to create logs
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

/////////////////////////
// userWalletReport
public function userWalletReportAction()
{
$em = $this->getDoctrine()->getManager();

        $menus=$em->getRepository('AppBundle:Customer')->findAll();
   
        return $this->render('AppBundle:Admin:Customer/listUser.html.twig',array(
            'menuItems' => $menus
        ));

}
public function listDeliverySlotsAction(Request $request){
        // return $this->render('AppBundle:Admin:Pages/slots.html.twig');
            return $this->render('AppBundle:Restaurant:User/login.html.twig');
 
    }



//////////////////////////////////////////////////////////////////////////////////////////
}
