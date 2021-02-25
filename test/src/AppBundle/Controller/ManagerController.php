<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Advertisement;
use AppBundle\Entity\Brands;
use AppBundle\Entity\MenuItem;
use AppBundle\Entity\OrderType;
use AppBundle\Entity\RestaurantType;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\WorkArea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ManagerController extends Controller
{
    public function workAreaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $editId = $request->get('editable');
        $deleteId = $request->get('deletable');
        $edit = false;
        $workArea = new WorkArea();
        if ($editId != null) {
            $area = $em->getRepository('AppBundle:WorkArea')->find($editId);
            if ($area instanceof WorkArea) {
                $workArea = $area;
                $edit = true;
            }
        }

        if ($deleteId != null) {
            $area = $em->getRepository('AppBundle:WorkArea')->find($deleteId);
            if ($area instanceof WorkArea) {
                $em->remove($area);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Area suucessfully removed from the list");
                return $this->redirectToRoute('work_area_manager');
            }
        }
        $form = $this->createForm('AppBundle\Form\WorkAreaType', $workArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($edit == false) {
                    $em->persist($workArea);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Area sucessfully updated in the list");
                return $this->redirectToRoute('work_area_manager');
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        $areas = $em->getRepository('AppBundle:WorkArea')->findAll();
        return $this->render('AppBundle:Admin:AppManager/workArea.html.twig', array(
            'form' => $form->createView(),
            'workArea' => $workArea,
            'areas' => $areas,
        ));
    }
    public function pickupLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * FROM `location` where branch='$branch'");
        $sql->execute();
        $query = $sql->fetchAll();

        $sql1 = $connection->prepare("SELECT a.* FROM `pickup` as a join location as b on a.parent=b.id where a.status='0' and b.branch='$branch'");
        $sql1->execute();
        $location = $sql1->fetchAll();
        return $this->render('AppBundle:Admin:Pickup/sub-location.html.twig', array('areas' => $query, 'location' => $location));

    }
    public function createpickupLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $name = addslashes($_POST['name']);
        $address = addslashes($_POST['address']);
        $contact = $_POST['contact'];
        $parent = $_POST['area'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $status = '0';
        $res = $em->getConnection()->exec("INSERT INTO `pickup`(`name`, `address`, `contact`,`parent`,`status`,`latitude`,`longitude`) VALUES ('$name','$address','$contact','$parent','$status','$latitude','$longitude')");
        $request->getSession()->getFlashBag()->add('success', "New Pickup Location Created!");
        return $this->redirectToRoute('pickup_location');

    }

    public function editpickupLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $name = addslashes($_POST['name']);
        $id = addslashes($_POST['id']);
        $address = addslashes($_POST['address']);
        $contact = $_POST['contact'];
        $parent = $_POST['area'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $status = '0';
        $res = $em->getConnection()->exec("update `pickup` set `name`='$name', `address`='$address', `contact`='$contact',`parent`='$parent',`status`=0,`latitude`='$latitude',`longitude`='$longitude' where id='$id'");
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
        return $this->redirectToRoute('pickup_location');

    }
    public function deletePickupAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $request->getSession()->getFlashBag()->add('success', "Pickup Location  Removed!");

        $res = $em->getConnection()->exec("DELETE from pickup where id='$id'");

        return $this->redirectToRoute('pickup_location');

    }
    public function addLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $title = $_POST['location'];
        $minnormal = $_POST['minnormal'];
        $delnormal = $_POST['delnormal'];
        $minprime = $_POST['minprime'];
        $delprime = $_POST['delprime'];
        $minexpress = $_POST['minexpress'];
        $delexpress = $_POST['delexpress'];
        $title = $_POST['location'];
        $location = $_POST['vertices'];
        $duration = $_POST['duration'];
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($location == '') {
            $request->getSession()->getFlashBag()->add('error', "Please Draw the area where you want to delivery!");
            return $this->redirectToRoute('delivery_location');

        }
        $date = date('d-m-Y');
        $res = $em->getConnection()->exec("INSERT INTO `location`(`title`, `value`, `created_date`,`minimum_order_amount_normal`,`delivery_charge_normal`,`minimum_order_amount_prime`,`delivery_charge_prime`,`minimum_order_amount_express`,`delivery_charge_express`,`branch`,`duration`) VALUES ('$title','$location','$date','$minnormal','$delnormal','$minprime','$delprime','$minexpress','$delexpress','$branch','$duration')");
        if ($res) {
            $request->getSession()->getFlashBag()->add('success', "New Delivery location created!");
        } else {
            $request->getSession()->getFlashBag()->add('error', "Delivery location already exists! Please try with other location");

        }
        return $this->redirectToRoute('delivery_location');

    }
    public function updateLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $title = $_POST['location'];
        $id = $_POST['id'];
        $minnormal = $_POST['minnormal'];
        $delnormal = $_POST['delnormal'];
        $minprime = $_POST['minprime'];
        $delprime = $_POST['delprime'];
        $minexpress = $_POST['minexpress'];
        $delexpress = $_POST['delexpress'];
        $title = $_POST['location'];
        $location = $_POST['vertices'];
        $duration = $_POST['duration'];

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $date = date('d-m-Y');
        $res = $em->getConnection()->exec("update`location` set `title`='$title',`minimum_order_amount_normal`='$minnormal',`delivery_charge_normal`='$delnormal',`minimum_order_amount_prime`='$minprime',`delivery_charge_prime`='$delprime',`minimum_order_amount_express`='$minexpress',`delivery_charge_express`='$delexpress',duration='$duration',value='$location' where id='$id'");

        $request->getSession()->getFlashBag()->add('success', "New Delivery location updated!");
        return $this->redirectToRoute('view_location', array('id' => $id));

    }
    public function addMembershipAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $name = $_POST['membership_plan'];
        $description = $_POST['description'];
        $avator = $_FILES['image']['name'];
        $post_img = $_FILES['post_img']['name'];
        $uploads_dir = '../uploads';

        /* create new name file */
        $filename = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
        $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION); // jpg
        $basename = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
        $source = $_FILES["image"]["tmp_name"];
        $destionation = "../uploads/" . $basename;
/* move the file */
        move_uploaded_file($_FILES["image"]["tmp_name"], $destionation);

        $filenamepost = uniqid() . "_" . time() . 'POST'; // 5dab1961e93a7_1571494241
        $extensionpost = pathinfo($_FILES["post_img"]["name"], PATHINFO_EXTENSION); // jpg
        $basenamepost = $filenamepost . '.' . $extensionpost; // 5dab1961e93a7_1571494241.jpg
        $source = $_FILES["post_img"]["tmp_name"];
        $destionation = "../uploads/" . $basenamepost;
