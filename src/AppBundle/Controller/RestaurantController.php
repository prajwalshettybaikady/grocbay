<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ExtraPackage;
use AppBundle\Entity\MenuItem;
use AppBundle\Entity\PackageExtras;
use AppBundle\Entity\PriceVariation;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletDue;
use AppBundle\Entity\WalletLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RestaurantController extends Controller
{

//////////////////////////////////////////////////////
    public function loginAction(Request $request)
    {
        return $this->render('AppBundle:Restaurant:User/login.html.twig');
    }

    public function dashboardAction(Request $request)
    {
        return $this->render('AppBundle:Restaurant:User/dashboard.html.twig');
    }
    public function getCatAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('data');
        $out = $em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' => $id)); // print_r($menus);
        foreach ($out as $res) {
            $da = $res->getCategoryName();
            $id = $res->getId();

            $data[] = array('id' => $id, 'value' => $da);

        }
        return new jsonresponse($data);
    }
    public function getDelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $branch = $request->get('branch');
        $data = array();

        $out = $em->getRepository('AppBundle:User')->findBy(array('userType' => 'Delivery', 'isActive' => 1, 'branch' => $branch));
// print_r($menus);
        foreach ($out as $res) {
            $da = $res->getFirstName();
            $id = $res->getId();

            $data[] = array('id' => $id, 'value' => $da);

        }
        return new jsonresponse($data);
    }

    public function getPickerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $branch = $request->get('branch');
        $out = $em->getRepository('AppBundle:User')->findBy(array('userType' => 'Picker', 'isActive' => 1, 'branch' => $branch));
// print_r($menus);
        foreach ($out as $res) {
            $da = $res->getFirstName();
            $id = $res->getId();

            $data[] = array('id' => $id, 'value' => $da);

        }
        return new jsonresponse($data);
    }
/////////////////////////////////////////////
    //main ajax
    public function mainAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

    }
/////////////////////////////////////////////
    //main ajax
    public function addDurationPostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $request->request->get('userID');
        $duration = $request->request->get('drop');
        $em->getConnection()->exec("update wallet set duration='$duration' where 1 and user='$user'");
        return 0;
    }
/////////////////////////////////////////////
    //main ajax
    public function blockDurationPostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $request->request->get('userID');
        $status = $request->request->get('status');
        $em->getConnection()->exec("update wallet set status='$status' where 1 and user='$user'");
        return new response(0);
    }
    //ajax
    public function variationAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $main = $request->request->get('main');
        $objj = json_decode($main);
        $gst = $objj->gst;
        $itemmrp = $objj->itemmrp;
        $itemdiscount = $objj->itemdiscount;
        $productID = $objj->productID;
        $itemName = $objj->itemName;
        $em->getConnection()->exec("update price_variation set status='1' where 1 and menu_item_id='$productID'");
        $squery = $em->getRepository('AppBundle:MenuItem')->findById($productID);
        foreach ($squery as $st) {
            $itemtotalstock = $st->getTotalQty();
        }
        $itemstock = $objj->itemstock;
        if ($itemstock == '' || $itemstock == '0') {
            $itemstock = 0;
        }
        $finalitemstock = intval($itemstock) + intval($itemtotalstock);
///update data
        $em->getConnection()->exec("update menu_item set itemName='$itemName',totalQty='$finalitemstock',salePrice='$itemmrp',regularPrice='$itemdiscount',salesTax='$gst' where id='$productID'");

        ///////////////////////////
        $data = $request->request->get('data');
        $objs = json_decode($data);
        foreach ($objs as $obj) {
            $productID = $obj->productID;
            $itemName = $obj->itemName;
            $variationID = $obj->id;
            $variationName = $obj->variationName;
            $type = $obj->type;
            $mrp = $obj->mrp;
            $discount = $obj->discount;
            $priority = $obj->priority;
            $qty = $obj->qty;
            $max = $obj->max;
            $min = $obj->min;

            if ($type == 'v') {
                $menus = $em->getRepository('AppBundle:MenuItem')->find($productID);
                if ($menus instanceof MenuItem) {
                    $ress = $menus->getId();
                    $product = new PriceVariation();
                    $product->setVariationName($variationName);
                    $product->setPrice($discount);
                    $product->setMrp($mrp);
                    $product->setStock($qty);
                    $product->setMenuItem($menus);
                    $product->setPriority($priority);
                    $product->setStatus('0');
                    $product->setMaxItem($max);
                    $product->setMinItem($min);
                    $em->persist($product);
                    $em->flush();
                }
                $data = '0';
            } else {
                $ssquery = $em->getRepository('AppBundle:PriceVariation')->findById($variationID);
                foreach ($ssquery as $sst) {
                    $sitemtotalstock = $sst->getStock();
                }
                if ($qty == '' || $qty == '0') {
                    $qty = 0;
                }
                $sfinalitemstock = intval($qty) + intval($sitemtotalstock);
                $em->getConnection()->exec("update price_variation set status='0',variationName='$variationName',price='$discount',mrp='$mrp',priority='$priority',stock='$sfinalitemstock',maxItem='$max',minItem='$min' where id='$variationID' and menu_item_id='$productID'");

                $data = '0';
            }
        }
        return new JsonResponse($data);
    }

    //public function add variation data
    public function addVariationDataAction($name, $price, $mrp, $stock, $menuID, $priority, $min, $max, $mprice, $reference, $barcode, $sku, $hsn, $featured, $weight, $status, $loyalty, $cost,$net,$subscription)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $price = str_replace(' ', '', $price);
        $mrp = str_replace(' ', '', $mrp);
        $mprice = str_replace(' ', '', $mprice);
        $cost = str_replace(' ', '', $cost);
        $loyalty = str_replace(' ', '', $loyalty);
        if ($cost == '') {
            $cost = 0;
        } else {
            $cost = $cost;
        }

        $stmt = $connection->prepare("INSERT INTO `price_variation`(`menu_item_id`, `variationName`,`price`,`membership_price`, `priority`, `mrp`,`maxItem`,`status`,`minItem`,`reference`,`barcode`,`sku`,`hsn`,`featured_image`,`weight`,`loyalty`,`cost`,`net_weight`,`subscription`) VALUES ('$menuID','$name','$price','$mprice','$priority','$mrp','$max','$status','$min','$reference','$barcode','$sku','$hsn','$featured','$weight','$loyalty','$cost','$net','$subscription')");
        $stmt->execute();
        $id = $connection->lastInsertId();

        return $id;
    }
//////////////////////////////////////////////
    public function menuCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('AppBundle:SubCategory')->findAll();

        return $this->render('AppBundle:Restaurant:Menu/dropDown.html.twig', array(
            'menuItems' => $menus,
        ));
    }

    public function importBranchPricingAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $reference = mt_rand(1111, 9999) . date('d-m-Y');
        $date = date('d-m-Y');
        $fn = $_FILES["file"]["tmp_name"];
        $file = fopen($fn, "r");
        $count = 1;
                $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        while (($column = fgetcsv($file, 10000, ",")) !== false) {
            if (count($column) != '8') {

                $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
                $sql->execute();
                $row = $sql->fetchAll();

                return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-danger"> <i class="ti-cross"></i>Please upload valid csv file!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));
            }
            $id = addslashes($column[0]);
            $item_name = addslashes($column[1]);

            $variation = addslashes($column[2]);
            $type = addslashes($column[3]);
            $single = addslashes($column[4]);
            if (is_numeric($single)) {
                $single = $single;
            } else {
                $single = 0;
            }
            $mrp = addslashes($column[5]);
            if (is_numeric($mrp)) {
                $mrp = $mrp;
            } else {
                $mrp = 0;
            }
            $discount = addslashes($column[6]);
            if (is_numeric($discount)) {
                $discount = $discount;
            } else {
                $discount = 0;
            }
            $membership_price = addslashes($column[7]);
            if (is_numeric($membership_price)) {
                $membership_price = $membership_price;
            } else {
                $membership_price = 0;
            }
            if ($type == 'KG') {
                $em->getConnection()->exec("update menu_item set salePrice='$single' where id='$id'");
            } else {
                $em->getConnection()->exec("update price_variation set mrp='$mrp',price='$discount',membership_price='$membership_price' where id='$id'");
            }
        }
        $sql = $connection->prepare("SELECT * from csv_logs order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();

// reference

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-success"> <i class="ti-check"></i>Price Updated!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));
    }
    public function importCSVBranchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $date = date('d-m-Y').' at '.date('h-i a');
        $fn = $_FILES["file"]["tmp_name"];
        $file = fopen($fn, "r");
        $count = 1;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $filename = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
        $extension = pathinfo($_FILES['file']["name"], PATHINFO_EXTENSION); // jpg
        $basename = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
        $reference = $basename;

        $uploads_dir = '../uploads/csv/';
        $source = $_FILES['file']["tmp_name"];
        $destionation = $uploads_dir . $basename;
        move_uploaded_file($_FILES['file']["tmp_name"], $destionation);
        $stmts = $connection->prepare("INSERT INTO `csv_logs`(`date`, `ref`,`branch`) VALUES ('$date','$basename','$branch')");
        while (($column = fgetcsv($file, 10000, ",")) !== false) {
            if (count($column) != '28') {
                // $stmts = $connection->prepare("INSERT INTO `csv_logs`(`date`, `ref`) VALUES ('$date','$reference')");
                $sql = $connection->prepare("SELECT * from csv_logs order by id desc");
                $sql->execute();
                $row = $sql->fetchAll();
// reference
                $request->getSession()->getFlashBag()->add('error', 'Please upload valid CSV file');
                return $this->redirectToRoute('import_products');
            }
            $pid = addslashes($column[0]);
            $vid = addslashes($column[1]);

            $item_name = addslashes($column[2]);
            $item_name = $this->cleanNonAsciiCharactersInString($item_name);
            $item_name = addslashes($item_name);
            $status = addslashes($column[3]);
            $type = addslashes($column[4]);
            $catId = addslashes($column[5]);
            $image = $this->cleanNonAsciiCharactersInString($column[6]);
            $tax = $column[7];
            $brandid = addslashes($column[8]);
            $iprice = addslashes($column[9]);
            $dtype = addslashes($column[10]);
            $ptype = addslashes($column[11]);
            $variation_name = addslashes($column[12]);
            $variation_name = $this->cleanNonAsciiCharactersInString($variation_name);
            $variation_name = addslashes($variation_name);
            $loyalty = $column[13];
            $brand = $brandid;
            if (trim($ptype) == '1') {
                $mrps = $column[14];
                if (is_numeric($mrps)) {
                    $mrps = $mrps;
                } else {
                    $mrps = 0;
                }

                $res = -($iprice - $mrps);
                $mrp = $res / $iprice * 100;

                $mrp = $mrp;
                $discounted_prices = $column[15];
                if (is_numeric($discounted_prices)) {
                    $discounted_prices = $discounted_prices;
                } else {
                    $discounted_prices = 0;
                }
                if ($mrps == 0) {
                    $mrps = $iprice;
                } else {
                    $mrps = $mrps;
                }
                $res = $mrps - $discounted_prices;
                $discounted_price = $res / $mrps * 100;
                $discounted_price = $discounted_price;
                $membership_mrp = $column[17];
                if (is_numeric($membership_mrp)) {
                    if ($membership_mrp == 0) {
                        $membership_mrp = 0;
                    } else {
                        $res = $mrps - $membership_mrp;
                        $membership_mrp = $res / $mrps * 100;
                    }
                } else {
                    $membership_mrp = 0;
                }
            } else {
                $mrp = $column[14];
                if (is_numeric($mrp)) {
                    $mrp = $mrp;
                } else {
                    $mrp = 0;
                }
                $discounted_price = $column[15];
                if (is_numeric($discounted_price)) {
                    $discounted_price = $discounted_price;
                } else {
                    $discounted_price = 0;
                }
                $membership_mrp = $column[17];
                if (is_numeric($membership_mrp)) {
                    $membership_mrp = $membership_mrp;
                } else {
                    $membership_mrp = 0;
                }

            }
            $cost = $column[16];
            $cost = str_replace(' ', '', $cost);
            if ($cost == '') {
                $cost = 0;
            } else {
                $cost = $cost;
            }
            $notify = $column[18];
            $priority = $column[19];
            $min = $column[20];
            $max = $column[21];
            $barcode = $this->string_sanitize($column[22]);
            $sku = $column[23];
            $hsn = $column[24];
            $weight = $column[25];
            $vegType = $this->vegTypeAction($type);
            if (is_numeric($weight)) {
                $weight = $weight;
            } else {
                $weight = 0;
            }
            $featured = $column[26];
            $files = $column[27];
            $des = '';
            $des = $this->cleanNonAsciiCharactersInString($des);
            $des = addslashes($des);
            $man = '';
            $man = $this->cleanNonAsciiCharactersInString($man);
            $man = addslashes($man);
            if ($column[0] == 'Product Id' || $column[0] == 'product id' || $column[0] == '') {

            } else {

                $em->getConnection()->exec("update menu_item set itemName='$item_name',category='$catId',vegType='$vegType',itemFeaturedImage='$image',salesTax='$tax',brand='$brandid',alert='$notify',salePrice='$iprice',type='$ptype',delivery='$dtype',isActive='$status' where id='$pid'");
                $em->getConnection()->exec("update price_variation set variationName='$variation_name',price='$discounted_price',mrp='$mrp',priority='$priority',maxItem='$max',minItem='$min',status='0',membership_price='$membership_mrp',barcode='$barcode',sku='$sku',hsn='$hsn',featured_image='$featured',weight='$weight',loyalty='$loyalty',cost='$cost' where 1 and id='$vid' and status='0'");

                $this->addVariationFiles($files, '', $variation_name, $pid);
/////////////////////////////////////////////////////////////////////////////////////////////////
            }

            $count++;
        }

