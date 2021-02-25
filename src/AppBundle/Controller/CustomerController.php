<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletLogs;
use AppBundle\Entity\WalletDue;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse; 

class CustomerController extends Controller
{
    
    public function listAction(Request $request)
    {
       
        return $this->render('AppBundle:Admin:Customers/customerList.html.twig');
    }

   public function createCustomerAction(Request $request)
   {
    $em = $this->getDoctrine()->getManager();
        $customers = $em->getRepository('AppBundle:Customer')->findAll();
        return $this->render('AppBundle:Admin:Customers/create.html.twig', [
            'customers'=>$customers,
        ]);
   }
    public function saveCustomerAction(Request $request)
   {
    $em = $this->getDoctrine()->getManager();
    $connection=$em->getConnection();

        $username=$request->get('name');
        $email=$request->get('email');
        $mobileNumber=$request->get('mobile');
      $gst=$request->get('gst');
      $id=$request->get('id');

$statement = $connection->prepare("SELECT * FROM `customer` where  mobileNo='$mobileNumber' and id !='$id'");
$statement->execute();
$menus = $statement->fetchAll();  
$num=count($menus);
if($num!='0')
{
            $request->getSession()->getFlashBag()->add('error',"mobile number or email already exist!");
          return $this->redirectToRoute('users_view',array('id'=>$id));
}
else
{
        $address=$request->get('address');
        $type=$request->get('type');
        $ai=mt_rand(000000,999999);
   
        $path="/";
        
                        $res=$em->getConnection()->exec("update `customer` set `username`='$username', `mobileNo`='$mobileNumber', `gst`='$gst', `email`='$email' where id='$id'");

            $request->getSession()->getFlashBag()->add('success',"Changes Saved!");
          return $this->redirectToRoute('users_view',array('id'=>$id));

   }
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

    public function insertCustomerAction(Request $request)
   {
    $em = $this->getDoctrine()->getManager();
    $connection=$em->getConnection();

        $username=$request->get('name');
        $email=$request->get('email');
        $mobileNumber=$request->get('mobile');
      $gst=$request->get('gst');
              $date=date('d-m-Y H:i A');
     $id=$this->get_client_ip();
        $date=date('d-m-Y H:i A');
        $device=$_SERVER['HTTP_USER_AGENT'];
        $channel='Admin';  // replace with request channel
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();

$statement = $connection->prepare("SELECT * FROM `customer` where  mobileNo='$mobileNumber'");
$statement->execute();
$menus = $statement->fetchAll();  
$num=count($menus);
if($num!='0')
{
            $request->getSession()->getFlashBag()->add('error',"mobile number or email already exist!");
          return $this->redirectToRoute('customer_create');
}
else
{
        $address=$request->get('address');
        $type=$request->get('type');
        $ai=mt_rand(000000,999999);
   
        $path="/";
          $customer=new Customer();
            $customer->setUsername($username);
            $customer->setEmail($email);
            $customer->setPath($path);
            $customer->setGst($gst);
            $customer->setBranch($branch);
            $customer->setMembership(0);
 $customer->setIp($id);
            $customer->setCreatedDate($date);
            $customer->setDevice($device);
            $customer->setChannel($channel);
            $customer->setMobileNumber($mobileNumber);
            $uniqueId=uniqid('customer',true);
            $customer->setApiKey($uniqueId);
            $customer->setRegistrationKey($ai);
            $em->persist($customer);
            $em->flush();
            $id=$customer->getId();
            $res=$em->getConnection()->exec("INSERT INTO `billing_address`(`customer_d`, `addressType`, `fullName`, `address`, `lattitude`, `logingitude`, `extraInfo`) VALUES ('$id','$type','$username','$address','','','')");
            $request->getSession()->getFlashBag()->add('success',"new customer created!");
          return $this->redirectToRoute('customer_create');

   }
}
   
   public function listUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
        $customers = $em->getRepository('AppBundle:Customer')->findByBranch($branch);
        return $this->render('AppBundle:Admin:Customers/listUser.html.twig', [
            'customers'=>$customers,
        ]);
    }
       public function customerPageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
          $connection=$em->getConnection();
       $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
     $draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " and (username like '%".$searchValue."%' or 
        email like '%".$searchValue."%' or 
        mobileNo like'%".$searchValue."%' ) ";
}

