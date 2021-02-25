<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Advertisement;
use AppBundle\Entity\AdvertisementType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdvertisementController extends Controller
{
    public function manageTypeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $editId=$request->get('editable');
        $deleteId=$request->get('deletable');
        $edit=false;
        $advertisementType = new AdvertisementType();
        if($editId!=null){
            $type = $em->getRepository('AppBundle:AdvertisementType')->find($editId);
            if($type instanceof AdvertisementType){
                $advertisementType = $type;
                $edit=true;
            }
        }
        if($deleteId!=null){
            $type = $em->getRepository('AppBundle:AdvertisementType')->find($deleteId);
            if($type instanceof AdvertisementType){
                $em->remove($type);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Advertisement Type suucessfully removed from the list");
                return $this->redirectToRoute('advertisement_type_manager');
            }
        }
        $form = $this->createForm('AppBundle\Form\AdvertisementTypeType', $advertisementType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try{
                if($edit == false){
                    $em->persist($advertisementType);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"Advertisement type suucessfully updated in the list");
                return $this->redirectToRoute('advertisement_type_manager');
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
        $types = $em->getRepository('AppBundle:AdvertisementType')->findAll();
        return $this->render('AppBundle:Advertisement:manageType.html.twig',array(
            'form'=>$form->createView(),
            'types'=>$types,
        ));
    }

public function createBannerAction(Request $request){
    
       $editId=$request->get('editId');
       $em = $this->getDoctrine()->getManager();
       $newAd=true;
       $data=[];
       $clickLink = '';
       if($editId!=null){
            $newAd=false;
            $ad = $em->getRepository('AppBundle:Advertisement')->find($editId);
            if($ad instanceof Advertisement){
                $advertisement = $ad;
            }else{
                return $this->redirectToRoute('advertisement_manager');
            }
           
            $data=explode(", ", $advertisement->getData());
            $clickLink=$advertisement->getClickLink();
            
            // dump($data); exit;
        }else{
            $advertisement = new Advertisement();
        }
        $form = $this->createForm('AppBundle\Form\AdvertisementType', $advertisement);
        $form->handleRequest($request);
      
      
        
        if ($form->isSubmitted() && $form->isValid()) {
            try{
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch=$user->getBranch();
                $advertisement->setBranch($branch);
                if($advertisement->getBannerFile()!=null){
                    if($advertisement->getBannerImage()!=null){
                        $advertisement->removeBannerUpload();
                    }
                    $advertisement->bannerUpload();
                }
               
                $isActive=$request->get('isActive');
                if(isset($isActive))
                {
                    $isActive=1;
                }
                else
                {
                    $isActive=0;
                }
                $advertisement->setIsActive($isActive);

              
               if($advertisement->getBannerFor() == 6){
                    $advertisement->setClickLink($_POST['clickLink']);
                   
               }

               //dump($_POST['item']);
                if($advertisement->getBannerFor() == 1) {
                $advertisement->setData(implode (", ", $_POST['item']));
                }
                if($advertisement->getBannerFor() == 2) {
                $advertisement->setData(implode (", ", $_POST['category']));
                }
                if( $advertisement->getBannerFor() == 3){
                    $advertisement->setData(implode (", ", $_POST['subcategory']));
                }
                if($advertisement->getBannerFor() == 4){
                $advertisement->setData(implode (", ", $_POST['sub_category']));
                } 
                if($advertisement->getBannerFor() == 5) {
                $advertisement->setData(implode (", ", $_POST['brand']));
                }
                if($newAd){
                    $em->persist($advertisement);
                }
               
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"New Banner Created!");
                return $this->redirectToRoute('advertisement_new',array('editId'=>$advertisement->getId()));
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
             $connection=$em->getConnection();
               $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
        $statement = $connection->prepare("SELECT * FROM `menu_item` where id in(select menu_item_id from price_variation where stock is not null or stock > 2) and isActive != 2 and branch='$branch'");
$statement->execute();
$menus = $statement->fetchAll();

//get category
     $categorys = $connection->prepare("SELECT * from sub_category where parent_id is null and status='0' and branch='$branch' order by id asc");

$categorys->execute();
$category = $categorys->fetchAll();
//get sub_category
     $scategorys = $connection->prepare("select b.id,a.categoryName as main,b.categoryName as child from sub_category as a join sub_category as b on a.id=b.parent_id where a.status=0 and b.status=0 and b.nested=0  and b.parent_id = null and b.branch='$branch'");
$scategorys->execute();
$subcategory = $scategorys->fetchAll();
//get nested category
     $nestedrow = $connection->prepare("select * from sub_category where status=0 and branch='$branch' and parent_id is not null");
$nestedrow->execute();
$nested = $nestedrow->fetchAll();
//brand
     $brandsrow = $connection->prepare("select * from brands  where branch='$branch'");
$brandsrow->execute();
//dump($brands);exit;
return $this->render('AppBundle:Advertisement:adForm.html.twig', array(
            'advertisement' => $advertisement,
            'form' => $form->createView(),
            'category'=>$category,
            'nested'=>$nested,
            'menus'=>$menus,
            'brands'=>$brandsrow,
            'menus'=>$menus,
            'data'=>$data,
            'clickLink'=>$clickLink
        ));
    }

public function viewBannerAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
     $branch=$user->getBranch();
        $ads = $em->getRepository('AppBundle:Advertisement')->findBy(array('isActive' =>1,'branch'=>$branch));


        return $this->render('AppBundle:Advertisement:adList.html.twig', array(
            'ads' => $ads,
        ));
    }
    
public function viewBannerAjaxAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
        $ads = $em->getRepository('AppBundle:Advertisement')->findBy(array('branch'=>$branch));
        //dump($ads);exit;
        foreach ($ads as $add) {
            $title = $add->getTitle();
            $image = $add->getBannerImage();
            $type = $add->getAdvertisementType();
            $tyname=$type->getTypeName();
            $st=$add->getIsActive();
            //dump($advertisementtype);exit;
            $id = $add->getId();
              if($st=='1')
    {
        $active='<span class="badge badge-success badge-sm status-badge">Active</span>';
    }
    else
    {
      $active='<span class="badge badge-danger badge-sm status-badge">Inactive</span>';

    }
            $editurl = $this->generateUrl('advertisement_new', array('editId' => $id));
            $deleteurl = $this->generateUrl('banner_delete', array('id' => $id));
            $remove_banner = $this->generateUrl('remove_banner', array('id' => $id));

            $data[] = array(
                "title" => $title,
                "image" => '<img src="/uploads/banners/banner/'.$image.'" style="width:200px;">',
                "type" => $tyname,
                "isActive" => $active,
                "action" =>'<div class="action-dropdown custom-dropdown-icon">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                        <a class="edit dropdown-item" href="'.$editurl.'">Edit</a>
                        <a class="dropdown-item delete" href="'.$deleteurl.'">Change Status</a>
                        <a class="dropdown-item delete" href="'.$remove_banner.'">Delete</a>
                        
                    </div>
                </div>
            </div>'
            );
        }
        $response = array(
            "data" => $data,
        );
       //dump($response);exit;
        return new JsonResponse($response);
       /* return $this->render('AppBundle:Advertisement:adList.html.twig', array(
            'ads' => $ads,
        ));*/
    } 
}