// reference
        $request->getSession()->getFlashBag()->add('success', 'Products Imported!');
        return $this->redirectToRoute('import_products');

    }

    public function importPricingAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $reference = mt_rand(1111, 9999) . date('d-m-Y');
        $date = date('d-m-Y');
        $fn = $_FILES["file"]["tmp_name"];
        $file = fopen($fn, "r");
        $count = 1;
     $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        while (($column = fgetcsv($file, 10000, ",")) !== false) {
            if (count($column) != '9') {

                $sql = $connection->prepare("SELECT * from csv_logs order by id desc");
                $sql->execute();
                $row = $sql->fetchAll();

                return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-danger"> <i class="ti-cross"></i>Please upload valid csv file!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));
            }
            $id = addslashes($column[0]);
            $item_name = addslashes($column[1]);

            $variation = addslashes($column[2]);
            $type = addslashes($column[4]);
            $single = addslashes($column[5]);
            if (is_numeric($single)) {
                $single = $single;
            } else {
                $single = 0;
            }
            $mrp = addslashes($column[6]);
            if (is_numeric($mrp)) {
                $mrp = $mrp;
            } else {
                $mrp = 0;
            }
            $discount = addslashes($column[7]);
            if (is_numeric($discount)) {
                $discount = $discount;
            } else {
                $discount = 0;
            }
            $membership_price = addslashes($column[8]);
            if (is_numeric($membership_price)) {
                $membership_price = $membership_price;
            } else {
                $membership_price = 0;
            }
            if ($type == 'KG') {
                if($id!='id' || $id=='Id')
                {
                $em->getConnection()->exec("update menu_item set salePrice='$single' where id='$id'");
            }
            } else {
    if($id!='id' || $id=='Id')
                {
                $em->getConnection()->exec("update price_variation set mrp='$mrp',price='$discount',membership_price='$membership_price' where id='$id'");
            }
            }

        }

        $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();

// reference

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-success"> <i class="ti-check"></i>Price Updated!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));
    }
    public function importCSVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $reference = mt_rand(1111, 9999) . date('d-m-Y');
        $date = date('d-m-Y').' at '.date('h-i a');
        $fn = $_FILES["file"]["tmp_name"];
        $file = fopen($fn, "r");
        $count = 1;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $filename = uniqid() . "_" . time(); // 5dab1961e93a7_1571494241
        $extension = pathinfo($_FILES['file']["name"], PATHINFO_EXTENSION); // jpg
        $basename = $filename . '.' . $extension; // 5dab1961e93a7_1571494241.jpg
        $reference = $basename;
        $reference = $basename;

        $uploads_dir = '../uploads/csv/';
        $source = $_FILES['file']["tmp_name"];
        $destionation = $uploads_dir . $basename;
        move_uploaded_file($_FILES['file']["tmp_name"], $destionation);
        $stmts = $connection->prepare("INSERT INTO `csv_logs`(`date`, `ref`,`branch`) VALUES ('$date','$basename','$branch')");

        while (($column = fgetcsv($file, 10000, ",")) !== false) {
            if (count($column) != '28') {
                $stmts = $connection->prepare("INSERT INTO `csv_logs`(`date`, `ref`,`branch`) VALUES ('$date','$reference','$branch')");
                $stmts->execute();
                $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
                $sql->execute();
                $row = $sql->fetchAll();
// reference
                return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-danger"> <i class="ti-check"></i>Please upload valid csv file!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));
            }

            $item_name = addslashes($column[0]);
            $item_name = $this->cleanNonAsciiCharactersInString($item_name);
            $item_name = addslashes($item_name);

            $status = addslashes($column[1]);
            $type = addslashes($column[2]);
            $category = addslashes($column[3]);
            $image = $this->cleanNonAsciiCharactersInString($column[4]);
            $tax = $column[5];
            $brandid = addslashes($column[6]);
            $iprice = addslashes($column[7]);
            $dtype = addslashes($column[8]);
            $ptype = addslashes($column[9]);
            $variation_name = addslashes($column[10]);
            $variation_name = $this->cleanNonAsciiCharactersInString($variation_name);
            $variation_name = addslashes($variation_name);

            $loyalty = $column[11];

            $brand = $brandid;
            if (trim($ptype) == '1') {
                $mrps = $column[12];
                if (is_numeric($mrps)) {
                    $mrps = $mrps;
                } else {
                    $mrps = 0;
                }

                $res = -($iprice - $mrps);
                $mrp = $res / $iprice * 100;

                $mrp = $mrp;
                $discounted_prices = $column[13];
                if (is_numeric($discounted_prices)) {
                    $discounted_prices = $discounted_prices;
                } else {
                    $discounted_prices = 0;
                }
                if ($mrps == 0) {
                    $mrps = $iprice;
                } else {
                    $mrps = $mrps;
                }
                $res = $mrps - $discounted_prices;
                $discounted_price = $res / $mrps * 100;
                $discounted_price = $discounted_price;

                $membership_mrp = $column[15];
                if (is_numeric($membership_mrp)) {
                    if ($membership_mrp == 0) {
                        $membership_mrp = 0;
                    } else {
                        $res = $mrps - $membership_mrp;
                        $membership_mrp = $res / $mrps * 100;
                    }

                } else {
                    $membership_mrp = 0;
                }
            } else {
                $mrp = $column[12];
                if (is_numeric($mrp)) {
                    $mrp = $mrp;
                } else {
                    $mrp = 0;
                }

                $discounted_price = $column[13];
                if (is_numeric($discounted_price)) {
                    $discounted_price = $discounted_price;
                } else {
                    $discounted_price = 0;
                }
                $membership_mrp = $column[15];
                if (is_numeric($membership_mrp)) {
                    $membership_mrp = $membership_mrp;
                } else {
                    $membership_mrp = 0;
                }

            }
            $cost = $column[12];
            $notify = $column[16];
            $priority = $column[17];
            $min = $column[18];
            $max = $column[19];
            $barcode = $this->string_sanitize($column[20]);
            $sku = $column[21];
            $hsn = $column[22];
            $weight = $column[23];
            $net_weight = $column[24];
            $unit = $column[25];

            if (is_numeric($weight)) {
                $weight = $weight;
            } else {
                $weight = 0;
            }
            $featured = $column[26];
            $files = $column[27];
            $des = '';
            $des = $this->cleanNonAsciiCharactersInString($des);
            $des = addslashes($des);

            $man = '';
            $man = $this->cleanNonAsciiCharactersInString($man);
            $man = addslashes($man);
            if ($column[0] == 'itemName' || $column[0] == 'Item Name' || $column[0] == '') {

            } else {
//fucntion to check wheather item name is exist or not

                $itemNameExist = $this->existAction("SELECT * FROM `menu_item` where itemName='$item_name' and branch='$branch'");

// return new jsonresponse($column[0]);
                if ($itemNameExist == '0') //insert
                {
//fucntion to check wheather item name is exist or not

                    $catId = $category;
                    $brandExist = $this->existAction("SELECT * FROM `brands` where categoryName='$brand'");

                    $vegType = $this->vegTypeAction($type);
                    $imageExist = $this->existAction("SELECT * FROM `menu_item` where itemFeaturedImage='$image'");
                    $nameExist = $this->existAction("SELECT * FROM `menu_item` where itemName='$item_name'");

                    if ($imageExist == 0) {
                        $img = $image;
                        $user = $this->get('security.token_storage')->getToken()->getUser();
                        $branch = $user->getBranch();
                        $stmt = $connection->prepare("INSERT INTO `menu_item`(`category`, `itemName`,`vegType`,`itemFeaturedImage`, `isActive`, `salesTax`,`brand`,`alert`,`reference`,`salePrice`,`type`,`delivery`,`branch`) VALUES ('$catId','$item_name','$vegType','$image','1','$tax','$brandid','$notify','$reference','$iprice','$ptype','$dtype','$branch')");
                    } else {
                        $img = null;
                        $user = $this->get('security.token_storage')->getToken()->getUser();
                        $branch = $user->getBranch();
                        $stmt = $connection->prepare("INSERT INTO `menu_item`(`category`, `itemName`,`vegType`,`itemFeaturedImage`, `isActive`, `salesTax`,`brand`,`alert`,`reference`,`salePrice`,`type`,`delivery`,`branch`) VALUES ('$catId','$item_name','$vegType','$image','$status','$tax','$brandid','$notify','$reference','$iprice','$ptype','$dtype','$branch')");

                    }

// insert menu
                    $stmt->execute();
                    $id = $connection->lastInsertId();
                    // then insert variation
                    //fucntion to check wheather item name is exist or not
                    $variationExist = $this->existAction("SELECT * FROM `price_variation` where `variationName`='$variation_name' and menu_item_id in (select id from menu_item where id='$id' and branch='$branch')");
                    if ($variationExist == 0) {
                        $res = $this->addVariationDataAction($variation_name, $discounted_price, $mrp, '0', $id, $priority, $min, $max, $membership_mrp, $reference, $barcode, $sku, $hsn, $featured, $weight, 0, $loyalty, $cost,$net_weight,$unit);
                        $this->addVariationFiles($files, $res, '', '');

                    }
                    if ($branch != 0) {
                        if ($imageExist == 0) {
                            $img = $image;
                            $branch = 0;
                            $stmt = $connection->prepare("INSERT INTO `menu_item`(`category`, `itemName`,`vegType`,`itemFeaturedImage`, `isActive`, `salesTax`,`brand`,`alert`,`reference`,`salePrice`,`type`,`delivery`,`branch`) VALUES ('$catId','$item_name','$vegType','$image','1','$tax','$brandid','$notify','$reference','$iprice','$ptype','$dtype','0')");
                        } else {
                            $img = $image;
                            $user = $this->get('security.token_storage')->getToken()->getUser();
                            $branch = $user->getBranch();
                            $stmt = $connection->prepare("INSERT INTO `menu_item`(`category`, `itemName`,`vegType`,`itemFeaturedImage`, `isActive`, `salesTax`,`brand`,`alert`,`reference`,`salePrice`,`type`,`delivery`,`branch`) VALUES ('$catId','$item_name','$vegType','$img','$status','$tax','$brandid','$notify','$reference','$iprice','$ptype','$dtype','0')");

                        }
                        $stmt->execute();
                        $id = $connection->lastInsertId();
                        $variationExist = $this->existAction("SELECT * FROM `price_variation` where `variationName`='$variation_name' and menu_item_id in (select id from menu_item where id='$id' and branch='0')");
                        if ($variationExist == 0) {
                            $res = $this->addVariationDataAction($variation_name, $discounted_price, $mrp, '0', $id, $priority, $min, $max, $membership_mrp, $reference, $barcode, $sku, $hsn, $featured, $weight, 0, $loyalty, $cost,$net_weight,$unit);
                            $this->addVariationFiles($files, $res, '', '');

                        }
                    }
/////////////////////////////////////////////////////////////////////////////////////////////////

// SELECT * FROM `price_variation` where `price_variation`='' and menu_item_id=''
                } else //update menuitem
                {

                    $catId = $category;

                    $menuid = $this->rowgetidAction("SELECT * FROM `menu_item` where itemName='$item_name' and branch='$branch'");
                    $vegType = $this->vegTypeAction($type);
                    $imageExist = $this->existAction("SELECT * FROM `menu_item` where itemFeaturedImage='$image'");
                    if ($imageExist == 0) {
                        $img = $image;
                    } else {
                        $imageExist1 = $this->existAction("SELECT * FROM `menu_item` where itemFeaturedImage='$image' and id='$menuid'");
                        if ($imageExist1 == '0') {

                            $img = $image;

                        } else {
                            $img = $image;
                        }

                    }
// echo $catId;
                    // if($item_name=='Heinz  Ketchup')
                    // {
                    //   return new jsonResponse('ahahha');
                    // }
                    // echo $item_name;

                    if ($img == '') {
                        $em->getConnection()->exec("update menu_item set itemName='$item_name',category='$catId',vegType='$vegType',itemFeaturedImage='$img',salesTax='$tax',brand='$brandid',alert='$notify',salePrice='$iprice',type='$ptype',delivery='$dtype',isActive='$status' where id='$menuid'");
                    } else {
                        $em->getConnection()->exec("update menu_item set itemName='$item_name',category='$catId',vegType='$vegType',itemFeaturedImage='$img',salesTax='$tax',brand='$brandid',alert='$notify',salePrice='$iprice',type='$ptype',delivery='$dtype',isActive='$status' where id='$menuid'");
                    }

                    // then insert variation
                    //fucntion to check wheather item name is exist or not
                    $variationExist = $this->existAction("SELECT * FROM `price_variation` where `variationName`='$variation_name' and menu_item_id in (select id from menu_item where id='$menuid' and branch='$branch') and status='0'");
                    if ($variationExist == 0) {
                        $res = $this->addVariationDataAction($variation_name, $discounted_price, $mrp, '0', $menuid, $priority, $min, $max, $membership_mrp, $reference, $barcode, $sku, $hsn, $featured, $weight, 0, $loyalty, $cost,$net_weight,$unit);
                        $this->addVariationFiles($files, $res, '', '');
                    } else {
// print("update price_variation set variationName='$variation_name',price='$discounted_price',mrp='$mrp',priority='$priority',maxItem='$max',minItem='$min',status='0',membership_price='$membership_mrp',barcode='$barcode',sku='$sku',hsn='$hsn',featured_image='$featured',weight='$weight' where `variationName`='$variation_name' and menu_item_id='$menuid' and status='0'");

                        $em->getConnection()->exec("update price_variation set variationName='$variation_name',price='$discounted_price',mrp='$mrp',priority='$priority',maxItem='$max',minItem='$min',status='0',membership_price='$membership_mrp',barcode='$barcode',sku='$sku',hsn='$hsn',featured_image='$featured',weight='$weight',loyalty='$loyalty',cost='$cost',net_weight='$net_weight',subscription='$unit'  where `variationName`='$variation_name' and menu_item_id='$menuid' and status='0'");

                        $this->addVariationFiles($files, '', $variation_name, $menuid);
                    }

/////////////////////////////////////////////////////////////////////////////////////////////////
                }
            }
            $count++;
        }
        $stmts = $connection->prepare("INSERT INTO `csv_logs`(`date`, `ref`,`branch`) VALUES ('$date','$reference','$branch')");

        $stmts->execute();

        $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();
