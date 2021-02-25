<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\DeliveryBoy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    public function loginAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        
    	$user = $this->get('security.token_storage')->getToken()->getUser();
        if($user!="anon."){
// $session = new Session();
// $session->start();

// // set and get session attributes
// $session->set('test', 'set and get session attributes');

            
            return $this->redirectToRoute('developer_dashboard');


        }

    	$authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
if($error)
{
    $error='<div class="alert alert-danger">
  <strong>Wrong Password or Email Id!</strong>Please enter valid credentails!.</div>';
}
else
{
    $error="";
} 
        return $this->render('AppBundle:Admin:User/login.html.twig',array(
            'users' => $error,
        ));
    }

public function viewAdminAction(Request $request,User $user)
    {
        $customer = $this->getDoctrine()->getManager();
        $id=$request->get('id');
        return $this->render('AppBundle:Admin:Pages/adminView.html.twig', [
            'customer'=>$user,'balance'=>$this->getBalanceAction($user),'prepaid'=>$this->getPrepaidAction($user),'postpaid'=>$this->getPostpaidAction($user),'due'=>$this->getDueAction($user)
            ,'membership'=>$this->getmembership($user),'customerOrder'=>$this->getcustomerOrder($user)
        ]);
        // ,'postpaid'=>$this->getPostpaidAction($customer),
    }
       public function getPrepaidAction($customer)
    {
        $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:WalletLogs')->findBy(array('ref'=>$id,'type'=>0));
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
$statement = $connection->prepare("SELECT * FROM `membership_history` as a join membership as b on a.membership_id=b.id where user_id='$id' and a.status='0'");
$statement->execute();
$menus = $statement->fetchAll(); 
return $menus;
    }
              public function getcustomerOrder($customer)
    {
            $em = $this->getDoctrine()->getManager();
 $id=$customer->getId();
 $re=$em->getRepository('AppBundle:CustomerOrder')->findBy(array('deliveryBoy'=>$customer));
return $re;

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
    public function listAdminAction(Request $request){
        $em = $this->getDoctrine()->getManager();
$user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
$type=$user->getUserType();
if($type=='root')
{ 
    $users = $em->getRepository('AppBundle:User')->findAll();
}
else
{
    $users = $em->getRepository('AppBundle:User')->findBy(array('branch'=>$branch));
}
        return $this->render('AppBundle:Admin:Pages/adminList.html.twig', array(
            'users' => $users,
        ));
    }

    public function createAdminAction(Request $request){
        $user = new User();
        $user->setRoles(array('0'=>'ROLE_ADMIN'));
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($user->getImageFile()!=null){
                    $user->imageUpload();
                }
                $user->setBranch($_POST['shop']); 

                // Set Branch Type
                $res_id = $_POST['shop'];
                $em = $this->getDoctrine()->getManager();
                $connection = $em->getConnection();

                $statement = $connection->prepare("SELECT * FROM restaurants where id='$res_id'");
                $statement->execute();
                $rest = $statement->fetchAll();
                
                if(count($rest)>0){

                    $grocid = $rest[0]['ref'];

                    $statement = $connection->prepare("SELECT * FROM grocbay_customer where id='$grocid'"); 
                    $statement->execute();
                    $groc_cust = $statement->fetchAll();

                    if(count($groc_cust)>0){
                        $res_branchtype = $groc_cust[0]['branchtype'];
                    }else{
                        $res_branchtype = 0;
                    }
                    
                }else{
                    $res_branchtype = 0;
                }

                $user->setBranchtype($res_branchtype);
                // end
                
                $em->persist($user);
                $em->flush(); 
                $request->getSession()->getFlashBag()->add('success',"Admin successfully added to the list");
                return $this->redirectToRoute('admin_edit',array('id'=>$user->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevUser=$em->getRepository('AppBundle:User')->findByMobileNumber($user->getMobileNumber());
                    if($prevUser!=[]){
$request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevUser=$em->getRepository('AppBundle:User')->findByEmail($user->getEmail());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }
            $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();

    $statement = $connection->prepare("SELECT * FROM `restaurants` where 1");

    $statement->execute();
    $shop = $statement->fetchAll();

        return $this->render('AppBundle:Admin:Pages/adminForm.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'passwordMessage'=>'',
            'msg'=>$user,
            'shop'=>$shop,
            'branch'=>0,
            'isActive' => $user->getIsActive()
        ));
    }

    public function editAdminAction(Request $request,User $user){
        $loginUser = $this->get('security.token_storage')->getToken()->getUser();
        $form = $this->createForm('AppBundle\Form\UserEditType', $user);
        $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($form->get('password')->getData()!=null){
                    $user->setPassword($form->get('password')->getData());
                }
                if($user->getImageFile()!=null){
                    if($user->getUserPic()!=null){
                        $user->removeImageUpload();
                    }
                    $user->imageUpload();
                }
                $isActive=$request->get('isActive');
                //dump($isActive);exit;
                if(isset($isActive))
                {
                    $isActive=1;
                }
                else
                {
                    $isActive=0;
                }
                if($user->getUserType()=='root')
                {
                $user->setBranch(0);
                $user->setUserType('root');
                }
                else
                {
                   $user->setBranch($_POST['shop']);                 
                }

                $user->setIsActive($isActive);
                
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Admin sucessfully updated");
                if($loginUser->getId()==$user->getId()){
                    return $this->redirectToRoute('admin_logout');
                }
                return $this->redirectToRoute('admin_edit',array('id'=>$user->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevUser=$em->getRepository('AppBundle:User')->findByMobileNumber($user->getMobileNumber());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevUser=$em->getRepository('AppBundle:User')->findByEmail($user->getEmail());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }
                    $em = $this->getDoctrine()->getManager();
    $connection = $em->getConnection();

    $statement = $connection->prepare("SELECT * FROM `restaurants` where isOpen=1");

    $statement->execute();
    $shop = $statement->fetchAll();

    $id=$user->getId();
    $resp = $connection->prepare("SELECT * FROM `user` where id='$id'");
    $resp->execute();
    $resps = $resp->fetchAll();
    foreach ($resps as $res) {
        # code...
    }
        return $this->render('AppBundle:Admin:Pages/adminForm.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'passwordMessage'=>'Please leave blank if you dont want to reset password',
            'shop'=>$shop,
            'branch'=>$res['branch'],
            'isActive' => $user->getIsActive()
        ));
    }


    public function activateAdminAction(Request $request, User $user){
        try{
            $em=$this->getDoctrine()->getManager();
            if($user->getIsActive()):
                $user->setIsActive(false);
            else:
                $user->setIsActive(true);
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success','User active status successfully updated');
        }catch(\Exception $e){
            $request->getSession()->getFlashBag()->add('error','User active status updation failed');
        }

        return $this->redirectToRoute('admin_list');
    }
    
        public function branchActivateAction(Request $request, Restaurants $user){
        try{

            $em=$this->getDoctrine()->getManager();
                $connection = $em->getConnection();
$id=$request->get('id');
            if($user->getIsOpen()):
                $user->setIsOpen(false);
      $em->getConnection()->exec("update user set isActive='0' where branch='$id'");
            else:
                $user->setIsOpen(true);
      $em->getConnection()->exec("update user set isActive='1' where branch='$id'");

            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success','Changes Saved!');
        }catch(\Exception $e){
            $request->getSession()->getFlashBag()->add('error','Please try again later :-(');
        }

        return $this->redirectToRoute('restaurant_list');
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('admin_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function createRestaurantAdminAction(Request $request, Restaurants $restaurant){
        $user = new User();
        $user->setRestaurant($restaurant);
        $user->setUserType('Rest');
        $user->setRoles(array('0'=>'ROLE_RESTAURENT'));
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($user->getImageFile()!=null){
                    $user->imageUpload();
                }
                $em->persist($user);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Shop detail updated successfully");
                return $this->redirectToRoute('restaurant_admin_edit',array('id'=>$user->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevUser=$em->getRepository('AppBundle:User')->findByMobileNumber($user->getMobileNumber());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevUser=$em->getRepository('AppBundle:User')->findByEmail($user->getEmail());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }
        return $this->render('AppBundle:Admin:Pages/restaurantAdminForm.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'passwordMessage'=>'',
        ));
    }

    public function editRestaurantAdminAction(Request $request,User $user){
        $form = $this->createForm('AppBundle\Form\UserEditType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($form->get('password')->getData()!=null){
                    $user->setPassword($form->get('password')->getData());
                }
                if($user->getImageFile()!=null){
                    if($user->getUserPic()!=null){
                        $user->removeImageUpload();
                    }
                    $user->imageUpload();
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Admin sucessfully updated");
                return $this->redirectToRoute('restaurant_admin_edit',array('id'=>$user->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevUser=$em->getRepository('AppBundle:User')->findByMobileNumber($user->getMobileNumber());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevUser=$em->getRepository('AppBundle:User')->findByEmail($user->getEmail());
                    if($prevUser!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }

        return $this->render('AppBundle:Admin:Pages/restaurantAdminForm.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'passwordMessage'=>'Please leave blank if you dont want to reset password',
        ));
    }


    public function createDeliveryBoyAction(Request $request){
        $deliveryBoy = new DeliveryBoy();
        $deliveryBoy->setUserType('Admin');
        $deliveryBoy->setRoles(array('0'=>'ROLE_DELIVERY'));
        $form = $this->createForm('AppBundle\Form\DeliveryBoyType', $deliveryBoy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($deliveryBoy->getImageFile()!=null){
                    $deliveryBoy->imageUpload();
                }
                $em->persist($deliveryBoy);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Delivery boy suucessfully added to the list");
                return $this->redirectToRoute('delivery_boy_edit',array('id'=>$deliveryBoy->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevDeliveryBoy=$em->getRepository('AppBundle:DeliveryBoy')->findByMobileNumber($deliveryBoy->getMobileNumber());
                    if($prevDeliveryBoy!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevDeliveryBoy=$em->getRepository('AppBundle:DeliveryBoy')->findByEmail($deliveryBoy->getEmail());
                    if($prevDeliveryBoy!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }
        return $this->render('AppBundle:Admin:Pages/deliveryForm.html.twig', array(
            'deliveryBoy' => $deliveryBoy,
            'form' => $form->createView(),
            'passwordMessage'=>'',
        ));
    }



    public function editDeliveryBoyAction(Request $request,DeliveryBoy $deliveryBoy){
        $form = $this->createForm('AppBundle\Form\DeliveryBoyEditType', $deliveryBoy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                if($form->get('password')->getData()!=null){
                    $deliveryBoy->setPassword($form->get('password')->getData());
                }
                if($deliveryBoy->getImageFile()!=null){
                    if($deliveryBoy->getUserPic()!=null){
                        $deliveryBoy->removeImageUpload();
                    }
                    $deliveryBoy->imageUpload();
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Delivery Boy suucessfully updated");
                return $this->redirectToRoute('delivery_boy_edit',array('id'=>$deliveryBoy->getId()));
            }catch(\Exception $e){

                if($e->getPrevious()->getCode() == 23000){
                    $prevDeliveryBoy=$em->getRepository('AppBundle:DeliveryBoy')->findByMobileNumber($deliveryBoy->getMobileNumber());
                    if($prevDeliveryBoy!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Mobile number already exists. Please try different mobile number.");
                    }
                    $prevDeliveryBoy=$em->getRepository('AppBundle:DeliveryBoy')->findByEmail($deliveryBoy->getEmail());
                    if($prevDeliveryBoy!=[]){
                        $request->getSession()->getFlashBag()->add('error',"Email already exists. Please try different email.");
                    }
                }else{
                    $request->getSession()->getFlashBag()->set('error',$e->getMesssage());
                }
            }
        }

        return $this->render('AppBundle:Admin:Pages/deliveryForm.html.twig', array(
            'deliveryBoy' => $deliveryBoy,
            'form' => $form->createView(),
            'passwordMessage'=>'Please leave blank if you dont want to reset password',
        ));
    }

    public function listDeliveryBoyAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $deliveryBoys = $em->getRepository('AppBundle:DeliveryBoy')->findByUserType('Admin');

        return $this->render('AppBundle:Admin:Pages/deliveryList.html.twig', array(
            'users' => $deliveryBoys,
        ));
    }

}
