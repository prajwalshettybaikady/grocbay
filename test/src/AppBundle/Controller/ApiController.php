<?php
namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\StockReturn;
use AppBundle\Entity\ReturnLogs;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletDue;
use AppBundle\Entity\WalletLogs;
use AppBundle\Entity\MenuItem;
use AppBundle\Entity\Promocode;
use AppBundle\Entity\PromoUsage;
use AppBundle\Entity\DeliveryBoy;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\ShoppingCart;
use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\PackageExtras;
use AppBundle\Entity\OrderItemExtras;
use AppBundle\Entity\RestaurantRatings;
use AppBundle\Entity\CustomerOrderItems;
use AppBundle\Entity\ShoppingLists;
use AppBundle\Entity\ShoppingListsName;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
date_default_timezone_set('Asia/Dubai');

class ApiController extends Controller
{
	public function isNested($id)
{
  $em = $this->getDoctrine()->getManager();
  $connection = $em->getConnection();
  $statement = $connection->prepare("SELECT * FROM  sub_category where parent_id='$id'");
  $statement->execute();
  $res = $statement->fetchAll();
  if(count($res)==0)
  {
    return 0;
  }
  else
  {
    return 1;
  }
}
public function clearHoldedMembershipAction(Request $request)
{
$em = $this->getDoctrine()->getManager();
$connection = $em->getConnection();
$res = $em->getConnection()->exec("UPDATE membership_history set status=0 where ref in(SELECT a.id  FROM customer_order as a join `membership_history` as b on a.id=b.ref  WHERE a.orderStatus='Cancelled' and b.status=2)");
return array("status"=>200);
}
    public function searchProductAllAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $searchProduct = $request->get('item_name');
        $branch = $request->get('branch');


        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }


        $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and 1 and a.id in(select menu_item_id from price_variation where status='0' and $query)  and  a.itemName  LIKE '%" . $searchProduct . "%' and a.branch='$branch' $oquery Limit 10");

        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $menu[] = array('id' => $res['id'], 'category' => $res['category'], 'itemName' => $res['itemName'], 'itemSlug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'itemFeaturedImage' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'isActive' => $res['isActive'], 'salesTax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'priceVariation' => $this->priceVariationsearch($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty'], $branch));
        }
        if (count($menus) == 0) {
            $data['data'] = array();
        } else {
            $data['data'] = $menu;
        }
        return $data;
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
    public function singleProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        
        $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id='$id'");

        $statement->execute();
        $menus = $statement->fetchAll();
        $menu = array();
        foreach ($menus as $res) {
            $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'item_description' => $res['itemDescription'], 'manufacturer_description' => $res['itemShortDescription'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
        }
        if ($menu == '' || $menu == array()) {
            return $data['data'] = array();
        } else {
            return $data['data'] = $menu;
        }
    }

    public function getImages($id)
    {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `variation_files` where ref='$id'");

        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) == 0) {
            $menu = array();
        } else {
            $menu = $menus;
        }
        return $menu;
    }
    public function priceVariation($id, $tax, $salesprice, $type, $qty)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        if ($type == '1') {

            $statement = $connection->prepare("SELECT * FROM `price_variation` where menu_item_id='$id'  and  1 and status='0' order by priority asc");
        } else {
            $statement = $connection->prepare("SELECT * FROM `price_variation` where menu_item_id='$id'  and  1 and status='0' order by priority asc");
        }

        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

            if ($type == '1') {
                if ($tax == '' || $tax < 0) {
                    $tax = 0;
                }
                if ($res['membership_price'] == '' || $res['membership_price'] < 0 || $res['membership_price'] == '/' || $res['membership_price'] == null) {
                    $m = 0;
                } else {
                    $m = $res['membership_price'];
                }

                $ta = $res['mrp'] * $salesprice / 100;
                $mrp = $ta + $salesprice;
                // $price=$res['price']+$res['price']*$tax/100;

                // $mem=$m+$m*$tax/100;
                $price = $res['price'];
                if ($price == '' || $price == '0') {
                    $price = $mrp;
                } else {
                    $tas = $res['price'] * $mrp / 100;
                    $fin = -($tas - $mrp);
                    $price = $fin;

                }
                if ($m == '' || $m == '0') {
                    $mem = 0;
                } else {

                    $tas = $m * $mrp / 100;
                    $fin = -($tas - $mrp);

                    $mem = $fin;
                }
                if ($res['minItem'] == '' || $res['minItem'] == '0' || $res['minItem'] < 0) {
                    $min = 1;
                } else {
                    $min = $res['minItem'];
                }
                if ($res['maxItem'] == '' || $res['maxItem'] == '0' || $res['maxItem'] < 0) {
                    $max = 1000;
                } else {
                    $max = $res['maxItem'];
                }
                $weight = $res['weight'];
                if (is_numeric($weight)) {
                    if ($weight == 0) {
                        $weight = 1;
                    } else {
                        $weight = $weight;
                    }} else {
                    $weight = 1;
 
                }

                $stock = $qty / $weight;
                if($res['loyalty']=='')
                {
                	$loyalty=(float)0;
                }
                else
                {
                	$loyalty=(float)$res['loyalty'];
                }
                $menu[] = array('net_weight' => $res['net_weight'],'id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variation_name' => $res['variationName'], 'price' => (float)$price, 'priority' => $res['priority'], 'mrp' => (float)$mrp, 'stock' => round($stock), 'max_item' => $max, 'unit' => $res['subscription'], 'status' => $res['status'], 'min_item' => $min, 'membership_price' => (float)$mem, 'loyalty' => $loyalty,"images" => $this->getImages($res['id']), 'weight' => $weight);
            } else {
                if ($tax == '' || $tax < 0) {
                    $tax = 0;
                }
                if ($res['membership_price'] == '' || $res['membership_price'] < 0 || $res['membership_price'] == '/' || $res['membership_price'] == null) {
                    $m = 0;
                } else {
                    $m = $res['membership_price'];
                }
                // $mrp=$res['mrp']+$res['mrp']*$tax/100;
                $mrp = $res['mrp'];
                // $price=$res['price']+$res['price']*$tax/100;
                $price = $res['price'];

                if ($price == '' || $price == '0') {
                    $price = $mrp;
                } else {
                    $price = $price;
                }
                if ($res['minItem'] == '' || $res['minItem'] == '0' || $res['minItem'] < 0) {
                    $min = 1;
                } else {
                    $min = $res['minItem'];
                }
                if ($res['maxItem'] == '' || $res['maxItem'] == '0' || $res['maxItem'] < 0) {
                    $max = 1000;
                } else {
                    $max = $res['maxItem'];
                }
                // $mem=$m+$m*$tax/100;
                $mem = $m;
                  if($res['loyalty']=='')
                {
                	$loyalty=(float)0;
                }
                else
                {
                	$loyalty=(float)$res['loyalty'];
                }
                $menu[] = array('id' => $res['id'],'net_weight' => $res['net_weight'], 'menu_item_id' => $res['menu_item_id'], 'variation_name' => $res['variationName'], 'price' => (float)$price, 'priority' => $res['priority'], 'mrp' => (float)$mrp, 'stock' => round($res['stock']), 'max_item' => $max, 'status' => $res['status'], 'min_item' => $min, 'weight' => $res['weight'], 'membership_price' => (float)$mem, 'unit' => $res['subscription'],'loyalty' => $loyalty, "images" => $this->getImages($res['id']));

            }
        }
        return $menu;
    }

    public function priceVariationsearch($id, $tax, $salesprice, $type, $qty, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "stock > weight";

        }

        $statement = $connection->prepare("SELECT * FROM `price_variation` where menu_item_id='$id'  and  $query and status='0' order by priority asc");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

            if ($type == '1') {
                if ($tax == '' || $tax < 0) {
                    $tax = 0;
                }
                if ($res['membership_price'] == '' || $res['membership_price'] < 0 || $res['membership_price'] == '/' || $res['membership_price'] == null) {
                    $m = 0;
                } else {
                    $m = $res['membership_price'];
                }
                $ta = $res['mrp'] * $salesprice / 100;
                $mrp = $ta + $salesprice;
                // $price=$res['price']+$res['price']*$tax/100;

                $price = $res['price'];
                if ($price == '' || $price == '0') {
                    $price = $mrp;
                } else {

                    $tas = $res['price'] * $mrp / 100;
                    $fin = -($tas - $mrp);

                    $price = $fin;
                }
                if ($m == '' || $m == '0') {
                    $mem = 0;
                } else {

                    $tas = $m * $mrp / 100;
                    $fin = -($tas - $mrp);

                    $mem = $fin;
                }
                if ($res['minItem'] == '' || $res['minItem'] == '0' || $res['minItem'] < 0) {
                    $min = 1;
                } else {
                    $min = $res['minItem'];
                }
                if ($res['maxItem'] == '' || $res['maxItem'] == '0' || $res['maxItem'] < 0) {
                    $max = 1000;
                } else {
                    $max = $res['maxItem'];
                }
                $weight = $res['weight'];
                if (is_numeric($weight)) {
                    $weight = $res['weight'];
                } else {
                    $weight = 1;

                }
                if ($weight == 0) {
                    $weight = 1;
                } else {
                    $weight = $weight;
                }
                $stock = $qty / $weight;
                  if($res['loyalty']=='')
                {
                	$loyalty=(float)0;
                }
                else
                {
                	$loyalty=(float)$res['loyalty'];
                }
                $menu[] = array('net_weight' => $res['net_weight'],'id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variationName' => $res['variationName'], 'price' => (float)$price, 'priority' => $res['priority'], 'mrp' => (float)($mrp), 'stock' => round($stock), 'maxItem' => $max, 'status' => $res['status'], 'minItem' => $min, 'membership_price' => (float)$mem, "images" => $this->getImages($res['id']), 'weight' => $weight, 'unit' => $res['subscription'],'loyalty' => $loyalty);
            } else {
                if ($tax == '' || $tax < 0) {
                    $tax = 0;
                }
                if ($res['membership_price'] == '' || $res['membership_price'] < 0 || $res['membership_price'] == '/' || $res['membership_price'] == null) {
                    $m = 0;
                } else {
                    $m = $res['membership_price'];
                }
                // $mrp=$res['mrp']+$res['mrp']*$tax/100;
                $mrp = $res['mrp'];
                $price = $res['price'];
                if ($price == '' || $price == '0') {
                    $price = $mrp;
                } else {
                    $price = $res['price'];
                }
                if ($res['minItem'] == '' || $res['minItem'] == '0' || $res['minItem'] < 0) {
                    $min = 1;
                } else {
                    $min = $res['minItem'];
                }
                if ($res['maxItem'] == '' || $res['maxItem'] == '0' || $res['maxItem'] < 0) {
                    $max = 1000;
                } else {
                    $max = $res['maxItem'];
                }
                // $mem=$m+$m*$tax/100;
                $mem = $m;
                  if($res['loyalty']=='')
                {
                	$loyalty=(float)0;
                }
                else
                {
                	$loyalty=(float)$res['loyalty'];
                }
                $menu[] = array('net_weight' => $res['net_weight'],'id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variationName' => $res['variationName'], 'price' => (float)$price, 'priority' => $res['priority'], 'mrp' => (float)$mrp, 'stock' => round($res['stock']), 'maxItem' => $max, 'status' => $res['status'], 'minItem' => $min, 'membership_price' => (float)$mem, "images" => $this->getImages($res['id']), 'weight' => $res['weight'], 'unit' => $res['subscription'],'loyalty' => $loyalty);

            }
        }
        return $menu;
    }

    public function getBannerDataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        $branch = $request->get('branch'); // extra parameter added
        $data = array();

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }

        $sql = $connection->prepare("SELECT * from advertisement where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {
            $bannertype = $res['bannerFor'];
            $dataId = $res['data'];
            if ($bannertype == '2') {
                $statement = $connection->prepare("SELECT * from sub_category where id='$dataId'");

                $statement->execute();
                $cate = $statement->fetchAll();
                foreach ($cate as $category) {
                    # code...
                }
                $parentId = $category['parent_id'];
                if ($parentId == '') {
                    $ratings[] = array('id' => $category['id'], 'category_name' => $category['categoryName'], 'icon_image' => $category['iconImage'], 'SubCategory' => $this->getSubcategoryAction($category['id']));
                    if ($ratings == '') {
                        $data['data'] = array();
                    } else {
                        $data['type'] = 2;
                        $data['data'] = $ratings;
                    }
                } else {
                    $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and  find_in_set('$dataId',REPLACE(a.category, ', ', ',')) and a.id in(select menu_item_id from price_variation where $query) $oquery order by a.id desc");

                    $statement->execute();
                    $menus = $statement->fetchAll();
                    foreach ($menus as $res) {
                        $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");
                        if ($priceVariation == 0) {

                        } else {
                            $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'alert' => $res['alert'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                        }
                    }
                    if ($menu == '') {
                        $data = array();
                    } else {
                        $data['type'] = '3';
                        $data['data'] = $menu;

                    }
                }
            } elseif ($bannertype == '1') {
                $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation where $query) and a.id in($dataId) $oquery order by a.id desc");

                $statement->execute();
                $menus = $statement->fetchAll();
                foreach ($menus as $res) {
                    $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");
                    if ($priceVariation == 0) {

                    } else {
                        $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                    }
                }
                if ($menu == '') {
                    $data['data'] = array();
                } else {
                    $data['type'] = 1;
                    $data['data'] = $menu;
                }

            }
            $rows[] = $res;
        }
        return $data;

    }

    public function getMenuItemByBrandAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $start = $request->get('start');
        $end = $request->get('end');

        $branch = $request->get('branch'); // extra parameter added

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }

        // $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT a.*,b.categoryName as brandss FROM `menu_item` as a join brands  as b on a.brand=b.id where a.brand='$id' and a.id in(select menu_item_id from price_variation where $query and status='0') $oquery and a.isActive='1' order by a.itemName   limit 10 OFFSET $start");

        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) == 0) {
            $menu = array();

        } else {
            foreach ($menus as $res) {
                $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");
                if ($priceVariation == 0) {
                    $menu = array();
                } else {
                    $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['brandss'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                }
            }
        }
        return $data['data'] = $menu;
    }

    public function getItemsAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();

        $branch = $request->get('branch'); // extra parameter added

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }

