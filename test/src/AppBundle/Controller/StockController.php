<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Stock;
use AppBundle\Entity\StockLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class StockController extends Controller
{
    public function pageNotFoundAction()
    {
        throw new NotFoundHttpException();
    }
    public function exportSubcategoryAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT a.*,b.categoryName as name from sub_category as a join sub_category  as b on a.parent_id=b.id  where a.parent_id is not NULL and a.nested='0' and a.branch='$branch' order by a.priority DESC");
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $rows = $sql->fetchAll();
        if (count($rows) == 0) {
            $data[] = array("Id" => "", "Category Name" => "", "Priority" => "", "Parent Category" => "", "Status" => '');
        } else {

            foreach ($rows as $row) {
                if ($row['status'] == '1') {
                    $status = "Deactivated";
                } else {
                    $status = "Activated";

                }
                $data[] = array("Id" => $row['id'], "Category Name" => $row['categoryName'], "Priority" => $row['priority'], "Parent Category" => $row['name'], "Status" => $status);

            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }
        $this->array_csv_downloadAction($data, 'sub-category.csv');

        return $this->render('AppBundle:Admin:AppManager/categorySubList.html.twig');

    }

    public function exportCategoryAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from sub_category where parent_id is null and branch='$branch'");
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $rows = $sql->fetchAll();
        if (count($rows) == 0) {
            $data[] = array("Id" => "", "Category Name" => "", "Priority" => "", "Status" => '');
        } else {

            foreach ($rows as $row) {
                if ($row['status'] == '1') {
                    $status = "Deactivated";
                } else {
                    $status = "Activated";

                }
                $data[] = array("Id" => $row['id'], "Category Name" => $row['categoryName'], "Priority" => $row['priority'], "Status" => $status);

            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }

        $this->array_csv_downloadAction($data, 'main-category.csv');

        return $this->render('AppBundle:Admin:AppManager/categorySubList.html.twig');

    }

    public function exportBrandsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from brands where branch='$branch' order by categoryName asc");
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $rows = $sql->fetchAll();
        if (count($rows) == 0) {
            $data[] = array("Id" => "", "Brand Name" => "");
        } else {

            foreach ($rows as $row) {

                $data[] = array("Id" => $row['id'], "Brand Name" => $row['categoryName']);

            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }

        $this->array_csv_downloadAction($data, 'brands.csv');

        return $this->render('AppBundle:Admin:AppManager/categorySubList.html.twig');

    }
    public function exportStockAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from menu_item where isActive='1' and branch='$branch'");
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            foreach ($row as $rrs) {
                if ($rrs['type'] == '1') {
                    $type = 'KG';

                    $data[] = array('Item Name' => $rrs['itemName'], 'Variation Name' => '1 KG', 'Quantity' => $rrs['totalQty'], 'Unit' => $type);
                }
            }
            $type = "PC";
            $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type,b.stock FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0' and a.type='0'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {

                $datas = array();
            } else {
                foreach ($row as $rr) {
                    $datas[] = array('Item Name' => $rr['itemName'], 'Variation Name' => $rr['variationName'], 'Quantity' => $rr['stock'], 'Unit' => $type);
                }
            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }
        if (isset($data)) {
            $resp = array_merge($datas, $data);
        } else {
            $resp = array_merge($datas);
        }
        $this->array_csv_downloadAction($resp, 'stock.csv');
