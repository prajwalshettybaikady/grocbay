<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Restaurants;
use AppBundle\Entity\MenuItems;
use AppBundle\Entity\CustomerOrder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LoyaltyController extends Controller
{ 
 public function manageAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();

$user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
    $connection = $em->getConnection();
$statement = $connection->prepare("SELECT * FROM `loyalty` where branch='$branch'");
$statement->execute();
 $result = $statement->fetchAll();

  $sql = $connection->prepare("SELECT * FROM `restaurants` where id='$branch'");
    $sql->execute();
    $restaurant = $sql->fetchAll();
    foreach ($restaurant as $rest) {
        # code...
    }
 return $this->render('AppBundle:Admin:Loyalty/manage.html.twig',array(
                      'data'=>$result,
 "currency"=>$rest['currencyFormat'],
        ));
    }

 public function editAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
    $connection = $em->getConnection();
$status=$request->get('status');
$min=$request->get('order');
$rupee=$request->get('rupee');
$type=$request->get('type');
$max=$request->get('value');
$discount=$request->get('discount');
$id=$request->get('id');
      $em->getConnection()->exec("update loyalty set status='$status',type='$type',minimum_order_amount='$min',points='$rupee',maximum_redeem='$max',discount='$discount'  where id='$id'");
      $request->getSession()->getFlashBag()->add('success',"Loyalty Details updated!");
       return $this->redirectToRoute('loyalty');
    }


  }