/* move the file */
        move_uploaded_file($_FILES["post_img"]["tmp_name"], $destionation);
        $res = $em->getConnection()->exec("update membership set name='$name',description='$description',avator='$basename',post_image='$basenamepost' where 1 and 1");
        $res = $em->getConnection()->exec("update membership set status='1' where parent_id='1' ");
        if (!empty($_POST['plan_name'])) {

            $count = 0;
            foreach ($_POST['id'] as $id) {
                $discounted = $_POST['discounted'][$count];
                $mrp = $_POST['mrp'][$count];
                $duration = $_POST['duration'][$count];
                $plan_name = $_POST['plan_name'][$count];

                if ($id == "new") {

                    $res = $em->getConnection()->exec("INSERT INTO `membership`(`avator`, `name`, `price`, `description`, `duration`, `parent_id`, `status`, `discounted_price`,`branch`) VALUES ('','$plan_name','$mrp','','$duration','1','0','$discounted','$branch')");

                } else {
                    $em->getConnection()->exec("update membership set name='$plan_name',price='$mrp',discounted_price='$discounted',duration='$duration',status='0' where 1 and id='$id'");

                }
                $count++;
            }

        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * FROM `membership` where  status='0' and parent_id='0' and 1");
        $statement->execute();
        $menus = $statement->fetchAll();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $cstatement = $connection->prepare("SELECT * FROM `membership` where  status='0' and parent_id='1' and 1");
        $cstatement->execute();
        $child = $cstatement->fetchAll();
        // return $this->redirect('create');
        return $this->render('AppBundle:Admin:AppManager/createMembership.html.twig', array('parent' => $menus, "child" => $child, 'msg' => '<div class="alert alert-success"> <i class="ti-check"></i>Membership updated!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>', ));
    }
    public function createMembershipAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * FROM `membership` where  status='0' and parent_id='0' and 1");
        $statement->execute();
        $menus = $statement->fetchAll();

        $cstatement = $connection->prepare("SELECT * FROM `membership` where  status='0' and parent_id='1' and 1");
        $cstatement->execute();
        $child = $cstatement->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/createMembership.html.twig', array('parent' => $menus, "child" => $child, 'msg' => ''));
    }
    public function manageMembershipAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $categories = $em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' => null));
        return $this->render('AppBundle:Admin:AppManager/manageMembership.html.twig', array('categories' => $categories));
    }

    public function productVariationAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('AppBundle:Admin:AppManager/variation.html.twig', array('data' => ""));
    }
    public function restaurantTypeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $editId = $request->get('editable');
        $deleteId = $request->get('deletable');
        $edit = false;
        $restaurantType = new RestaurantType();
        if ($editId != null) {
            $type = $em->getRepository('AppBundle:RestaurantType')->find($editId);
            if ($type instanceof RestaurantType) {
                $restaurantType = $type;
                $edit = true;
            }
        }

        if ($deleteId != null) {
            $type = $em->getRepository('AppBundle:RestaurantType')->find($deleteId);
            if ($type instanceof RestaurantType) {
                $em->remove($type);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Restaurant Type suucessfully removed from the list");
                return $this->redirectToRoute('work_restaurant_type_manager');
            }
        }
        $form = $this->createForm('AppBundle\Form\RestaurantTypeType', $restaurantType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($restaurantType->getIconFile() != null) {
                    if ($restaurantType->getIconImage() != null) {
                        $restaurantType->removeIconUpload();
                    }
                    $restaurantType->iconUpload();
                }
                if ($edit == false) {
                    $em->persist($restaurantType);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Restaurant type suucessfully updated in the list");
                return $this->redirectToRoute('work_restaurant_type_manager');
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        $types = $em->getRepository('AppBundle:RestaurantType')->findAll();
        return $this->render('AppBundle:Admin:AppManager/restaurantType.html.twig', array(
            'form' => $form->createView(),
            'restaurantType' => $restaurantType,
            'types' => $types,
        ));
    }

    public function orderTypeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $editId = $request->get('editable');
        $deleteId = $request->get('deletable');
        $edit = false;
        $orderType = new OrderType();
        if ($editId != null) {
            $type = $em->getRepository('AppBundle:OrderType')->find($editId);
            if ($type instanceof OrderType) {
                $orderType = $type;
                $edit = true;
            }
        }

        if ($deleteId != null) {
            $type = $em->getRepository('AppBundle:OrderType')->find($deleteId);
            if ($type instanceof OrderType) {
                $em->remove($type);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Order Type suucessfully removed from the list");
                return $this->redirectToRoute('work_order_type_manager');
            }
        }
        $form = $this->createForm('AppBundle\Form\OrderTypeType', $orderType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($edit == false) {
                    $em->persist($orderType);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Order type suucessfully updated in the list");
                return $this->redirectToRoute('work_order_type_manager');
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        $types = $em->getRepository('AppBundle:OrderType')->findAll();
        return $this->render('AppBundle:Admin:AppManager/orderType.html.twig', array(
            'form' => $form->createView(),
            'orderType' => $orderType,
            'types' => $types,
        ));
    }

    public function listCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        return $this->render('AppBundle:Admin:AppManager/categoryList.html.twig');
    }
    public function listCategoryAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value

## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (categoryName like '%" . $searchValue . "%' or
        status like '%" . $searchValue . "%' or
        id like'%" . $searchValue . "%' ) ";
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
## SELECT * from sub_category   where parent_id is  NULL order by priority DESC
        $sel = $connection->prepare("select count(*) as allcount from sub_category  where parent_id is  NULL and  branch ='$branch' order by priority DESC");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("select count(*) as allcount from sub_category where  branch='$branch' and parent_id is  NULL and 1 " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("select * from sub_category    where parent_id is  NULL and branch='$branch' and 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();

        foreach ($res as $row) {

            if ($row['status'] == '0') {
                $active = '<a href="javascript:;" class="btn btn-success btn-xs">active</a>
 <a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="btn btn-danger btn-xs">X</a>';
            } else {
                $active = '<a href="javascript:;" class="btn btn-danger btn-xs">inactive</a>
         <a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="btn btn-success btn-xs"><i class="fa fa-check"></i>';
            }
            if ($row['featured'] == '1') {
                $f = 'No';
            } else {
                $f = 'Yes';
            }
            if ($row['status'] == '0') {
                $status = '<span class="badge badge-success">Active</a>';

                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >deactivate</a>';
            } else {
                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >activate</a>';
                $status = '<span class="badge badge-danger">Inactive</a>';
            }

            $url = $this->generateUrl('category_main_edit', array('id' => $row['id']));

            $data[] = array(
                "nested" => '<input type="checkbox" name="all[]" class="tst" value="' . $row['id'] . '">',
                "id" => $row['id'],
                "categoryName" => "<img src='/uploads/sub-category/icons/" . $row['iconImage'] . "'
       style='width:80px'> " . $row['categoryName'],
                "featured" => $f,
                "priority" => $row['priority'],
                "status" => $status,

                "iconImage" => '<div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="' . $url . '">Edit</a>

                                                           ' . $statuslink . '

                                                        </div>
                                                    </div>
                                                </div>',
            );
        }

## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
        );
        // Send all this stuff back to DataTables

        return new JsonResponse($response);
    }

    public function bulkActionCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $type = $request->get('type');
        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select Category!");
            return $this->redirectToRoute('manage_category');
        } else {
            $checkbox = $_POST['all'];
            if ($type == 2) {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("DELETE a,b FROM `sub_category` as a join sub_category as b on a.id=b.parent_id WHERE a.id='$id'");
                    $res = $em->getConnection()->exec("DELETE a,b,c FROM `sub_category` as a join sub_category as b on a.id=b.parent_id join sub_category as c on b.id=c.parent_id WHERE a.id='$id'");

                    $res = $em->getConnection()->exec("DELETE FROM `sub_category`  WHERE id='$id'");

                }

            } else {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("update sub_category set status='$type' where id='$id'");
                }
            }
        }
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");

        return $this->redirectToRoute('manage_category');

    }

    public function bulkActionNestedCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $type = $request->get('type');
        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select Category!");
            return $this->redirectToRoute('manage_category');
        } else {
            $checkbox = $_POST['all'];
            if ($type == 2) {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("DELETE FROM `sub_category`  WHERE id='$id'");

                }

            } else {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("update sub_category set status='$type' where id='$id'");
                }
            }
        }
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");

        return $this->redirectToRoute('manage_category');

    }
    public function bulkActionSubCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $type = $request->get('type');
        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select Category!");
            return $this->redirectToRoute('manage_category');
        } else {
            $checkbox = $_POST['all'];
            if ($type == 2) {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("DELETE a,b FROM `sub_category` as a join sub_category as b on a.id=b.parent_id WHERE a.id='$id'");
                    $res = $em->getConnection()->exec("DELETE FROM `sub_category`  WHERE id='$id'");

                }

            } else {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("update sub_category set status='$type' where id='$id'");
                }
            }
        }
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");

        return $this->redirectToRoute('manage_category');

    }

    public function bulkActionitemsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $type = $request->get('type');
        if (!isset($_POST['all'])) {
            $request->getSession()->getFlashBag()->add('error', "Please select items!");
            return $this->redirectToRoute('restaurant_view_menu_item');
        } else {
            $checkbox = $_POST['all'];
            if ($type == 2) {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("update menu_item set isActive='$type' where id='$id'");

                }

            } else {
                foreach ($checkbox as $id) {
                    $res = $em->getConnection()->exec("update menu_item set isActive='$type' where id='$id'");
                }
            }
        }
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");

        return $this->redirectToRoute('restaurant_view_menu_item');

    }
    public function listNestedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category   where nested='1' and branch='$branch' order by priority DESC");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/nestedCategoryList.html.twig', array('categories' => $row));
    }

    public function listNestedCategoryAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (a.categoryName like '%" . $searchValue . "%' or
        a.featured like '%" . $searchValue . "%' or
        b.id like'%" . $searchValue . "%' ) ";
        }