## Total number of records without filtering
$sel = $connection->prepare("select count(*) as allcount from customer where branch='$branch'");
  $sel->execute();
  $recordss = $sel->fetchAll();
  foreach ($recordss as $records) {
      # code...
  }
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = $connection->prepare("select count(*) as allcount from customer WHERE branch='$branch' and 1 ".$searchQuery);
  $sel->execute();
  $recordsd = $sel->fetchAll();
    foreach ($recordsd as $records) {
      # code...
  }
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = $connection->prepare("select * from customer WHERE branch='$branch' and 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage);
$empQuery->execute();
$res=$empQuery->fetchAll();
$data = array();

  foreach ($res as $row) {
    if($row['membership']=='0')
    {
        $membership='';
    }
    else
    {
          $membership='( Prime User )';
    }


        if($row['isActive']=='1')
    {
        $active='<span class="badge badge-success badge-sm status-badge">Active</span>';
$status='<a class="dropdown-item" href="'.$this->generateUrl('customer_activate', array('id'=>$row['id'])).'">Deactivate</a>';
    }
    else
    {
      $active='<span class="badge badge-danger badge-sm status-badge">Inactive</span>';
        $status='<a class="dropdown-item" href="'.$this->generateUrl('customer_activate', array('id'=>$row['id'])).'">Activate</a>';

    }
    $url=$this->generateUrl('users_view', array('id'=>$row['id']));

   $data[] = array(
      "id"=> $row['id'],
      "username"=>'<a href="'.$url.'">'.$row['username'].$membership.'</a>',
      "email"=>$row['email'],
      "mobileNo"=>$row['mobileNo'],
      "isActive"=>$active,
 "actionid"=>'<div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="'.$url.'">Edit</a>
                                                           
                                                           '.$status.'
                                                           
                                                        </div>
                                                    </div>
                                                </div>'   );
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);
     // Send all this stuff back to DataTables
    
        return new JsonResponse($response);
    }
    
    public function viewAction(Request $request,Customer $customer)
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('AppBundle:Admin:Customers/customerView.html.twig', [
            'customer'=>$customer,
        ]);
    }
        public function viewUsersAction(Request $request,Customer $customer)
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('AppBundle:Admin:Customers/viewWalletUser.html.twig', [
            'customer'=>$customer,'balance'=>$this->getBalanceAction($customer),'prepaid'=>$this->getPrepaidAction($customer),'postpaid'=>$this->getPostpaidAction($customer),'due'=>$this->getDueAction($customer)
            ,'membership'=>$this->getmembership($customer),
            'cutomerlogs' => $this->getCustomerLogs($customer),
            'loyaltyData' => $this->getLoyaltyAction($customer)

        ]);
        // ,'postpaid'=>$this->getPostpaidAction($customer),
    }
        public function reportUserAction(Request $request)
    {
        return $this->render('AppBundle:Admin:Customers/viewWalletUserReport.html.twig', [
            'due'=>$this->getDuefrAction(),'users'=>$this->getUsersAction()
        ]);
        // ,'postpaid'=>$this->getPostpaidAction($customer),
    }
    // 
    public function getPrepaidAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:WalletLogs')->findBy(array('ref'=>$id,'type'=>0));
return $re;
    }
    public function getLoyaltyAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:WalletLogs')->findBy(array('ref'=>$id,'type'=>2));
return $re;
    }
      public function getBalanceAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:Wallet')->findByUser($id);
return $re;
    }
          public function getmembership($customer)
    {
        $em = $this->getDoctrine()->getManager();
          $connection=$em->getConnection();
$id=$customer->getId();
$statement = $connection->prepare("SELECT * FROM `membership_history` as a join membership as b on a.membership_id=b.id where user_id='$id' order by a.id desc");
$statement->execute();
$menus = $statement->fetchAll(); 
return $menus;
    }
    
      public function getPostpaidAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:WalletLogs')->findBy(array('ref'=>$id,'type'=>1));
return $re;
    }
          public function getdueAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:WalletDue')->findBy(array('user'=>$id));
return $re;
    }
    public function getDuefrAction()
    {
        $em = $this->getDoctrine()->getManager();
     $re=$em->getRepository('AppBundle:WalletDue')->findBy(array('status'=>0));
return $re;
    }
    public function getUsersAction()
    {
          $em = $this->getDoctrine()->getManager();
     $re=$em->getRepository('AppBundle:Customer')->findAll();
return $re;
    }
    public function listDeliverySlotsAction(Request $request){
        // return $this->render('AppBundle:Admin:Pages/slots.html.twig');
            return $this->render('AppBundle:Restaurant:User/login.html.twig');
 
    }
    public function activateCustomerAction(Request $request, Customer $user)
    {
            try{
            $em=$this->getDoctrine()->getManager();
            if($user->getIsActive()):
                $user->setIsActive(false);
            else:
                $user->setIsActive(true);
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success','Customer active status successfully updated');
        }catch(\Exception $e){
            $request->getSession()->getFlashBag()->add('error','Customer active status updation failed');
        }

        return $this->redirectToRoute('users_list');
    }
      public function getCustomerLogs($customer)
  {
      $em = $this->getDoctrine()->getManager();
      $connection=$em->getConnection();

      $id=$customer->getId();

      $statement = $connection->prepare("SELECT * FROM `customer_logs` WHERE `customer_id` = '$id'");
      
      $statement->execute();
      $customerLogs = $statement->fetchAll(); 

      return $customerLogs;
  }
}
