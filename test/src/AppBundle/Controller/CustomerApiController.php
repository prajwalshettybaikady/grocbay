<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\BillingAddress;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CustomerApiController extends Controller
{
    public function addPrimaryLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();   
        $connection = $em->getConnection();
        $latitude=$request->get('latitude');
        $longitude=$request->get('longitude');
        $area=$request->get('area');
        $id=$request->get('id');
        $branch=$request->get('branch');

        $stmt = $connection->prepare("update customer set latitude='$latitude',longitude='$longitude',area='$area',branch='$branch' where id='$id'");
        $query=$stmt->execute();
        if($query)
        {
            $result['data']=true;
        }
        else
        {
           $result['data']=false;
       }
       return $result;
   }
   public function preRegisterAction(Request $request)
   {
    $em = $this->getDoctrine()->getManager();
    $result['status']=false;
    $result['data']=[];
    $result['type']="new";
    $edit=false;
        //receive the data
    $mobileNumber=$request->get('mobileNumber');
    $tokenId=$request->get('tokenId');
    $signature=$request->get('signature');
    $helper=$this->container->get('function_helper');
        // if($helper->testMobile($mobileNumber)){ $result['data'][]="Invalid mobile number"; }

    if($result['data'] == []){
       
        $customer=$em->getRepository('AppBundle:Customer')->findByMobileNumber($mobileNumber);
        $result['status']=true;
        if($mobileNumber=='9876543210')
        {
           $otp = 5555; 
       }
       else
       {
        $otp = mt_rand(1000,9999);
    }
    
            // 
    $session = $request->getSession();
    $session->set($mobileNumber,$otp);
    $result['data']['otp']=$otp;
    $re= $helper->sendOtp($mobileNumber,$otp,$signature);
    if($customer!=[]){
        $customer=$customer[0];
        $result['type']="old";
        if($customer->getIsActive()){
            $result['active']=true;
        }else{
            $result['active']=false;
        }
        $uniqueId=uniqid('customer',true);
        $customer->setApiKey($customer->getId());
        $customer->setOtp($otp);
        if($tokenId!=null){
            $customer->setRegistrationKey($tokenId);
        }
        $result['data']['apiKey']=$customer->getApiKey();
        $result['data']['userID']=$customer->getId();
        $result['data']['apple']=$customer->getPath();
        $result['data']['email']=$customer->getEmail();
        $result['data']['mobile']=$customer->getMobileNumber();
        $result['data']['name']=$customer->getUsername();
        $result['data']['membership']=$customer->getMembership();
        $result['data']['latitude']=$customer->getLatitude();
        $result['data']['longitude']=$customer->getLongitude();
        $result['data']['branch']=$customer->getBranch();

        $em->flush();
    }
}
return $result;
}
public function emailCheckAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $email=$request->get('email');
  $connection=$em->getConnection();

          // $customer=$em->getRepository('AppBundle:Customer')->findByEmail($mobileNumber);

  $statement = $connection->prepare("SELECT * FROM `customer` where  email='$email'");
  $statement->execute();
  $menus = $statement->fetchAll();
  $result['status']=true;
  if(count($menus)!=0)
  {
    $result['type']="old";
    
}
else
{
 $result['type']="new";
}
return $result;
}
public function mobileCheckAction(Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $mobileNumber=$request->get('mobileNumber');
  $customer=$em->getRepository('AppBundle:Customer')->findByMobileNumber($mobileNumber);
  $result['status']=true;
  if($customer!=[]){
    $result['type']="old";
    
}
else
{
 $result['type']="new";
}
return $result;
}