## SELECT * from sub_category   where parent_id is  NULL order by priority DESC
        $sel = $connection->prepare("SELECT count(*) as allcount from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='1' and a.branch='$branch' order by a.priority DESC");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("SELECT count(*) as allcount from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='1' and a.branch='$branch' and 1 " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("SELECT a.*,b.categoryName as name from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='1' and a.branch='$branch' and 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();

        foreach ($res as $row) {

            if ($row['featured'] == '1') {
                $f = 'Yes';
            } else {
                $f = 'No';
            }
            if ($row['status'] == '0') {
                $status = '<span class="badge badge-success">Active</a>';

                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >deactivate</a>';
            } else {
                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >activate</a>';
                $status = '<span class="badge badge-danger">Inactive</a>';
            }

            $url = $this->generateUrl('category_main_edit', array('id' => $row['id']));

            $data[] = array(
                "nested" => '<input type="checkbox" name="all[]" class="tst" value="' . $row['id'] . '">',
                "id" => $row['id'],
                "categoryName" => "<img src='/uploads/sub-category/icons/" . $row['iconImage'] . "'
       style='width:80px'> " . $row['categoryName'],
                "parent" => $row['parent_id'],
                "priority" => $row['priority'],
                "status" => $status,

                "iconImage" => '<div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="' . $url . '">Edit</a>

                                                           ' . $statuslink . '

                                                        </div>
                                                    </div>
                                                </div>',
            );
        }

## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
        );
        // Send all this stuff back to DataTables

        return new JsonResponse($response);
    }
    public function createNestedAction(Request $request)
    {
        $category = new SubCategory();
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {

                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    $category->bannerUpload();
                }
                $category->setParentId($request->get('parentid'));
                $category->setNested(1);
                $category->setBranch($branch);
                $em->persist($category);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Nested Category Added To List!");
                if ($branch == 0) {
                    $this->createNestedCategory($category->getId(), $branch, $category->getParentId());

                }

                return $this->redirectToRoute('nested_category_create', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id !='' and branch='$branch' and nested=0");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/createNestedCategory.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
            'pcategory' => $row,
        ));
    }
    public function deleteLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em->getConnection()->exec("delete from location where id='$id'");
        $request->getSession()->getFlashBag()->add('success', "Delivery Location sucessfully removed from the list");

        return $this->redirectToRoute('delivery_location');
    }
    public function locationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from location where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();

               $sqls = $connection->prepare("SELECT * from location where 1 order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/location.html.twig', array('data' => $row,'datas' => $rows, 'time' => $this->get_times()));
    }
    public function viewLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sql = $connection->prepare("SELECT * from location where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();

                $sqls = $connection->prepare("SELECT * from location where id!='$id' order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/viewLocation.html.twig', array('data' => $row,'datas' => $rows, 'time' => $this->get_times()));
    }
    public function createCategoryAction(Request $request)
    {
        $category = new SubCategory();
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {

                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    $category->bannerUpload();
                }
                $category->setBranch($branch);
                $em->persist($category);
                $em->flush();
                if ($branch == 0) {
                    $this->createCategory($category->getId(), $branch, null);
                }
                $request->getSession()->getFlashBag()->add('success', "New Category added to the list!");
                return $this->redirectToRoute('category_main_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:AppManager/categoryCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }
    public function createCategory($id, $b, $parent)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            $branch = $res['id'];
            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,$branch,$id FROM sub_category where id='$id'");
        }

    }

    public function createSubCategory($id, $b, $parents)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            $branch = $res['id'];
            $parent = $this->getParent($branch, $parents);
            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,$parent,featured,priority,status,nested,$branch,$id FROM sub_category where id='$id'");
        }
    }
    public function createNestedCategory($id, $b, $parents)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            $branch = $res['id'];
            $parent = $this->getSubParent($branch, $parents);
            $res = $em->getConnection()->exec("INSERT INTO sub_category(categoryName,categorySlug,iconImage,bannerImage,categoryDescription,parent_id,featured,priority,status,nested,branch,ref) SELECT categoryName,categorySlug,iconImage,bannerImage,categoryDescription,$parent,featured,priority,status,nested,$branch,$id FROM sub_category where id='$id'");
        }

    }

    public function getParent($branch, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from sub_category where branch='$branch' and ref='$id'");
        $statement->execute();
        $data = $statement->fetchAll();
        if (count($data) == 0) {
            return 0;
        } else {
            foreach ($data as $res) {

            }
            return $res['id'];
        }
    }

    public function getSubParent($branch, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from sub_category where branch='$branch' and ref='$id'");
        $statement->execute();
        $data = $statement->fetchAll();
        if (count($data) == 0) {
            return 0;
        } else {
            foreach ($data as $res) {

            }
            return $res['parent_id'];
        }
    }
    public function listSubCategoryAction(Request $request)
    {
        return $this->render('AppBundle:Admin:AppManager/categorySubList.html.twig');
    }

    public function listSubCategoryAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value

## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (a.categoryName like '%" . $searchValue . "%' or
        a.featured like '%" . $searchValue . "%' or
        b.id like'%" . $searchValue . "%' ) ";
        }

## SELECT * from sub_category   where parent_id is  NULL order by priority DESC
        $sel = $connection->prepare("SELECT count(*) as allcount from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='0' and a.branch='$branch' order by a.priority DESC");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("SELECT count(*) as allcount from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='0' and a.branch='$branch' and 1 " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("SELECT a.*,b.categoryName as name from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='0' and a.branch='$branch' and 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();

        foreach ($res as $row) {

            if ($row['featured'] == '1') {
                $f = 'Yes';
            } else {
                $f = 'No';
            }
            if ($row['status'] == '0') {
                $status = '<span class="badge badge-success">Active</a>';

                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >deactivate</a>';
            } else {
                $statuslink = '<a href="' . $this->generateUrl('category_status', array('id' => $row['id'])) . '" class="edit dropdown-item" >activate</a>';
                $status = '<span class="badge badge-danger">Inactive</a>';
            }

            $url = $this->generateUrl('category_main_edit', array('id' => $row['id']));

            $data[] = array(
                "nested" => '<input type="checkbox" name="all[]" class="tst" value="' . $row['id'] . '">',
                "id" => $row['id'],
                "categoryName" => "<img src='/uploads/sub-category/icons/" . $row['iconImage'] . "'
       style='width:80px'> " . $row['categoryName'],
                "parent" => $row['parent_id'],
                "priority" => $row['priority'],
                "status" => $status,

                "iconImage" => '<div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="' . $url . '">Edit</a>

                                                           ' . $statuslink . '

                                                        </div>
                                                    </div>
                                                </div>',
            );
        }

## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
        );
        // Send all this stuff back to DataTables

        return new JsonResponse($response);
    }
    public function createSubCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $category = new SubCategory();
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    $category->bannerUpload();
                }
                if ($branch == 0) {
                    $category->setParentId($_POST['parentid']);
                } else {
                    $ref = $this->getRef($_POST['parentid'], $branch);
                    $category->setParentId($ref);
                }
                // return new response(0);

                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $em->persist($category);
                $em->flush();
                if ($branch == 0) {
                    $this->createSubCategory($category->getId(), $branch, $category->getParentId());
                }
                $request->getSession()->getFlashBag()->add('success', "SubCategory added to the list");
                return $this->redirectToRoute('category_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());

            }
        }
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id is null and branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/categorySubCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
            'pcategory' => $row,
        ));
    }
    public function getRef($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sql = $connection->prepare("SELECT * from sub_category where id ='$id' and branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return 0;
        }
        foreach ($row as $res) {
            # code...
        }
        return $res['ref'];
    }
    public function listSubBrandsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $categories = $em->getRepository('AppBundle:Brands')->findBy(array('branch' => $branch));
        return $this->render('AppBundle:Admin:AppManager/brandSubList.html.twig', array('categories' => $categories));
    }
    public function createBrandAction(Request $request)
    {
        $category = new Brands();
        $form = $this->createForm('AppBundle\Form\BrandsType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    $category->bannerUpload();
                }
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $em->persist($category);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "New Brand Added");

                return $this->redirectToRoute('brand_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:AppManager/brandCreate.html.twig', array(
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
            try {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    if ($category->getIconImage() != null) {
                        $category->removeIconUpload();
                    }
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    if ($category->getBannerImage() != null) {
                        $category->removeBannerUpload();
                    }
                    $category->bannerUpload();
                }

                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Brand Updated");
                return $this->redirectToRoute('brand_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:AppManager/brandCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }
    public function editSubCategoryAction(Request $request, SubCategory $category)
    {
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    if ($category->getIconImage() != null) {
                        $category->removeIconUpload();
                    }
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    if ($category->getBannerImage() != null) {
                        $category->removeBannerUpload();
                    }
                    $category->bannerUpload();
                }
                $category->setParentId($request->get('parentid'));
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Category successfuly added to the list");
                return $this->redirectToRoute('category_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());

            }
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id is null and branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/categorySubCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
            'pcategory' => $row,
        ));
    }
    public function nestedEditAction(Request $request, SubCategory $category)
    {
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    if ($category->getIconImage() != null) {
                        $category->removeIconUpload();
                    }
                    $category->iconUpload();
                }
                $category->setParentId($request->get('parentid'));
                $category->setNested(1);

                if ($category->getBannerFile() != null) {
                    if ($category->getBannerImage() != null) {
                        $category->removeBannerUpload();
                    }
                    $category->bannerUpload();
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Category updated!");
                return $this->redirectToRoute('nested_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id!='' and branch='$branch' and nested=0");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:AppManager/createNestedCategory.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
            'pcategory' => $row,
        ));
    }

    public function editCategoryAction(Request $request, SubCategory $category)
    {
        $form = $this->createForm('AppBundle\Form\SubCategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            try {
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $category->setBranch($branch);
                $category->setCategorySlug(str_replace(" ", "-", strtolower($category->getCategoryName())));
                if ($category->getIconFile() != null) {
                    if ($category->getIconImage() != null) {
                        $category->removeIconUpload();
                    }
                    $category->iconUpload();
                }
                if ($category->getBannerFile() != null) {
                    if ($category->getBannerImage() != null) {
                        $category->removeBannerUpload();
                    }
                    $category->bannerUpload();
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Category sucessfully added to the list");
                return $this->redirectToRoute('category_main_edit', array('id' => $category->getId()));
            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->set('error', $e->getMessage());
            }
        }
        return $this->render('AppBundle:Admin:AppManager/categoryCreate.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }

    public function deleteBannerAction(Request $request, Advertisement $user)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($user->getIsActive()):
                $user->setIsActive('0');
            else:
                $user->setIsActive('1');
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Banner Deleted!');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('error', 'Something went wrong please try again!');
        }

        return $this->redirectToRoute('advertisement_manager');
    }
    public function categoryStatusAction(Request $request, SubCategory $cat)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($cat->getStatus()):
                $cat->setStatus('0');
            else:
                $cat->setStatus('1');
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', '
            category status updated!');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('error', 'Something went wrong please try again!');
        }

        return $this->redirectToRoute('category_main_list');
    }

    public function nestedStatusAction(Request $request, SubCategory $cat)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($cat->getStatus()):
                $cat->setStatus('0');
            else:
                $cat->setStatus('1');
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'New status updated successfully');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('error', 'Something went wrong please try again!');
        }

        return $this->redirectToRoute('nested_category_list');
    }

    public function menuStatusAction(Request $request, MenuItem $cat)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($cat->getIsActive()):
                $cat->setIsActive('0');
            else:
                $cat->setIsActive('1');
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Item status Changed Succesfuly!');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('error', 'Something went wrong please try again!');
        }

        return $this->redirectToRoute('restaurant_view_menu_item');
    }

    public function subcategoryStatusAction(Request $request, SubCategory $cat)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($cat->getStatus()):
                $cat->setStatus('0');
            else:
                $cat->setStatus('1');
            endif;
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', '
            category status Changes Succesfuly!');
        } catch (\Exception $e) {
            $request->getSession()->getFlashBag()->add('error', 'Something went wrong please try again!');
        }

        return $this->redirectToRoute('category_sub_list');
    }

    public function deliverySlotsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from location where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/allLocationSlots.html.twig', array('data' => $row));
    }

    public function allPickupSlotsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