// reference
        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array('data' => $row, 'msg' => '<div class="alert alert-success"> <i class="ti-check"></i>CSV Imported!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            </div>', ));

    }
public function string_sanitize($s) {
    $result = htmlentities($s);
    $result = preg_replace('/^(&quot;)(.*)(&quot;)$/', "$2", $result);
    $result = preg_replace('/^(&laquo;)(.*)(&raquo;)$/', "$2", $result);
    $result = preg_replace('/^(&#8220;)(.*)(&#8221;)$/', "$2", $result);
    $result = preg_replace('/^(&#39;)(.*)(&#39;)$/', "$2", $result);
    $result = html_entity_decode($result);
    return $result;
}
    public function branchImportCsvAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImportBranch.html.twig', array(
            'data' => $row, "msg" => '',
        ));
    }
    public function vegTypeAction($type)
    {
        if ($type == 'veg' || $type == 'Veg' || $type == 'VEG' || $type == 'vegetarian') {
            return 'veg';
        }
        if ($type == 'non-veg' || $type == 'nonveg' || $type == 'NON' || $type == 'non-vegetarian') {
            return 'non';
        }
        if ($type == 'fish' || $type == 'Fish' || $type == 'Meat' || $type == 'meat') {
            return 'fish';
        }
        if ($type == 'none' || $type == '' || $type == 'n' || $type == '-') {
            return 'none';
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

    public function bulkImportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sql = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
        $sql->execute();
        $row = $sql->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $row, "msg" => '',
        ));
    }
    public function bulkUpdateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $menus = $em->getRepository('AppBundle:SubCategory')->findAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkUpdate.html.twig', array(
            'menuItems' => $menus,
        ));
    }

    public function getSingleStockAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT * from menu_item where isActive!='2' and branch='$branch'");