public function emailLoginAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $result['status']=false;
    $result['data']=[];
    $result['type']="new";
    $edit=false;
        //receive the data
    $mobileNumber=$request->get('email');
    $tokenId=$request->get('tokenId');
    $apple=$request->get('apple');
    $helper=$this->container->get('function_helper');

        // if($helper->testEmail($mobileNumber)){ $result['data'][]="Invalid Email id"; }

    if($result['data'] == []){
       


        if (filter_var($mobileNumber, FILTER_VALIDATE_EMAIL)) {
         $customer=$em->getRepository('AppBundle:Customer')->findByEmail($mobileNumber);

     } else {
         $customer=$em->getRepository('AppBundle:Customer')->findByPath($mobileNumber);

     }

     $result['status']=true;
     if($mobileNumber=='9876543210')
     {
       $otp = 5555; 
   }
   else
   {
    $otp = mt_rand(1000,9999);
}
            // $otp = 5555;
            // $session = $request->getSession();
            // $session->set($mobileNumber,$otp);
            // $result['data']['otp']=$otp;
            // $helper->sendOtp($mobileNumber,$otp);
if($customer!=[]){
    $customer=$customer[0];
    $result['type']="old";
    if($customer->getIsActive()){
        $result['active']=true;
    }else{
        $result['active']=false;
    }
    $uniqueId=uniqid('customer',true);
    $customer->setApiKey($customer->getId());
    $customer->setOtp($otp);
    if(isset($apple))
    {
        $customer->setPath($apple);                
    }
    if($tokenId!=null){
        $customer->setRegistrationKey($tokenId);
    }
    if (filter_var($mobileNumber, FILTER_VALIDATE_EMAIL)) {
     $customers=$em->getRepository('AppBundle:Customer')->findByEmail($mobileNumber);

 } else {
     $customers=$em->getRepository('AppBundle:Customer')->findByPath($mobileNumber);
 }
 $customers=$customers[0];
 $result['data']['apiKey']=$customers->getApiKey();
 $result['data']['userID']=$customers->getId();
 $result['data']['apple']=$customers->getPath();
 $result['data']['email']=$customers->getEmail();
 $result['data']['mobile']=$customers->getMobileNumber();
 $result['data']['name']=$customers->getUsername();
 $result['data']['membership']=$customers->getMembership();
 $result['data']['latitude']=$customers->getLatitude();
 $result['data']['longitude']=$customers->getLongitude();
 $result['data']['branch']=$customers->getBranch();
 $em->flush();
}
}

return $result;
}
public function get_client_ip() {
  $ipaddress = '';
  if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if(isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
      $ipaddress = 'UNKNOWN';
  return $ipaddress;
}


public function resendOtpAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $result['status']=false;
    $result['data']=[];
        //receive the data
    $resOtp=$request->get('resOtp');
    $mobileNumber=$request->get('mobileNumber');
    $signature=$request->get('signature');
    $helper=$this->container->get('function_helper');

    // if($helper->testMobile($mobileNumber)){ $result['data'][]="Invalid mobile number"; }

    if($result['data'] == []){
        $helper->sendOtp($mobileNumber,$resOtp,$signature);
        $result['data'][]="resent successfully";
        $result['status']=true;
    }
    return $result;
}
public function resendOtp30Action(Request $request){
    $em = $this->getDoctrine()->getManager();
    $result['status']=false;
    $result['data']=[];
        //receive the data
    $resOtp=$request->get('resOtp');
    $mobileNumber=$request->get('mobileNumber');
    $helper=$this->container->get('function_helper');

    // if($helper->testMobile($mobileNumber)){ $result['data'][]="Invalid mobile number"; }

    if($result['data'] == []){
        $helper->sendOtpSms($mobileNumber,$resOtp);
        $result['data'][]="resent successfully";
        $result['status']=true;
    }
    return $result;
}
public function resendOtpCallAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $result['status']=false;
    $result['data']=[];
        //receive the data
    $resOtp=$request->get('resOtp');
    $mobileNumber=$request->get('mobileNumber');
    $helper=$this->container->get('function_helper');

    // if($helper->testMobile($mobileNumber)){ $result['data'][]="Invalid mobile number"; }

    if($result['data'] == []){
        $helper->sendOtpCall($mobileNumber,$resOtp);
        $result['data'][]="resent successfully";
        $result['status']=true;
    }
    return $result;
}
public function registerAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $result['status']=false; 
    $result['data']=[];
    $edit=false;
    $helper=$this->container->get('function_helper');

        //receive the data
    $username=$request->get('username');
    $email=$request->get('email');
    $path=$request->get('path');
    $mobileNumber=$request->get('mobileNumber');
    $tokenId=$request->get('tokenId');
    $branch=$request->get('branch');
    $id=$this->get_client_ip();
    $date=date('d-m-Y');
    $device='Android';
        $channel='Android';  // replace with request channel
        $helper=$this->container->get('function_helper');
        $customer=new Customer();
        
        $helper=$this->container->get('function_helper');

        if($helper->testNull($username)){ $result['data'][]="Invalid user name"; }
        // if($helper->testMobile($mobileNumber)){ $result['data'][]="Invalid mobile number"; }
        // if($helper->testOptionalEmail($email)){ $result['data'][]="Invalid email"; }
        if($result['data'] == []){
            $customer->setUsername($username);
            $customer->setEmail($email);
            $customer->setPath($path);
            $customer->setBranch($branch);
            $customer->setIp($id);
            $customer->setCreatedDate($date);
            $customer->setDevice($device);
            $customer->setChannel($channel);
            $customer->setMobileNumber($mobileNumber);
            $uniqueId=uniqid('customer',true);
            $customer->setApiKey(0);
            $customer->setMembership('0');
           // $helper->sendemailtocustomer($email,$username);

            if($tokenId!=null){
                $customer->setRegistrationKey($tokenId);
            }

            try{
                $em->persist($customer);
                $em->flush();
                $result['status']=true;
                $result['userId']=$customer->getId();
                $result['data']['apiKey']=$customer->getId();
                $result['membership']=$customer->getMembership();

                $key=$customer->getId();
                $em->getConnection()->exec("update customer set apiKey='$key' where 1 and id='$key'");

            }catch(\Exception $e){
                $result['data'][]=$e->getMessage();
            }
        }

        return $result;
    }

    
    public function changePasswordAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']="";
        $apiKey=$request->get('apiKey');
        $helper=$this->container->get('function_helper');
        $customer=null;
        $apiResult=$helper->authenticateCustomer($apiKey);
        if($apiResult['data']==[]){
            $customer=$apiResult['customer'];
        }else{
            $result['data']=$apiResult['data'];
            return $result;
        }

        $password=$request->get('password');

        if($password!=null):
            if($customer->getIsActive()){
                $uniqueId=uniqid('customer',true);
                $customer->setApiKey($customer->getId());
                $customer->setPassword($password);
                $em->flush();
                $result['status']=true;
                $result['data'][]=$uniqueId;
            }
            else
            {
                $result['data'][]="Account disabled";
            }
        else:
            $result['data'][]="Invalid password";
        endif;

        return $result;
    }

    
    public function verifyMobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result['status']=false;
        $result['data']=[];
        $mobileNumber = $request->get('mobileNumber');
        if($mobileNumber!=null){
            $customer=$em->getRepository('AppBundle:Customer')->findByMobileNumber($mobileNumber);
            if($customer==[]){
                $result['data'][]="Please provide valid mobile number";
            }else{
                $customer=$customer[0];
                $uniqueId=uniqid('reset',true);
                $customer->setApiKey($customer->getId());
                if($mobileNumber=='9876543210')
                {
                   $otp = 5555; 
               }
               else
               {
                $otp = mt_rand(1000,9999);
            }
            
            // $otp = 5555;
            $customer->setOtp($otp);
            $em->flush();
            $result['data']['apiKey']=$uniqueId;
            $result['data']['otp']=$otp;
            $result['status']=true;
        }
    }else{
        $result['data'][]="Please provide valid mobile number";
    }
    return $result;
}


