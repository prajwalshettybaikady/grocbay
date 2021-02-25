<?php

namespace AppBundle\Controller;

use AppBundle\Helper\Firebase;
use AppBundle\Entity\Restaurants;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{

    public function dashboardAction(Request $request)
    {
        
        return $this->render('AppBundle:Admin:Pages/dashboard.html.twig');
    }

    public function allRestaurantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $restaurants = $em->getRepository('AppBundle:Restaurants')->findAll();
        return $this->render('AppBundle:Admin:Pages/restaurantList.html.twig',array('restaurants'=>$restaurants));
    }

    public function viewRestaurantAction(Request $request,Restaurants $restaurant)
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('AppBundle:Admin:Pages/restaurantView.html.twig',array('restaurant'=>$restaurant));
    }

    public function createRestaurantAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $restaurant = $em->getRepository('AppBundle:Restaurants')->find(999);
        if(!($restaurant instanceof Restaurants)){
            $restaurant = new Restaurants();
        }else{
            $restaurant->setOpenTime($restaurant->getOpenTime()->format('H:i'));
            $restaurant->setCloseTime($restaurant->getCloseTime()->format('H:i'));
        }
        $form = $this->createForm('AppBundle\Form\RestaurantsType', $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $restaurant->setRestaurantSlug(str_replace(" ","-",strtolower($restaurant->getRestaurantName())));
                if($restaurant->getIconFile()!=null){
                    $restaurant->iconUpload();
                }
                if($restaurant->getBannerFile()!=null){
                    $restaurant->bannerUpload();
                }
                 // $restaurant->setDashboardColor($_POST['appbundle_restaurants[dashboardColor]']);
                $restaurant->setOpenTime(new \Datetime($restaurant->getOpenTime()));
                $restaurant->setCloseTime(new \Datetime($restaurant->getCloseTime()));
                $em->persist($restaurant);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Restaurant suucessfully added to the list");
                return $this->redirectToRoute('restaurant_create');
            }catch(\Exception $e){

                $request->getSession()->getFlashBag()->set('error',$e->getMessage());
              
            }
        }
        return $this->render('AppBundle:Admin:Pages/restaurantForm.html.twig', array(
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ));
    }

    public function editRestaurantAction(Request $request,Restaurants $restaurant){
        $restaurant->setOpenTime($restaurant->getOpenTime()->format('H:i'));
        $restaurant->setCloseTime($restaurant->getCloseTime()->format('H:i'));
        $form = $this->createForm('AppBundle\Form\RestaurantsType', $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                $restaurant->setRestaurantSlug(str_replace(" ","-",strtolower($restaurant->getRestaurantName())));
                if($restaurant->getIconFile()!=null){
                    if($restaurant->getIconImage()!=null){
                        $restaurant->removeIconUpload();
                    }
                    $restaurant->iconUpload();
                }
                if($restaurant->getBannerFile()!=null){
                    if($restaurant->getBannerImage()!=null){
                        $restaurant->removeBannerUpload();
                    }
                    $restaurant->bannerUpload();
                }
                $restaurant->setOpenTime(new \Datetime($restaurant->getOpenTime()));
                $restaurant->setCloseTime(new \Datetime($restaurant->getCloseTime()));
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Restaurant suucessfully updated");
                return $this->redirectToRoute('restaurant_edit',array('id'=>$restaurant->getId()));
            }catch(\Exception $e){

                {
                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
                }
            }
        }
        return $this->render('AppBundle:Admin:Pages/restaurantForm.html.twig', array(
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ));
    }
}