// $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {

            $data = array();
            // $data=array("Item Name"=>"","Variation Name"=>"","Quantity"=>"","Unit"=>'');
        } else {
            foreach ($row as $rrs) {
                if ($rrs['type'] == '1') {
                    $type = 'KG';
if($rrs['isActive']==1)
{
    $status='Active';
}
else
{
    $status='Inactive';
}
                    $data[] = array('id' => $rrs['id'], 'Item Name' => $rrs['itemName'], 'Variation Name' => '1 KG','Status'=>$status, 'Unit' => $type, 'Price (For Single Stock)' => $rrs['salePrice'], 'MRP' => '', 'Discounted Price' => '', 'Membership Price' => '', 'Unit' => $type);
                }
            }

            
            $type = "PC";
            $sql = $connection->prepare("SELECT a.isActive,a.itemName,b.variationName,b.status  as Quantity,a.type,b.sku,b.mrp,b.price,b.membership_price,b.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive!='2' and b.status='0' and a.type='0' and a.branch='$branch'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {
                $datas = array();
            } else {
                foreach ($row as $rr) {
                    if($rr['isActive']==1)
{
    $status='Active';
}
else
{
    $status='Inactive';
}
                    $datas[] = array('id' => $rr['id'], 'Item Name' => $rr['itemName'], 'Variation Name' => $rr['variationName'], 'Status'=>$status,'Unit' => $type, 'Price (For Single Stock)' => '', 'MRP' => $rr['mrp'], 'Discounted Price' => $rr['price'], 'Membership Price' => $rr['membership_price']);
                }
            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }
//
        if (isset($data)) {
            $resp = array_merge($datas, $data);
        } else {
            $resp = array_merge($datas);
        }
        $this->array_csv_downloadAction($resp, 'Pricing.csv');
                $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $sqls = $connection->prepare("SELECT * from csv_logs where branch='$branch' order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();
        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $rows, "msg" => ''));
    }
    public function getCsvAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT a.itemName,a.category,a.brand,a.vegType as type,a.type as types,a.delivery,a.itemFeaturedImage as image,a.salesTax,c.categoryName,a.itemDescription,b.variationName,b.featured_image,b.loyalty,b.id,b.mrp,b.price,b.cost,b.membership_price,a.alert,b.priority,b.minItem,b.maxItem,b.sku,b.barcode,b.hsn,b.weight,a.salePrice,a.itemShortDescription,a.isActive,b.net_weight,b.subscription FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id join brands as c on a.brand=c.id where b.status='0' and a.isActive!=2 and a.branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data[] = array('Item Name' => '', 'Status' => '', 'Type' => '', 'Sub Category' => '', 'Image' => '', 'Sales Tax' => '', 'Brand Id' => '', 'Item Price' => '', 'Delivery Duration' => '', 'Stock Type' => '', 'Variation Name' => '', 'Loyalty Points' => '', 'Mrp' => '', 'Discounted Price' => '', 'Cost Per Item' => '', 'Membership Price' => '', 'Alert' => '', 'Priority' => '', 'Minimum Item' => '', 'Maximum Item' => '', 'Barcode' => '', 'SKU' => '', 'HSN' => '', 'Gross Weight' => '', 'Net Weight' => '', 'Unit' => '', 'Variation featured Image' => '', 'Variation Images' => '');
        } else {
            foreach ($row as $rr) {
                // echo "SELECT * from sub_category where id in(".$rr['category'].")";
                if ($rr['types'] == '1') {
                    $ta = $rr['mrp'] * $rr['salePrice'] / 100;
                    $mrp = $ta + $rr['salePrice'];
                    $discounted_price = $rr['price'];

                    if ($discounted_price == '' || $discounted_price == '0') {
                        $discounted_price = $mrp;
                    } else {
                        $tas = $rr['price'] * $mrp / 100;

                        $discounted_price = -($tas - $mrp);
                    }
                    $membership_price = $rr['membership_price'];
                } else {
                    $mrp = $rr['mrp'];
                    $discounted_price = $rr['price'];
                    $membership_price = $rr['membership_price'];
                }

                $data[] = array('Item Name' => $rr['itemName'], 'Status' => $rr['isActive'], 'Type' => $rr['type'], 'Sub Category' => $rr['category'], 'Image' => $rr['image'], 'Sales Tax' => $rr['salesTax'], 'Brand Id' => $rr['brand'], 'Item Price' => $rr['salePrice'], 'Delivery Duration' => $rr['delivery'], 'Stock Type' => $rr['types'], 'Variation Name' => $rr['variationName'], 'Loyalty Points' => $rr['loyalty'], 'Mrp' => round($mrp, 2), 'Discounted Price' => round($discounted_price, 2), 'Cost Per Item' => $rr['cost'], 'Membership Price' => $membership_price, 'Alert' => $rr['alert'], 'Priority' => $rr['priority'], 'Minimum Item' => $rr['minItem'], 'Maximum Item' => $rr['maxItem'], 'Barcode' => $rr['barcode'], 'SKU' => $rr['sku'], 'HSN' => $rr['hsn'],'Gross Weight' => $rr['weight'],'Net Weight' => $rr['net_weight'],'Weight Unit' => $rr['subscription'], 'Variation featured Image' => $rr['featured_image'], 'Variation Images' => $this->getVariationFiles($rr['id']));
            }
        }

        $this->array_csv_downloadAction($data, 'menuitem.csv');

        $sqls = $connection->prepare("SELECT * from csv_logs order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $rows, "msg" => '',
        ));
    }

    public function getCsvBranchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sql = $connection->prepare("SELECT a.id as pid,a.isActive,a.itemName,a.category,a.brand,a.vegType as type,a.type as types,a.delivery,a.itemFeaturedImage as image,a.salesTax,c.categoryName,a.itemDescription,b.variationName,b.featured_image,b.loyalty,b.id,b.mrp,b.price,b.membership_price,a.alert,b.priority,b.minItem,b.maxItem,b.sku,b.cost,b.barcode,b.hsn,b.weight,a.salePrice,a.itemShortDescription FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id join brands as c on a.brand=c.id where b.status='0' and  a.isActive!=2  and a.branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data[] = array('Product Id' => '', 'Variation Id' => '', 'Item Name' => '', 'Status' => '', 'Type' => '', 'Sub Category' => '', 'Image' => '', 'Sales Tax' => '', 'Brand Id' => '', 'Item Price' => '', 'Delivery Duration' => '', 'Stock Type' => '', 'Variation Name' => '', 'Loyalty Points' => '', 'Mrp' => '', 'Discounted Price' => '', 'Cost Per Item' => '', 'Membership Price' => '', 'Alert' => '', 'Priority' => '', 'Minimum Item' => '', 'Maximum Item' => '', 'Barcode' => '', 'SKU' => '', 'HSN' => '', 'Weight' => '', 'Variation featured Image' => '', 'Variation Images' => '');
        } else {
            foreach ($row as $rr) {
                // echo "SELECT * from sub_category where id in(".$rr['category'].")";
                if ($rr['types'] == '1') {
                    $ta = $rr['mrp'] * $rr['salePrice'] / 100;
                    $mrp = $ta + $rr['salePrice'];
                    $discounted_price = $rr['price'];

                    if ($discounted_price == '' || $discounted_price == '0') {
                        $discounted_price = $mrp;
                    } else {
                        $tas = $rr['price'] * $mrp / 100;

                        $discounted_price = -($tas - $mrp);
                    }
                    $membership_price = $rr['membership_price'];
                } else {
                    $mrp = $rr['mrp'];
                    $discounted_price = $rr['price'];
                    $membership_price = $rr['membership_price'];
                }

                $data[] = array('Product Id' => $rr['pid'], 'Variation Id' => $rr['id'], 'Item Name' => $rr['itemName'], 'Status' => $rr['isActive'], 'Type' => $rr['type'], 'Sub Category' => $rr['category'], 'Image' => $rr['image'], 'Sales Tax' => $rr['salesTax'], 'Brand Id' => $rr['brand'], 'Item Price' => $rr['salePrice'], 'Delivery Duration' => $rr['delivery'], 'Stock Type' => $rr['types'], 'Variation Name' => $rr['variationName'], 'Loyalty Points' => $rr['loyalty'], 'Mrp' => round($mrp, 2), 'Discounted Price' => round($discounted_price, 2), 'Cost Per Item' => $rr['cost'], 'Membership Price' => $membership_price, 'Alert' => $rr['alert'], 'Priority' => $rr['priority'], 'Minimum Item' => $rr['minItem'], 'Maximum Item' => $rr['maxItem'], 'Barcode' => $rr['barcode'], 'SKU' => $rr['sku'], 'HSN' => $rr['hsn'], 'Weight' => $rr['weight'], 'Variation featured Image' => $rr['featured_image'], 'Variation Images' => $this->getVariationFiles($rr['id']));
            }
        }

        $this->array_csv_downloadAction($data, 'item.csv');

        $sqls = $connection->prepare("SELECT * from csv_logs order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $rows, "msg" => '',
        ));
    }
    public function addVariationFiles($files, $id, $variation_name, $menuid)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        if ($files == '') {
            return 0;
        } else {
            if ($id == '') {
// return 0;
                // return 0;
                $sql = $em->getConnection()->exec("DELETE  from variation_files where ref in(SELECT id from price_variation WHERE variationName='$variation_name' and menu_item_id='$menuid')");
                // $sql->execute();
                $files = explode(",", $files);
                $sql = $connection->prepare("SELECT id from price_variation WHERE variationName='$variation_name' and menu_item_id='$menuid'");
                $sql->execute();
                $row = $sql->fetchAll();
                foreach ($row as $resq) {
                    # code...
                }
                if (count($row) == 0) {
                    $id = 0;
                } else {
                    $id = $resq['id'];
                    foreach ($files as $val) {
                        $em->getConnection()->exec("insert into variation_files(`image`,`ref`)values('$val','$id')");
                        // $sql->execute();
                    }
                }

            } else {
                $sql = $connection->prepare("DELETE  from variation_files where ref='$id'");
                $sql->execute();
                $files = explode(",", $files);
                foreach ($files as $val) {
                    $em->getConnection()->exec("insert into variation_files(`image`,`ref`)values('$val','$id')");
// $sql->execute();
                }
            }
        }
    }
    public function getVariationFiles($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT image from variation_files where ref='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $data = array();
        } else {
            foreach ($row as $res) {
                $data[] = $res['image'];
            }
        }
        return implode(",", $data);

    }
    // getCatgoryCsv
    public function getCategoryCsvAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT a.id,b.categoryName as ParentCategory,a.categoryName FROM `sub_category` as a JOIN sub_category as b on a.parent_id=b.id");
        $sql->execute();
        $row = $sql->fetchAll();
// foreach ($row as $rr) {
        //     // echo "SELECT * from sub_category where id in(".$rr['category'].")";
        //  $data[]=array('itemName'=>$rr['itemName'],'vegType'=>$rr['type'],'catgory'=>$rr['category'],'vegType'=>$rr['type'],'image'=>$rr['image'],'salesTax'=>$rr['salesTax'],'brand'=>$rr['brand'],'variationName'=>$rr['variationName'],'mrp'=>$rr['mrp'],'price'=>$rr['price'],'membership_price'=>$rr['membership_price'],'alert'=>$rr['alert'],'priority'=>$rr['priority'],'minItem'=>$rr['minItem'],'maxItem'=>$rr['maxItem']);
        // }
        $this->array_csv_downloadAction($row, 'sub-category.csv');

        $sqls = $connection->prepare("SELECT * from csv_logs order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $rows, "msg" => '',
        ));
    }
    public function exportStockInwardsAction()
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
            // $data=array("Item Name"=>"","Variation Name"=>"","Quantity"=>"","Unit"=>'');
        } else {
            foreach ($row as $rrs) {
                if ($rrs['type'] == '1') {
                    $type = 'KG';

                    $data[] = array('id' => $rrs['id'], 'Barcode' => $rrs['id'], 'Item Name' => $rrs['itemName'], 'Variation Name' => '1 KG', 'Quantity' => 0, 'Unit' => $type);
                }
            }
            $type = "PC";
            $sql = $connection->prepare("SELECT a.itemName,b.variationName,b.status  as Quantity,a.type,b.barcode,b.id FROM `menu_item` as a join price_variation as b on a.id=b.menu_item_id where a.isActive='1' and b.status='0' and a.type='0' and a.branch='$branch'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {
                $datas = array();
            } else {
                foreach ($row as $rr) {
                    $datas[] = array('id' => $rr['id'], 'Barcode' => $rr['barcode'], 'Item Name' => $rr['itemName'], 'Variation Name' => $rr['variationName'], 'Quantity' => 0, 'Unit' => $type);
                }
            }

            // echo "SELECT * from sub_category where id in(".$rr['category'].")";

        }