//   $sql = $connection->prepare("SELECT * from restaurants where id='999'");
        // $sql->execute();
        // $rest = $sql->fetchAll();
        // foreach ($rest as $res) {
        //     # code...
        // }
        // $open=$res['openTime'];
        // $close=$res['closeTime'];
        // $start = strtotime($open);
        // $end = strtotime($close);
        // $mins = ($end - $start) / 60;
        // $totalTime=$mins/60;
        // $response=$totalTime/2;
        $locationsql = $connection->prepare("SELECT * from pickup where id='$id'");
        $locationsql->execute();
        $location = $locationsql->fetchAll();

        $sql = $connection->prepare("SELECT * from slots where area='$id'");
        $sql->execute();
        $data = $sql->fetchAll();
        $weekOfdays = array();
        $current_date = time(); //get current date.
        $next = strtotime('+1 days');
        while ($current_date <= $next) {
            $weekOfdays[] = date('d-m-Y', $current_date);
            $current_date = strtotime('+1 day', $current_date); // add next date
        }
// print_r($weekOfdays);
        $array = array();
        foreach ($weekOfdays as $date) {
            $sqls = $connection->prepare("SELECT * from slots where area='$id'");
            $sqls->execute();
            $datas = $sqls->fetchAll();
            foreach ($datas as $d) {

                $array[] = array("id" => $d['id'], "date" => $date, "start" => $d['start'], "end" => $d['end']);
            }
        }
        $a = $connection->prepare("SELECT * from slotstatus where area='$id'");
        $a->execute();
        $getStatus = $a->fetchAll();
        return $this->render('AppBundle:Admin:Pages/pickupSlots.html.twig', array(
            "data" => $data,
            "slot" => $array,
            "status" => $getStatus,
            "id" => $id,
            "location" => $location,
        ));

    }
    public function allDeliverySlotsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
//   $sql = $connection->prepare("SELECT * from restaurants where id='999'");
        // $sql->execute();
        // $rest = $sql->fetchAll();
        // foreach ($rest as $res) {
        //     # code...
        // }
        // $open=$res['openTime'];
        // $close=$res['closeTime'];
        // $start = strtotime($open);
        // $end = strtotime($close);
        // $mins = ($end - $start) / 60;
        // $totalTime=$mins/60;
        // $response=$totalTime/2;
        $locationsql = $connection->prepare("SELECT * from location where id='$id'");
        $locationsql->execute();
        $location = $locationsql->fetchAll();

        $sql = $connection->prepare("SELECT * from slots where area='$id'");
        $sql->execute();
        $data = $sql->fetchAll();
        $weekOfdays = array();
        $current_date = time(); //get current date.
        $next = strtotime('+2 days');
        while ($current_date <= $next) {
            $weekOfdays[] = date('d-m-Y', $current_date);
            $current_date = strtotime('+1 day', $current_date); // add next date
        }
// print_r($weekOfdays);
        $array = array();
        foreach ($weekOfdays as $date) {
            $sqls = $connection->prepare("SELECT * from slots where area='$id'");
            $sqls->execute();
            $datas = $sqls->fetchAll();
            foreach ($datas as $d) {

                $array[] = array("id" => $d['id'], "date" => $date, "start" => $d['start'], "end" => $d['end']);
            }
        }
        $a = $connection->prepare("SELECT * from slotstatus where area='$id'");
        $a->execute();
        $getStatus = $a->fetchAll();
        return $this->render('AppBundle:Admin:Pages/newSlots.html.twig', array(
            "data" => $data,
            "slot" => $array,
            "status" => $getStatus,
            "id" => $id,
            "location" => $location,
        ));

    }

    public function createSlotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $editId = $request->get('editable');
        $area = $request->get('id');

        // $size= sizeof($_POST);
        // print_r($_POST);
        $res = $em->getConnection()->exec("delete  from slots where area='$area'");
        $size = 0;
        foreach ($request->get('start') as $key) {

            $start = $request->get('start')[$size];
            $end = $request->get('end')[$size];
            $slot = $request->get('slot')[$size];

//logic starts
            //insert to tsble
            $date = date('d-m-Y');
            if ($start == $end) {

                $request->getSession()->getFlashBag()->add('error', "Please Add Valid Slots");
                return $this->redirectToRoute('edit_slots', array('id' => $area));
            } else {
                $res = $em->getConnection()->exec("INSERT INTO `slots`(`start`, `end`, `orders`, `date`,`area`) VALUES ('$start','$end','$slot','$date','$area')");
            }

//end of logics
            $size++;
        }

        $request->getSession()->getFlashBag()->add('success', "slots updated");
        return $this->redirectToRoute('edit_slots', array('id' => $area));

    }
    public function editSlotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $editId = $request->get('editable');
        $size = sizeof($_POST);
        // print_r($_POST);

        // return $this->redirectToRoute('create_slot');
        $sql = $connection->prepare("SELECT * from slots where area='$id'");
        $sql->execute();
        $data = $sql->fetchAll();
        $weekOfdays = array();
        $current_date = time(); //get current date.
        $next = strtotime('+2 days');
        while ($current_date <= $next) {
            $weekOfdays[] = date('d-m-Y', $current_date);
            $current_date = strtotime('+1 day', $current_date); // add next date
        }
