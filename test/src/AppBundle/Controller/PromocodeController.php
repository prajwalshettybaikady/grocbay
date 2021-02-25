<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Promocode;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PromocodeController extends Controller
{
    public function addnewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $promocodeId=$request->get('edid');
        $connection=$em->getConnection();


        $promocode = new Promocode();
        if($promocodeId!=null){
            $promo = $em->getRepository('AppBundle:Promocode')->find($promocodeId);
            if($promo instanceof Promocode){
                $promocode = $promo;
                $promocode->setStartDate($promocode->getStartDate()->format('d-m-Y'));
                $promocode->setEndDate($promocode->getEndDate()->format('d-m-Y'));
            }else{
                $request->getSession()->getFlashBag()->add('error',"Invalid attempt.");
                return $this->redirectToRoute('add_new_promocode');
            }
        }
        $form = $this->createForm('AppBundle\Form\PromocodeType', $promocode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
try{
$item=$request->get('item');
if($item=='')
{
    $item= '0';

}
else
{
    $item= implode (",", $item);
}
                $promocode->setStartDate(new \Datetime($promocode->getStartDate()));
                $promocode->setEndDate(new \Datetime($promocode->getEndDate()));
                 $promocode->setItems($item);
                 $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
                 $promocode->setBranch($branch);
                $em->persist($promocode);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Promocode suucessfully updated to the list");
                return $this->redirectToRoute('add_new_promocode',array('edid'=>$promocode->getId()));
            }catch(\Exception $e){
                // $request->getSession()->getFlashBag()->set('error',$e->getMessage());
                                $request->getSession()->getFlashBag()->add('error',"Promocode must be unique! please ttry with different name");

            }
        }

        $statement = $connection->prepare("SELECT a.*,b.* FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and 1 and a.id in(select menu_item_id from price_variation where stock is not null or stock > 2)");
$statement->execute();
$menus = $statement->fetchAll();

//get category
     $categorys = $connection->prepare("SELECT * from sub_category where parent_id is null and status='0' order by id asc");

$categorys->execute();
$category = $categorys->fetchAll();
//get syub_category
     $scategorys = $connection->prepare("select b.id,a.categoryName as main,b.categoryName as child from sub_category as a join sub_category as b on a.id=b.parent_id where a.status=0 and b.status=0");

$scategorys->execute();
$subcategory = $scategorys->fetchAll();


        return $this->render('AppBundle:Admin:Promocode/promoForm.html.twig', [
            'form'=>$form->createView(),
            'promocode'=>$promocode,
            'menuitem'=>$menus,
            'category'=>$category,
            'subcat'=>$subcategory

        ]);
    }

    public function listPromoAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
        $promocodes = $em->getRepository('AppBundle:Promocode')->findBy(array('branch'=>$branch));
        
        return $this->render('AppBundle:Admin:Promocode/promoList.html.twig', [
            'promocodes'=>$promocodes
        ]);
    }
}