public function addAddressAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $helper=$this->container->get('function_helper');
    $result['status']=false;
    $result['data']=[];
    $edit=false;

        //receive data
    $addressType=$request->get('addressType');
    $fullName=$request->get('fullName');
    $address=$request->get('address');
    $lattittude=$request->get('latitude');
    $longitude=$request->get('longitude');
    $addressID=$request->get('addressId');
    $area=$request->get('area');

    $billingAddress=null;

    if($helper->testNull($addressType)){ $result['data'][]="Invalid address type"; }
    if($helper->testNull($fullName)){ $result['data'][]="Invalid full name"; }
    if($helper->testNull($address)){ $result['data'][]="Invalid address"; }
    if($helper->testNull($lattittude)){ $result['data'][]="Invalid lattittude"; }
    if($helper->testNull($longitude)){ $result['data'][]="Invalid longitude"; }

        //authentication
    $apiKey=$request->get('apiKey');

    $apiResult=$helper->authenticateCustomer($apiKey);
    if($apiResult['data']==[]){
        $customer=$apiResult['customer'];
    }else{
        $result['data']=$apiKey;
        return $result;
    }

        //address edit authorise
    if($addressID!=null){
        $edit=true;
        $billingAddress=$em->getRepository('AppBundle:BillingAddress')->find($addressID);
        if($billingAddress==null){
            $result['data'][]="Invalide address id";
            return $result;
        }
    }else{
        $billingAddress = new BillingAddress();
        $billingAddress->setCustomer($customer);
    }
    $billingAddress->setAddressType($addressType);
    $billingAddress->setFullName($fullName);
    $billingAddress->setAddress($address);
    $billingAddress->setLattitude($lattittude);
    $billingAddress->setLogingitude($longitude);
    $billingAddress->setExtraInfo($area);

    if($result['data']==[]){
        if(!$edit){
            $em->persist($billingAddress);
        }
        try{
            $em->flush();
            $result['data'][]="Address updated successfully";
            $result['addressId']=$billingAddress->getId();
            $result['status']=true;
        }catch(\Exception $e){
            $result['data'][]=$e->getMessage();
        }
    }
    return $result;
}