//
        if (isset($data)) {
            $resp = array_merge($datas, $data);
        } else {
            $resp = array_merge($datas);
        }
        $this->array_csv_downloadAction($resp, 'add-stock.csv');

        $sqls = $connection->prepare("SELECT * from csv_logs order by id desc");
        $sqls->execute();
        $rows = $sqls->fetchAll();

        return $this->render('AppBundle:Restaurant:Menu/bulkImport.html.twig', array(
            'data' => $rows, "msg" => '',
        ));

    }
    public function getcategorybyid($id)
    {
        if ($id == '') {
            $id = 0;
        } else {
            $id = $id;
        }
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sqls = $connection->prepare("SELECT * from sub_category where id in($id)");
        $sqls->execute();
        $rows = $sqls->fetchAll();
        if (count($rows) == 0) {
            return '-';
        } else {
            foreach ($rows as $value) {
                $array[] = $value['categoryName'];
            }
            $response = implode(',', $array);

            return $response;
        }
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

    public function deleteCSVAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $em->getConnection()->exec("delete from csv_logs where id='$id'");
        $em->getConnection()->exec("delete from menu_item where reference='$id'");
        $em->getConnection()->exec("delete from price_variation where reference='$id'");
        $request->getSession()->getFlashBag()->add('success', 'CSV Deleted!');
        return $this->redirectToRoute('bulk_import');
    }
    public function editBulkAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('AppBundle:MenuItem')->findByCategory($id);
        // print_r($menus);
        $test = $em->getRepository('AppBundle:MenuItem')->findByCategory($id);
        foreach ($menus as $res) {

            $da = $em->getRepository('AppBundle:MenuItem')->findById($res->getId());

            $data = $em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
            foreach ($da as $du) {
                // $dat=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
                $dat = $em->getRepository('AppBundle:PriceVariation')->findBy(array('menuItem' => $res->getId(), 'status' => 0));

                $response[] = array('id' => $du->getId(), 'itemName' => $du->getItemName(), 'salesTax' => $du->getSalesTax(), 'totalQty' => $du->getTotalQty(), 'salePrice' => $du->getSalePrice(), 'regularPrice' => $du->getRegularPrice(), 'totalQty' => $du->getTotalQty(), "variation" => $dat);

            }

        }

        if (empty($menus)) {
            return $this->render('AppBundle:Restaurant:Menu/editBulk.html.twig', array(
                'menuItems' => '', "test" => '', "dummy" => '',
            ));
        } else {
            return $this->render('AppBundle:Restaurant:Menu/editBulk.html.twig', array(
                'menuItems' => $menus, "test" => $data, "dummy" => $response,
            ));
        }

    }
    public function editBulkAjaxAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('AppBundle:MenuItem')->findByCategory($id);
        // print_r($menus);
        $test = $em->getRepository('AppBundle:MenuItem')->findByCategory($id);
        foreach ($menus as $res) {

            $da = $em->getRepository('AppBundle:MenuItem')->findById($res->getId());

            $data = $em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
            foreach ($da as $du) {
                // $dat=$em->getRepository('AppBundle:PriceVariation')->findByMenuItem($res->getId());
                $dat = $em->getRepository('AppBundle:PriceVariation')->findBy(array('menuItem' => $res->getId(), 'status' => 0));

                $response[] = array('id' => $du->getId(), 'itemName' => $du->getItemName(), 'salesTax' => $du->getSalesTax(), 'totalQty' => $du->getTotalQty(), 'salePrice' => $du->getSalePrice(), 'regularPrice' => $du->getRegularPrice(), 'totalQty' => $du->getTotalQty(), "variation" => $dat);

            }

        }

        if (empty($data)) {
            return $this->render('AppBundle:Restaurant:Menu/ajax.html.twig', array(
                'menuItems' => $menus, "test" => '', "dummy" => '',
            ));
        } else {
            return $this->render('AppBundle:Restaurant:Menu/ajax.html.twig', array(
                'menuItems' => $menus, "test" => $data, "dummy" => $response,
            ));
        }
    }
    public function addMenuItemAction(Request $request)
    {
        $myExtend = "Admin";
        $em = $this->getDoctrine()->getManager();
        $menuItem = new MenuItem();
        $form = $this->createForm('AppBundle\Form\MenuItemType', $menuItem);
        $form->handleRequest($request);
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $branchType = 0;
        $sql = $connection->prepare("SELECT * from sub_category where parent_id is NULL and status='0' and branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $rows) {
            $RA[] = array('id' => $rows['id'], 'category_name' => $rows['categoryName'], 'SubCategory' => $this->getSubcategoryByIdAction($rows['id']));
        }
        if ($form->isSubmitted() && $form->isValid()) {
            try {

                $menuItem->setItemSlug(str_replace(" ", "-", strtolower($menuItem->getItemName())));
                if ($menuItem->getItemFeaturedImageFile() != null) {
                    $menuItem->iconUpload();
                }

                $isActive = $request->get('isActive');
                if (isset($isActive)) {
                    $isActive = 1;
                } else {
                    $isActive = 0;
                }
                $menuItem->setIsActive($isActive);

                if (isset($_POST['nested'])) {
                    $nested = $_POST['nested'];
                    if ($nested == '') {
                        $nest = '';
                    } else {
                        $nest = implode(", ", $nested);
                    }
                } else {
                    $nest = 0;
                }
                if (isset($_POST['category'])) {
                    if ($_POST['category'] == '') {
                        $request->getSession()->getFlashBag()->add('error', "Please select category of product");
                        return $this->redirectToRoute('restaurant_add_menu_item');
                    } else {
                        $List = implode(',', $_POST['category']);
                    }
                } else {
                    $List = 0;
                }

                $menuItem->setNested($nest);
                $menuItem->setCategory($List);
                if ($nest == '') {
                } else {
                    $menuItem->setCategory($nest);
                }
                $menuItem->setSalePrice($_POST['fishprice']);
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $menuItem->setBranch($branch);
                $em->persist($menuItem);
                $em->flush();
                $count = 0;
                $id = $menuItem->getId();
                if ($branch != 0) {
                    $this->copyMenuItemToBranch($id, $branch);
                }
                if (!isset($_POST['variation'])) {
                    $request->getSession()->getFlashBag()->add('error', "Please select variation");
                    return $this->redirectToRoute('restaurant_edit_menu_item', array('id' => $menuItem->getId()));
                }
                foreach ($_POST['variation'] as $res) {
                    $nid = $this->addVariationDataAction($_POST['variation'][$count], $_POST['price'][$count], $_POST['mrp'][$count], 0, $id, $_POST['priority'][$count], $_POST['min'][$count], $_POST['max'][$count], $_POST['membership'][$count], 'x', $_POST['barcode'][$count], $_POST['sku'][$count], $_POST['hsn'][$count], '', $_POST['weight'][$count], $_POST['status'][$count], $_POST['loyalty'][$count], $_POST['cost'][$count], $_POST['net_weight'][$count], $_POST['unit'][$count]);
                    //$this->addimages($nid);

                    $count++;
                }
                $request->getSession()->getFlashBag()->add('success', "New Item Added!");

            } catch (\Exception $e) {
                $request->getSession()->getFlashBag()->add('error', $e->getMessage());
            }
            return $this->redirectToRoute('restaurant_edit_menu_item', array('id' => $menuItem->getId()));

        }

        $sql = $connection->prepare("SELECT * from price_variation where menu_item_id='x' and status='0'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $row = array();
        } else {
            $row = $row;

        }

        $sql = $connection->prepare("SELECT * from sub_category where nested='1' and branch='$branch'");
        $sql->execute();
        $nest = $sql->fetchAll();

        if ($branch == 0) {

            $nest = 0;
        } else {
            $sql = $connection->prepare("SELECT * from restaurants where id='$branch'");
            $sql->execute();
            $rest = $sql->fetchAll();
            foreach ($rest as $response) {
                # code...
            }
            $nest = $response['nested'];

        }

        return $this->render('AppBundle:Restaurant:Menu/addNew.html.twig', array(
            'form' => $form->createView(),
            'menuItem' => $menuItem,
            'myExtend' => $myExtend,
            'brands' => $em->getRepository('AppBundle:Brands')->findByBranch($branch),
            'category' => $RA,
            'variation' => $row,
            'nest' => $nest,
            "f" => array(),
            "isnest" => $nest,
            'isActive' => $menuItem->getIsActive(),
            "numberFormat" => $this->getNumberFormat()

        ));

    }
    public function getSubcategoryByIdAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sqls = $connection->prepare("SELECT * from sub_category where parent_id='$id' and status=0");
        $sqls->execute();
        $row = $sqls->fetchAll();
        $RA = array();
        foreach ($row as $rows) {
            $RA[] = array('id' => $rows['id'], 'categoryName' => $rows['categoryName'], 'nested' => $this->getNestedSubcategoryByIdAction($rows['id']));
        }
        return $RA;

    }
    public function getNestedSubcategoryByIdAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sqls = $connection->prepare("SELECT * from sub_category where parent_id='$id' and status=0");
        $sqls->execute();
        $row = $sqls->fetchAll();
        if (count($row) == 0) {
            return 0;
        } else {
            return $row;

        }

    }
    public function viewMenuItemAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        return $this->render('AppBundle:Restaurant:Menu/viewMenu.html.twig');
    }
    public function viewMenuItemAjaxAction(Request $request)
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
        $branch = $_GET['branch'];
## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (itemName like '%" . $searchValue . "%' or
        category like '%" . $searchValue . "%' or
        id like'%" . $searchValue . "%' )";
        }

