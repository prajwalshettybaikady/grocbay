<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Brands;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class BrandController extends Controller
{
  
        
public function bulkActionBrandsAction(Request $request)
{
   $em = $this->getDoctrine()->getManager();
   $connection = $em->getConnection();
   $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
$type=$request->get('type');
    if(!isset($_POST['all']))
    {
      $request->getSession()->getFlashBag()->add('error',"Please select Brands!");
      return $this->redirectToRoute('brand_list');
  }
  else{
   $checkbox=$_POST['all'];
   if($type==2)
{
    foreach ($checkbox as $id) {
$res=$em->getConnection()->exec("DELETE from brands  WHERE id='$id'");

}
}
   if($type==1)
{
    foreach ($checkbox as $id) {
      //add to featured
$res=$em->getConnection()->exec("update  brands set parent_id='1' WHERE id='$id'");

}
}
   if($type==3)
{
  //remove from featured
    foreach ($checkbox as $id) {
$res=$em->getConnection()->exec("update  brands set parent_id='0' WHERE id='$id'");

}


}
}
      $request->getSession()->getFlashBag()->add('success',"Changes Saved!");

    return $this->redirectToRoute('brand_list');

}
public function ajaxBrandListAction(Request $request)
    {
 $em = $this->getDoctrine()->getManager();
          $connection=$em->getConnection();

     $draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
$user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " and (categoryName like '%".$searchValue."%' or  
        id like'%".$searchValue."%' )";
}
## SELECT * from sub_category   where parent_id is  NULL order by priority DESC
$sel = $connection->prepare("select count(*) as allcount from brands where branch='$branch' ");
  $sel->execute();
  $recordss = $sel->fetchAll();
  foreach ($recordss as $records) {
      # code...
  }
$totalRecords = $records['allcount'];
## Total number of record with filtering
$sel = $connection->prepare("select count(*) as allcount from brands where branch='$branch' and 1 ".$searchQuery);
  $sel->execute();
  $recordsd = $sel->fetchAll();
    foreach ($recordsd as $records) {
      # code...
  }
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = $connection->prepare("select * from brands where branch='$branch' and 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage);
$empQuery->execute();
$res=$empQuery->fetchAll();
$data = array();
  
  foreach ($res as $row) {
  if($row['parent_id']=='1')
    {
        $f='Yes';
    }
    else
    {
        $f='No';
    }
    $url=$this->generateUrl('brand_edit', array('id'=>$row['id']));

   $data[] = array( 
"branch"=>'<input type="checkbox" name="all[]" class="tst" value="'.$row['id'].'">',
      "id"=>$row['id'],
      "categoryName"=>"<img src='/uploads/sub-category/icons/".$row['iconImage']."'
       style='width:80px'> ". $row['categoryName'],
      "featured"=>$f,
      "view"=>' <a href="'.$url.'" title="View {{ user.id }}"><i class="fa fa-edit"></i></a>'
   );
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
    public function listBrandsAction(Request $request)
    {
     $category = new Brands();
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
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
                $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
$category->setBranch($branch);

$parentid=$request->get('parentid');
if(isset($parentid))
{
    $parentid=1;
}
else
{
    $parentid=0;
}
$category->setParentId($parentid);
                $em->persist($category);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"New Brand Added");
                   if($branch==0)
            {
            $this->createBrand($category->getId());
          }
                return $this->redirectToRoute('brand_list');
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:Brands/brandList.html.twig',array(
          'category' => $category,
            'form' => $form->createView(),
          ));
    }
    public function createBrandAction(Request $request)
    {
        $category = new Brands();
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
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
                $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
$category->setBranch($branch);

$parentid=$request->get('parentid');
if(isset($parentid))
{
    $parentid=1;
}
else
{
    $parentid=0;
}
$category->setParentId($parentid);
                $em->persist($category);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success',"New Brand Added");
                   if($branch==0)
            {
            $this->createBrand($category->getId());
          }
                return $this->redirectToRoute('brand_list');
            }catch(\Exception $e){

                    $request->getSession()->getFlashBag()->set('error',$e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:Brands/brandCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }
    function createBrand($id)
{
  $em = $this->getDoctrine()->getManager();
$connection = $em->getConnection(); 
$statement = $connection->prepare("SELECT * from restaurants");
  $statement->execute();
  $data = $statement->fetchAll();
  foreach ($data as $res) {
$branch=$res['id'];
 $res=$em->getConnection()->exec("INSERT INTO brands(categorySlug,bannerImage,categoryDescription,parent_id,branch,categoryName,iconImage,ref) SELECT  categorySlug,bannerImage,categoryDescription,parent_id,$branch,categoryName,iconImage,$id FROM brands where id='$id'");
  }
}
        public function brandEditAction(Request $request, Brands $category)
    {
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try{
              $user = $this->get('security.token_storage')->getToken()->getUser();
$branch=$user->getBranch();
$category->setBranch($branch);


$parentid=$request->get('parentid');
if(isset($parentid))
{
    $parentid=1;
}
else
{
    $parentid=0;
}
$category->setParentId($parentid);
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