// print_r($weekOfdays);
        $array = array();
        foreach ($weekOfdays as $date) {
            $sqls = $connection->prepare("SELECT * from slots  where area='$id'");
            $sqls->execute();
            $datas = $sqls->fetchAll();
            foreach ($datas as $d) {

                $array[] = array("id" => $d['id'], "date" => $date, "start" => $d['start'], "end" => $d['end']);
            }
        }
        $a = $connection->prepare("SELECT * from slotstatus  where id='$id'");
        $a->execute();
        $getStatus = $a->fetchAll();
        unset($_POST);
        $locationsql = $connection->prepare("SELECT * from location where id='$id'");
        $locationsql->execute();
        $location = $locationsql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/slots.html.twig', array(
            "data" => $data,
            "slot" => $array,
            "status" => $getStatus,
            "id" => $id,
            "time" => $this->get_times(),
            "location" => $location,
        ));

    }
    public function get_times($default = '19:00', $interval = '+30 minutes')
    {

        $formatter = function ($time) {
            if ($time % 3600 == 0) {
                return date('g:i A', $time);
            } else {
                return date('g:i A', $time);
            }
        };
        $halfHourSteps = range(0, 47 * 1800, 1800);
        return array_map($formatter, $halfHourSteps);
    }

    public function blockSlotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $date = $request->get('date');
        $area = $request->get('area');

        $sql = $connection->prepare("SELECT * from slots where id='$id'");
        $sql->execute();
        $data = $sql->fetchAll();
        foreach ($data as $da) {
            $start = $da['start'];
            $end = $da['end'];
            $res = $em->getConnection()->exec("INSERT INTO `slotstatus`(`start`, `end`, `status`, `date`,`area`) VALUES ('$start','$end','0','$date','$area')");

        }
        $request->getSession()->getFlashBag()->add('success', "slot blocked!");

        return $this->redirectToRoute('delivery_slots', array("id" => $area));
    }
    public function unblockSlotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $date = $request->get('date');
        $area = $request->get('area');

        $res = $em->getConnection()->exec("delete from slotstatus where id='$id'");

        $request->getSession()->getFlashBag()->add('success', "slot unblocked!");

        return $this->redirectToRoute('delivery_slots', array("id" => $area));
    }
    public function getCustomerdataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_POST['data'];
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `billing_address` where customer_d='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $res) {

                $id = $res['id'];

                $data[] = array('id' => $id, 'addressType' => $res['addressType'], 'address' => $res['address'], 'name' => $res['fullName']);

            }
        }
        return new jsonresponse($data);
    }
    public function getTimeByLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_POST['data'];
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT a.* FROM `slots` as a join location as b on a.area=b.id where b.title='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $res) {

                $id = $res['id'];

                $data[] = array('id' => $id, 'start' => $res['start'], 'end' => $res['end']);

            }
        }
        return new jsonresponse($data);
    }
    public function getpickuplocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_POST['data'];
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from pickup where parent='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $res) {

                $id = $res['id'];

                $data[] = array('id' => $id, 'start' => $res['name'], 'end' => '');

            }
        }
        return new jsonresponse($data);
    }
    public function appHomePageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT a.* FROM `menu_item` as a join brands as b on a.brand=b.id  where a.isActive='1' and 1 and a.id in(select menu_item_id from price_variation where status=0) and a.branch='$branch'");
        $statement->execute();
        $menus = $statement->fetchAll();

        $app = $connection->prepare("select * from restaurants where id='$branch'");
        $app->execute();
        $appdata = $app->fetchAll();
        foreach ($appdata as $res) {
            # code...
        }
        $catsql = $connection->prepare("select * from sub_category where parent_id!='' and status='0' and branch='$branch'");
        $catsql->execute();
        $cat = $catsql->fetchAll();

        $featured = explode(", ", $res['featured']);
        $discount = explode(", ", $res['discount']);
        $category = explode(", ", $res['category']);
        $category_one = explode(", ", $res['category_two']);
        $category_two = explode(", ", $res['category_three']);

        return $this->render('AppBundle:Admin:Pages/AppHome.html.twig', array(
            "MenuItem" => $menus,
            "featured" => $res['featured'],
            "discount" => $res['discount'],
            "category" => $category,
            "category_one" => $category_one,
            "category_two" => $category_two,
            "f" => $featured,
            "d" => $discount,
            "featured_label" => $res['featured_label'],
            "discount_label" => $res['discount_label'],
            "category_label" => $res['category_label'],
            "category_one_label" => $res['category_two_label'],
            "category_two_label" => $res['category_three_label'],
            "category_list" => $cat,
        ));

    }

    public function siteSettingAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from website where id='1'");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
        }
        $mode = explode(",", $res['payment_mode']);

        return $this->render('AppBundle:Admin:Pages/siteSetting.html.twig', array(
            "data" => $data, 'featured' => $mode, 'time' => $this->get_times()));
    }

    public function pageAboutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['description'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'About Us', "type" => 'about'));

        }
    }

    public function privacyPolicyAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['privacy'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'Privacy And Policy', "type" => 'privacy'));

        }
    }
    public function termsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['restaurantTerms'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'Terms And Condition', "type" => 'terms'));

        }
    }
    public function refundAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['refund'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'Refund Policy', "type" => 'refund'));

        }
    }
    public function returnAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['returns'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'Return Policy', "type" => 'return'));

        }
    }
    public function walletAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from restaurants where 1");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
            $page = $res['wallet'];
            return $this->render('AppBundle:Admin:Pages/page.html.twig', array(
                "data" => $page, "heading" => 'Wallet Policy', "type" => 'wallet'));

        }
    }
    public function pageUpdateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $type = $_POST['type'];
        $data = addslashes($request->get('data'));
        if ($type == 'about') {
            $res = $em->getConnection()->exec("update restaurants set `description`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_about');
        }
        if ($type == 'privacy') {
            $res = $em->getConnection()->exec("update restaurants set `privacy`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_privacy');
        }
        if ($type == 'terms') {
            $res = $em->getConnection()->exec("update restaurants set `restaurantTerms`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_terms');
        }
        if ($type == 'refund') {
            $res = $em->getConnection()->exec("update restaurants set `refund`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_refund');
        }
        if ($type == 'return') {
            $res = $em->getConnection()->exec("update restaurants set `returns`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_return');
        }
        if ($type == 'wallet') {
            $res = $em->getConnection()->exec("update restaurants set `wallet`='$data' where 1 ");
            $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
            return $this->redirectToRoute('pages_wallet');
        }
    }
    public function siteDetailsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $topbarColor = $_POST['topbarColor'];
        $topbarBackground = $_POST['topbarBackground'];
        $headerColor = $_POST['headerColor'];
        $headerBackground = $_POST['headerBackground'];
        $background = $_POST['background'];
        $backgroundColor = $_POST['backgroundColor'];
        $footerBackground = $_POST['footerBackground'];
        $footerColor = $_POST['footerColor'];
        $primaryColor = $_POST['primaryColor'];
        $primaryBackground = $_POST['primaryBackground'];
        $googleKey = $_POST['googleKey'];
        $facebookKey = $_POST['facebookKey'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $header = addslashes($_POST['header']);
        $footer = addslashes($_POST['footer']);
        $title = addslashes($_POST['title']);
        $description = addslashes($_POST['description']);
        $keywords = addslashes($_POST['keywords']);
        $mode = $_POST['mode'];
        $gateway = addslashes($_POST['gateway']);
        $pstatus = addslashes($_POST['pmode']);
        if ($gateway == 'Paytm') {
            $key = addslashes($_POST['key']);
            $secret = addslashes($_POST['secret']);
        } else {
            $key = addslashes($_POST['rkey']);
            $secret = addslashes($_POST['rsecret']);
        }
        $lpath = '../uploads/restaurant/icons/';
        $logo = $this->uploadLogo($lpath, $_FILES["logo"]);

        $opath = '../uploads/restaurant/banners/';

        $favicon = $this->uploadLogo($opath, $_FILES["favicon"]);
        $default = $this->uploadLogo($opath, $_FILES["default"]);
        if ($mode == '') {
            $modes = '';
        } else {
            $modes = implode(",", $mode);
        }
        $res = $em->getConnection()->exec("update website set topbarColor='$topbarColor',topbarBackground='$topbarBackground',headerColor='$headerColor',headerBackground='$headerBackground',background='$background',backgroundColor='$backgroundColor',footerBackground='$footerBackground',footerColor='$footerColor',primaryColor='$primaryColor',primaryBackground='$primaryBackground',googleKey='$googleKey',facebookKey='$facebookKey',header='$header',footer='$footer',title='$title',keywords='$keywords',description='$description',payment_mode='$modes',payment_gateway='$gateway',mode='$pstatus',gateway_id='$key',gateway_secret='$secret',start='$start',end='$end',logo='$logo',default_image='$default',favicon='$favicon' where id='1'");

        $request->getSession()->getFlashBag()->add('success', "Data Updated Succesfuly");
        $statement = $connection->prepare("SELECT * from website where id='1'");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach ($data as $res) {
            # code...
        }
        $mode = explode(",", $res['payment_mode']);
        return $this->redirectToRoute('site_setting', array("data" => $data, "featured" => $mode));

    }
    public function uploadLogo($uploads_dir, $file)
    {
        // $uploads_dir = '../uploads/documents';
        $filename = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
        $extension = pathinfo($file["name"], PATHINFO_EXTENSION); // jpg
        $basename = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
        $source = $file["tmp_name"];
        $destionation = $uploads_dir . $basename;
        move_uploaded_file($file["tmp_name"], $destionation);
        return $basename;
    }
    public function createHomePageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $featured = $request->get('featured');
        $discount = $request->get('discount');
        $category = $request->get('category');
        $category_one = $request->get('category_one');
        $category_two = $request->get('category_two');
        $discount_label = addslashes($request->get('discount_label'));
        $featured_label = addslashes($request->get('featured_label'));
        $category_label = addslashes($request->get('category_label'));
        $category_label_one = addslashes($request->get('category_label_one'));
        $category_label_two = addslashes($request->get('category_label_two'));
        if ($featured == '') {
            $featured = '';
        } else {
            $featured = implode(", ", $featured);
        }
        if ($discount == '') {
            $discount = '';
        } else {
            $discount = implode(", ", $discount);
        }
        if ($category == '') {
            $category = '';
        } else {
            $category = implode(", ", $category);
        }
        if ($category_one == '') {
            $category_one = '';
        } else {
            $category_one = implode(", ", $category_one);
        }
        if ($category_two == '') {
            $category_two = '';
        } else {
            $category_two = implode(", ", $category_two);
        }
        $res = $em->getConnection()->exec("update restaurants set featured='$featured',discount='$discount',featured_label='$featured_label',discount_label='$discount_label',category='$category',category_label='$category_label',category_two='$category_one',category_two_label='$category_label_one',category_three='$category_two',category_three_label='$category_label_two'  where id='$branch'");

        $request->getSession()->getFlashBag()->add('success', "Data Updated Succesfuly");

        return $this->redirectToRoute('app_home_page');

    }
    public function transactionListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $featured = $request->get('featured');
        $statement = $connection->prepare("SELECT a.id,a.trayStatus,a.customerName,b.mobileNo,b.email,a.address,a.paymentType,a.orderStatus,a.orderAmount,a.orderDate,a.orderStatus,a.tray,a.fixtime,a.fixDate,a.area FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.orderStatus='completed' and a.branch='$branch'");
        $statement->execute();
        $order = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Billing/Transaction.html.twig', array(
            "data" => $order,
        ));
    }
    public function shopDetailsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $featured = $request->get('featured');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * from restaurants where id='999'");
        $statement->execute();
        $orders = $statement->fetchAll();
        $order = array();
        foreach ($orders as $or) {
            $order[] = array('id' => $or['id'], 'countryCode' => $or['countryCode'], 'currencyFormat' => $or['currencyFormat'], 'sms' => $or['sms'], 'apiKey' => $or['apiKey'], 'firebase' => $or['firebase'], 'description' => html_entity_decode($or['description']), 'privacy' => html_entity_decode($or['privacy']), 'restaurantTerms' => html_entity_decode($or['restaurantTerms']), 'refund' => html_entity_decode($or['refund']), 'returns' => html_entity_decode($or['returns']), 'wallet' => html_entity_decode($or['wallet']), 'facebook_url' => $or['facebook_url'], 'instagram_url' => $or['instagram_url'], 'youtube_url' => $or['youtube_url'], 'twitter_url' => $or['twitter_url'], 'play_store' => $or['play_store'], 'apple_store' => $or['apple_store'],'number_format' => $or['number_format']);

        }
        return $this->render('AppBundle:Admin:Shop/shopDetails.html.twig', array(
            "data" => $order,
        ));
    }
    public function updateShopDetailsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $about = addslashes($request->get('about'));
        $privacy = addslashes($request->get('privacy'));
        $terms = addslashes($request->get('terms'));
        $refund = addslashes($request->get('refund'));
        $return = addslashes($request->get('return'));
        $wallet = addslashes($request->get('wallet'));
        $facebook = addslashes($request->get('facebook'));
        $instagram = addslashes($request->get('instagram'));
        $play_store = addslashes($request->get('play_store'));
        $app_store = addslashes($request->get('app_store'));
        $youtube = addslashes($request->get('youtube'));
        $twitter = addslashes($request->get('twitter'));
        $currency = addslashes($request->get('currency'));
        $sms = addslashes($request->get('sms'));
        $apiKey = addslashes($request->get('apiKey'));
        $firebase = addslashes($request->get('firebase'));
        $country = addslashes($request->get('country'));
        $numberFormat = addslashes($request->get('numberformat')); 
        $connection = $em->getConnection();

        $res = $em->getConnection()->exec("update restaurants set `description`='$about',`privacy`='$privacy',`restaurantTerms`='$terms',`refund`='$refund',`returns`='$return',`wallet`='$wallet',facebook_url='$facebook',instagram_url='$instagram',play_store='$play_store',apple_store='$app_store',youtube_url='$youtube',twitter_url='$twitter',sms='$sms',apiKey='$apiKey',firebase='$firebase',countryCode='$country',currencyFormat='$currency',number_format='$numberFormat' where 1 ");

        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
        $statement = $connection->prepare("SELECT * from restaurants where id='$branch'");
        $statement->execute();
        $order = $statement->fetchAll();
        return $this->redirectToRoute('app_shop_details');
    }
    public function sendNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $request->getSession()->getFlashBag()->add('success', "Notification sent!");

        return $this->redirectToRoute('send_push_notification');
    }

    public function manageCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id is null order by priority desc");
        $sql->execute();
        $category = $sql->fetchAll();

        return $this->render('AppBundle:Admin:Pages/manageCategories.html.twig', array(
            "category" => $category,
            "subcategory" => array(),
            "nestedcategory" => array(),
            "nested" => array(),
            "mainid" => '',
            "subid" => '',
            "subid" => '',
            "subadd" => 1,
            "nestedadd" => 1,
        ));

    }

    public function manageSubCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id is null order by priority desc");
        $sql->execute();
        $category = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id='$id'  order by priority desc");
        $sql->execute();
        $subcategory = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/manageCategories.html.twig', array(
            "category" => $category,
            "subcategory" => $subcategory,
            "nestedcategory" => array(),
            "nested" => array(),
            "mainid" => $id,
            "subid" => 1,
            "subadd" => 0,
            "nestedadd" => 1,
        ));

    }

    public function manageNestedCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $parent = $request->get('parent');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id is  null order by priority desc");
        $sql->execute();
        $category = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id='$parent'  order by priority desc");
        $sql->execute();
        $subcategory = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from sub_category where branch='$branch' and parent_id='$id'  order by priority desc");
        $sql->execute();
        $nestedcategory = $sql->fetchAll();

        $sql = $connection->prepare("SELECT * from sub_category where parent_id !='' and branch='$branch' and nested=0");
        $sql->execute();
        $nest = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/manageCategories.html.twig', array(
            "category" => $category,
            "subcategory" => $subcategory,
            "nestedcategory" => $nestedcategory,
            "nested" => $nest,
            "mainid" => $parent,
            "subid" => $id,
            "subadd" => 1,
            "nestedadd" => 0,
        ));

    }
    public function addCategoryAction(Request $request)
    {
        $category = new SubCategory();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $store = $user->getBranch();
        $branch = 0;
        $name = $request->get('name');
        $priority = $request->get('priority');
        $parent = $request->get('parent');
        $nested = $request->get('nested');
        $status = $request->get('status');
        $type = $request->get('type');
        if ($store == 0) {
            $parent = $parent;
        } else {
            $ref = $this->getRef($parent, $store);
            $parent = $ref;
        }
        if (isset($status)) {
            $status = 0;
        } else {
            $status = 1;
        }
        $visible = $request->get('visiblity');
        if (isset($visible)) {
            $visible = 0;
        } else {
            $visible = 1;
        }
        if ($parent == '0') {
            $parent = null;
        } else {
            $parent = $parent;
        }
        $image = $request->get('image');

        $em = $this->getDoctrine()->getManager();
        $category->setCategoryName($name);
        $category->setFeatured($visible);
        $category->setStatus($status);
        $category->setNested($nested);
        $category->setPriority($priority);
        $category->setCategorySlug(str_replace(" ", "-", strtolower($name)));
        $file = $this->uploadCategoryIcon();
        $category->setIconImage($file);
        $category->setBranch($branch);
        $category->setParentId($parent);
        $category->setBranch($branch);
        $em->persist($category);
        $em->flush();
        if ($branch == 0) {
            if ($type == 0) {
                $this->createCategory($category->getId(), $branch, null);
            } elseif ($type == 1) {
                $this->createSubCategory($category->getId(), $branch, $category->getParentId());
            }
        }
        $request->getSession()->getFlashBag()->add('success', "New Category Added!");
        return $this->redirectToRoute('manage_category', array('id' => $category->getId()));
    }

    public function updateCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $category = $em->getRepository('AppBundle:SubCategory')->find($id);