## Total number of records without filtering
        $sel = $connection->prepare("select count(*) as allcount from menu_item  where branch='$branch' and isActive!=2");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("select count(*) as allcount from menu_item WHERE isActive!=2  and branch='$branch' " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("select * from menu_item WHERE   isActive!=2  and branch='$branch' " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();

        foreach ($res as $row) {

            if ($row['isActive'] == '1') {
                $active = '<span class="badge badge-success badge-sm status-badge">Active</span>';
                $status = '<a class="dropdown-item" href="' . $this->generateUrl('menu_status', array('id' => $row['id'])) . '">Deactivate</a>';
            } else {
                $active = '<span class="badge badge-danger badge-sm status-badge">Inactive</span>';
                $status = '<a class="dropdown-item" href="' . $this->generateUrl('menu_status', array('id' => $row['id'])) . '">Activate</a>';

            }
            $url = $this->generateUrl('restaurant_edit_menu_item', array('id' => $row['id']));
            $deleteurl=$this->generateUrl('delete_menu_items', array('id'=>$row['id']));

            $data[] = array(
                "branch" => '<input type="checkbox" name="all[]" class="tst" value="' . $row['id'] . '">',
                "id" => $row['id'],
                "itemName" => "<a href='" . $url . "'><img src='/uploads/items/images/" . $row['itemFeaturedImage'] . "'
       style='width:80px'> " . $row['itemName'] . "</a>",
                "category" => $this->getcategorybyid($row['category']),
                "isActive" => $active,
                "view" => '<div class="action-dropdown custom-dropdown-icon">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                            <a class="edit dropdown-item" href="' . $url . '">Edit</a>


                                                            <a class="dropdown-item delete" href="'.$deleteurl.'">Delete</a>
                                                           '.$status.'

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

    public function viewMenuItemDetailAction(Request $request, MenuItem $menuItem)
    {
        $myExtend = "Admin";
        $em = $this->getDoctrine()->getManager();
        $flag = false;
        $editId = $request->get('editId');
        if ($editId != null) {
            $extraPackage = $em->getRepository('AppBundle:ExtraPackage')->find($editId);
            if ($extraPackage instanceof ExtraPackage) {
                $flag = true;
            }
        }

        $deleteId = $request->get('deleteId');
        if ($deleteId != null) {
            $extraPackage = $em->getRepository('AppBundle:ExtraPackage')->find($deleteId);
            if ($extraPackage instanceof ExtraPackage) {
                $em->remove($extraPackage);
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Extra package deleted suucessfully ");
                return $this->redirectToRoute('restaurant_view_single_menu_item', array('id' => $menuItem->getId()));
            }
        }
        if ($flag == false) {
            $extraPackage = new ExtraPackage();
            $packageExtras = new PackageExtras();
            $extraPackage->addPackageExtra($packageExtras);
            $extraPackage->setMenuItem($menuItem);
        }
        $form = $this->createForm('AppBundle\Form\ExtraPackageType', $extraPackage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($flag == false) {
                    $em->persist($extraPackage);
                }
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', "Extra package updated suucessfully ");
                return $this->redirectToRoute($redLink, array('id' => $menuItem->getId()));
            } catch (\Exception $e) {
                $request->getSession()->getFlashBag()->add('error', $e->getMessage());
            }
        }

        $extraPackages = $menuItem->getExtraPackage();
        return $this->render('AppBundle:Restaurant:Menu/viewItem.html.twig', array(
            'menuItem' => $menuItem,
            'form' => $form->createView(),
            'myExtend' => $myExtend,
            'extraPackages' => $extraPackages,
            'flag' => $flag,
            'variation' => $row,
        ));
    }

    public function editMenuItemAction(Request $request, MenuItem $menuItem)
    {
        $myExtend = "Admin";
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $form = $this->createForm('AppBundle\Form\MenuItemType', $menuItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $menuItem->setItemSlug(str_replace(" ", "-", strtolower($menuItem->getItemName())));
                if ($menuItem->getItemFeaturedImageFile() != null) {
                    if ($menuItem->getItemFeaturedImage() != null) {
                        // $menuItem->removeFeaturedImageUpload();
                    }
                    $menuItem->iconUpload();

                }

                $isActive = $request->get('isActive');
                if (isset($isActive)) {
                    $isActive = 1;
                } else {
                    $isActive = 0;
                }
                $menuItem->setIsActive($isActive);

                if (isset($_POST['nested'])) {
                    $nested = $_POST['nested'];
                    if ($nested == '') {
                        $nest = '';
                    } else {
                        $nest = implode(", ", $nested);
                    }
                } else {
                    $nest = 0;
                }
                if (isset($_POST['category'])) {
                    if ($_POST['category'] == '') {
                        $request->getSession()->getFlashBag()->add('error', "Please select category of product");
                        return $this->redirectToRoute('restaurant_edit_menu_item', array('id' => $menuItem->getId()));
                    } else {
                        $List = implode(',', $_POST['category']);
                    }
                } else {
                    $List = 0;
                }

                $id = $menuItem->getId();

                $count = 0;

                if (!isset($_POST['variation'])) {
                    $request->getSession()->getFlashBag()->add('error', 'Please select Variation!');
                    return $this->redirectToRoute('restaurant_edit_menu_item', array('id' => $menuItem->getId()));
                }
                $res = $em->getConnection()->exec("update price_variation set status='1' where menu_item_id='$id'");

                foreach ($_POST['variation'] as $res) {

                    $name = addslashes($_POST['variation'][$count]);

                    if (isset($_POST['id'][$count])) {

                        $varid = $_POST['id'][$count];
                        $variationExist = $this->existAction("SELECT * FROM `price_variation` where `id`='$varid'");

                        //
                        if ($variationExist == 0) {
                            $nid = $this->addVariationDataAction($_POST['variation'][$count], $_POST['price'][$count], $_POST['mrp'][$count], 0, $id, $_POST['priority'][$count], $_POST['min'][$count], $_POST['max'][$count], $_POST['membership'][$count], 'x', $_POST['barcode'][$count], $_POST['sku'][$count], $_POST['hsn'][$count], '', $_POST['weight'][$count], $_POST['status'][$count], $_POST['loyalty'][$count], $_POST['cost'][$count], $_POST['net_weight'][$count], $_POST['unit'][$count]);
                            //$this->addimages($nid);
                        } else {

                            $varid = $_POST['id'][$count];
                            $price = $_POST['price'][$count];
                            $mrp = $_POST['mrp'][$count];
                            $priority = $_POST['priority'][$count];
                            $max = $_POST['max'][$count];
                            $min = $_POST['min'][$count];
                            $membership = $_POST['membership'][$count];
                            $barcode = $_POST['barcode'][$count];
                            $sku = $_POST['sku'][$count];
                            $hsn = $_POST['hsn'][$count];
                            $weight = $_POST['weight'][$count];
                            $status = $_POST['status'][$count];
                            $loyalty = $_POST['loyalty'][$count];
                            $cost = $_POST['cost'][$count];
                            $net_weight = $_POST['net_weight'][$count];
                            $unit = $_POST['unit'][$count];
//  echo $_POST['weight'][$count];
                            // return new jsonresponse('hahha');
                            $em->getConnection()->exec("update price_variation set variationName='$name',price='$price',mrp='$mrp',priority='$priority',maxItem='$max',minItem='$min',status='$status',membership_price='$membership',barcode='$barcode',sku='$sku',hsn='$hsn',weight='$weight',loyalty='$loyalty',cost='$cost',net_weight='$net_weight',subscription='$unit' where `id`='$varid'");
                            //$this->addimages($_POST['id'][$count]);

                            $this->variationAddimages($varid,$varid);

                        }
                    } else {

                        $nid = $this->addVariationDataAction($_POST['variation'][$count], $_POST['price'][$count], $_POST['mrp'][$count], 0, $id, $_POST['priority'][$count], $_POST['min'][$count], $_POST['max'][$count], $_POST['membership'][$count], 'x', $_POST['barcode'][$count], $_POST['sku'][$count], $_POST['hsn'][$count], '', $_POST['weight'][$count],$_POST['status'][$count], $_POST['loyalty'][$count],$_POST['cost'][$count],$_POST['net_weight'][$count],$_POST['unit'][$count]);
                        //$this->addimages($nid);

                    }
                    $count++;
                }
                $user = $this->get('security.token_storage')->getToken()->getUser();
                $branch = $user->getBranch();
                $menuItem->setBranch($branch);
                $menuItem->setNested($nest);
                $menuItem->setCategory($List);
                if ($nest == '') {

                } else {
                    $menuItem->setCategory($nest);
                }
                $menuItem->setSalePrice($_POST['fishprice']);
                $em->persist($menuItem);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Menu item Updated!");

            } catch (\Exception $e) {

                $request->getSession()->getFlashBag()->add('errors', $e->getMessage());
            }
            return $this->redirectToRoute('restaurant_edit_menu_item', array('id' => $menuItem->getId()));
        }
        $id = $menuItem->getId();
        $sql = $connection->prepare("SELECT * from price_variation where menu_item_id='$id' and status!='1'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $row = array();
        } else {
            $row = $row;

        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();

        $sqls = $connection->prepare("SELECT * from sub_category where parent_id is NULL and status='0' and branch='$branch'");
        $sqls->execute();
        $rowsn = $sqls->fetchAll();
        $RA = array();
        foreach ($rowsn as $rows) {
            $RA[] = array('id' => $rows['id'], 'category_name' => $rows['categoryName'], 'SubCategory' => $this->getSubcategoryByIdAction($rows['id']));
        }
        $sql = $connection->prepare("SELECT * from sub_category   where nested='1' and branch='$branch'");
        $sql->execute();
        $nest = $sql->fetchAll();
        $app = $connection->prepare("select * from menu_item where id='$id'");
        $app->execute();
        $appdata = $app->fetchAll();
        foreach ($appdata as $res) {
            # code...
        }
        $f = explode(", ", $res['nested']);
        $sql = $connection->prepare("SELECT * from restaurants where id='$branch'");
        $sql->execute();
        $rest = $sql->fetchAll();
        foreach ($rest as $response) {
            # code...
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($branch == 0) {

            $nested = 0;
        } else {
            $sql = $connection->prepare("SELECT * from restaurants where id='$branch'");
            $sql->execute();
            $rest = $sql->fetchAll();
            foreach ($rest as $response) {
                # code...
            }
            $nested = $response['nested'];

        }
        $id = $menuItem->getId();
        $sql = $connection->prepare("SELECT * from price_variation where menu_item_id='$id' and status!='1'");
        $sql->execute();
        $row = $sql->fetchAll();
        //$images = "";
        $images = array();
        if (count($row) == 0) {
            $row = array();
        } else {
            $row = $row;
            // foreach ($row as $imgrow) {
            //     $images[] = array('id'=>$imgrow['id'],'image'=>$this->getimages($imgrow['id']));
            // }
            foreach ($row as $imgrow) {
                $images[$imgrow['id']] = $this->getimages($imgrow['id']);
            }
            //$images = $this->getimages($row[0]['id']);
            if (count($images) == 0) {
                $images = array();
            }

            // if(count($images) == 0)
            //    $images = array();
        }

        return $this->render('AppBundle:Restaurant:Menu/addNew.html.twig', array(
            'form' => $form->createView(),
            'menuItem' => $menuItem,
            'myExtend' => $myExtend,
            'brands' => $em->getRepository('AppBundle:Brands')->findByBranch($branch),
            'category' => $RA,
            'variation' => $row,
            'nest' => $nest,
            "f" => $f,
            "isnest" => $nested,
            "variation_images" => $images,
            'isActive' => $menuItem->getIsActive(),
            "numberFormat" => $this->getNumberFormat()

        ));

    }

    public function getimages($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sql = $connection->prepare("select * from variation_files where ref='$id'");
        $sql->execute();
        $sqldata = $sql->fetchAll();

        if (count($sqldata) != 0) {

            foreach ($sqldata as $res) {
                # code...
                $img_res[] = array('id' => $res['id'], 'image' => "/uploads/items/images/" . $res['image'], 'ref' => $res['ref']);
            }

        } else {

            $img_res[] = array();

        }

        return $img_res;

    }
///////////////////////////////////////////////////////////////////////////////////////////////
    public function addimages($id)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $_FILES['image'];
        for ($i = 0; $i < count($file['name']); $i++) {
            $image = array(
                'name' => $file['name'][$i],
                'type' => $file['type'][$i],
                'size' => $file['size'][$i],
                'tmp_name' => $file['tmp_name'][$i],
                'error' => $file['error'][$i],
            );
            $basename = $_FILES["image"]["name"][$i];
            $destionation = "../uploads/items/images/" . $basename;
            if ($basename == '') {

            } else {
                move_uploaded_file($_FILES["image"]["tmp_name"][$i], $destionation);
                $res = $em->getConnection()->exec("INSERT INTO `variation_files`(`image`, `ref`) VALUES ('$basename','$id')");
            }
        }
    }
//function for add credits
    public function reccivePostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $ref = $request->get('id');
        $re = $em->getRepository('AppBundle:WalletDue')->findById($ref);
        foreach ($re as $da) {
            $bal = $da->getBalance();

            $amount = $bal - $credits;
            $em->getConnection()->exec("update wallet_due set balance='$amount',paid='$credits' where id='$ref'");
            if ($amount < 0) {
                $em->getConnection()->exec("update wallet_due set status='1' where id='$ref'");

            }
            $time = date('H-i a');
            $this->addWalletLogsAction($ref, 0, $credits, date('d-m-Y'), $amount, 'Added By Admin', '0', '0', $time, $mode);
            return new jsonresponse('0');
        }
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    //function for add credits
    public function addCreditsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        // $data=$this->getBalanceAction($userID,'0',$em);
        $prepaidBalance = $this->getBalanceAction($userID, 0, $credits, $mode, $note, 'lamo');
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)
        return new jsonresponse($prepaidBalance);
    }

    public function addCreditsLoyatyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        // $data=$this->getBalanceAction($userID,'0',$em);
        $prepaidBalance = $this->getBalanceAction($userID, 2, $credits, $mode, $note, 'lamo');
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)
        return new jsonresponse($prepaidBalance);
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    //function for add credits
    public function addCreditsPostpaidAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        $duration = $request->get('duration');

        // $data=$this->getBalanceAction($userID,'0',$em);
        $prepaidBalance = $this->getBalanceAction($userID, 1, $credits, $mode, $note, $duration);
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)

        return new jsonresponse($prepaidBalance);

    }
