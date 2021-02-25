<?php

namespace AppBundle\Controller;

use AppBundle\Entity\WorkArea;
use AppBundle\Entity\OrderType;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\Brands;
use AppBundle\Entity\Advertisement;
use AppBundle\Entity\RestaurantType;
use AppBundle\Entity\Sms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class SmsController extends Controller
{

 public function ManageTemplateAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
    $connection = $em->getConnection();
$statement = $connection->prepare("SELECT * FROM `sms` where id='1'");
$statement->execute();
 $result = $statement->fetchAll();
 return $this->render('AppBundle:Admin:Sms/template.html.twig',array(
                      'data'=>$result,
        ));
    }
     public function updateTemplateAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
    $regc=$_POST['a1'];
    $regd=$_POST['a2'];
    $otp=$_POST['a3'];
    $order_c=$_POST['a4'];
    $order_a=$_POST['a5'];
    $reccive=$_POST['a6'];
    $ofd_c=$_POST['a7'];
    $ofd_d=$_POST['a8'];
    $delivered=$_POST['a9'];
    $completed=$_POST['a10'];
    $cancelled=$_POST['a11'];
  $em->getConnection()->exec("UPDATE `sms` SET `registration_user`='$regc',`registration_delivery`='$regd',`otp`='$otp',`order_u`='$order_c',`order_a`='$order_a',`recciving`='$reccive',`delivery_u`='$ofd_c',`delivery_d`='$ofd_d',`delivered`='$delivered',`completed`='$completed',`cancelled`='$cancelled' WHERE id='1'");

$statement = $connection->prepare("SELECT * FROM `sms` where id='1'");
$statement->execute();
 $result = $statement->fetchAll();
$request->getSession()->getFlashBag()->add('success','template id Updated!');
    // return $this->redirectToRoute('update_template',array("data"=>$result));
 return $this->render('AppBundle:Admin:Sms/template.html.twig',array(
                      'data'=>$result,
        ));
    }
    
////////////////////////////////////////////////////////////////////

}