// $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
$connection = $em->getConnection();
$statement = $connection->prepare("SELECT a.*,b.categoryName as brandss FROM `menu_item` as a join brands  as b on a.brand=b.id where a.id in($id) and a.id in(select menu_item_id from price_variation where $query and status='0') $oquery and a.isActive='1'");
        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) == 0) {
            $menu = array();
        } else {
            foreach ($menus as $res) {
            $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");
                if ($priceVariation == 0) {
                    $menu = array();
                } else {
                    $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'type' => $res['type'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['brandss'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                }
            }
        }
        return $data['data'] = $menu;
    }

    public function getMenuItemAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $start = $request->get('start');
        $end = $request->get('end');
        $type = $request->get('type');
        $branch = $request->get('branch');

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {
            $query = "1";
            $oquery = "AND 1";
        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }

        // $ref=$em->getRepository('AppBundle:MenuItem')->findBy(array('brand'=>$id));
        $connection = $em->getConnection();
        if ($type == 0) {
            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and find_in_set('$id',REPLACE(a.category, ', ', ',')) and a.id in(select menu_item_id from price_variation where  $query and status='0') and a.branch='$branch' $oquery order by a.itemName  limit 10 OFFSET $start");
        } else {
            $statement = $connection->prepare("SELECT * FROM  sub_category where id='$id'");
            $statement->execute();
            $res = $statement->fetchAll();
            foreach ($res as $val) {
                # code...
            }
            $parent_id = $val['parent_id'];
            $isNested = $this->isNested($id);
            if ($isNested == 0) {
                $statement = $connection->prepare("SELECT * FROM  sub_category where parent_id='$parent_id'");
                $statement->execute();
                $res = $statement->fetchAll();
                foreach ($res as $val) {
                    # code...
                    $resp[] = $val['id'];
                }
                $cate = implode(',', $resp);
            } else {
                $statement = $connection->prepare("SELECT * FROM  sub_category where parent_id='$id'");
                $statement->execute();
                $res = $statement->fetchAll();
                foreach ($res as $val) {
                    # code...
                    $resp[] = $val['id'];
                }
                $cate = implode(',', $resp);
            }

            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.category in($cate) and a.id in(select menu_item_id from price_variation where  $query and status='0')  and a.branch='$branch' $oquery order by a.itemName limit 10 OFFSET $start");
        }

        $statement->execute();
        $menus = $statement->fetchAll();
        $menu = array();
        foreach ($menus as $res) {
            $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
        }
        if ($menu == '' || $menu == array()) {
            return $data['data'] = array();
        } else {
            return $data['data'] = $menu;
        }
    }

    public function getDiscountAction(Request $request)
    {
        $rows = $request->get('rows');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $branch = $request->get('branch');

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }
        $menu = array();

        $sqlq = "SELECT discount,discount_label FROM restaurants WHERE id='$branch'";
        $sql = $connection->prepare($sqlq);
        $sql->execute();
        $sqldata = $sql->fetchAll();
        foreach ($sqldata as $ss) {
            # code...
        }
        $resdata = $ss['discount'];
        $discount_label = $ss['discount_label'];
        if ($resdata == '') {
            $resdata = 0;
        } else {
            $resdata = $ss['discount'];
        }
        if ($rows == 0) {

            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation where $query and status='0') and a.id in($resdata) $oquery and a.branch='$branch' order by a.id asc limit 5 OFFSET 0");

            $statement->execute();
            $menus = $statement->fetchAll();
            $menu=array();
            foreach ($menus as $res) {
                $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");

                if ($priceVariation == 0) {

                } else {
                    $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                }
            }
            if (count($menu)==0) {
                $data = array();
            } else {
                $data = $menu;
            }
        } else {

            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation where  $query and status='0') and 1 and a.id in($resdata) $oquery and a.branch='$branch' order by a.id asc limit 5 OFFSET 0");

            $statement->execute();
            $menus = $statement->fetchAll();