public function removeAddressAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $helper=$this->container->get('function_helper');
    $result['status']=false;
    $result['data']=[];
    $addressID=$request->get('addressId');

         //authentication
    $apiKey=$request->get('apiKey');

    $apiResult=$helper->authenticateCustomer($apiKey);
    if($apiResult['data']==[]){
     $customer=$apiResult['customer'];
 }else{
     $result['data']=$apiResult['data'];
     return $result;
 }
 

 if($addressID!=null){
    $edit=true;
    $billingAddress=$em->getRepository('AppBundle:BillingAddress')->find($addressID);
    if($billingAddress==null){
        $result['data'][]="Invalide address id";
    }else{
        $em->remove($billingAddress);
        $em->flush();
        $result['status']=true;
        $result['data'][]="Address removed successfully";
    }
}else{
    $result['data'][]="Invalide address id";
}
return $result;
}


public function getBasicProfileAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $helper=$this->container->get('function_helper');
    $result['status']=false;
    $result['data']=[];

         //authentication
    $apiKey=$request->get('apiKey');
    $customer=null;
    $apiResult=$helper->authenticateCustomer($apiKey);
    if($apiResult['data']==[]){
     $customer=$apiResult['customer'];
 }else{
     $result['data']=$apiResult['data'];
     return $result;
 }

 $user=$em->createQueryBuilder()
 ->select('customer','address')
 ->from('AppBundle:Customer', 'customer')
 ->leftJoin('customer.billingAddress','address')
 ->andWhere('customer.id = :customerId')
 ->setParameter('customerId',$customer->getId())
 ->getQuery()
 ->getArrayResult();
 if($user!=[]){
    $result['data'][]=$user[0];
    $result['status']=true;
}else{
    $result['data'][]='something went wrong';
}
return $result;
}

public function getOrderListAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $helper=$this->container->get('function_helper');
    $result['status']=false;
    $result['data']=[];

        //receive the restaurant orders
    $status=$request->get('status');
    $customer=null;
    $apiKey=$request->get('apiKey');
    $apiResult=$helper->authenticateCustomer($apiKey);
    if($apiResult['data']==[]){
        $customer=$apiResult['customer'];
    }else{
        $result['data']=$apiResult['data'];
        return $result;
    }

    if($result['data']!=[]){
        return $result;
    }

    $order=$em->createQueryBuilder()
    ->select('customerOrder','item','customer')
    ->from('AppBundle:CustomerOrder', 'customerOrder')
    ->leftJoin('customerOrder.customer','customer')
    ->leftJoin('customerOrder.customerOrderItems','item')
    ->where('customer.id = :customerId')
    ->setParameter('customerId',$customer->getId());

    $order=$order->orderBy('customerOrder.orderDate','DESC')
    ->getQuery()
    ->getArrayResult();
    $result['status']=true;
    if(count($order)==0)
    {
        $data=array();
    }
    else
    {
        foreach ($order as $res) {
            $f=date_format($res['orderDate'],"d-m-Y").' at '.date_format($res['orderDate'],"h:i A");
            if($res['returnStatus']!='')
            {
                $status=$res['returnStatus'];
                $mode=0;
            }
            else
            {
             $status=$res['orderStatus'];
             $mode=1;
         }
         $data[]=array('note'=>$res['note'],'wallet'=>$res['wallet'],'loyalty'=>$res['loyalty'],'id'=>$res['id'],'orderDate'=>$f,'actualAmount'=>$res['actualAmount'],'totalTax'=>$res['totalTax'],'totalDiscount'=>$res['totalDiscount'],'orderAmount'=>$res['orderAmount'],'customerName'=>$res['customerName'],'address'=>$res['address'],'promocode'=>$res['promocode'],'orderType'=>$res['orderType'],'paymentType'=>$res['paymentType'],'paymentStatus'=>$res['paymentStatus'],'restPay'=>$res['restPay'],'fixtime'=>$res['fixdate'].'  '.$res['fixtime'],'fixdate'=>$res['fixdate'],'customer'=>$res['customer'],'customerOrderItems'=>$res['customerOrderItems'],'orderStatus'=>strtoupper($status),'deliveryCharge'=>$res['deliveryCharge'],"mode"=>$mode,"return"=>$this->returnLogs($res['id']));
     }
     
 }
 $result['data']=$data;
 return $result;
}