public function settleCommisionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userID = $request->get('userID');
        $credits = $request->get('credits');
        $mode = $request->get('mode');
        $note = $request->get('note');
        // $data=$this->getBalanceAction($userID,'0',$em);

        $prepaidBalance=$this->getBalanceAction($userID,0,$credits,$mode,$note,'lamo');
        // $done=$this->addBalance($prepaidBalance,0,0,$credits,'Added By Marketbhaav Admin',$id)
return new jsonresponse($prepaidBalance);
}

///////////////////////////////////////////////////////////////////////////////////////////////
    public function getBalanceAction($id, $type, $credits, $mode, $note, $duration)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');

        $re = $em->getRepository('AppBundle:Wallet')->findByUser($id);
        if (empty($re)) {
            $addCredits = $this->addUserToWalletAction($id, $type, $credits, $mode);

            return $addCredits;
        } else {
            foreach ($re as $da) {
                $prepaid = $da->getPrepaid();
                $postpaid = $da->getPostpaid();
                $loyalty = $da->getLoyalty();
                if ($type == 0) {

                    $amount = $prepaid + $credits;
                    $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$id'");
$helper->sendGCM($note, $this->getCustomerRegistrationKey($id), '2', $id);
                }
                elseif($type==1) {
                    $amount = $postpaid + $credits;
                    $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$id'");
                    // $this->addDuesAction($credits,$amount,date('d-m-Y'),$duration,$id,'Added By MarketBhaav',0);
                }else {
                    $amount = $loyalty + $credits;
                    $em->getConnection()->exec("update wallet set loyalty='$amount' where user='$id'");
$helper->sendGCM($note, $this->getCustomerRegistrationKey($id), '2', $id);

                }
                $time = date('h-i a');
                if($note=='')
                {
                    $note='Added By Admin';
                }
                else
                {
                    $note=$note;
                }
                if($credits>0)
                {
$this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $amount,$note, $type, '0', $time, $mode);
                }
                else
                {
$this->addWalletLogsAction($id,abs($credits),0, date('d-m-Y'), $amount,$note, $type, '0', $time, $mode); 
                }
                
                return $amount;
            }
        }
    }
//function for add due
    public function addDuesAction($credits, $amount, $date, $duration, $id, $note, $status)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new WalletDue();
        $wallet->setStatus($status);
        $wallet->setDate($date);
        $wallet->setUser($id);
        $wallet->setBalance($credits);
        $wallet->setPaid(0);
        $wallet->setRef($id);
        $wallet->setDueDate($duration);
        $wallet->setNote($credits);

        $em->persist($wallet);
        $em->flush();
    }
//functio to add credits
    public function addUserToWalletAction($id, $type, $credits, $mode)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new Wallet();
        if ($type == 0) {
            $wallet->setPrepaid($credits);
            $wallet->setPostpaid(0);
        } else {
            $wallet->setPostpaid($credits);
            $wallet->setPrepaid(0);
        }
        $wallet->setUser($id);
        $wallet->setRef($id);
        $wallet->setStatus(0);
        $wallet->setDuration(0);

        $wallet->setDate(date('d-m-Y'));
        $em->persist($wallet);
        $em->flush();
        $time = date('h-i a');
        $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $credits, 'Added By Admin', $type, '0', $time, $mode);
        return $id;
    }
//function to create logs
    public function addWalletLogsAction($ref, $debit, $credit, $date, $total, $note, $type, $status, $time, $mode)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new WalletLogs();
        $wallet->setCredit($credit);
        $wallet->setDebit($debit);
        $wallet->setBalance($total);
        $wallet->setType($type);
        $wallet->setNote($note);
        $wallet->setStatus($status);
        $wallet->setDate($date);
        $wallet->setref($ref);
        $wallet->setStatus(0);
        $wallet->setDateTime($time);
        $wallet->setMode($mode);

        $em->persist($wallet);
        $em->flush();
        return 0;
    }

/////////////////////////
    // userWalletReport
    public function deliverySlotsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('AppBundle:Customer')->findAll();

        return $this->render('AppBundle:Admin:Customer/listUser.html.twig', array(
            'menuItems' => $menus,
        ));

    }
    public function importProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        // $sqlc = $connection->prepare("SELECT * from menu_item where isActive!=2 and branch='$branch'");
        // $sqlc->execute();
        // $crow = $sqlc->fetchAll();

        // $sql = $connection->prepare("SELECT * from menu_item where isActive!=2 and branch='0'");
        // $sql->execute();
        // $row = $sql->fetchAll();
        // if (count($row) == 0) {
        //     $resp = array();
        // } else {
        //     foreach ($row as $res) {
        //         $resp[] = array('id' => $res['id'], 'itemName' => $res['itemName'], 'type' => $this->CheckimportedData($res['id'], $branch));

        //     }
        // }
        return $this->render('AppBundle:Restaurant:Menu/import.html.twig', array(
            'data' => array(),
        ));
    }

public function importAjaxAction(Request $request)
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
        $branch = $_GET['branch'];
        $store=0;
## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (itemName like '%" . $searchValue . "%' or
        category like '%" . $searchValue . "%' or
        id like'%" . $searchValue . "%' )";
        }