// $category = new SubCategory();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $name = $request->get('name');
        $priority = $request->get('priority');
        $status = $request->get('status');
        $parent = $request->get('parent');
        $type = $request->get('type');
        $nested = $request->get('nested');
        if (isset($status)) {
            $status = 0;
        } else {
            $status = 1;
        }
        $visible = $request->get('visiblity');
        if (isset($visible)) {
            $visible = 0;
        } else {
            $visible = 1;
        }
        if ($parent == '0') {
            $parent = null;
        } else {
            $parent = $parent;
        }
        $image = $request->get('image');

        $em = $this->getDoctrine()->getManager();
        $category->setCategoryName($name);
        $category->setFeatured($visible);
        $category->setStatus($status);
        $category->setPriority($priority);
        $category->setNested($nested);
        $category->setCategorySlug(str_replace(" ", "-", strtolower($name)));
        $file = $this->uploadCategoryIcon();
        $category->setIconImage($file);
        $category->setBranch($branch);
        $category->setParentId($parent);
        $category->setBranch($branch);
        $em->persist($category);
        $em->flush();
        if ($branch == 0) {
            if ($type == 0) {
                // $this->createCategory($category->getId(), $branch, null);
            } elseif ($type == 1) {
                // $this->createSubCategory($category->getId(), $branch, $category->getParentId());
            }
        }
        $request->getSession()->getFlashBag()->add('success', "Changes Saved!");
        return $this->redirectToRoute('manage_category', array('id' => $category->getId()));
    }
    public function uploadCategoryIcon()
    {
        $avator = $_FILES['image']['name'];
        $uploads_dir = '../uploads';

        /* create new name file */
        $filename = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
        $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION); // jpg
        $basename = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
        $source = $_FILES["image"]["tmp_name"];
        $destionation = "../uploads/sub-category/icons/" . $basename;