public function getSingleOrderListAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $helper=$this->container->get('function_helper');
    $result['status']=false;
    $result['data']=[];

        //receive the restaurant orders
    $id=$request->get('id');
    

    $order=$em->createQueryBuilder()
    ->select('customerOrder','item','customer')
    ->from('AppBundle:CustomerOrder', 'customerOrder')
    ->leftJoin('customerOrder.customer','customer')
    ->leftJoin('customerOrder.customerOrderItems','item')
    ->where('customerOrder.id = :customerId')
    ->setParameter('customerId',$id);

    $order=$order->orderBy('customerOrder.orderDate','DESC')
    ->getQuery()
    ->getArrayResult();
    $result['status']=true;
    if(count($order)==0)
    {
        $data=array();
    }
    else
    {
        foreach ($order as $res) {
            $f=date_format($res['orderDate'],"d-m-Y").' at '.date_format($res['orderDate'],"h:i A");
            if($res['returnStatus']!='')
            {
                $status=$res['returnStatus'];
                $mode=0;
            }
            else
            {
             $status=$res['orderStatus'];
             $mode=1;
         }
         $data[]=array('note'=>$res['note'],'wallet'=>$res['wallet'],'loyalty'=>$res['loyalty'],'id'=>$res['id'],'orderDate'=>$f,'actualAmount'=>$res['actualAmount'],'totalTax'=>$res['totalTax'],'totalDiscount'=>$res['totalDiscount'],'orderAmount'=>$res['orderAmount'],'customerName'=>$res['customerName'],'address'=>$res['address'],'promocode'=>$res['promocode'],'orderType'=>$res['orderType'],'paymentType'=>$res['paymentType'],'paymentStatus'=>$res['paymentStatus'],'restPay'=>$res['restPay'],'fixtime'=>$res['fixdate'].'  '.$res['fixtime'],'fixdate'=>$res['fixdate'],'customer'=>$res['customer'],'customerOrderItems'=>$res['customerOrderItems'],'orderStatus'=>strtoupper($status),'deliveryCharge'=>$res['deliveryCharge'],"mode"=>$mode,"return"=>$this->returnLogs($res['id']));
     }
     
 }
 $result['data']=$data;
 return $result;
}


public function returnLogs($id)
{
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
  $sql = $connection->prepare("SELECT * FROM `stock_return` where ref='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
  foreach ($row as $res) {
    return array("day"=>$row,"variation"=>$this->returnvar($id));
}
}
public function returnvar($id)
{
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
  $sql = $connection->prepare("SELECT a.*,b.itemname as item,b.priceVariavtion FROM `return_logs` as a join customer_order_items as b on a.itemId=b.id where a.ref='$id'");
  $sql->execute();
  $row = $sql->fetchAll();
  return $row;
}
public function getReturnsAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();
    $delivery=$request->get('delivery');
    $mode=$request->get('mode');
    $sql = $connection->prepare("SELECT a.*,b.username,b.mobileNo FROM `stock_return`  as a join customer as b on a.customerId=b.id  where a.deliveryBoy='$delivery' and a.status='$mode'");

    $sql->execute();
    $row = $sql->fetchAll();
    if(count($row)!=0)
    {
        foreach ($row as $res) {

            $data[]=array("ref"=>$res['ref'],"customerId"=>$res['customerId'],"address"=>$res['address'],"status"=>$res['status'],"deliveryBoy"=>$res['deliveryBoy'],"addedTime"=>$res['addedTime'],"date"=>$res['date'],"reason"=>$res['reason'],"note"=>$res['note'],"latitude"=>$res['latitude'],"longitude"=>$res['longitude'],"type"=>$res['type'],"username"=>$res['username'],"mobileNo"=>$res['mobileNo'],"items"=>$this->returnvar($res['ref']),"total"=>$this->returnTotal($res['ref']));
        } 
    }
    else
    {
      $data=array();
  }
  return $data;
}

public function returnTotal($id)
{
    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();
    $sql = $connection->prepare("SELECT a.*,b.itemname as item,b.priceVariavtion FROM `return_logs` as a join customer_order_items as b on a.itemId=b.id where a.ref='$id'");

    $sql->execute();
    $row = $sql->fetchAll();
    foreach($row as $ra)
    {

    }
}



}