## Total number of records without filtering
        $sel = $connection->prepare("select count(*) as allcount from menu_item  where branch='$store' and isActive!=2 and 1");
        $sel->execute();
        $recordss = $sel->fetchAll();
        foreach ($recordss as $records) {
            # code...
        }
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = $connection->prepare("select count(*) as allcount from menu_item WHERE isActive!=2  and branch='$store' " . $searchQuery);
        $sel->execute();
        $recordsd = $sel->fetchAll();
        foreach ($recordsd as $records) {
            # code...
        }
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = $connection->prepare("select * from menu_item WHERE   isActive!=2  and branch='$store' " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage);
        $empQuery->execute();
        $res = $empQuery->fetchAll();
        $data = array();

        foreach ($res as $row) {

            if ($row['isActive'] == '1') {
                $active = '<span class="badge badge-success badge-sm status-badge">Active</span>';
                $status = '<a class="dropdown-item" href="' . $this->generateUrl('menu_status', array('id' => $row['id'])) . '">Deactivate</a>';
            } else {
                $active = '<span class="badge badge-danger badge-sm status-badge">Inactive</span>';
                $status = '<a class="dropdown-item" href="' . $this->generateUrl('menu_status', array('id' => $row['id'])) . '">Activate</a>';

            }
            $url = $this->generateUrl('restaurant_edit_menu_item', array('id' => $row['id']));
            $deleteurl=$this->generateUrl('delete_menu_items', array('id'=>$row['id']));
if($this->CheckimportedData($row['id'], $branch)=='Imported')
{
$checkbox='<input type="checkbox" disabled="">';
}
else
{
    $checkbox='<input type="checkbox" name="all[]" class="tst" value="' . $row['id'] . '">';
}
            $data[] = array(
                "branch" => $checkbox,
                "id" => $row['id'],
                "itemName" => "<img src='/uploads/items/images/" . $row['itemFeaturedImage'] . "'
       style='width:80px'> " . $row['itemName'] . "",
                "isActive" =>"<span class='badge badge-primary'>". $this->CheckimportedData($row['id'], $branch)."</span>",
               
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

    public function CheckimportedData($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * from menu_item where isActive!=2 and branch='$branch' and parent='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            $resp = 'Not Imported';
        } else {
            $resp = 'Imported';

        }
        return $resp;
    }
    public function importRootItemsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $checkbox = $request->get('all');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
// print_r($_POST['all']);

        if (isset($_POST['all'])) {
            $checkbox = $_POST['all'];
        } else {
            $checkbox = array();

        }
        foreach ($checkbox as $item) {
            $statement = $connection->prepare("SELECT * from menu_item  where id='$item' and branch=0");
            $statement->execute();
            $data = $statement->fetchAll();
            $category = $this->getCategory($item, $branch);
            // return new response('ahha');
            $brand = $this->getBrands($item, $branch);

            $res = $em->getConnection()->exec("INSERT INTO menu_item (itemName,category,itemSlug,vegType,itemShortDescription,itemDescription,itemFeaturedImage,regularPrice,salePrice,isActive,isSubscription,salesTax,totalQty,brand,alert,duration,nested,type,delivery,branch,parent) SELECT itemName,'$category',itemSlug,vegType,itemShortDescription,itemDescription,itemFeaturedImage,regularPrice,salePrice,isActive,isSubscription,salesTax,0,$brand,alert,duration,nested,type,delivery,branch,$item FROM menu_item where id='$item'");
            $newid = $em->getConnection()->lastInsertId();
            $res = $em->getConnection()->exec("update menu_item set branch='$branch' where id='$newid'");
            $variation = $em->getConnection()->exec("INSERT INTO price_variation (menu_item_id,variationName,barcode,price,membership_price,subscription,priority,mrp,stock,maxItem,status  ,minItem,sku,hsn,featured_image,weight,loyalty,cost) SELECT $newid,variationName,barcode,price,membership_price,subscription,priority,mrp,0,maxItem,status ,minItem,sku,hsn,featured_image,weight,loyalty,cost FROM price_variation where menu_item_id='$item' and status=0");
            $newvarid = $em->getConnection()->lastInsertId();
// $res=$em->getConnection()->exec("update price_variation set menu_item_id='$newid' where id='$newvarid'");
        }
        // retur n new jsonresponse($checkbox);
        $request->getSession()->getFlashBag()->add('success', 'Products Imported!');
        return $this->redirectToRoute('import_products');

    }
    public function getBrands($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT b.id from menu_item as a join brands as b on a.brand=b.ref where a.isActive='1' and a.id='$id' and b.branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return '0';
        } else {
            foreach ($row as $res) {
            }
            $resp = $res['id'];
            return $resp;
        }
    }

    public function getCustomerRegistrationKey($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * from customer where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return '0';
        } else {
            foreach ($row as $res) {
            }
            $resp = $res['registrationKey'];
            return $resp;
        }
    }
    public function getCategory($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT category from menu_item  where 1 and id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return '0';
        } else {
            foreach ($row as $res) {
            }
// echo $res['category'];
            $resp = $this->convertCategory($res['category'], $branch);
            return $resp;
        }
    }
    public function convertCategory($category, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $data = explode(',', $category);
        foreach ($data as $da) {
            $res[] = $id = $this->getCategoryId($da, $branch);
        }
        return implode($res, ',');
    }
    public function getCategoryId($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT id from sub_category  where 1 and ref='$id' and branch='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return '0';
        } else {
            foreach ($row as $res) {
            }
// echo $res['category'];
            return $res['id'];
        }
    }

    public function copyMenuItemToBranch($item, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * from menu_item  where id='$item'");
        $statement->execute();
        $data = $statement->fetchAll();
        $category = $this->getCategory($item, $branch);
        // return new response('ahha');
        $brand = $this->getBrands($item, $branch);

        $res = $em->getConnection()->exec("INSERT INTO menu_item (itemName,category,itemSlug,vegType,itemShortDescription,itemDescription,itemFeaturedImage,regularPrice,salePrice,isActive,isSubscription,salesTax,totalQty,brand,alert,duration,nested,type,delivery,branch,parent) SELECT itemName,'$category',itemSlug,vegType,itemShortDescription,itemDescription,itemFeaturedImage,regularPrice,salePrice,isActive,isSubscription,salesTax,0,$brand,alert,duration,nested,type,delivery,0,$item FROM menu_item where id='$item'");
        $newid = $em->getConnection()->lastInsertId();
        // $res = $em->getConnection()->exec("update menu_item set branch='$branch' where id='$newid'");
        $variation = $em->getConnection()->exec("INSERT INTO price_variation (menu_item_id,variationName,barcode,price,membership_price,subscription,priority,mrp,stock,maxItem,status  ,minItem,sku,hsn,featured_image,weight,loyalty,cost) SELECT $newid,variationName,barcode,price,membership_price,subscription,priority,mrp,0,maxItem,status ,minItem,sku,hsn,featured_image,weight,loyalty,cost FROM price_variation where menu_item_id='$item' and status=0");
        $newvarid = $em->getConnection()->lastInsertId();
        return 0;
    }

    public function cleanNonAsciiCharactersInString($orig_text)
    {

         $text = $orig_text;

        // Single letters
        $text = preg_replace("/[∂άαáàâãªä]/u", "a", $text);
        $text = preg_replace("/[∆лДΛдАÁÀÂÃÄ]/u", "A", $text);
        $text = preg_replace("/[ЂЪЬБъь]/u", "b", $text);
        $text = preg_replace("/[βвВ]/u", "B", $text);
        $text = preg_replace("/[çς©с]/u", "c", $text);
        $text = preg_replace("/[ÇС]/u", "C", $text);
        $text = preg_replace("/[δ]/u", "d", $text);
        $text = preg_replace("/[éèêëέëèεе℮ёєэЭ]/u", "e", $text);
        $text = preg_replace("/[ÉÈÊË€ξЄ€Е∑]/u", "E", $text);
        $text = preg_replace("/[₣]/u", "F", $text);
        $text = preg_replace("/[НнЊњ]/u", "H", $text);
        $text = preg_replace("/[ђћЋ]/u", "h", $text);
        $text = preg_replace("/[ÍÌÎÏ]/u", "I", $text);
        $text = preg_replace("/[íìîïιίϊі]/u", "i", $text);
        $text = preg_replace("/[Јј]/u", "j", $text);
        $text = preg_replace("/[ΚЌК]/u", 'K', $text);
        $text = preg_replace("/[ќк]/u", 'k', $text);
        $text = preg_replace("/[ℓ∟]/u", 'l', $text);
        $text = preg_replace("/[Мм]/u", "M", $text);
        $text = preg_replace("/[ñηήηπⁿ]/u", "n", $text);
        $text = preg_replace("/[Ñ∏пПИЙийΝЛ]/u", "N", $text);
        $text = preg_replace("/[óòôõºöοФσόо]/u", "o", $text);
        $text = preg_replace("/[ÓÒÔÕÖθΩθОΩ]/u", "O", $text);
        $text = preg_replace("/[ρφрРф]/u", "p", $text);
        $text = preg_replace("/[®яЯ]/u", "R", $text);
        $text = preg_replace("/[ГЃгѓ]/u", "r", $text);
        $text = preg_replace("/[Ѕ]/u", "S", $text);
        $text = preg_replace("/[ѕ]/u", "s", $text);
        $text = preg_replace("/[Тт]/u", "T", $text);
        $text = preg_replace("/[τ†‡]/u", "t", $text);
        $text = preg_replace("/[úùûüџμΰµυϋύ]/u", "u", $text);
        $text = preg_replace("/[√]/u", "v", $text);
        $text = preg_replace("/[ÚÙÛÜЏЦц]/u", "U", $text);
        $text = preg_replace("/[Ψψωώẅẃẁщш]/u", "w", $text);
        $text = preg_replace("/[ẀẄẂШЩ]/u", "W", $text);
        $text = preg_replace("/[ΧχЖХж]/u", "x", $text);
        $text = preg_replace("/[ỲΫ¥]/u", "Y", $text);
        $text = preg_replace("/[ỳγўЎУуч]/u", "y", $text);
        $text = preg_replace("/[ζ]/u", "Z", $text);

        // Punctuation
        $text = preg_replace("/[‚‚]/u", ",", $text);
        $text = preg_replace("/[`‛′’‘]/u", "'", $text);
        $text = preg_replace("/[″“”«»„]/u", '"', $text);
        $text = preg_replace("/[—–―−–‾⌐─↔→←]/u", '-', $text);
        $text = preg_replace("/[  ]/u", ' ', $text);

        $text = str_replace("…", "...", $text);
        $text = str_replace("≠", "!=", $text);
        $text = str_replace("≤", "<=", $text);
        $text = str_replace("≥", ">=", $text);
        $text = preg_replace("/[‗≈≡]/u", "=", $text);

        // Exciting combinations
        $text = str_replace("ыЫ", "bl", $text);
        $text = str_replace("℅", "c/o", $text);
        $text = str_replace("₧", "Pts", $text);
        $text = str_replace("™", "tm", $text);
        $text = str_replace("№", "No", $text);
        $text = str_replace("Ч", "4", $text);
        $text = str_replace("‰", "%", $text);
        $text = preg_replace("/[∙•]/u", "*", $text);
        $text = str_replace("‹", "<", $text);
        $text = str_replace("›", ">", $text);
        $text = str_replace("‼", "!!", $text);
        $text = str_replace("⁄", "/", $text);
        $text = str_replace("∕", "/", $text);
        $text = str_replace("⅞", "7/8", $text);
        $text = str_replace("⅝", "5/8", $text);
        $text = str_replace("⅜", "3/8", $text);
        $text = str_replace("⅛", "1/8", $text);
        $text = preg_replace("/[‰]/u", "%", $text);
        $text = preg_replace("/[Љљ]/u", "Ab", $text);
        $text = preg_replace("/[Юю]/u", "IO", $text);
        $text = preg_replace("/[ﬁﬂ]/u", "fi", $text);
        $text = preg_replace("/[зЗ]/u", "3", $text);
        $text = str_replace("£", "(pounds)", $text);
        $text = str_replace("₤", "(lira)", $text);
        $text = preg_replace("/[‰]/u", "%", $text);
        $text = preg_replace("/[↨↕↓↑│]/u", "|", $text);
        $text = preg_replace("/[∞∩∫⌂⌠⌡]/u", "", $text);

        //2) Translation CP1252.
        $trans = get_html_translation_table(HTML_ENTITIES);
        $trans['f'] = '&fnof;'; // Latin Small Letter F With Hook
        $trans['-'] = array(
            '&hellip;', // Horizontal Ellipsis
            '&tilde;', // Small Tilde
            '&ndash;', // Dash
        );
        $trans["+"] = '&dagger;'; // Dagger
        $trans['#'] = '&Dagger;'; // Double Dagger
        $trans['M'] = '&permil;'; // Per Mille Sign
        $trans['S'] = '&Scaron;'; // Latin Capital Letter S With Caron
        $trans['OE'] = '&OElig;'; // Latin Capital Ligature OE
        // $trans["'"] = array(
        //     '&lsquo;',  // Left Single Quotation Mark
        //     '&rsquo;',  // Right Single Quotation Mark
        //     '&rsaquo;', // Single Right-Pointing Angle Quotation Mark
        //     '&sbquo;',  // Single Low-9 Quotation Mark
        //     '&circ;',   // Modifier Letter Circumflex Accent
        //     '&lsaquo;'  // Single Left-Pointing Angle Quotation Mark
        //     );

        $trans['"'] = array(
            '&ldquo;', // Left Double Quotation Mark
            '&rdquo;', // Right Double Quotation Mark
            '&bdquo;', // Double Low-9 Quotation Mark
        );

        $trans['*'] = '&bull;'; // Bullet
        $trans['n'] = '&ndash;'; // En Dash
        $trans['m'] = '&mdash;'; // Em Dash
        $trans['tm'] = '&trade;'; // Trade Mark Sign
        $trans['s'] = '&scaron;'; // Latin Small Letter S With Caron
        $trans['oe'] = '&oelig;'; // Latin Small Ligature OE
        $trans['Y'] = '&Yuml;'; // Latin Capital Letter Y With Diaeresis
        $trans['euro'] = '&euro;'; // euro currency symbol
        ksort($trans);

        foreach ($trans as $k => $v) {
            $text = str_replace($v, $k, $text);
        }

        // 3) remove <p>, <br/> ...
        $text = strip_tags($text);

        // 4) &amp; => & &quot; => '
        $text = html_entity_decode($text);

        // transliterate
        // if (function_exists('iconv')) {
        // $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // }

        // remove non ascii characters
        // $text =  preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $text);

        return $text;
    }

    public function getNumberFormat(){

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
  
        $statement = $em->getConnection()->prepare("SELECT * FROM `restaurants` where `id` = '$branch'");
        $statement->execute();
        $res = $statement->fetchAll(); 

        if(count($res) != 0){

          return $res[0]['number_format'];
  
        }
  
      }

      public function deleteMenuItemAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch=$user->getBranch();
    
        $id = $request->get('id');
    
        $res=$em->getConnection()->exec("update menu_item set isActive='2' where id='$id'");
    
        $request->getSession()->getFlashBag()->add('success',"Changes Saved!");
    
        return $this->render('AppBundle:Restaurant:Menu/viewMenu.html.twig');
    
       }

       public function variationAddimages($id,$c)
       {
           $em = $this->getDoctrine()->getManager();
           //print_r($c);exit;
           $name = 'image'.$c;
           $file = $_FILES[$name];
           for ($i = 0; $i < count($file['name']); $i++) {
               $image = array(
                   'name' => $file['name'][$i],
                   'type' => $file['type'][$i],
                   'size' => $file['size'][$i],
                   'tmp_name' => $file['tmp_name'][$i],
                   'error' => $file['error'][$i],
               );
               $basename = $_FILES[$name]["name"][$i];
               $destionation = "../uploads/items/images/" . $basename;
               if ($basename == '') {
       
               } else {
                   move_uploaded_file($_FILES[$name]["tmp_name"][$i], $destionation);
                   $res = $em->getConnection()->exec("INSERT INTO `variation_files`(`image`, `ref`) VALUES ('$basename','$id')");
               }
           }
       }

//////////////////////////////////////////////////////////////////////////////////////////
}
