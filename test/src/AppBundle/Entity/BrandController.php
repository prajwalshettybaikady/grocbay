<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brands;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BrandController extends Controller
{
  
        
   
    public function listBrandsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Brands')->findAll();
        return $this->render('AppBundle:Admin:Brands/brandList.html.twig',array('categories'=>$categories));
    }
    public function createBrandAction(Request $request)
    {
        $category = new Brands();
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                $category->setCategorySlug(str_replace(" ","-",strtolower($category->getCategoryName())));
                if($category->getIconFile()!=null){
                    $category->iconUpload();
                }
                if($category->getBannerFile()!=null){
                    $category->bannerUpload();
                }
                $em->persist($category);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"New Brand Added");
                return $this->redirectToRoute('brand_edit',array('id'=>$category->getId()));
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:Brands/brandCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }
        public function editBrandAction(Request $request, Brands $category)
    {
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
                $category->setCategorySlug(str_replace(" ","-",strtolower($category->getCategoryName())));
                if($category->getIconFile()!=null){
                    if($category->getIconImage()!=null){
                        $category->removeIconUpload();
                    }
                    $category->iconUpload();
                }
                if($category->getBannerFile()!=null){
                    if($category->getBannerImage()!=null){
                        $category->removeBannerUpload();
                    }
                    $category->bannerUpload();
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Brand Updated");
                return $this->redirectToRoute('brand_edit',array('id'=>$category->getId()));
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:Brands/brandCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }
   
}