/* move the file */
        move_uploaded_file($_FILES["image"]["tmp_name"], $destionation);
        return $basename;
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $search = trim($request->get('data'));
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from customer_order where 1 and branch='$branch' and id like '%" . $search . "%' or customerName like '%" . $search . "%'  or area like '%" . $search . "%'  or orderType like '%" . $search . "%'  or customer_d like '%" . $search . "%'  or fixDate like '%" . $search . "%'   order by id desc");
        $sql->execute();
        $ordernumber = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from menu_item where 1 and branch='$branch' and isActive!=2 and id like '%" . $search . "%' or itemName like '%" . $search . "%'  order by id desc");
        $sql->execute();
        $itemData = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from customer where branch='$branch' and id like '%" . $search . "%' or email like '%" . $search . "%'  or mobileNo like '%" . $search . "%' or channel like '%" . $search . "%' order by id desc");
        $sql->execute();
        $customerData = $sql->fetchAll();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id !='' and branch='$branch' and nested=0");
        $sql->execute();
        $nest = $sql->fetchAll();
        return $this->render('AppBundle:Admin:Pages/search.html.twig', array(
            "ordernumber" => $ordernumber,
            "itemData" => $itemData,
            "customerData" => $customerData,
            "data" => $search,
        ));

    }
////////////////////////////////////////////////////////////////////

}