// $menu=$em->getRepository('AppBundle:MenuItem')->findAll();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive=1 and b.status=0 and a.branch='$branch'");
        $statement->execute();
        $menu = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Stock/allStockReports.html.twig', array(
            'myExtend' => $myExtend,
            'menu' => $menu,
        ));

    }

    public function exportNestedCategoryAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT a.*,b.categoryName as name from sub_category as a join sub_category  as b on a.parent_id=b.id  where 1 and a.nested='1' and a.branch='$branch' order by a.priority DESC");
        // print("SELECT a.*,b.categoryName as name from sub_category as a join sub_category  as b on a.parent_id=b.id  where 1 and a.nested='1' and a.branch='$branch' order by a.priority DESC");
        
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $rows = $sql->fetchAll(); 
        if (count($rows) == 0) {
            $data[] = array("Id" => "", "Category Name" => "", "Priority" => "", "Parent Category" => "", "Status" => '');
        } else {

            foreach ($rows as $row) {
                if ($row['status'] == '1') {
                    $status = "Deactivated";
                } else {
                    $status = "Activated";

                }
                $data[] = array("Id" => $row['id'], "Category Name" => $row['categoryName'], "Priority" => $row['priority'], "Parent Category" => $row['name'], "Status" => $status);

            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }
        // return new jsonresponse(0);
        $this->array_csv_downloadAction($data, 'nested-category.csv');

        return $this->render('AppBundle:Admin:AppManager/categorySubList.html.twig');

    }

    public function array_csv_downloadAction($array, $filename, $delimiter = ",")
    {
        ob_start();
        
        header("Content-Type: text/csv; charset=utf-8");
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        
        // clean output buffer
        ob_end_clean();

        $handle = fopen('php://output', 'w');
        
        // use keys as column titles
        fputcsv($handle, array_keys($array['0']));
        
        foreach ($array as $value) {
            fputcsv($handle, $value, $delimiter);
        }

        fclose($handle);

        // flush buffer
        ob_flush();

        // use exit to get rid of unexpected output afterward
        exit();
    }
    public function stockAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
    $menus = $em->getRepository('AppBundle:Stock')->findBy(array('mode'=>0,'branch'=>$branch));
        return $this->render('AppBundle:Admin:Stock/stock.html.twig', array(
            'menuItems' => $menus));
    }
    public function stockReportsAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $em = $this->getDoctrine()->getManager();
        $myExtend = "Admin";
        $em = $this->getDoctrine()->getManager();
        $myExtend = "Admin";
        $stock = $em->getRepository('AppBundle:PriceVariation')->findAll();
// $menu=$em->getRepository('AppBundle:MenuItem')->findAll();
        $connection = $em->getConnection();

        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive!='1' and totalQty < alert and branch='$branch'");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
## Fetch records
        $empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock,b.status FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' and b.stock<b.minItem and a.branch='$branch' and b.status='0' and isActive='1'");
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
// $response=array_merge($res,$resdata);
        if (isset($res)) {
            $resp = array_merge($res, $resdata);
        } else {
            $resp = array_merge($resdata);
        }
        return $this->render('AppBundle:Admin:Stock/stockReports.html.twig', array(
            'myExtend' => $myExtend,
            'stock' => $stock,
            'menu' => $resp,
        ));
    }
    public function allstockReportsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $myExtend = "Admin";
        $stock = $em->getRepository('AppBundle:PriceVariation')->findAll();
// $menu=$em->getRepository('AppBundle:MenuItem')->findAll();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and branch='$branch' and isActive='1'");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
## Fetch records
        $empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock,b.status FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' and a.branch='$branch' and a.isActive=1 and b.status=0");
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
// $response=array_merge($res,$resdata);
        if (isset($res)) {
            $resp = array_merge($res, $resdata);
        } else {
            $resp = array_merge($resdata);
        }

        return $this->render('AppBundle:Admin:Stock/allStockReports.html.twig', array(
            'myExtend' => $myExtend,
            'stock' => $stock,
            'menu' => $resp,
        ));
    }

    public function ajaxoutStockListAction(Request $request)
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
            $searchQuery = " and a.itemName like '%" . $searchValue . "%' or
        b.variationName  like '%" . $searchValue . "%";
        }

        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive='1' and totalQty < alert");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
##SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id
        $sel = $connection->prepare("SELECT count(*) as allcount FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where b.stock<b.minItem  and a.isActive='1' and b.status='0'");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("SELECT count(*) as allcount FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where b.stock < b.minItem  and  a.isActive='1' and b.status='0' " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("SELECT a.*,b.variationName,b.stock,b.minItem FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where  b.stock < b.minItem  and  a.isActive='1' and b.status='0' and a.type='0' " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
// $response=array_merge($res,$resdata);
        if (isset($res)) {
            $resp = array_merge($res, $resdata);
        } else {
            $resp = array_merge($resdata);
        }
        foreach ($resp as $row) {

            $url = $this->generateUrl('restaurant_edit_menu_item', array('id' => $row['id']));
            $data[] = array(
                "id" => $row['id'],
                "itemName" => '<a href="' . $url . '">' . $row['itemName'] . '</a>',
                "variationName" => $row['variationName'],
                "stock" => $row['stock'],
                "status" => '<b style="color:red;">Out Of Stock</b>',
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
    public function ajaxAllStockAction(Request $request)
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
            $searchQuery = " and (a.itemName like '%" . $searchValue . "%' or
        b.variationName  like '%" . $searchValue . "%";
        }

##SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id
        $sel = $connection->prepare("SELECT count(*) as allcount FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id ");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("SELECT count(*) as allcount FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where 1 " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];
        $resps = $connection->prepare("SELECT id,itemName,isActive,type,alert,totalQty FROM `menu_item` where type='1' and isActive='1'");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty']);
            }
        }
## Fetch records
        $empQuery = $connection->prepare("SELECT a.id,a.itemName,a.isActive,a.type,a.alert,b.variationName,b.stock FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.type='0' " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();
        $response = array_merge($res, $resdata);
        if (isset($res)) {
            $resp = array_merge($res, $resdata);
        } else {
            $resp = array_merge($resdata);
        }
        foreach ($resp as $row) {

            if ($row['stock'] <= $row['alert']) {
                $f = '<b style="color:red;">Stock Getting Low</b>';
            } else {
                $f = ' <b style="color:green;">In Stock</b>';
            }
            $url = $this->generateUrl('restaurant_edit_menu_item', array('id' => $row['id']));
            $data[] = array(
                "id" => $row['id'],
                "itemName" => '<a href="' . $url . '">' . $row['itemName'] . '</a>',
                "variationName" => $row['variationName'],
                "stock" => $row['stock'],
                "status" => $f,
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
    public function stockReturnAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
                $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $menus = $em->getRepository('AppBundle:Stock')->findBy(array('mode'=>1,'branch'=>$branch));
        return $this->render('AppBundle:Admin:Stock/stockReturn.html.twig', array(
            'menuItems' => $menus));
    }
    public function addStockCsvAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $date = $request->get('date');
        $sqln = $connection->prepare("SELECT * from stock where  1");
        $sqln->execute();
        $rown = $sqln->fetchAll();
        $ref = count($rown) + 10000;
        $description = 'added from csv';
                $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
// $sqls = $connection->prepare("SELECT * from sub_category ");
        // $sqls->execute();
        // $rows = $sqls->fetchAll();
        $fn = $_FILES["file"]["tmp_name"];
        $file = fopen($fn, "r");
        $count = 1;
        // print_r($column);
        while (($column = fgetcsv($file, 10000, ",")) !== false) {
            $id = addslashes($column[0]);
            $itemName = addslashes($column[2]);
            $variation = addslashes($column[3]);
            $qty = $column[4];
            if ($id == 'id') {

            } else {

                $itemNameExist = $this->existAction("SELECT * FROM `menu_item` where itemName='$itemName'");
                if ($itemNameExist != '0') {
                    $menuid = $this->rowgetidAction("SELECT * FROM `menu_item` where itemName='$itemName'");

                    $type = $column[5];
                    if ($type == 'KG') {
                        $sql = $connection->prepare("SELECT * FROM `menu_item` where `id`='$id'");
                        $sql->execute();
                        $row = $sql->fetchAll();
                        foreach ($row as $res) {
                            $vqty = $res['totalQty'];
                            if ($vqty == '' || $vqty < 1) {
                                $vqty = 0;
                            }
                            $ids = $res['id'];
                            $newqty = $qty + $vqty;
                            $em->getConnection()->exec("update menu_item set totalQty='$newqty'  where id='$id'");
                            $em->getConnection()->exec("INSERT INTO `stock_logs`(`qty`, `ref`, `stockId`) VALUES ('$qty','$ref','$id')");
                        }
                    } else {

                        //add producr
                        $sql = $connection->prepare("SELECT * FROM `price_variation` where  id='$id'");
                        $sql->execute();
                        $row = $sql->fetchAll();
                        foreach ($row as $res) {
                            $vqty = $res['stock'];
                            if ($vqty == '' || $vqty < 1) {
                                $vqty = 0;
                            } else {
                                $vqty = $vqty;
                            }
                            $ids = $res['id'];
                            $newqty = $qty + $vqty;
                            $em->getConnection()->exec("update price_variation set stock='$newqty'  where id='$id'");

                            $em->getConnection()->exec("INSERT INTO `stock_logs`(`qty`, `ref`, `stockId`) VALUES ('$qty','$ref','$id')");

                        }

                    }
                }
            }

        }
        $stock = new Stock();
        $stock->setAddedBy('Admin');
        $stock->setRef($ref);
        $stock->setDescription($description);
        $stock->setDate($date);
        $stock->setTime(date('h:i A'));
        $stock->setMode(0);
        $stock->setBranch($branch);
        $em->persist($stock);
        $em->flush();
        $request->getSession()->getFlashBag()->add('success', 'Stock updated!');

        $menus = $em->getRepository('AppBundle:Stock')->findBy(array('mode'=>0,'branch'=>$branch));
// return new response('hehhe');
        return $this->render('AppBundle:Admin:Stock/stock.html.twig', array(
            'menuItems' => $menus));
    }
    public function rowgetidAction($query)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare($query);
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {
            # code...
            return $res['id'];

        }
    }

    public function existAction($query)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare($query);
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return 0;
        } else {
            return 1;
        }

    }
    public function addStockAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $menus = $em->getRepository('AppBundle:MenuItem')->findby(array("branch" => $branch, "isActive" => 1));
        // $connection = $em->getConnection();
        // $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id ");
        // $statement->execute();
        //  $menus = $statement->fetchAll();
        return $this->render('AppBundle:Admin:Stock/addStock.html.twig', array(
            'menuItems' => $menus,
        ));
    }

    public function stockReturnFormAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
                $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $menus = $em->getRepository('AppBundle:MenuItem')->findby(array("branch" => $branch, "isActive" => 1));
        return $this->render('AppBundle:Admin:Stock/returnStock.html.twig', array(
            'menuItems' => $menus,
        ));
    }
    public function addStockItemAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $date = $request->get('date');
        // $ref=$request->get('ref');
        $description = $request->get('description');
        $selid = $request->get('selid');
        $qty = $request->get('selqty');
        $type = $request->get('type');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sqln = $connection->prepare("SELECT * from stock where  1");
        $sqln->execute();
        $rown = $sqln->fetchAll();
        $ref = count($rown) + 10000;
        $stock = new Stock();
        $stock->setAddedBy('Admin');
        $stock->setRef($ref);
        $stock->setDescription($description);
        $stock->setDate($date);
        $stock->setTime(date('h:i A'));
        $stock->setMode(0);
        $stock->setBranch($branch);
        $em->persist($stock);
        $em->flush();
        $count = 0;
        foreach ($selid as $id) {
            // foreach ($selqty as $qty) {

            $stockLogs = new StockLogs();
            $stockLogs->setRef($ref);
            $stockLogs->setQty($qty[$count]);
            $stockLogs->setType($type[$count]);

            if ($_POST['type'][$count] == '1') {
                $statement = $connection->prepare("SELECT * from menu_item where id='$id'");
                $statement->execute();
                $menuItems = $statement->fetchAll();
                foreach ($menuItems as $me) {
                    # code...

                    $oldStock = $me['totalQty'];
                    $fstock = $oldStock + $qty[$count];
                    // $em->getConnection()->exec("update price_variation set stock='$fstock' where 1 and menu_item_id='$id'");
                    $em->getConnection()->exec("update menu_item set totalQty='$fstock' where 1 and id='$id'");
                    // return new response("update menu_item set totalQty='$fstock' where 1 and id='$id'");
                }

            } else {

                $statement = $connection->prepare("SELECT * from price_variation where id='$id'");
                $statement->execute();
                $re = $statement->fetchAll();
                foreach ($re as $st) {
                    $oldStock = $st['stock'];
                    $fstock = $oldStock + $qty[$count];
                    $em->getConnection()->exec("update price_variation set stock='$fstock' where 1 and id='$id'");

                }
            }

            $stockLogs->setStockId($id);
            $ems = $em->getRepository('AppBundle:StockLogs')->findBy(array('ref' => $ref, 'stockId' => $id));
            if (empty($ems)) {
                $em->persist($stockLogs);
                $em->flush();
            } else {

            }
            $count++;
// }
        }

        $menus = $em->getRepository('AppBundle:stock')->findBy(array('mode'=>0,'branch'=>$branch));
        return $this->render('AppBundle:Admin:Stock/stock.html.twig', array(
            'menuItems' => $menus,
            'res' => $_POST,
        ));
    }

    public function returnStockItemAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $date = $request->get('date');
        $sqln = $connection->prepare("SELECT * from stock where  1");
        $sqln->execute();
        $rown = $sqln->fetchAll();
        $ref = count($rown) + 10000;
        $description = $request->get('description');
        $selid = $request->get('selid');
        $varid = $request->get('varid');
        $qty = $request->get('selqty');
        $type = $request->get('type');

        $stock = new Stock();
        $stock->setAddedBy('Admin');
        $stock->setRef($ref);
        $stock->setDescription($description);
        $stock->setDate($date);
        $stock->setTime(date('h:i A'));
        $stock->setMode(1);
        $stock->setBranch($branch);

        $em->persist($stock);
        $em->flush();
        $count = 0;
        foreach ($selid as $id) {
            // foreach ($selqty as $qty) {

            $stockLogs = new StockLogs();
            $stockLogs->setRef($ref);
            $stockLogs->setQty($qty[$count]);
            $stockLogs->setType($type[$count]);

            if ($_POST['type'][$count] == '1') {
                $statement = $connection->prepare("SELECT * from menu_item where id='$id'");
                $statement->execute();
                $menuItems = $statement->fetchAll();
                foreach ($menuItems as $me) {
                    # code...

                    $oldStock = $me['totalQty'];
                    $fstock = $oldStock - $qty[$count];
                    // $em->getConnection()->exec("update price_variation set stock='$fstock' where 1 and menu_item_id='$id'");
                    $em->getConnection()->exec("update menu_item set totalQty='$fstock' where 1 and id='$id'");
                    // return new response("update menu_item set totalQty='$fstock' where 1 and id='$id'");
                }

            } else {

                $statement = $connection->prepare("SELECT * from price_variation where id='$id'");
                $statement->execute();
                $re = $statement->fetchAll();
                foreach ($re as $st) {
                    $oldStock = $st['stock'];
                    $fstock = $oldStock - $qty[$count];
                    $em->getConnection()->exec("update price_variation set stock='$fstock' where 1 and id='$id'");

                }
            }

            $stockLogs->setStockId($id);
            $ems = $em->getRepository('AppBundle:StockLogs')->findBy(array('ref' => $ref, 'stockId' => $id));
            if (empty($ems)) {
                $em->persist($stockLogs);
                $em->flush();
            } else {

            }
            $count++;
// }
        }

        $menus = $em->getRepository('AppBundle:stock')->findBy(array('mode'=>1,'branch'=>$branch));
        return $this->render('AppBundle:Admin:Stock/stockReturn.html.twig', array(
            'menuItems' => $menus,
            'res' => $_POST,
        ));
    }
    public function stockDetailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $stock = $em->getRepository('AppBundle:Stock')->findBy(array('ref' => $id));
        $stockLogs = $em->getRepository('AppBundle:StockLogs')->findBy(array('ref' => $id));
        $resps = $connection->prepare("SELECT b.qty,a.id,a.itemName,a.isActive,a.type,a.alert,a.totalQty,b.qty FROM `menu_item` as a join stock_logs as b on a.id=b.stockId where 1 and b.ref='$id' and b.type=1");
        $resps->execute();
        $ress = $resps->fetchAll();
        if (count($ress) == 0) {
            $resdata = array();
        } else {
            foreach ($ress as $re) {
                $resdata[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => "1 KG", 'stock' => $re['totalQty'], 'qty' => $re['qty']);
            }
        }
        $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id join stock_logs as c on b.id=c.stockId where c.ref='$id' and c.type=0");
        $statement->execute();
        $results = $statement->fetchAll();
        if (count($results) == 0) {
            $result = array();
        } else {
            foreach ($results as $re) {
                $result[] = array('id' => $re['id'], 'itemName' => $re['itemName'], 'isActive' => $re['isActive'], 'type' => $re['type'], 'alert' => $re['alert'], 'variationName' => $re['variationName'], 'stock' => $re['stock'], 'qty' => $re['qty']);
            }
        }
        if (count($resdata) == 0) {
            $result = $result;
        } elseif (count($result) == 0) {
            $result = $resdata;

        } else {
            $result = array_merge($result, $resdata);
        }
        return $this->render('AppBundle:Admin:Stock/stockDetail.html.twig', array(
            'stock' => $stock,
            'stockLogs' => $stockLogs,
            'menu' => $result,
        ));
    }

    public function getVarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_POST['data'];
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `menu_item` where id='$id'");
// $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $ress) {}
            if ($ress['type'] == '1') {
                $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id' and b.status='0'");
                $statement->execute();
                $result = $statement->fetchAll();
                if (empty($result)) {
                    $data = array();
                } else {
                    foreach ($result as $res) {
                        $qty = $ress['totalQty'];
                        if ($qty == '0' || $qty == '') {
                            $qty = 1;
                        } else {
                            $qty = $qty;
                        }

                        $pr = $res['price'];
                        $salesprice = $ress['salePrice'];
                        if ($pr == '' || $pr == '0') {
                            $pr = $res['mrp'];
                            $prs = $pr * $salesprice / 100;
                            $iprice = $prs + $salesprice;
                        } else {
                            $pr = $res['mrp'];
                            $prs = $pr * $salesprice / 100;
                            $resp = $prs + $salesprice;

                            $pr = $res['price'];
                            $prs = $pr * $resp / 100;

                            $iprice = -($prs - $resp);
                        }

                        if ($res['weight'] == '0' || $res['weight'] == '') {
                            $weight = 1;
                        } else {
                            $weight = $res['weight'];
                        }
                        $stock = round($qty / $weight);
                        $id = $res['id'];
                        $data[] = array('id' => $res['menu_item_id'], 'value' => $res['itemName'], 'stock' => $stock, 'name' => $res['variationName'], 'price' => round($iprice), 'type' => $res['type']);

                    }
                }
            } else {
                $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id' and b.status='0'");
                $statement->execute();
                $result = $statement->fetchAll();
                if (empty($result)) {
                    $data = array();
                } else {
                    foreach ($result as $res) {
                        $id = $res['id'];
                        if ($res['mrp'] == 0 || $res['mrp'] == '') {
                            $price = $res['price'];
                        } elseif ($res['price'] == 0 || $res['price'] == '') {
                            $price = $res['mrp'];
                        } else {
                            $price = $res['price'];

                        }

                        $data[] = array('id' => $id, 'value' => $res['itemName'], 'stock' => $res['stock'], 'name' => $res['variationName'], 'price' => $price, 'type' => $res['type']);
                    }
                }
            }

        }
        return new jsonresponse($data);
    }

    public function getVarsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_POST['data'];
// $out=$em->getRepository('AppBundle:MenuItem')->findBy(array('id' =>$id));     // print_r($menus);
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `menu_item` where id='$id'");
// $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id'");
        $statement->execute();
        $result = $statement->fetchAll();
        if (empty($result)) {
            $data = array();
        } else {
            foreach ($result as $ress) {
                if ($ress['type'] == '1') {
                    $id = $ress['id'];
                    $data[] = array('id' => $id, 'value' => '1 KG', 'stock' => $ress['totalQty'], 'name' => '1 KG', 'price' => $ress['salePrice'], 'type' => $ress['type']);

                } else {
                    $statement = $connection->prepare("SELECT * FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.id='$id' and b.status='0'");
                    $statement->execute();
                    $result = $statement->fetchAll();
                    if (empty($result)) {
                        $data = array();
                    } else {
                        foreach ($result as $res) {
                            $id = $res['id'];
                            $data[] = array('id' => $id, 'value' => $res['itemName'], 'stock' => $res['stock'], 'name' => $res['variationName'], 'price' => $res['price'], 'type' => $res['type']);
                        }
                    }
                }
            }
        }
        return new jsonresponse($data);
    }

//////////////////////////////////////////////////////////////////////////////////////////
}