$menu=array();
            foreach ($menus as $res) {

                $menu[] = array('id' => $res['id'], 'category_id' => $res['category_id'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));

            }
            if (count($menu)==0) {
                $data = array();
            } else {
                $data = $menu;

            }
        }
        $result['data'] = $data;
        $result['label'] = $discount_label;

        return $result;
    }

    public function getRecentProductsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $connection = $em->getConnection();

        $branch = $request->get('branch'); // extra parameter added

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }

        $sqlq = "SELECT category FROM menu_item WHERE id='$id'";
        $sql = $connection->prepare($sqlq);
        $sql->execute();
        $sqldata = $sql->fetchAll();
        foreach ($sqldata as $ss) {
            # code...
        }
        $resdata = $ss['category'];
        $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.category in($resdata) and a.id in(select menu_item_id from price_variation where  $query and status='0') and a.id!='$id' $oquery  and a.branch='$branch' limit 10 ");
        $statement->execute();
        $menus = $statement->fetchAll();
        $menu = array();
        foreach ($menus as $res) {

            $menu[] = array('id' => $res['id'], 'category_id' => $res['category_id'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));

        }
        if (count($menu) == '0') {
            $data = array();
        } else {
            $data = $menu;
        }

        $result['data'] = $data;
        $result['label'] = "Similar Product";

        return $result;
    }

    public function getFeaturedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $rows = $request->get('rows');
        $branch = $request->get('branch');

        if ($this->getAllowedOutOfStockStatus($branch) == 1) {

            $query = "1";
            $oquery = "AND 1";

        } else if ($this->getAllowedOutOfStockStatus($branch) == 0) {

            $query = "(CASE WHEN a.type=0 THEN stock > weight ELSE 1 END)";

            $oquery = "AND (CASE WHEN a.type=1 THEN a.`totalQty` > 1 ELSE 1 END)";

        }
        $menu = array();

        $sqlq = "SELECT featured,featured_label FROM restaurants WHERE id='$branch'";
        $sql = $connection->prepare($sqlq);
        $sql->execute();
        $sqldata = $sql->fetchAll();
        foreach ($sqldata as $ss) {
            # code...
        }
        $resdata = $ss['featured'];
        if ($resdata == '') {
            $resdata = 0;
        } else {
            $resdata = $ss['featured'];
        }
        $featured_label = $ss['featured_label'];

        if ($rows == 0) {

            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation where  $query and status='0') and a.id in($resdata) $oquery  and a.branch='$branch' order by a.id asc limit 100 OFFSET 0");

            $statement->execute();
            $menus = $statement->fetchAll();
            foreach ($menus as $res) {
                $priceVariation = $this->existAction("SELECT * FROM `price_variation` where menu_item_id='" . $res['id'] . "'");
                if ($priceVariation == 0) {

                } else {
                    $menu[] = array('id' => $res['id'], 'category_id' => $res['category'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
                }
            }
            if ($menu == '') {
                $data = array();
            } else {
                $data = $menu;
            }
        } else {
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT a.*,b.categoryName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in(select menu_item_id from price_variation where  $query and status='0') and a.id in($resdata) $oquery order by a.id asc limit 5 OFFSET 0");

            $statement->execute();
            $menus = $statement->fetchAll();

            foreach ($menus as $res) {

                $menu[] = array('id' => $res['id'], 'category_id' => $res['category_id'], 'item_name' => $res['itemName'], 'item_slug' => $res['itemSlug'], 'veg_type' => $res['vegType'], 'item_featured_image' => $res['itemFeaturedImage'], 'regular_price' => $res['regularPrice'], 'sale_price' => $res['salePrice'], 'is_active' => $res['isActive'], 'sales_tax' => $res['salesTax'], 'total_qty' => $res['totalQty'], 'brand' => $res['categoryName'], 'type' => $res['type'], 'price_variation' => $this->priceVariation($res['id'], $res['salesTax'], $res['salePrice'], $res['type'], $res['totalQty']));
            }
            if ($menu == '') {
                $data = array();
            } else {
                $data = $menu;
            }
        }

        $result['data'] = $data;
        $result['label'] = $featured_label;

        return $result;
    }

    public function getAllowedOutOfStockStatus($branch)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $ressql = $connection->prepare("SELECT * from `restaurants` where `id`='$branch'");
        $ressql->execute();
        $rest_res = $ressql->fetchAll();

        if (count($rest_res) == 0) {
            return 0;
        } else {
            return $rest_res[0]['allowoutofstock'];
        }

    }

    public function updateCustomerProfileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');

        $sql = $em->getConnection()->prepare("SELECT * FROM `customer` where id='$id'");
        $sql->execute();
        $cresponse = $sql->fetchAll();
        if (count($cresponse) == 0) {
            return array("status" => 400, "message" => 'Invalid Customer Id');
        } else {

            $em->getConnection()->exec("update customer set username='$name',email='$email',mobileNo='$mobile' where 1 and id='$id'");
            return array("status" => 200, "message" => 'Profile updated Successfully');
        }
    }

    public function setCustomerDefaultAddressAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $id = $request->get('id');

        $sql = $em->getConnection()->prepare("SELECT * FROM `billing_address` where id='$id'");
        $sql->execute();
        $cresponse = $sql->fetchAll();

        if (count($cresponse) != 0) {

            $cid = $cresponse[0]['customer_d'];

            $em->getConnection()->exec("update billing_address set isdefault=0 where 1 and customer_d='$cid'");

            $em->getConnection()->exec("update billing_address set isdefault=1 where 1 and id='$id'");

            return array("status" => 200, "message" => 'Default Address set Successfully');

        } else {
            return array("status" => 400, "message" => 'Invalid Address Id');
        }

    }

    public function getCustomerDefaultAddressAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $customer = $request->get('customer');

        $sql = $connection->prepare("SELECT * FROM `billing_address` where `customer_d`='$customer' order by isdefault desc");
        $sql->execute();
        $finalresponse = $sql->fetchAll();
        if (count($finalresponse) == 0) {
            return array();

        } else {
            foreach ($finalresponse as $ra) {
                # code...

                $res[] = array('id' => $ra['id'], 'customer' => $ra['customer_d'], 'addresstype' => $ra['addressType'], 'customername' => $ra['fullName'], 'address' => $ra['address'], 'lattitude' => $ra['lattitude'], 'logingitude' => $ra['logingitude'], 'default' => $ra['isdefault']);

            }
            return $res;
        }

    }

    public function getShopSubCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        $sql = $connection->prepare("SELECT * FROM `sub_category` where `parent_id` = '$id' and status='0'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {

            return array();

        } else {

            foreach ($row as $res) {
                $data[] = array("id" => $res['id'], "name" => $res['categoryName']);
            }
            return $data;

        }

    }

    public function setNestedCategoryAction(){

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sql = $connection->prepare("SELECT a.id from sub_category as a join sub_category as b on a.id=b.parent_id  where a.parent_id !=''");
        $sql->execute();
        $row = $sql->fetchAll();
        
        if (count($row) == 0) {

            return array("status" => 400, "message" => 'Error');

        } else {

            foreach ($row as $res) {
                
                $em->getConnection()->exec("update sub_category set nested=1 where 1 and parent_id=".$res['id']);

            }
            
            return array("status" => 200, "message" => 'Updated Successfully');

        }

    }

}
