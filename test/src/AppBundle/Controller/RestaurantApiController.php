<?php
namespace AppBundle\Controller;

use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\CustomerOrderItems;
use AppBundle\Entity\MenuItem;
use AppBundle\Entity\OrderItemExtras;
use AppBundle\Entity\PackageExtras;
use AppBundle\Entity\Promocode;
use AppBundle\Entity\RestaurantRatings;
use AppBundle\Entity\Restaurants;
use AppBundle\Entity\ReturnLogs;
use AppBundle\Entity\ShoppingLists;
use AppBundle\Entity\ShoppingListsName;
use AppBundle\Entity\StockReturn;
use AppBundle\Entity\User;
use AppBundle\Entity\Wallet;
use AppBundle\Entity\WalletDue;
use AppBundle\Entity\WalletLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// date_default_timezone_set('Asia/Dubai');

class RestaurantApiController extends Controller
{
    public function checkCartAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $branch = $request->get('branch');
        $mode = $request->get('item');
        $sql = $connection->prepare("SELECT * FROM `billing_address` where id='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return $data = array('status' => 0);
        } else {
            foreach ($row as $res) {

            }
            $latitude = $res['lattitude'];
            $longitude = $res['logingitude'];
            $area = $this->checklatlong($longitude, $latitude);
            $areaid = $this->getareaId($area);
            $sqls = $connection->prepare("SELECT * FROM `location` where id='$areaid'");
            $sqls->execute();
            $rows = $sqls->fetchAll();
            foreach ($rows as $ress) {
                # code...
            }
            $br = $ress['branch'];
            $sql = $connection->prepare("SELECT * from menu_item where id in($mode) and branch='$br'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == '0') {
                return $data = array('status' => 0);
            } else {
                return $data = array('status' => 1);

            }
        }
    }
    public function getBarcodeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $orderId = $request->get('order');
        $barcode = $request->get('barcode');

        $sql = $connection->prepare("SELECT b.id,b.itemName,b.priceVariavtion,b.quantity FROM `price_variation` as a join customer_order_items as b on a.id=b.itemId where b.order_d='$orderId' and a.barcode='$barcode'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == '0') {
            return $data = array('status' => 0);
        } else {
            foreach ($row as $res) {
                return $data = array('status' => 1, "id" => $res['id'], "name" => $res['itemName'], "variation" => $res['priceVariavtion'], "quantity" => $res['quantity']);
            }
        }

    }
    public function getOrderStatusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sql = $connection->prepare("SELECT * from customer_order where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();

        foreach ($row as $res) {

        }
        if ($res['paymentStatus'] == 'cancelled') {

            $data = array('status' => 'no');
        } else {
            $data = array('status' => 'yes');
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
    // getPrepaidBalance
    public function getPrepaidBalanceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $ref = $request->get('userId');
        $re = $em->getRepository('AppBundle:Wallet')->findByUser($ref);
        if (empty($re)) {

            $res[] = array("postpaid" => 0, "prepaid" => 0, "loyalty" => 0);
        } else {
            foreach ($re as $da) {
                $prepaid = $da->getPrepaid();
                $postpaid = $da->getPostpaid();
                $loyalty = $da->getLoyalty();
                $res[] = array("postpaid" => round($postpaid), "prepaid" => round($prepaid), "loyalty" => round($loyalty));
            }

        }
        return $res;
    }

    //get logs

    public function getLogsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ref = $request->get('userId');
        $type = $request->get('type');

        $re = $em->getRepository('AppBundle:WalletLogs')->findBy(array("ref" => $ref, 'type' => $type), array('id' => 'desc'));
        $res = array();
        if (empty($re)) {
            $res[] = array("data" => array());
        } else {
            foreach ($re as $da) {
                if ($da->getDebit() == 0 && $da->getCredit() == 0) {
                }
                else
                {
                    $res[] = array("data" => $da);
                
                }
            }
        }
        return $res;
    }

    public function getItems($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from customer_order_items where order_d='$id'");
        $statement->execute();
        return $res = $statement->fetchAll();

    }
    public function deliveryNewOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $mode = $request->get('mode');

        if ($mode == '0') {
            $statement = $connection->prepare("SELECT * FROM `customer_order` where deliveryBoy='$id' and orderStatus='dispatched' order by fixDate ASC");
        }
        if ($mode == '1') {
            $statement = $connection->prepare("SELECT * FROM `customer_order` where deliveryBoy='$id' and orderStatus='onway' order by fixDate ASC");
        }
        if ($mode == '2') {
            $statement = $connection->prepare("SELECT * FROM `customer_order` where deliveryBoy='$id' and orderStatus='delivered' order by fixDate ASC");
        }
        if ($mode == '3') {
            $statement = $connection->prepare("SELECT a.*,b.*,c.mobileNo FROM `customer_order_items` as a join customer_order as b on a.order_d=b.id join customer as c on b.customer_d=c.id where b.id='$id'");
        }
        $statement->execute();
        $res = $statement->fetchAll();
        return $data['data'] = $res;
    }

    public function deliveryLoginAction(Request $request)
    {
        $user = new User;
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $mobile = $request->get('mobile');
        $password = $request->get('password');
        $tokenId = $request->get('tokenId');
        // $pwd=$user->setPassword($password);
        // $pass=$password->getPassword();
        // $usr=$em->getRepository('AppBundle:CustomerOrder')->findBy(array("deliveryBoy"=>$id,'orderStatus'=>'delivered'));
        $encoder = $this->get('security.encoder_factory')->getEncoder($user);
        // $encodedPassword = $encoder->isPasswordValid(fn,$pass);
        $pass = '$2y$13$bw7IQgMVyCGocpZJIbqgwOe51Ze9w3WC14NwgyCNChuzrV0FLMjAy';
        $out = $em->getRepository('AppBundle:User')->findBy(array('mobileNumber' => $mobile, 'userType' => 'Delivery', 'isActive' => 1));

        if (empty($out)) {
            $data = array("status" => 400, "data" => $out);
        } else {
            foreach ($out as $res) {
                $x[] = $res;
                $res = $em->getConnection()->exec("update user set registrationKey='$tokenId' where mobileNumber='$mobile'");

                $data = array("status" => 200, "data" => $x);
            }
        }
        return $data;
    }

    public function getAdsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $branch = $request->get('branch');
        if ($branch == 0) {
            $menus = $em->getRepository('AppBundle:Advertisement')->findBy(array('isActive' => '1', 'advertisementType' => $id));
        } else {
            $menus = $em->getRepository('AppBundle:Advertisement')->findBy(array('isActive' => '1', 'advertisementType' => $id, 'branch' => $branch));

        }

        return $data['data'] = $menus;
    }
    public function getBrandsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $branch = $request->get('branch');
        $statement = $connection->prepare("SELECT * from brands where parent_id='1'  and branch='$branch' order by id desc");
        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) != 0) {
            foreach ($menus as $res) {
                $id = $res['id'];

                $ratings[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage']);

            }
        } else {
            $ratings = array();

        }

        return $ratings;
    }

    public function getbrandsdataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $branch = $request->get('branch');

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from brands where id in($id) and branch='$branch'");

        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) != 0) {
            foreach ($menus as $res) {
                $id = $res['id'];

                $ratings[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage']);

            }
        } else {
            $ratings = array();

        }

        return $ratings;
    }
    //for providing customer side operations
    public function searchProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restList = $em->createQueryBuilder()
            ->select('menuItem', 'extraPackage', 'packageExtras', 'category', 'priceVariation')
            ->from('AppBundle:MenuItem', 'menuItem')
            ->leftJoin('menuItem.extraPackage', 'extraPackage')
            ->leftJoin('extraPackage.packageExtras', 'packageExtras')
            ->leftJoin('menuItem.category', 'category')
            ->leftJoin('menuItem.priceVariation', 'priceVariation')
            ->orderby('menuItem.itemName', 'DESC')
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restList;

        return $result;
    }
    public function bannerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $branch = $request->get('branch');
        $menus = $em->getRepository('AppBundle:Advertisement')->findBy(array('isActive' => '1', 'advertisementType' => '1', 'branch' => $branch));

        return $data['data'] = $menus;
    }
    public function resturantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('branch');

        $menus = $em->getRepository('AppBundle:Restaurants')->findById($id);

        return $data['data'] = $menus;
    }

    public function getCategoryAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $menus = $em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' => $id, 'status' => 0));
        return $data['data'] = $menus;
    }
    public function checklatlong($latitude_y, $longitude_x)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select * from location where branch in(SELECT id FROM restaurants where isOpen=1)");

        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $zonals = $res['value'];

            $response = $this->checksAction($zonals, $latitude_y, $longitude_x);
            if ($response == '0') {
                return $res['title'];
            } else {
            }
        }
    }
    public function checkLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $latitude_y = $request->get('long'); // x-coordinate of the point to test
        $longitude_x = $request->get('lat');
        $statement = $connection->prepare("select * from location where branch in(SELECT id FROM restaurants where isOpen=1)");

        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $zonals = $res['value'];

            $response = $this->checksAction($zonals, $latitude_y, $longitude_x);
            if ($response == '0') {
                return array("status" => "yes", "area" => $res['title'], "branch" => $res['branch']);
            } else {
            }

        }
        return array("status" => "no", "area" => '', 'branch' => '');

    }
    public function checksAction($zonals, $latitude_y, $longitude_x)
    {
        $polyX = array(); //horizontal coordinates of corners
        $polyY = array(); //vertical coordinates of corners

        $json = json_decode($zonals);

        foreach ($json as $value) {

            $zonalArray[] = $res = $value->lat . ',' . $value->lng;
        }
        // $zonalArray =   explode(":",$zonal);
        $polySides = count($zonalArray); //how many corners the polygon has
        // print_r($polySides);
        foreach ($zonalArray as $eachZoneLatLongs) {
            $latlongArray = explode(",", $eachZoneLatLongs);
            $polyX[] = $latlongArray[0];
            $polyY[] = $latlongArray[1];
        }

        $vertices_x = $polyX; // x-coordinates of the vertices of the polygon

        $vertices_y = $polyY; // y-coordinates of the vertices of the polygon

        #$vertices_x = array(37.628134, 37.629867, 37.62324, 37.622424); // x-coordinates of the vertices of the polygon
        #$vertices_y = array(-77.458334,-77.449021,-77.445416,-77.457819); // y-coordinates of the vertices of the polygon
        $points_polygon = count($vertices_x); // number vertices
        #Following Points lie inside this region
        // y-coordinate of the point to test

        #Following Points lie outside this region
        #$longitude_x = 27.175015 ;  // x-coordinate of the point to test
        #$latitude_y = 78.042155;    // y-coordinate of the point to test

        if ($this->is_in_polygonAction($points_polygon, $vertices_x, $vertices_y, $longitude_x, $latitude_y)) {
            return "0";

        } else {return "1";

        }
    }
    public function is_in_polygonAction($points_polygon, $vertices_x, $vertices_y, $longitude_x, $latitude_y)
    {
        $i = $j = $c = 0;
        for ($i = 0, $j = $points_polygon - 1; $i < $points_polygon; $j = $i++) {
            if ((($vertices_y[$i] > $latitude_y != ($vertices_y[$j] > $latitude_y)) &&
                ($longitude_x < ($vertices_x[$j] - $vertices_x[$i]) * ($latitude_y - $vertices_y[$i]) / ($vertices_y[$j] - $vertices_y[$i]) + $vertices_x[$i]))) {
                $c = !$c;
            }

        }
        return $c;
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

                $menu[] = array('id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variation_name' => $res['variationName'], 'price' => (float) $price, 'priority' => $res['priority'], 'mrp' => (float) $mrp, 'stock' => (float) $stock, 'max_item' => $max, 'unit' => $res['subscription'], 'status' => $res['status'], 'min_item' => $min, 'membership_price' => (float) $mem, "images" => $this->getImages($res['id']), 'weight' => $weight);
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
                $menu[] = array('id' => $res['id'], 'menu_item_id' => $res['menu_item_id'], 'variation_name' => $res['variationName'], 'price' => (float) $price, 'priority' => $res['priority'], 'mrp' => (float) $mrp, 'stock' => (float) $res['stock'], 'max_item' => $max, 'status' => $res['status'], 'min_item' => $min, 'weight' => $res['weight'], 'membership_price' => (float) $mem, 'unit' => $res['subscription'], "images" => $this->getImages($res['id']));

            }
        }
        return $menu;
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

    public function searchCategorizedProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restList = $em->createQueryBuilder()
            ->select('mainCat', 'menuItem', 'extraPackage', 'packageExtras', 'category', 'priceVariation')
            ->from('AppBundle:SubCategory', 'mainCat')
            ->leftJoin('mainCat.menuItem', 'menuItem')
            ->leftJoin('menuItem.extraPackage', 'extraPackage')
            ->leftJoin('extraPackage.packageExtras', 'packageExtras')
            ->leftJoin('menuItem.category', 'category')
            ->leftJoin('menuItem.priceVariation', 'priceVariation')
            ->where('menuItem.isActive = :truet')
            ->setParameter('truet', true)
            ->orderby('mainCat.categoryName', 'DESC')
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restList;

        return $result;
    }

    public function restaurantRatingsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $edit = false;

        //authentication
        $apiKey = $request->get('apiKey');
        $reviews = $request->get('reviews');
        $rating = $request->get('ratings');
        $restaurant = $customer = null;
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        if ($helper->testNull($rating)) {
            $result['data'][] = "Invalid ratings";
        }

        if ($result['data'] == []) {
            $ratings = $em->createQueryBuilder()
                ->select('ratings')
                ->from('AppBundle:RestaurantRatings', 'ratings')
                ->leftJoin('ratings.customer', 'customer')
                ->andWhere('customer.id = :customerId')
                ->setParameter('customerId', $customerstomer->getId())
                ->getQuery()
                ->getResult();
            $rate = null;
            if ($ratings == []) {
                $rate = new RestaurantRatings();
                $rate->setCustomer($customer);
                $em->persist($rate);
            } else {
                $rate = $ratings[0];
            }
            $rate->setReviews($reviews);
            $rate->setRatings($rating);
            $em->flush();
            $star5 = (array) $em->createQueryBuilder()
                ->select('count(star5.id) as countings', 'sum(star5.ratings) as total')
                ->from('AppBundle:RestaurantRatings', 'star5')
                ->andWhere('star5.ratings = 5')
                ->getQuery()
                ->getSingleResult();
            $star4 = (array) $em->createQueryBuilder()
                ->select('count(star4.id) as countings', 'sum(star4.ratings) as total')
                ->from('AppBundle:RestaurantRatings', 'star4')
                ->andWhere('star4.ratings = 4')
                ->getQuery()
                ->getSingleResult();
            $star3 = (array) $em->createQueryBuilder()
                ->select('count(star3.id) as countings', 'sum(star3.ratings) as total')
                ->from('AppBundle:RestaurantRatings', 'star3')
                ->andWhere('star3.ratings = 3')
                ->getQuery()
                ->getSingleResult();
            $star2 = (array) $em->createQueryBuilder()
                ->select('count(star2.id) as countings', 'sum(star2.ratings) as total')
                ->from('AppBundle:RestaurantRatings', 'star2')
                ->andWhere('star2.ratings = 2')
                ->getQuery()
                ->getSingleResult();
            $star1 = (array) $em->createQueryBuilder()
                ->select('count(star1.id) as countings', 'sum(star1.ratings) as total')
                ->from('AppBundle:RestaurantRatings', 'star1')
                ->andWhere('star1.ratings = 1')
                ->getQuery()
                ->getSingleResult();
            $popularity = (5 * $star5['total'] + 4 * $star4['total'] + 3 * $star3['total'] + 2 * $star2['total'] + 1 * $star1['total']) / ($star5['total'] + $star4['total'] + $star3['total'] + $star2['total'] + $star1['total']);
            $restaurant->setPopularity($popularity);
            $em->flush();
            $result['data'][] = "Ratings updated";
            $result['status'] = true;
        }

        return $result;
    }

    public function updatePaymentStatusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $helper = $this->container->get('function_helper');
        $status = $request->get('status');
        $transction = $request->get('transction');
        $orderid = $request->get('orderid');
        $id = $request->get('orderid');
        $name = $request->get('name');
        $mobile = $request->get('mobile');
        $note = addslashes($request->get('note'));
        if ($status == 'paid') {
            $rand = mt_rand(1111, 9999);
            //$res=$em->getConnection()->exec("update customer_order set transactionId='$rand' where 1 and id='$orderid'");
            $res = $em->getConnection()->exec("update customer_order set paymentStatus='$status',transactionId='$transction',orderStatus='received' where 1 and id='$orderid'");
            //
            $statement = $connection->prepare("SELECT * from membership_history  where ref='$id'");
            $statement->execute();
            $memebr = $statement->fetchAll();
            if (count($memebr) == 0) {
            } else {
                $statement = $connection->prepare("SELECT * from customer_order  where id='$id'");
                $statement->execute();
                $menus = $statement->fetchAll();
                if (count($menus) == 0) {
                    $data = array();
                } else {

                    foreach ($menus as $res) {
                        $userid = $res['customer_d'];
                        $em->getConnection()->exec("update customer set membership='1' where id='$userid'");
                        $em->getConnection()->exec("update membership_history set status='0' where ref='$orderid'");
                    }
                }
            }
        } else {
            $res = $em->getConnection()->exec("update customer_order set paymentStatus='$status',transactionId='$transction',orderStatus='cancelled' where 1 and id='$orderid'");
        }
        if ($res) {
            $statement = $connection->prepare("SELECT * from customer_order  where id='$id'");
            $statement->execute();
            $menus = $statement->fetchAll();
            foreach ($menus as $res) {
                $userid = $res['customer_d'];
                $branch = $res['branch'];
                //        //for send sms to user
                // $helper->decodeJson(json_encode($user),$customerOrder);
                $customerOrder = new CustomerOrder();
                $customerOrder = $em->getRepository('AppBundle:CustomerOrder')->find($orderid);

// return $customerOrder;
                $helper->sendOrderMessage($customerOrder, $branch);
                $helper->sendOrderMessageCustomer($userid, $customerOrder, $branch);

            }
            $data = array("status" => 200);
        } else {
            $data = array("status" => 400);

        }
        return $data;
    }

    public function cancelOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $orderid = $request->get('id');
        $note = addslashes($request->get('note'));
        $res = $em->getConnection()->exec("update customer_order set orderStatus='cancelled',note='$note' where 1 and id='$orderid'");
        $em->getConnection()->exec("update membership_history set status='0' where ref='$orderid'");
            $this->cancelOrder($orderid);

        if ($res) {
            //        //for send sms to user
            // $helper->decodeJson(json_encode($user),$customerOrder);
            //  $helper->sendOrderMessage($customerOrder);
            // $helper->sendOrderMessageCustomer($userId,$customerOrder);
            $data = array("status" => 200);
        } else {
            $data = array("status" => 400);

        }
        return $data;
    }

    public function cancelOrder($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * from customer_order where id='$id'");
        $statement->execute();
        $mest = $statement->fetchAll();
        foreach ($mest as $order) {
        }

        $wallet = $order['wallet'];
        $loyalty = $order['loyalty'];
        $customer = $order['customer_d'];
        $branch = $order['branch'];
        $paymentType = $order['paymentType'];
        $paymentStatus = $order['paymentStatus'];
        $amount = $order['orderAmount'];

        if ($loyalty != 0) {
            $note = 'Points Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 3, $loyalty, 'Refund', $note, 0, $branch);
        }
        if ($wallet != 0) {
            $note = $wallet . ' Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 0, $wallet, 'Refund', $note, 0, $branch);
        }
        if($paymentStatus == 'paid')
        {
          if ($paymentType == 'paytm' || $paymentType == 'online' || $paymentType == 'razor') {
            $note = $amount . ' Refunded for the order number #' . $id;
            $this->getBalanceAction($customer, 0, $amount, 'Refund', $note, 0, $branch);
        }        
        }


        return 0;
    }
    public function getBalanceActions($id, $type, $credits, $mode, $note, $duration, $branch)
    {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();

        $re = $em->getRepository('AppBundle:Wallet')->findByUser($id);
        if (empty($re)) {
            $addCredits = $this->addUserToWalletAction($id, $type, $credits, $mode, $note);

            return $addCredits;
        } else {
            foreach ($re as $da) {
                $prepaid = $da->getPrepaid();
                $postpaid = $da->getPostpaid();
                $loyalty = $da->getLoyalty();
                if ($type == 0) {
                    $amount = $prepaid + $credits;
                    $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$id'");
                } elseif ($type == 3) {
                    $connection = $em->getConnection();
                    $sql = $connection->prepare("SELECT * FROM `loyalty` where branch='$branch'");
                    $sql->execute();
                    $query = $sql->fetchAll();
                    foreach ($query as $resp) {
                        # code...
                    }
                    $Points = $resp['points'];
                    $response = $credits * $Points;
                    $amount = $loyalty + $response;
                    $credits = $response;
                    $em->getConnection()->exec("update wallet set loyalty='$amount' where user='$id'");
                } else {
                    $amount = $postpaid + $credits;
                    $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$id'");
                    // $this->addDuesAction($credits,$amount,date('d-m-Y'),$duration,$id,'Added By MarketBhaav',0);
                }
                $time = date('h-i a');
                $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $amount, $note, $type, '0', $time, $mode);
                return $amount;
            }
        }
    }
    public function paymentModeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $statement = $connection->prepare("SELECT * from website  where id='1'");
        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) == 0) {
            $data = array();
        } else {
            foreach ($menus as $res) {
                # code...
            }
            $mode = explode(",", $res['payment_mode']);
            $difference = strtotime($res['end'])-strtotime(date('h:i A'));
            $sdifference = strtotime($res['start'])-strtotime(date('h:i A'));
            if ($difference < 0 && $sdifference < 0 || $sdifference > 0 ) {
                foreach ($mode as $mo) {
                    $end = $res['end'];

                    if ($mo == 'express') {

                    } else {
                        $data[] = $mo;
                    }

                }
            } else {
                $data = $mode;
            }
        }
        return $data;
    }
    public function getRestaurantRatingsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $restaurant = null;
        $ratings = $em->createQueryBuilder()
            ->select('ratings', 'customer')
            ->from('AppBundle:RestaurantRatings', 'ratings')
            ->leftJoin('ratings.customer', 'customer')
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $ratings;
        $result['status'] = true;
        return $result;
    }

    public function getRestaurantDetailsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $restaurant = $em->createQueryBuilder()
            ->select('rest')
            ->from('AppBundle:Restaurants', 'rest')
            ->where('rest.id = :restId')
            ->setParameter('restId', 999)
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restaurant;
        $result['status'] = true;
        return $result;
    }
    public function getPrivacyPolicyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $restaurant = $em->createQueryBuilder()
            ->select('rest')
            ->from('AppBundle:Restaurants', 'rest')
            ->where('rest.id = :restId')
            ->setParameter('restId', 999)
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restaurant;
        $result['status'] = true;
        return $result;
    }
    public function getusername($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * from customer where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {

            return $res['username'];
        }
    }
    public function makeOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $helper = $this->container->get('function_helper');
        $trans = $this->container->get('transaction_helper');
        $result['status'] = false;
        $result['data'] = [];
        $result['promoError'] = false;
        $result['promoErrorData'] = [];
        $result['promoAmount'] = 0;
        $customerOrder = new CustomerOrder();
        $promoFlag = false;
        if ($request->get('_route') == "api_promocode_test") {
            $promoFlag = true;
        }
        //receive the data
        $apiKey = $request->get('apiKey');
        $branch = $request->get('branch');
        $addressId = $request->get('addressId');
        $orderType = $request->get('orderType');
        $paymentType = $request->get('paymentType');
        $items = $request->get('items');
        $walletType = $request->get('walletType');
        $walletBalance = $request->get('walletBalance');
        $userId = $request->get('userId');
        $note = addslashes($request->get('note'));
        $fixdate = $request->get('fixdate');
        $membership = $request->get('membership');
        $channel = $request->get('channel');
        $version = $request->get('version');
        $membership_active = $request->get('membership_active');
        //if promocode check

        $promocodeId = $request->get('promocode');
        $promocode = null;
        $flag = false;

        $restaurant = $customer = null;
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restaurant = $em->getRepository('AppBundle:Restaurants')->find(999);

        if ($helper->testNull($orderType)) {
            $result['data'][] = "Invalid order type";
        }
        if ($helper->testNull($paymentType)) {
            $result['data'][] = "Invalid payment type";
        }
        if ($helper->testNull($addressId)) {
            $result['data'][] = "Invalid address id";
        } else {
            $fl = true;
            if ($orderType == 'Delivery' || $orderType == 'express' || $orderType == 'delivery') {

                foreach ($customer->getBillingAddress() as $address) {
                    if ($address->getId() == $addressId) {
                        $customerOrder->setAddress($address->getAddress());
                        $customerOrder->setLogitude($address->getLogingitude());
                        $customerOrder->setLatitude($address->getLattitude());
                        $customerOrder->setCustomerName($address->getFullName());
                        $customerOrder->setLandmark($address->getExtraInfo());
                        $fl = false;
                        $area = $this->checklatlong($address->getLogingitude(), $address->getLattitude());
                        $customerOrder->setArea($area);
                    }
                }
            } else {
                $sql = $connection->prepare("SELECT * from pickup where id='$addressId'");
                $sql->execute();
                $row = $sql->fetchAll();
                foreach ($row as $res) {

                    $name = $res['name'];
                    $addressp = $name . ',' . $res['address'] . ',' . $res['contact'];
                    $contact = $res['contact'];
                    $customerOrder->setAddress($addressp);
                    $customerOrder->setLogitude($res['longitude']);
                    $customerOrder->setLatitude($res['latitude']);
                    $username = $this->getusername($apiKey);
                    $customerOrder->setCustomerName($username);
                    $customerOrder->setLandmark($name);
                    $fl = false;
                    $customerOrder->setArea($name);
                }
            }
            if ($fl) {
                $result['data'][] = 'Please select address from customer address';
            }
        }

        if ($result['data'] != []) {
            return $result;
        }
        $sqln = $connection->prepare("SELECT * from customer_order where  1");
        $sqln->execute();
        $rown = $sqln->fetchAll();

        $id = count($rown) + 10000 + 1;
        $customerOrder->setId($id);
        $timeText = $request->get('fix_time');
        $customerOrder->setOrderDate(new \Datetime());
        $customerOrder->setSortTime(new \Datetime());
        $customerOrder->setMembership($membership_active);
        $customerOrder->setVersion($version);
        $customerOrder->setCustomer($customer);
        $customerOrder->setTray('0');
        $customerOrder->setFixtime($timeText);
        $customerOrder->setChannel($channel);
        $customerOrder->setFixdate($fixdate);
        $customerOrder->setNote($note);
        $customerOrder->setBranch($branch);
        $total = 0;
        if (is_array($items)) {
            if ($membership_active == '0' || $membership_active == '' || $membership_active == '2') {

                // normal price
                foreach ($items as $item) {
                    $customerOrderItem = new CustomerOrderItems();
                    $customerOrderItem->setCustomerOrder($customerOrder);
                    $customerOrderItem->setIsTray('0');
                    $flag = 0;
                    $varFlag = 0;
                    if ($helper->testNull($item['productId'])) {
                        $result['data'][] = "Invalid productId";
                        $flag++;
                    } else {
                        $menuItem = $em->getRepository('AppBundle:MenuItem')->find($item['productId']);
                        // return $item['productId'];

                        if (!($menuItem instanceof MenuItem)) {
                            $result['data'][] = "Invalid menu item";
                            $flag++;
                        } else {

                            $customerOrderItem->setItemName($menuItem->getItemName());
                            $customerOrderItem->setBrand($menuItem->getBrand());

                            if (sizeof($menuItem->getPriceVariation()) > 0) {
                                foreach ($menuItem->getPriceVariation() as $variation) {

                                    if ($menuItem->getType() == '1') {
                                        $customerOrderItem->setItemId($variation->getId());

                                        $weight = $variation->getWeight();
                                        if (is_numeric($weight)) {
                                            if ($weight == 0) {
                                                $weight = 1;
                                            } else {
                                                $weight = $variation->getWeight();
                                            }
                                        } else {
                                            $weight = 1;
                                        }
                                        $resp = $weight * $item['quantity'];
                                        $minus = $menuItem->getTotalQty() - $resp;
                                        $ids = $menuItem->getId();
                                        // minus stock
                                        $em->getConnection()->exec("update menu_item set totalQty='$minus' where 1 and id='$ids'");
                                        // print("update menu_item set totalQty='$minus' where 1 and id='$ids'");
                                        if ($item['priceVariation'] == $variation->getId()) {
                                            $customerOrderItem->setPriceVariavtion($variation->getVariationName());
                                            $tax = $menuItem->getSalesTax();
                                            // $pr=$variation->getPrice()+$variation->getPrice()*$tax/100;
                                            $pr = $variation->getPrice();
                                            $salesprice = $menuItem->getSalePrice();
                                            if ($pr == '' || $pr == '0') {
                                                $pr = $variation->getMrp();
                                                $prs = $pr * $salesprice / 100;
                                                $iprice = $prs + $salesprice;
                                                $customerOrderItem->setDiscountPrice(0);

                                            } else {
                                                $pr = $variation->getMrp();
                                                $prs = $pr * $salesprice / 100;
                                                $resp = round($prs + $salesprice);

                                                $pr = $variation->getPrice();
                                                $prs = $pr * $resp / 100;
                                                $iprice = -($prs - $resp);

                                                $customerOrderItem->setBarcode($variation->getBarcode());

                                                $customerOrderItem->setDiscountPrice($resp - $iprice);
                                            }

                                            $customerOrderItem->setPrice($iprice);
                                            $customerOrderItem->setTax($tax);
                                            $customerOrderItem->setSku($variation->getSku());
                                            $customerOrderItem->setCost(round($variation->getCost() * $item['quantity']));
                                            $customerOrderItem->setHsn($variation->getHsn());
                                            $varFlag++;
                                        }

                                        //end normal
                                    } else {
                                        if ($variation->getId() == $item['priceVariation']) {
                                            $customerOrderItem->setItemId($variation->getId());

                                            $minus = $variation->getStock() - $item['quantity'];
                                            $ids = $variation->getId();
                                            // minus stock
                                            $em->getConnection()->exec("update price_variation set stock='$minus' where 1 and id='$ids'");

                                            // print("update price_variation set stock='$minus' where 1 and id='$ids'");

                                            if ($item['priceVariation'] == $variation->getId()) {
                                                $customerOrderItem->setPriceVariavtion($variation->getVariationName());
                                                $tax = $menuItem->getSalesTax();
                                                $pr = $variation->getPrice();

                                                // $pr=$variation->getPrice()+$variation->getPrice()*$tax/100;

                                                if ($pr == '' || $pr == '0') {
                                                    $pr = $variation->getMrp();
                                                    $customerOrderItem->setDiscountPrice(0);
                                                } else {

                                                    $pr = $variation->getPrice();
                                                    $customerOrderItem->setDiscountPrice($variation->getMrp() - $pr);

                                                }
                                                $customerOrderItem->setBarcode($variation->getBarcode());

                                                $customerOrderItem->setPrice($pr);
                                                $customerOrderItem->setTax($tax);
                                                $customerOrderItem->setSku($variation->getSku());
                                                $customerOrderItem->setCost(round($variation->getCost() * $item['quantity']));

                                                $customerOrderItem->setHsn($variation->getHsn());
                                                $varFlag++;
                                            }

                                            //end normal

                                        }
                                    }
                                }
                                if ($varFlag == 0) {
                                    $result['data'][] = "Invalid variation details";
                                    $flag++;
                                }
                            } else {
                                if ($menuItem->getSalePrice()) {
                                    $customerOrderItem->setPrice($menuItem->getSalePrice());
                                } else {
                                    $customerOrderItem->setPrice($menuItem->getRegularPrice());
                                }
                            }
                            if ($helper->testNull($item['quantity'])) {
                                $result['data'][] = "Invalid quantity";
                                $flag++;
                            } else {
                                $customerOrderItem->setQuantity($item['quantity']);
                            }
                            $customerOrderItem->setActualAmount($customerOrderItem->getPrice() * $customerOrderItem->getQuantity());
                            $customerOrderItem->setDiscountTotal(round($customerOrderItem->getDiscountPrice() * $customerOrderItem->getQuantity()));
                            //toppings validation
                            $extraAmount = 0;

                            if (array_key_exists('extras', $item)) {
                                if (is_array($item['extras'])) {
                                    foreach ($item['extras'] as $extra) {
                                        if (array_key_exists('extraId', $extra)) {
                                            $extraPackage = $em->getRepository('AppBundle:PackageExtras')->find($extra['extraId']);
                                            if ($extraPackage instanceof PackageExtras) {
                                                if ($extraPackage->getExtraPackage()->getMenuItem()->getId() == $menuItem->getId()) {
                                                    $orderItemExtras = new OrderItemExtras();
                                                    $orderItemExtras->setTypeName($extraPackage->getExtraPackage()->getPackageName());
                                                    $orderItemExtras->setItemName($extraPackage->getTypeName());
                                                    $orderItemExtras->setPrice($extraPackage->getPrice());
                                                    $orderItemExtras->setCustomerOrderItems($customerOrderItem);
                                                    $extraAmount = $extraAmount + $orderItemExtras->getPrice();
                                                } else {
                                                    $flag++;
                                                    $result['data'][] = "Invalid package selected from menu item";
                                                }
                                            } else {
                                                $flag++;
                                                $result['data'][] = "Invalid package selected";
                                            }
                                        }
                                    }
                                }
                            }
                            $customerOrderItem->setExtraAmount($extraAmount);
                            $customerOrderItem->setSubTotal($customerOrderItem->getActualAmount() + $customerOrderItem->getExtraAmount());
                            $total = $total + $customerOrderItem->getSubTotal();
                        }
                    }

                    if ($flag == 0) {
                        $em->persist($customerOrderItem);
                    }
                }
            } //end of normal price
            else {
                //membershipprice
                foreach ($items as $item) {
                    $customerOrderItem = new CustomerOrderItems();
                    $customerOrderItem->setCustomerOrder($customerOrder);
                    $customerOrderItem->setIsTray('0');
                    $flag = 0;
                    $varFlag = 0;
                    if ($helper->testNull($item['productId'])) {
                        $result['data'][] = "Invalid productId";
                        $flag++;
                    } else {
                        $menuItem = $em->getRepository('AppBundle:MenuItem')->find($item['productId']);
                        if (!($menuItem instanceof MenuItem)) {
                            $result['data'][] = "Invalid menu item";
                            $flag++;
                        } else {
                            $customerOrderItem->setItemName($menuItem->getItemName());
                            $customerOrderItem->setBrand($menuItem->getBrand());

                            if (sizeof($menuItem->getPriceVariation()) > 0) {
                                foreach ($menuItem->getPriceVariation() as $variation) {

                                    if ($menuItem->getType() == '1') {
                                        $customerOrderItem->setItemId($variation->getId());

                                        $weight = $variation->getWeight();
                                        if (is_numeric($weight)) {
                                            if ($weight == 0) {
                                                $weight = 1;
                                            } else {
                                                $weight = $variation->getWeight();
                                            }
                                        } else {
                                            $weight = 1;
                                        }
                                        $resp = $weight * $item['quantity'];
                                        $minus = $menuItem->getTotalQty() - $resp;
                                        $ids = $menuItem->getId();
                                        // minus stock
                                        $em->getConnection()->exec("update menu_item set totalQty='$minus' where 1 and id='$ids'");

                                        if ($item['priceVariation'] == $variation->getId()) {
                                            $customerOrderItem->setPriceVariavtion($variation->getVariationName());
                                            $tax = $menuItem->getSalesTax();

                                            $pr = $variation->getMembershipPrice();
                                            $salesprice = $menuItem->getSalePrice();
                                            if ($pr == '' || $pr == '0') {
                                                $price = $variation->getPrice();
                                                if ($price == '' || $price == '0') {
                                                    $pr = $variation->getMrp();
                                                    $prs = $pr * $salesprice / 100;
                                                    $iprice = $prs + $salesprice;
                                                } else {
                                                    $prs = $variation->getMrp();
                                                    $prs = $prs * $salesprice / 100;
                                                    $resp = $prs + $salesprice;

                                                    $pr = $variation->getPrice();
                                                    $prs = $pr * $resp / 100;
                                                    $iprice = -($prs - $resp);
                                                }

                                                $customerOrderItem->setDiscountPrice(0);

                                            } else {
                                                $prs = $variation->getMrp();
                                                $prs = $pr * $salesprice / 100;
                                                $resp = $prs + $salesprice;

                                                $pr = $variation->getMembershipPrice();
                                                $prs = $pr * $resp / 100;
                                                $iprice = -($prs - $resp);
                                                $customerOrderItem->setDiscountPrice($resp - $iprice);

                                            }

                                            $customerOrderItem->setPrice($iprice);
                                            $customerOrderItem->setTax($tax);
                                            $customerOrderItem->setSku($variation->getSku());
                                            $customerOrderItem->setCost(round($variation->getCost() * $item['quantity']));
                                            $customerOrderItem->setHsn($variation->getHsn());
                                            $customerOrderItem->setCost(round($variation->getCost() * $item['quantity']));

                                            $varFlag++;
                                        }

                                    } else {
                                        if ($variation->getId() == $item['priceVariation']) {
                                            $customerOrderItem->setItemId($variation->getId());

                                            $minus = $variation->getStock() - $item['quantity'];
                                            $ids = $variation->getId();
                                            // minus stock
                                            $em->getConnection()->exec("update price_variation set stock='$minus' where 1 and id='$ids'");
                                            if ($item['priceVariation'] == $variation->getId()) {
                                                $customerOrderItem->setPriceVariavtion($variation->getVariationName());
                                                $tax = $menuItem->getSalesTax();
                                                $pr = $variation->getMembershipPrice();

                                                // $pr=$variation->getPrice()+$variation->getPrice()*$tax/100;

                                                if ($pr == '' || $pr == '0') {
                                                    if ($variation->getPrice() == 0 || $variation->getPrice() == '') {
                                                        $pr = $variation->getMrp();
                                                    } else {
                                                        $pr = $variation->getPrice();

                                                    }
                                                    $customerOrderItem->setDiscountPrice(0);

                                                } else {
                                                    $pr = $variation->getMembershipPrice();
                                                    $customerOrderItem->setDiscountPrice($variation->getPrice() - $pr);

                                                }
                                                $customerOrderItem->setPrice($pr);

                                                $customerOrderItem->setTax($tax);
                                                $customerOrderItem->setSku($variation->getSku());
                                                $customerOrderItem->setCost(round($variation->getCost() * $item['quantity']));
                                                $customerOrderItem->setHsn($variation->getHsn());
                                                $varFlag++;
                                            }

                                            //end normal
                                        }
                                    }
                                }
                                if ($varFlag == 0) {
                                    $result['data'][] = "Invalid variation details";
                                    $flag++;
                                }
                            } else {
                                if ($menuItem->getSalePrice()) {
                                    $customerOrderItem->setPrice($menuItem->getSalePrice());
                                } else {
                                    $customerOrderItem->setPrice($menuItem->getRegularPrice());
                                }
                            }
                            if ($helper->testNull($item['quantity'])) {
                                $result['data'][] = "Invalid quantity";
                                $flag++;
                            } else {
                                $customerOrderItem->setQuantity($item['quantity']);
                            }
                            $customerOrderItem->setActualAmount($customerOrderItem->getPrice() * $customerOrderItem->getQuantity());
                            $customerOrderItem->setDiscountTotal(round($customerOrderItem->getDiscountPrice() * $customerOrderItem->getQuantity()));

                            //toppings validation
                            $extraAmount = 0;

                            if (array_key_exists('extras', $item)) {
                                if (is_array($item['extras'])) {
                                    foreach ($item['extras'] as $extra) {
                                        if (array_key_exists('extraId', $extra)) {
                                            $extraPackage = $em->getRepository('AppBundle:PackageExtras')->find($extra['extraId']);
                                            if ($extraPackage instanceof PackageExtras) {
                                                if ($extraPackage->getExtraPackage()->getMenuItem()->getId() == $menuItem->getId()) {
                                                    $orderItemExtras = new OrderItemExtras();
                                                    $orderItemExtras->setTypeName($extraPackage->getExtraPackage()->getPackageName());
                                                    $orderItemExtras->setItemName($extraPackage->getTypeName());
                                                    $orderItemExtras->setPrice($extraPackage->getPrice());
                                                    $orderItemExtras->setCustomerOrderItems($customerOrderItem);
                                                    $extraAmount = $extraAmount + $orderItemExtras->getPrice();
                                                } else {
                                                    $flag++;
                                                    $result['data'][] = "Invalid package selected from menu item";
                                                }
                                            } else {
                                                $flag++;
                                                $result['data'][] = "Invalid package selected";
                                            }
                                        }
                                    }
                                }
                            }
                            $customerOrderItem->setExtraAmount($extraAmount);
                            $customerOrderItem->setSubTotal($customerOrderItem->getActualAmount() + $customerOrderItem->getExtraAmount());
                            $total = $total + $customerOrderItem->getSubTotal();
                            // $totaldiscount=$totaldiscount+$customerOrderItem->getDiscountTotal();
                        }
                    }

                    if ($flag == 0) {
                        $em->persist($customerOrderItem);
                    }
                }
                //end of membership price

            }
        } else {
            // $result['data'][]="No items given";
            // $flag=true;
        }
        $customerOrder->setActualAmount($total);

        $minOrderAmount = 0;
        $deliveryCharge = 0;
        $taxRate = 5;
        $taxType = 'inclusive';
        $serviceFee = 0;
        if ($restaurant instanceof Restaurants) {
            $minOrderAmount = $restaurant->getMinOrderAmount();
            $deliveryCharge = $restaurant->getDeliveryCharge();
            $taxRate = $restaurant->getTax();
            $taxType = $restaurant->getTaxType();
            $serviceFee = $restaurant->getServiceFee();
        }
        $tax = ($taxRate * $customerOrder->getActualAmount()) / 100;
        $customerOrder->setTotalTax($tax);
        if ($orderType == 'Delivery') {

            $mOrderAmount = $this->getdeliveryprice('Delivery', $addressId, 'orderamnt', $membership_active);
            if ($customerOrder->getActualAmount() < $mOrderAmount) {
                $dcharge = $this->getdeliveryprice('Delivery', $addressId, 'deliveryamnt', $membership_active);

                $customerOrder->setDeliveryCharge($dcharge);
            } else {
                $customerOrder->setDeliveryCharge("0");
            }
        } elseif ($orderType == 'express') {
            // addressId
            $mOrderAmount = $this->getdeliveryprice('Express', $addressId, 'orderamnt', $membership_active);
            if ($customerOrder->getActualAmount() < $mOrderAmount) {
                $dcharge = $this->getdeliveryprice('Express', $addressId, 'deliveryamnt', $membership_active);
                $customerOrder->setDeliveryCharge($dcharge);
            } else {
                $customerOrder->setDeliveryCharge("0");
            }

        } else {
            $customerOrder->setDeliveryCharge("0");
        }
        $totalAmount = $customerOrder->getActualAmount() + $customerOrder->getDeliveryCharge() - $customerOrder->getTotalDiscount();
        if ($taxType == 'exclusive') {
            $totalAmount = $totalAmount + $tax;
        }
        $customerOrder->setOrderAmount($totalAmount);

        //calculate appfoodra fee
        $payAmount = $customerOrder->getOrderAmount() * $serviceFee / 100;
        $customerOrder->setRestoAppFee($payAmount);
        $customerOrder->setRestPay($customerOrder->getOrderAmount() - $payAmount);

        $customerOrder->setOrderType($orderType);
        $customerOrder->setPaymentType(strtolower($paymentType));
        if ($paymentType == 'cod' || $paymentType == 'sod' || $paymentType == 'wallet' || $paymentType == 'loyalty' || $paymentType == 'sodedxo') {
            //      //for send sms to user

            $customerOrder->setOrderStatus("received");
            $customerOrder->setPaymentStatus("pending");
        } else {
            $customerOrder->setPaymentStatus("failed");
            $customerOrder->setOrderStatus("failed");

        }
// $customerOrder->setRestoAppFee($membership_active);
        if ($flag == false && $promoFlag == false) {
            try {

                $em->persist($customerOrder);
                $em->flush();

                if ($paymentType == 'cod' || $paymentType == 'sod' || $paymentType == 'wallet' || $paymentType == 'loyalty' || $paymentType == 'pickup' || $paymentType == 'PICKUP' || $paymentType == 'sodedxo') {
                    if ($customerOrder->getOrderStatus() != 'cancelled') {
                        //      //for send sms to user
                        $helper->decodeJson($userId, $customerOrder, $branch);

                        $helper->sendOrderMessage($customerOrder, $branch);
                        $helper->sendOrderMessageCustomer($userId, $customerOrder, $branch);
                    } else {

                    }
                }
                if ($restaurant instanceof Restaurants) {
                    $user = $em->createQueryBuilder()
                        ->select('customer', 'address')
                        ->from('AppBundle:Customer', 'customer')
                        ->leftJoin('customer.billingAddress', 'address')
                        ->andWhere('customer.apiKey = :customerId')
                        ->setParameter('customerId', $request->get('apiKey'))
                        ->getQuery()
                        ->getArrayResult();

                    // $helper->decodeJson(json_encode($user),$customerOrder);
                    //  $helper->sendOrderMessage($customerOrder);
                    // $helper->sendOrderMessageCustomer($userId,$customerOrder);
                    if ($membership == '' || $membership == '0') {

                    } else {
                        if ($customerOrder->getOrderStatus() != 'cancelled') {
                            $this->addmembership($membership, $userId, $customerOrder, 2);
                        } else {
                            $this->addmembership($membership, $userId, $customerOrder, 1);
                        }
                    }
                }
                $promo = $request->get('promo');
                $resp = $this->promocode($customerOrder->getId(), $promo, $branch);
                // $this->addLoyalty($customerOrder->getId(),$promo);
                $result['promocode'][] = $resp;

                $result['data'][] = "Successfully created one order";
                $loyalty = $request->get('loyalty');
                if ($loyalty != 0) {
                    $points = $request->get('point');
                    $loyalProints = $request->get('loyalty_points');
                    if ($points != 0) {
                        $note = 'Loyalty Used for #' . $customerOrder->getId();
                        $rec = $this->walletAction(3, $walletBalance, $userId, $paymentType, $note, $customerOrder->getId(), $branch, $points, $loyalProints);

                    }
                }
                if ($walletType != '4') {
                    $points = $request->get('point');
                    $loyalProints = $request->get('loyalty_points');
                    $note = 'Wallet Used for #' . $customerOrder->getId();
                    $rec = $this->walletAction(0, $walletBalance, $userId, $paymentType, $note, $customerOrder->getId(), $branch, $points, $loyalProints);
                }
                $result['status'] = true;
            } catch (\Exception $e) {
                $result['data'][] = $e->getMessage();
            }
            $order = $em->createQueryBuilder()
                ->select('customerOrder', 'item')
                ->from('AppBundle:CustomerOrder', 'customerOrder')
                ->leftJoin('customerOrder.customerOrderItems', 'item')
                ->where('customerOrder.id = :orderId')
                ->setParameter('orderId', $customerOrder->getId())
                ->getQuery()
                ->getArrayResult();
            if ($order != []) {
                $result['order'] = $order[0];
            }
        }
        $order_d = $customerOrder->getId();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT sum(discountTotal) as sum,sum(cost) as cost FROM `customer_order_items` where order_d='$order_d'");
        $sql->execute();
        $resps = $sql->fetchAll();
        foreach ($resps as $t) {
            # code...
        }
        $sums = $t['sum'];
        $cost = $t['cost'];
        $em->getConnection()->exec("update customer_order set discountTotal='$sums',cost='$cost'  where id='$order_d'");
        // $this->loyaltys($customerOrder->getId(),$branch,$customerOrder->getCustomer()->getRegistrationKey());
    $this->distributeCommission($order_d);

        return $result;
    }
public function distributeCommission($id)
{
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from customer_order where id='$id'");
        $statement->execute();
        $data = $statement->fetchAll();
        $branch=$data[0]['branch'];
        $orderamount=$data[0]['orderAmount'];
        $wallet=$data[0]['wallet'];
        $loyalty=$data[0]['loyalty'];
        $total=$orderamount+$loyalty+$wallet;
        $statementData = $connection->prepare("SELECT * from restaurants where id='$branch'");
        $statementData->execute();
        $resp = $statementData->fetchAll();
        $serviceFee=$resp[0]['serviceFee'];

        $fee=$total * $serviceFee / 100;
$res = $em->getConnection()->exec("update customer_order set restPay='$serviceFee',restoAppFee='$fee' where id='$id'");
return 0;
}
    public function checkPromocodeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $promocode = $request->get('promocode');
        $user = $request->get('user');
        $orderitems = $request->get('items');
        $delivery = 0;
        $orderamount = $request->get('total');
        $branch = $request->get('branch');

        $statement = $connection->prepare("SELECT * from promocode where promoCode='$promocode' and endDate >= CURDATE() and isActive='1' and branch='$branch'");
        $statement->execute();
        $data = $statement->fetchAll();
        if (count($data) == 0) {
            $data = array("status" => "error", "msg" => "invalid promocode!");
        } else {
            foreach ($data as $response) {

            }

            $promo_d = $response['id'];
            $type = $response['promocodeType'];
            $discountValue = $response['discountValue'];
            $discountType = $response['discountType'];
            $usageLimit = $response['usageLimit'];
            // $promoUsage=$response['promoUsage'];
            $usageType = $response['usageType'];
            $newUsersOnly = $response['newUsersOnly'];
            $minOrderAmountValidation = $response['minOrderAmountValidation'];
            $quantity = $response['quantity'];
            $promocodeFor = $response['promocodeFor'];
            $items = $response['items'];
            $maxamt = $response['max_discount'];
            $maxdisamt = $response['max_discount_amount'];
            $ptype = $response['type'];

            if ($minOrderAmountValidation == 1) {
                $amount = $response['minOrderAmount'];
            } else {
                $amount = 0;
            }
            $promocodeFor = $response['promocodeFor'];
            $quantity = $response['quantity'];
            if ($orderamount > $amount) {
                //checking new user or not.
                $statement = $connection->prepare("SELECT * from  customer_order where customer_d='$user' and branch='$branch' and orderStatus!='failed'");
                $statement->execute();
                $isnew = count($statement->fetchAll());
                //0 for new  1 for old
                if ($isnew == '0') {
                    //0 new
                    if ($newUsersOnly == 1) {
                        $custype = 1;
                    } else {
                        $custype = 0;
                    }
                } else {
                    //old
                    $custype = 0;
                }
                if ($newUsersOnly == $custype) {
                    //only for new user
                    //next check limit
                    $statement = $connection->prepare("SELECT * FROM `promo_usage`  where promo_d='$promocode'  and customer_d='$user'");
                    $statement->execute();
                    if ($usageType == 'unlimited') {
                        $promoUsage = 0;
                    } else {
                        $promoUsage = count($statement->fetchAll());
                    }
                    if ($usageLimit > $promoUsage) {
                        //continue
                        // $orderamount
                        // amountBased
                        $data = $this->getOutput($user, $promocode, $discountType, $quantity, $promocodeFor, $orderitems, $discountValue, $delivery, $orderamount, $orderitems, $maxamt, $maxdisamt, $ptype, $items, $branch);
                        // $data=array("status"=>"done","msg"=>"promoUsage exceeded");
                    } else {
                        //exit
                        $data = array("status" => "error", "msg" => "promoUsage exceeded");
                    }
                } else {
                    //all user
                    $data = array("status" => "error", "msg" => "you are not eligible!");
                }
            } else {
                $data = array("status" => "error", "msg" => "Minimum amount should be " . $amount);
            }

        }
        return $data;
    }
    public function getOutput($id, $promocode, $discountType, $quantity, $promocodeFor, $items, $discountValue, $delivery, $amount, $orderitems, $maxamt, $maxdisamt, $type, $pitems, $branch)
    {

        // print_r($id);
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        if ($promocodeFor == 0) {
            // specific product

            $orderitems = json_decode($items);
            $pitems = explode(',', $pitems);
            foreach ($orderitems as $it) {
                $rs[] = $it->itemid;
            }
            $resp = array_merge($rs, $pitems);

            $unique = array_unique($resp);

            $duplicates = array_diff_assoc($resp, $unique);

            if ($discountType == 'amount') {
                $discount = $discountValue;
                // $price=$amount-$discountValue;
                // $final=$price+$delivery;
                $count = 0;

                # code...
                $count = 0;
                foreach ($duplicates as $dup) {

                    foreach ($orderitems as $it) {
                        if ($it->itemid == $dup) {
                            $amount = $it->price * $it->qty;
                            $price = $amount - $discountValue;

                            // $em->getConnection()->exec("update customer_order_items set discount='$discountValue',subTotal='$price' where id='$idn'");
                            $count = $count + $price;
                        }
                    }
                }
                // echo $count;
                if ($type == 0) {

                    $discounts = $count;

                    $mode = "CASHBACK!";
                    $Cashback = $maxamt;
                    if ($Cashback == 0 || $Cashback == '') {
                        $credits = $discounts;

                    } else {
                        $credits = $Cashback;
                    }
                    if ($maxdisamt == 0) {
                        $pr = $credits;
                    } else {
                        if ($credits > $maxdisamt) {
                            $credits = $maxdisamt;
                        } else {
                            $credits = $credits;
                        }
                    }
                    if ($credits <= 0) {
                        return array("status" => "error", "prmocodeType" => "Cashback", "msg" => "items are not eligible", "amount" => round($credits));
                    } else {
                        return array("status" => "done", "prmocodeType" => "Cashback", "msg" => "You will get cashback", "amount" => round($credits));
                    }

                } else {
                    if ($maxdisamt == 0) {
                        $pr = $count;
                    } else {
                        if ($count > $maxdisamt) {
                            $pr = $maxdisamt;
                        } else {
                            $pr = $count;
                        }
                    }
                    if ($pr <= 0) {
                        return array("status" => "error", "prmocodeType" => "Items", "msg" => "items are not eligible", "amount" => round($pr, 2));

                    } else {
                        return array("status" => "done", "prmocodeType" => "Items", "msg" => "You will get Discount", "amount" => round($pr, 2));

                    }
                }

            } else {

                $count = 0;
                foreach ($duplicates as $dup) {

                    foreach ($orderitems as $it) {
                        if ($it->itemid == $dup) {
                            $amount = $it->price * $it->qty;
                            $pr = $amount * $discountValue / 100;

                            // $em->getConnection()->exec("update customer_order_items set discount='$discountValue',subTotal='$price' where id='$idn'");
                            $count = $count + $pr;
                        }
                    }
                }
                // echo $count;
                if ($type == 0) {

                    $discounts = $count;
                    $mode = "CASHBACK!";
                    $Cashback = $maxamt;
                    if ($Cashback == 0 || $Cashback == '') {
                        $credits = $discounts;

                    } else {
                        $credits = $Cashback;
                    }
                    if ($maxdisamt == 0) {
                        $pr = $credits;
                    } else {
                        if ($credits > $maxdisamt) {
                            $credits = $maxdisamt;
                        } else {
                            $credits = $credits;
                        }
                    }

                    if ($credits <= 0) {
                        return array("status" => "error", "prmocodeType" => "Cashback", "msg" => "items are not eligible", "amount" => round($credits));

                    } else {
                        return array("status" => "done", "prmocodeType" => "Cashback", "msg" => "You will get cashback", "amount" => round($credits));

                    }
                } else {
                    if ($maxdisamt == 0) {
                        $pr = $count;
                    } else {
                        if ($count > $maxdisamt) {
                            $pr = $maxdisamt;
                        } else {
                            $pr = $count;
                        }
                    }
                    if ($pr <= 0) {
                        return array("status" => "error", "prmocodeType" => "Items", "msg" => "items are not eligible", "amount" => round($pr));
                    } else {
                        return array("status" => "done", "prmocodeType" => "Items", "msg" => "You will get Discount", "amount" => round($pr));

                    }

                }

            }
        }

        if ($promocodeFor == 2) {
            //whole cart
            if ($discountType == 'amount') {
                $discount = $discountValue;
                $price = $amount - $discountValue;
                $final = $price + $delivery;
            } else {
                $pr = $amount * $discountValue / 100;
                $discount = $pr;
                $price = $amount - $pr;
                $final = $pr + $delivery;
            }
            if ($type == 0) {
                $discounts = $final;
                $mode = "CASHBACK!";
                $Cashback = $maxamt;
                if ($Cashback == 0 || $Cashback == '') {
                    $credits = $discounts;
                } else {
                    $credits = $Cashback;
                }
                if ($maxdisamt == 0) {
                    $pr = $credits;
                } else {
                    if ($credits > $maxdisamt) {
                        $credits = $maxdisamt;
                    } else {
                        $credits = $credits;
                    }
                }
                return array("status" => "done", "prmocodeType" => "cashback", "msg" => "Cashback Applid for whole cart!", "amount" => round($credits));
            } else {
                if ($maxdisamt == 0) {
                    $final = $final;
                } else {
                    if ($final > $maxdisamt) {
                        $final = $maxdisamt;
                    } else {
                        $final = $final;
                    }
                }
                return array("status" => "done", "prmocodeType" => "wholecart", "msg" => "Promcode Applid for whole cart!", "amount" => round($final));
            }
        }

    }
    public function promocode($id, $promocode, $branch)
    // public function promocodeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        //  $promocode= $request->get('promocode');
        // $id= $request->get('id');
        // $branch= $request->get('branch');
        // echo 'haahahha';
        $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * from promocode where promoCode='$promocode' and endDate >= CURDATE() and isActive='1' and branch='$branch'");
        $statement->execute();
        $data = $statement->fetchAll();
        if (count($data) == 0) {
            $data = array("status" => "error", "msg" => "invalid promocode!");
        } else {
            foreach ($data as $response) {
            }
            foreach ($orders as $order) {
            }
            $ides = $order['id'];
            $orderamount = $order['orderAmount'];
            $user = $order['customer_d'];
            $promo_d = $response['id'];
            $type = $response['promocodeType'];
            $discountValue = $response['discountValue'];
            $discountType = $response['discountType'];
            $usageLimit = $response['usageLimit'];
            $usageType = $response['usageType'];
            $newUsersOnly = $response['newUsersOnly'];
            $minOrderAmountValidation = $response['minOrderAmountValidation'];
            $quantity = $response['quantity'];
            $promocodeFor = $response['promocodeFor'];
            $items = $response['items'];
            $type = $response['type'];
            $maxamt = $response['max_discount'];
            $maxdisamt = $response['max_discount_amount'];

            if ($minOrderAmountValidation == 1) {
                $amount = $response['minOrderAmount'];
            } else {
                $amount = 0;
            }
            $promocodeFor = $response['promocodeFor'];
            $quantity = $response['quantity'];
            if ($orderamount > $amount) {
                //checking new user or not.
                // print("SELECT * from  customer_order where customer_d='$user' and branch='$branch'");
                $statement = $connection->prepare("SELECT * from  customer_order where customer_d='$user' and branch='$branch' and id!='$ides' and orderStatus!='failed'");
                $statement->execute();
                $isnew = count($statement->fetchAll());
                //0 for new  1 for old
                if ($isnew == '0') {
                    //0 new
                    if ($newUsersOnly == 1) {
                        $custype = 1;
                    } else {
                        $custype = 0;
                    }
                } else {
                    //old
                    $custype = 0;
                }
                if ($newUsersOnly == $custype) {
                    //only for new user
                    //next check limit
                    $statement = $connection->prepare("SELECT * FROM `promo_usage`  where promo_d='$promocode'  and customer_d='$user'");
                    $statement->execute();
                    if ($usageType == 'unlimited') {
                        $promoUsage = 0;
                    } else {
                        $promoUsage = count($statement->fetchAll());
                    }
                    if ($usageLimit > $promoUsage) {
                        //continue
                        // $orderamount
                        // amountBased
                        $data = $this->makediscount($id, $promocode, $discountType, $quantity, $promocodeFor, $items, $discountValue, $type, $maxamt, $maxdisamt);
                        // $data=array("status"=>"done","msg"=>"promoUsage exceeded");

                    } else {
                        //exit
                        $data = array("status" => "error", "msg" => "promoUsage exceeded");
                    }
                } else {
                    //all user
                    $data = array("status" => "error", "msg" => "you are not eligible!");
                }
            } else {
                $data = array("status" => "error", "msg" => "Minimum amount should be " . $amount);
            }

        }
        return $data;
    }

// public function promocode($id,$promocode,$branch)
    public function promocodeCheckAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $promocode = $request->get('promocode');
        $id = $request->get('id');
        $branch = $request->get('branch');
        // echo 'haahahha';

        $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
        $statement->execute();
        $orders = $statement->fetchAll();
        $statement = $connection->prepare("SELECT * from promocode where promoCode='$promocode' and endDate >= CURDATE() and isActive='1' and branch='$branch'");
        $statement->execute();
        $data = $statement->fetchAll();
        if (count($data) == 0) {
            $data = array("status" => "error", "msg" => "invalid promocode!");
        } else {
            foreach ($data as $response) {
            }
            foreach ($orders as $order) {
            }
            $orderamount = $order['orderAmount'];
            $user = $order['customer_d'];
            $promo_d = $response['id'];
            $type = $response['promocodeType'];
            $discountValue = $response['discountValue'];
            $discountType = $response['discountType'];
            $usageLimit = $response['usageLimit'];
            $usageType = $response['usageType'];
            $newUsersOnly = $response['newUsersOnly'];
            $minOrderAmountValidation = $response['minOrderAmountValidation'];
            $quantity = $response['quantity'];
            $promocodeFor = $response['promocodeFor'];
            $items = $response['items'];
            $type = $response['type'];
            $maxamt = $response['max_discount'];
            $maxdisamt = $response['max_discount_amount'];

            if ($minOrderAmountValidation == 1) {
                $amount = $response['minOrderAmount'];
            } else {
                $amount = 0;
            }
            $promocodeFor = $response['promocodeFor'];
            $quantity = $response['quantity'];
            if ($orderamount > $amount) {
                //checking new user or not.
                // print("SELECT * from  customer_order where customer_d='$user' and branch='$branch'");
                $statement = $connection->prepare("SELECT * from  customer_order where customer_d='$user' and branch='$branch'");
                $statement->execute();
                $isnew = count($statement->fetchAll());
                //0 for new  1 for old
                if ($isnew == '0') {
                    //0 new
                    if ($newUsersOnly == 1) {
                        $custype = 1;
                    } else {
                        $custype = 0;
                    }
                } else {
                    //old
                    $custype = 0;
                }
                if ($newUsersOnly == $custype) {
                    //only for new user
                    //next check limit
                    $statement = $connection->prepare("SELECT * FROM `promo_usage`  where promo_d='$promocode'  and customer_d='$user'");
                    $statement->execute();
                    if ($usageType == 'unlimited') {
                        $promoUsage = 0;
                    } else {
                        $promoUsage = count($statement->fetchAll());
                    }
                    if ($usageLimit > $promoUsage) {
                        //continue
                        // $orderamount
                        // amountBased
                        $data = $this->makediscount($id, $promocode, $discountType, $quantity, $promocodeFor, $items, $discountValue, $type, $maxamt, $maxdisamt);
                        // $data=array("status"=>"done","msg"=>"promoUsage exceeded");

                    } else {
                        //exit
                        $data = array("status" => "error", "msg" => "promoUsage exceeded");
                    }
                } else {
                    //all user
                    $data = array("status" => "error", "msg" => "you are not eligible!");
                }
            } else {
                $data = array("status" => "error", "msg" => "Minimum amount should be " . $amount);
            }

        }
        return $data;
    }
    public function makediscount($id, $promocode, $discountType, $quantity, $promocodeFor, $items, $discountValue, $type, $maxamt, $maxdisamt)
    {
        // print_r($id);
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        if ($promocodeFor == 0) {
            // specific product
            $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
            $statement->execute();
            $orders = $statement->fetchAll();
            foreach ($orders as $order) {
                # code...
            }
            $amount = $order['actualAmount'];
            $discount = $order['totalDiscount'];
            $orderAmount = $order['orderAmount'];
            $customer = $order['customer_d'];

            $promocodes = $order['promocode'];
            $delivery = 0;
            if ($discountType == 'amount') {
                $discount = $discountValue;
                // $price=$amount-$discountValue;
                // $final=$price+$delivery;
                $it = explode(",", $items);
                $statementres = $connection->prepare("SELECT * from customer_order_items  where order_d='$id' and itemId in($items)");
                $statementres->execute();
                $row = $statementres->fetchAll();
                foreach ($row as $r) {
                    $idn = $r['id'];
                    $amount = $r['subTotal'];
                    $price = $amount - $discountValue;
                    $em->getConnection()->exec("update customer_order_items set discount='$discountValue',subTotal='$price' where id='$idn'");

                }

            } else {
                $statementres = $connection->prepare("SELECT * from customer_order_items  where order_d='$id' and itemId in($items)");
                $statementres->execute();
                $row = $statementres->fetchAll();
                foreach ($row as $r) {
                    $idn = $r['id'];
                    $amount = $r['subTotal'];
                    $pr = $amount * $discountValue / 100;
                    if ($maxdisamt == 0) {
                        $pr = $pr;
                    } else {
                        if ($pr > $maxdisamt) {
                            $pr = $maxdisamt;
                        } else {
                            $pr = $pr;
                        }
                    }
                    $price = $amount - $pr;
                    $final = $price + $delivery;
                    //pending
                    // max_discount_amount
                    $em->getConnection()->exec("update customer_order_items set discount='$pr',subTotal='$price' where id='$idn'");
                }
            }
            if ($type == 0) {
                $statement = $connection->prepare("select sum(subTotal) as sum,sum(discount) as discount from customer_order_items where  order_d='$id'");
                $statement->execute();
                $orders = $statement->fetchAll();
                foreach ($orders as $orderl) {
                    # code...
                }
                $sum = $orderl['sum'];
                $discounts = $orderl['discount'];

                $em->getConnection()->exec("update customer_order set totalDiscount='0',promocode='$promocode' where id='$id'");
                $mode = "CASHBACK!";
                $Cashback = $maxamt;
                if ($Cashback == 0 || $Cashback == '') {
                    $credits = $discounts;

                } else {
                    $credits = $Cashback;
                }
                $credits = round($credits);
                $note = "Added " . $credits . " for your wallet for  order id #" . $id . "on " . date('d-m-Y');

                $prepaidBalance = $this->getBalanceAction($customer, 0, $credits, $mode, $note, 'lamo');
            } else {
                $statement = $connection->prepare("select sum(subTotal) as sum,sum(discount) as discount from customer_order_items where  order_d='$id'");
                $statement->execute();
                $orders = $statement->fetchAll();
                foreach ($orders as $orderl) {
                    # code...
                }
                $sum = $orderl['sum'];
                $discount = $orderl['discount'];
                $orderAmount = $order['orderAmount'];

                $final = $orderAmount - $discount;
                $em->getConnection()->exec("update customer_order set totalDiscount='$discount',promocode='$promocode',orderAmount='$final' where id='$id'");
            }

            $this->promologs($id, $promocode);

        }

        if ($promocodeFor == 2) {
            $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
            $statement->execute();
            $orders = $statement->fetchAll();
            foreach ($orders as $order) {
                # code...
            }
            $amount = $order['actualAmount'];
            $discount = $order['totalDiscount'];
            $customer = $order['customer_d'];
            $orderAmount = $order['orderAmount'];
            $promocodes = $order['promocode'];
            $delivery = $order['deliveryCharge'];
            if ($discountType == 'amount') {
                $pr = $discountValue;
                $price = $amount - $pr;
                $final = $price + $delivery;
            } else {
                $pr = $amount * $discountValue / 100;
                $discount = $pr;
            }
            if ($maxdisamt == 0) {
                $pr = $pr;
            } else {
                if ($pr > $maxdisamt) {
                    $pr = $maxdisamt;
                } else {
                    $pr = $pr;
                }
            }
            $price = $amount - $pr;
            $final = $price + $delivery;
            if ($type == 0) {
                $em->getConnection()->exec("update customer_order set totalDiscount='0',promocode='$promocode' where id='$id'");
                $mode = "CASHBACK!";
                $Cashback = $maxamt;
                if ($Cashback == 0 || $Cashback == '') {
                    $credits = $pr;

                } else {
                    $credits = $Cashback;
                }
                // if($credits>$maxdisamt)
                //  {
                //   $credits=$maxdisamt;
                //  }
                //  else
                //  {
                //  $credits=$price;
                //  }
                $credits = round($credits);

                $note = "Added " . $credits . " for your wallet for  order id #" . $id . "on " . date('d-m-Y');

                $prepaidBalance = $this->getBalanceAction($customer, 0, $credits, $mode, $note, 'lamo');
            } else {
              $pr = round($pr);
                $final = round($final);
      $statementcount = $connection->prepare("SELECT sum(quantity) as qty from  customer_order_items where order_d='$id'");
            $statementcount->execute();
            $orderscount = $statementcount->fetchAll();


                $statement = $connection->prepare("SELECT * from  customer_order_items where order_d='$id order by subTotal desc'");
            $statement->execute();
            $orders = $statement->fetchAll();
            $items=$orderscount[0]['qty'];
            $itemPrice=$pr/$items;
            // $itemPrice=round($itemPrice,'2');
            $resp=$this->distributeValue($pr, $items);
$count=0;
            foreach ($orders as $order) {
                $idn=$order['id'];
                $price=$order['price'];
                $quantity=$order['quantity'];
                $actualAmount=$order['actualAmount'];
                $discount=$order['discount'];
                $subTotal=$order['subTotal'];

 $subprice=$price-$resp[$count];

 // echo $itemPrice.','.$price ;
$actualAmount=$subprice*$quantity;

 $sprice=$subprice;
  // echo $itemPrice.',';
 $discount=$resp[$count]*$quantity;
$itemPrice=$resp[$count]*$quantity;
$subTotal=$sprice*$quantity;


$em->getConnection()->exec("update customer_order_items set price='$sprice',discount='$discount',actualAmount='$actualAmount',subTotal='$subTotal' where id='$idn'");
$count++;
}
      $statementsub = $connection->prepare("SELECT sum(actualAmount) as total from  customer_order_items where order_d='$id'");
            $statementsub->execute();
            $orderssub = $statementsub->fetchAll();
            $subtotal=$orderssub[0]['total'];
                
                $em->getConnection()->exec("update customer_order set totalDiscount='$pr',actualAmount='$subtotal',promocode='$promocode',orderAmount='$final' where id='$id'");

            }
            $this->promologs($id, $promocode);

        }
        if ($promocodeFor == 3) {
            $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
            $statement->execute();
            $orders = $statement->fetchAll();
            foreach ($orders as $order) {
                # code...
            }
            $amount = $order['actualAmount'];
            $customer = $order['customer_d'];
            $discount = $order['totalDiscount'];
            $orderAmount = $order['orderAmount'];
            $promocodes = $order['promocode'];
            $delivery = $order['deliveryCharge'];
            if ($discountType == 'amount') {
                $discount = $discountValue;
                $price = $amount - $discountValue;
                $final = $price + $delivery;

            } else {
                $pr = $amount * $discountValue / 100;
                $discount = $pr;

                $price = $amount - $pr;
                $final = $price + $delivery;
            }

            $em->getConnection()->exec("update customer_order set totalDiscount='0',promocode='$promocode' where id='$id'");
            $mode = "CASHBACK!";
            $credits = $price;
            if ($credits > $maxdisamt) {
                $credits = $maxamt;
            } else {
                $credits = $price;
            }
            $credits = round($credits);

            $note = "Added " . $credits . " for your wallet for  order id #" . $id . "on " . date('d-m-Y');

            $prepaidBalance = $this->getBalanceAction($customer, 0, $credits, $mode, $note, 'lamo');
            $this->promologs($id, $promocode);

        }
        return array("status" => "done");
    }
public function distributeValue($value, $num) {
    $parts = $num * ($num + 1) / 2;

    $values = [];
    for ($i = $num; $i > 1; --$i) {
        $values[] = round($value * $i / $parts);
    }

    $values[] = $value - array_sum($values);

    return $values;
}
    public function promologs($id, $promocode)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from  customer_order where id='$id'");
        $statement->execute();
        $orders = $statement->fetchAll();
        foreach ($orders as $order) {

            $user = $order['customer_d'];
            $em->getConnection()->exec("INSERT INTO `promo_usage`(`customer_d`, `promo_d`, `count`) VALUES ('$user','$promocode','1')");
        }
    }

    public function addmembership($membership, $userId, $customerOrder)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $connection = $em->getConnection();
        $id = $customerOrder->getId();
        $statement = $connection->prepare("SELECT * FROM `membership` WHERE id='$membership'");
        $statement->execute();
        $member = $statement->fetchAll();
        foreach ($member as $res) {
            $name = $res['name'];
            $price = $res['discounted_price'];
            $duration = $res['duration'];
            $date = date('d-m-Y');
            $expiry = date('d-m-Y', strtotime('+' . $duration . ' month'));
            $readyTime = date("Y-m-d h:i:s");

            $helper->sendGCM('Thank you for purchasing ' . $name . '.Enjoy Shopping!', $customerOrder->getCustomer()->getRegistrationKey(), '2', $customerOrder->getId());

            //add to membership
            // INSERT INTO `membershp_history`(`id`, `user_id`, `purchased_date`, `ref`, `expiry_date`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
            $res = $em->getConnection()->exec("INSERT INTO `membership_history`(`user_id`, `purchased_date`, `ref`, `expiry_date`, `status`,`membership_id`,`name`,`duration`,`price`) VALUES ('$userId','$date','$id','$expiry','2','$membership','$name','$duration','$price')");
            $em->getConnection()->exec("update customer set membership='0' where id='$userId'");
            $em->getConnection()->exec("INSERT INTO `customer_order_items`(`order_d`, `itemId`, `itemName`, `priceVariavtion`, `price`, `quantity`, `actualAmount`, `extraAmount`, `tax`, `discount`, `subTotal`, `isTray`, `trayQty`) VALUES ('$id','$membership','$name','$duration','$price','1','$price','888','0','0','$price','0','0')");
            $actualAmount = $customerOrder->getActualAmount();
            $id = $customerOrder->getId();
            $deliveryCharge = $customerOrder->getDeliveryCharge();
            $orderAmount = $customerOrder->getOrderAmount();
            $fin = $actualAmount + $price;
            $total = $fin + $deliveryCharge;
            $em->getConnection()->exec("update customer_order set actualAmount='$fin',orderAmount='$total' where id='$id'");

        }
    }
    public function getAllCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $parentId = $request->get('parentId');
        $mode = $request->get('mode');
        $branch = $request->get('branch');

        $connection = $em->getConnection();

        $restaurant = null;
        
        if ($mode == 'getAll') {

            $statement = $connection->prepare("SELECT * from sub_category where parent_id is null and status='0' and branch='$branch' and featured='0' order by priority DESC");

            $statement->execute();
            $menus = $statement->fetchAll();
                    $ratings = array();

            foreach ($menus as $res) {
                $priceVariation = $this->existAction("SELECT * FROM `sub_category` where parent_id='" . $res['id'] . "' and status='0' order  by priority DESC ");
                if ($priceVariation == 0) {

                } else {
                    $ratings[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage'], 'bannerImage' => $res['bannerImage'], 'SubCategory' => $this->getSubcategoryAction($res['id']));
                }
            }
        } else {
            $statement = $connection->prepare("SELECT * from sub_category where parent_id is null and status='0' and  featured='0' and branch='$branch' order by priority DESC");

            $statement->execute();
            $ratingss = $statement->fetchAll();
            $ratings = array();

            foreach ($ratingss as $res) {

                $ratings[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage']);
            }

        }

        $result['data'] = $ratings;
        $result['status'] = true;
        return $result;
    }

    public function getSubcategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT * from sub_category  where parent_id in('$id',0) and status='0' order by priority DESC");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $menu[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage'], 'parentId' => $res['parent_id']);
        }
        return $menu;
    }

    public function getPickupLocationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $branch = $request->get('branch');
        $parent = $this->getParentLocation($latitude, $longitude, $branch);
        $statement = $connection->prepare("SELECT * from pickup  where  status='0' and parent in (SELECT id FROM `location` where  branch = '$branch') order by id DESC");
        $statement->execute();
        $finalresponse = $statement->fetchAll();
        if (count($finalresponse) == 0) {
            return array();

        } else {
            foreach ($finalresponse as $ra) {
                # code...
                // $distance = $this->getDistance($latitude,$longitude,$ra['latitude'],$ra['longitude']);
                $res[] = array('id' => $ra['id'], 'name' => $ra['name'], 'address' => $ra['address'], 'contact' => $ra['contact'], 'latitude' => $ra['latitude'], 'longitude' => $ra['longitude'], 'distance' => $this->distance($ra['latitude'], $ra['longitude'], $latitude, $longitude, "K"));

            }
            return $res;
        }
    }
    public function getParentLocation($longitude_x, $latitude_y, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select * from location where branch='$branch'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {
            $zonals = $res['value'];

            $response = $this->checksAction($zonals, $latitude_y, $longitude_x);
            if ($response == '0') {
                return $res['id'];
            } else {
                return 0;

            }
        }
    }
    public function getCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $branch = $request->get('branch');

        $statement = $connection->prepare("SELECT * from sub_category  where id in($id)and branch='$branch' and status='0' order by priority desc");
        $statement->execute();
        $menus = $statement->fetchAll();
        if (count($menus) == 0) {
            $menu = array();
        } else {
            foreach ($menus as $res) {
                $menu[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage'], 'parentId' => $res['parent_id']);
            }
        }
        return $menu;
    }
    public function getSubCategoryIdAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $statement = $connection->prepare("SELECT * from sub_category  where parent_id='$id' and status='0' order by priority DESC");
        // ECHO "SELECT * from sub_category  where parent_id='$id' and status='0' order by priority ASC";  get
        $statement->execute();
        $menus = $statement->fetchAll();
        $data=array();
            if (count($menus) == 0) {
            $statement = $connection->prepare("SELECT * from sub_category  where id='$id' and status='0' order by priority DESC");
            $statement->execute();
            $res = $statement->fetchAll();
            if (count($res) == 0) {
                return array();
            }
            foreach ($res as $re) {

            }
            $parent = $re['parent_id'];

            $statement = $connection->prepare("SELECT * from sub_category  where parent_id='$parent' and status='0' and nested=0 and id not in (SELECT a.id FROM `sub_category` as a join sub_category as b on a.id=b.parent_id WHERE a.parent_id = '$parent')");
            $statement->execute();
            $menus = $statement->fetchAll();
            // $all=array('id'=>0,'category_name'=>'All','icon_image'=>'','parentId'=>'0');
            foreach ($menus as $res) {
                // $data[]=array('id'=>0,'category_name'=>'All','icon_image'=>'','parentId'=>'0');

                $data[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage'], 'parentId' => $res['nested'], 'type' => 0);
            }
        } else {

            foreach ($menus as $res) {
                $data[] = array('id' => $res['id'], 'category_name' => $res['categoryName'], 'icon_image' => $res['iconImage'], 'parentId' => $res['nested'], 'type' => 0);
            }
        }
        $all[] = array('id' => $id, 'category_name' => 'All', 'icon_image' => $id, 'parentId' => '0', 'type' => 1);

        return array_merge($all, $data);
    }
    public function updateReturnAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $status = $request->get('status');
        $delivery = $request->get('ref');

        $statement = $connection->prepare("UPDATE stock_return set status='$status' where ref='$delivery'");
        $res = $statement->execute();
        if ($res) {
            $data = array("status" => 200);
        } else {
            $data = array("status" => 400);

        }
        return $data;
    }

    public function getSubcategoryByIdAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $da = $em->getRepository('AppBundle:SubCategory')->findBy(array('parent_id' => $id));
        foreach ($da as $res) {
            $ratings[] = array('id' => $res->getId(), 'category_name' => $res->getCategoryName(), 'category_slug' => $res->getCategorySlug(), 'icon_image' => $res->getIconImage(), 'banner_image' => $res->getBannerImage());

        }
        return $ratings;
    }

    public function getAllCategoriesIdAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $parentId = $request->get('parentId');
        $re = $em->getRepository('AppBundle:SubCategory')->findBy(array("parent_id" => $parentId));

        $result['data'] = $re;
        $result['status'] = true;
        return $result;
    }
    //for providing customer side operations
    public function listProductsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restList = $em->createQueryBuilder()
            ->select('menuItem', 'extraPackage', 'packageExtras', 'category', 'priceVariation')
            ->from('AppBundle:MenuItem', 'menuItem')
            ->leftJoin('menuItem.extraPackage', 'extraPackage')
            ->leftJoin('extraPackage.packageExtras', 'packageExtras')
            ->leftJoin('menuItem.category', 'category')
            ->leftJoin('menuItem.priceVariation', 'priceVariation')
            ->orderby('menuItem.itemName', 'DESC')
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restList;

        return $result;
    }

    public function addShoppingListsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $searchProduct = $request->get('item_name');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restList = $em->createQueryBuilder()
            ->select('menuItem', 'extraPackage', 'packageExtras', 'category', 'priceVariation')
            ->from('AppBundle:MenuItem', 'menuItem')
            ->leftJoin('menuItem.extraPackage', 'extraPackage')
            ->leftJoin('extraPackage.packageExtras', 'packageExtras')
            ->leftJoin('menuItem.category', 'category')
            ->leftJoin('menuItem.priceVariation', 'priceVariation')
            ->where('menuItem.itemName  LIKE :product')
            ->setParameter('product', '%' . $searchProduct . '%')
            ->orderby('menuItem.itemName', 'DESC')
            ->getQuery()
            ->getArrayResult();
        $result['data'] = $restList;

        return $result;
    }

    public function myShoppingListsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $shoppingListName = $em->createQueryBuilder()
            ->select('shoppingListsName')
            ->from('AppBundle:ShoppingListsName', 'shoppingListsName')
            ->where('shoppingListsName.customer = :customerId')
            ->setParameter('customerId', $customer->getId())
            ->getQuery()
            ->getArrayResult();
        if (empty($shoppingListName)) {
            $result['data'] = $shoppingListName;
            return $result;
        }

        $myListDetails = array();
        $i = 0;
        foreach ($shoppingListName as $listName) {
            $myListDetails[$i]['shopping_list_id'] = $listName['id'];
            $myListDetails[$i]['shopping_list_name'] = $listName['name'];
            // $listDetails=$em->createQueryBuilder()
            //         ->select('shoppingLists','menuItem')
            //         ->from('AppBundle:ShoppingLists', 'shoppingLists')
            //         ->leftJoin('shoppingLists.item','menuItem')

            //         ->where('shoppingLists.listname = :listnameId')
            //     ->setParameter('listnameId',)
            //         ->getQuery()
            //         ->getArrayResult();
            $sql = "SELECT b.id,b.category,b.itemName,b.id,b.salesTax,b.salePrice,b.itemFeaturedImage,b.type,c.*,d.categoryName as brand FROM `shopping_lists` as a join menu_item as b on a.item_id=b.id join price_variation as c on a.variation=c.id join brands as d on b.brand=d.id where a.listname_id=" . $listName['id'] . "";
            $stmt = $em->getConnection()->prepare($sql);
            $stmt->execute();

            $listDetails = $stmt->fetchAll();
            $myListDetails[$i]['shopping_list_details'] = $listDetails;
            $i++;
        }

        $result['data'] = $myListDetails;

        return $result;

    }

    public function getAllShoppingListsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = true;
        $result['data'] = [];

        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $shoppingListName = $em->createQueryBuilder()
            ->select('shoppingListsName')
            ->from('AppBundle:ShoppingListsName', 'shoppingListsName')
            ->where('shoppingListsName.customer = :customerId')
            ->setParameter('customerId', $customer->getId())
            ->getQuery()
            ->getArrayResult();

        $result['data'] = $shoppingListName;

        return $result;

    }

    public function addItemToListAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $helper = $this->container->get('function_helper');

        $result['status'] = false;
        $result['data'] = [];
        $edit = false;

        $apiKey = $request->get('apiKey');
        $itemId = $request->get('item_id');
        $variation = $request->get('var_id');
        $listId = $request->get('list_id');
        $qty = $request->get('qty');
        if ($helper->testNull($itemId)) {
            $result['data'][] = 'Invalid Item Id';
            return $result;
        }
        //     if($helper->testNull($listId)){
        //     $result['data'][]='Invalid listId';
        //     return $result;
        // }

        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        $restList = $em->createQueryBuilder()
            ->select('menuItem')
            ->from('AppBundle:MenuItem', 'menuItem')
            ->where('menuItem.id = :product')
            ->setParameter('product', $itemId)
            ->getQuery()
            ->getArrayResult();

        $itemsData = explode(',', $itemId);

        if (is_array($itemsData)) {
            foreach ($itemsData as $item) {
                $menuItem = $em->getRepository('AppBundle:MenuItem')->find($item);
                if (!($menuItem instanceof MenuItem)) {
                    $result['data'][] = 'Invalid Item Id ' . $item;
                    return $result;
                }

            }
        }

        $list = $em->getRepository('AppBundle:ShoppingListsName')->find($listId);

        // if(!($list instanceof ShoppingListsName)){
        // $result['data'][]='Invalid List id';
        // return $result;
        // }

        foreach ($itemsData as $item) {
            $em = $this->getDoctrine()->getManager();
            $connection = $em->getConnection();
            $sql = $connection->prepare("SELECT * from shopping_lists where item_id='$item' and variation='$variation' and listname_id='$listId'");
            $sql->execute();
            $row = $sql->fetchAll();
            if (count($row) == 0) {
                $menuItem = $em->getRepository('AppBundle:MenuItem')->find($item);
                $shoppingLists = new ShoppingLists();
                $shoppingLists->setCustomerId($customer);
                $shoppingLists->setItemId($menuItem);
                $shoppingLists->setVariation($variation);
                $shoppingLists->setQty($qty);
                $shoppingLists->setListNameId($list);
                try
                {
                    $em->persist($shoppingLists);
                    $em->flush();
                } catch (\Exception $e) {
                    $result['data'] = $e->getMessage();
                    return $result;
                }

            } else {
                foreach ($row as $ra) {
                    $qtys = $ra['qty'];
                    $totalQty = $qtys + $qty;
                    $res = $em->getConnection()->exec("update shopping_lists set qty='$totalQty' where  item_id='$item' and variation='$variation' and listname_id='$listId'");

                }
            }
        }

        $result['status'] = true;
        $result['data'] = 'Items added to list successfully';

        return $result;
    }

    public function createListAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $helper = $this->container->get('function_helper');

        $result['status'] = false;
        $result['data'] = [];
        $edit = false;

        $apiKey = $request->get('apiKey');
        $listName = $request->get('list_name');

        if ($helper->testNull($listName)) {
            $result['data'][] = 'Please enter list name';
            return $result;
        }

        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }
        $shoppingLists = new ShoppingListsName();
        $shoppingLists->setCustomer($customer);
        $shoppingLists->setName($listName);
        try {
            $em->persist($shoppingLists);
            $em->flush();
            $result['status'] = true;
            $result['data'] = 'List added successfully';
            $result['id'] = $shoppingLists->getId();
        } catch (\Exception $e) {
            $result['data'] = $e->getMessage();
        }
        return $result;
    }

    public function deliveryStatusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');

        $order = $request->get('id');
        $mobile = $request->get('mobile');
        $status = $request->get('status');
        // $data=$em->getRepository('AppBundle:Customer')->findById($user);
        if ($status == '1') {
            $orderStatus = 'onway';
            $q = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
            $helper->sendStatus($mobile, $order, 'onway');
        }
        if ($status == '2') {
            $orderStatus = 'cancelled';
            $q = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
            // $q=$em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',paymentStatus='paid' where id='$order'");
        }
        if ($status == '3') {
            $orderStatus = 'returned';
            $q = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus' where id='$order'");
        }

        if ($status == '4') {
            $orderStatus = 'delivered';
            // $time=new \Datetime();
            $time = date('Y-m-d H:i:s');
            $q = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',paymentStatus='paid',deliveryTime='$time' where id='$order'");
            $helper->sendStatus($mobile, $order, 'delivered');
        }
        if ($status == '5') {
            $orderStatus = 'reschedule';
            $slotReason = $request->get('slotReason');
            $q = $em->getConnection()->exec("update customer_order set orderStatus='$orderStatus',slotReason='$slotReason' where id='$order'");
        }
        // $helper->sendStatus($mobile,$order,'delivered');'='
        if ($status == '10') {
            $orderStatus = 2;
            $q = $em->getConnection()->exec("update stock_return set status='$orderStatus' where ref='$order'");
            // print("update stock_return set status='$orderStatus' where ref='$order'");
        }

        if ($q) {
            $res = array("status" => 200);
        } else {
            $res = array("status" => 400);

        }
        return $res;
    }
    public function removeItemFromListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $shoppingListId = $request->get('shopping_list_id');
        //authentication
        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }
        if ($shoppingListId != null) {
            $edit = true;
            $shoppingList = $em->getRepository('AppBundle:ShoppingLists')->find($shoppingListId);
            if ($shoppingList == null) {
                $result['data'][] = "Invalid Shopping list id";
            } else {
                $em->remove($shoppingList);
                $em->flush();
                $result['status'] = true;
                $result['data'][] = "Item removed successfully";
            }
        } else {
            $result['data'][] = "Invalid Shopping list id";
        }
        return $result;
    }

    public function removeShoppingListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $result['status'] = false;
        $result['data'] = [];
        $shoppingListId = $request->get('shopping_list_id');

        //authentication
        $apiKey = $request->get('apiKey');
        $apiResult = $helper->authenticateCustomer($apiKey);
        if ($apiResult['data'] == []) {
            $customer = $apiResult['customer'];
        } else {
            $result['data'] = $apiResult['data'];
            return $result;
        }

        if ($shoppingListId != null) {
            $edit = true;
            $shoppingList = $em->getRepository('AppBundle:ShoppingListsName')->find($shoppingListId);
            if ($shoppingList == null) {
                $result['data'][] = "Invalid Shopping list id";
            } else {
                $em->remove($shoppingList);
                $em->flush();
                $result['status'] = true;
                $result['data'][] = "shopping list removed successfully";
            }
        } else {
            $result['data'][] = "Invalid Shopping list id";
        }
        return $result;
    }

    public function walletAction($walletType, $walletBalance, $userId, $paymentType, $customerOrder, $order, $branch, $point, $amt)
    {
        //add money to wallet
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $re = $em->getRepository('AppBundle:Wallet')->findByUser($userId);
        foreach ($re as $da) {
            $prepaid = $da->getPrepaid();
            $postpaid = $da->getPostpaid();
            $loyalty = $da->getLoyalty();
            $duration = $da->getDuration();
            if ($walletType == 0) {
                $amount = $prepaid - $walletBalance;
                $time = date('h-i a');
                $amount = round($amount);
                $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$userId'");
                $this->addWalletLogsAction($userId, $walletBalance, 0, date('d-m-Y'), $amount, $customerOrder, $walletType, '0', $time, $paymentType);
                $statementres = $connection->prepare("SELECT * from customer_order where id='$order'");
                $statementres->execute();
                $row = $statementres->fetchAll();
                foreach ($row as $r) {
                }

                $total = $r['orderAmount'];
                $price = $total - $walletBalance;
                //pending
                // max_discount_amount
                $price = round($price);

                $em->getConnection()->exec("update customer_order set orderAmount='$price',wallet='$walletBalance' where id='$order'");
            }
            if ($walletType == 1) {
                $amount = $postpaid - $walletBalance;
                $amount = round($amount);

                $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$userId'");
                $time = date('h-i a');
                $this->addWalletLogsAction($userId, $walletBalance, 0, date('d-m-Y'), $amount, $customerOrder, $walletType, '0', $time, $paymentType);
                $this->addDuesAction($walletBalance, $amount, date('d-m-Y'), $duration, $userId, $customerOrder, '0');

            }
            if ($walletType == 3) {

                $em = $this->getDoctrine()->getManager();
                $connection = $em->getConnection();
                $statementres = $connection->prepare("SELECT * from loyalty where branch='$branch'");
                $statementres->execute();
                $rows = $statementres->fetchAll();
                foreach ($rows as $rs) {
                }
                $p = $rs['points'];
                $statementres = $connection->prepare("SELECT * from customer_order where id='$order'");
                $statementres->execute();
                $row = $statementres->fetchAll();
                foreach ($row as $r) {
                }
                // $ref,$debit,$credit,$date,$total,$note,$type,$status,$time,$mode)

                // $amnt=$points/$point;
                $wprice = $loyalty - $amt;
                $wprice = round($wprice);
                $amt = round($amt);

                $em->getConnection()->exec("update wallet set loyalty='$wprice' where user='$userId'");
                $time = date('h-i a');
                $this->addWalletLogsAction($userId, $amt, 0, date('d-m-Y'), $wprice, $customerOrder, $walletType, '0', $time, $paymentType);
                // $this->addDuesAction($walletBalance,$wprice,date('d-m-Y'),$duration,$userId,$customerOrder,'0');
                $res = $r['id'];
                $total = $r['orderAmount'];
                $price = $total - $amnt;
                //pending
                // max_discount_amount
                $points = $amt / $point;
                $amount = round($r['orderAmount'] - $points);
                $em->getConnection()->exec("update customer_order set orderAmount='$amount',loyalty='$points' where id='$order'");
            }
        }
        return 0;
    }
    public function getBalanceAction($id, $type, $credits, $mode, $note, $duration)
    {
        $em = $this->getDoctrine()->getManager();
        $re = $em->getRepository('AppBundle:Wallet')->findByUser($id);
        if (empty($re)) {
            $addCredits = $this->addUserToWalletAction($id, $type, $credits, $mode, $note);

            return $addCredits;
        } else {
            foreach ($re as $da) {
                $prepaid = $da->getPrepaid();
                $postpaid = $da->getPostpaid();
                $loyalty = $da->getLoyalty();
                if ($type == 0) {
                    $amount = $prepaid + $credits;
                    $em->getConnection()->exec("update wallet set prepaid='$amount' where user='$id'");
                } elseif ($type == 3) {
                    $loyaltyBalance = $this->loyaltyBalance($id);

                    $amount = $loyaltyBalance + $credits;
                    $em->getConnection()->exec("update wallet set loyalty='$amount' where user='$id'");
                } else {
                    $amount = $postpaid + $credits;
                    $em->getConnection()->exec("update wallet set postpaid='$amount' where user='$id'");
                    // $this->addDuesAction($credits,$amount,date('d-m-Y'),$duration,$id,'Added By MarketBhaav',0);
                }
                $time = date('h-i a');
                $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $amount, $note, $type, '0', $time, $mode);
                return $amount;
            }
        }
    }
    public function addUserToWalletAction($id, $type, $credits, $mode, $note)
    {
        $em = $this->getDoctrine()->getManager();
        $wallet = new Wallet();
        if ($type == 0) {
            $wallet->setPrepaid($credits);
            $wallet->setPostpaid(0);
            $wallet->setLoyalty(0);
        } elseif ($type = 3) {
            $wallet->setPostpaid(0);
            $wallet->setPrepaid(0);
            $wallet->setLoyalty($credits);

        } else {
            $wallet->setPostpaid($credits);
            $wallet->setPrepaid(0);
            $wallet->setLoyalty(0);

        }
        $wallet->setUser($id);
        $wallet->setRef($id);
        $wallet->setStatus(0);
        $wallet->setDuration(0);

        $wallet->setDate(date('d-m-Y'));
        $em->persist($wallet);
        $em->flush();
        $time = date('h-i a');
        $this->addWalletLogsAction($id, 0, $credits, date('d-m-Y'), $credits, $note, $type, '0', $time, $mode);
        return $id;
    }
    // //function to create logs
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
    public function getUserdataAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $data = $em->getRepository('AppBundle:Customer')->findById($id);

        return $data;
    }
    public function updateProfileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $em->getConnection()->exec("update customer set username='$name',email='$email' where 1 and id='$id'");
        return array("status" => 0);
    }
    public function getNewOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $data = $em->getRepository('AppBundle:Customer')->findById($id);

    }
    //add new return
    public function newReturnAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $customerId = $request->get('customerId');
        $itemId = $request->get('itemId');
        $date = $request->get('date');
        $time = $request->get('time');
        $reason = $request->get('reason');
        $note = $request->get('note');
        $id = $request->get('address');
        $mode = $request->get('mode');
        $branch = $request->get('branch');
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `billing_address` where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {
            # code...
        }
        $lat = $res['lattitude'];
        $long = $res['logingitude'];
        $type = $res['addressType'];
        $address = $res['address'];
        $ref = $request->get('orderid');
        $res = $em->getConnection()->exec("update customer_order set returnStatus='Pending' where id='$ref'");
        $return = new StockReturn();
        $return->setCustomerId($customerId);
        $return->setReason($reason);
        $return->setNote($note);
        $return->setStatus(0);
        $return->setAddress($address);
        $return->setLatitude($lat);
        $return->setLongitude($long);
        $return->setType($type);
        $return->setDate($date);
        $return->setRef($ref);
        $return->setDeliveryTime($time);
        $return->setAddedTime(date('d-m-Y H:i A'));
        $return->setMode($mode);
        $return->setBranch($branch);
        $em->persist($return);
        $em->flush();

        $items = json_decode($itemId);
        foreach ($items as $item) {
            $logs = new ReturnLogs();
            $logs->setItemId($item->itemId);
            // $logs->setItemName($item->itemname);
            $logs->setQty($item->qty);
            $logs->setStatus(0);
            $logs->setRef($ref);
            $em->persist($logs);
            $em->flush();
        }
        return $data = array("status" => 200);
    }
    public function getMembershipAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $branch = $request->get('branch');

        $sql = $connection->prepare("SELECT * FROM `membership` where parent_id='0' and status='0' and 1 ");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == '0') {
            $rows = array();
        } else {
            foreach ($row as $res) {
                $rows[] = array("name" => $res['name'], "description" => $res['description'], "avator" => $res['avator'], "types" => $this->getmembershipTypesAction($res['id'], $branch));
            }

        }

        return array("data" => $rows);
    }
    public function getmembershipTypesAction($id, $branch)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `membership` where parent_id='$id' and status='0' and 1");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == '0') {
            $rows = array();
        } else {
            foreach ($row as $res) {
                $rows[] = array("id" => $res['id'], "name" => $res['name'], "price" => $res['price'], "discounted_price" => $res['discounted_price'], "duration" => $res['duration']);
            }
        }
        return $rows;
    }
    public function getareaId($area)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `location` where title='$area'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {
            return $res['id'];

        }

    }
    public function getDeliveryChargesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sql = $connection->prepare("SELECT * FROM `billing_address` where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return array();
        } else {
            foreach ($row as $res) {
                $latitude = $res['lattitude'];
                $longitude = $res['logingitude'];
                $area = $this->checklatlong($longitude, $latitude);
                $areaid = $this->getareaId($area);

                $sqls = $connection->prepare("SELECT * FROM `location` where id='$areaid'");
                $sqls->execute();
                $rows = $sqls->fetchAll();
                if (count($rows) == 0) {
                    $data = array();
                } else {
                    $data = $rows;
                }
                return $data;
            }
        }
    }

    public function getdeliveryprice($type, $address, $for, $membership)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        // $id=$request->get('id');
        $sql = $connection->prepare("SELECT * FROM `billing_address` where id='$address'");
        $sql->execute();
        $row1 = $sql->fetchAll();
        if (count($row1) == 0) {
            return array();
        } else {
            foreach ($row1 as $res1) {
                $latitude = $res1['lattitude'];
                $longitude = $res1['logingitude'];
                $area = $this->checklatlong($longitude, $latitude);
                $areaid = $this->getareaId($area);

                $sqls = $connection->prepare("SELECT * FROM `location` where id='$areaid'");
                $sqls->execute();
                $rows = $sqls->fetchAll();
                foreach ($rows as $res) {

                    if ($type == 'Delivery') {
                        // $membership=$this->checkstatus($res1['customer_d']);
                        if ($membership == 0) {

                            if ($for == 'orderamnt') {
                                return $res['minimum_order_amount_normal'];
                            }
                            if ($for == 'deliveryamnt') {
                                return $res['delivery_charge_normal'];
                            }
                        } else {

                            if ($for == 'orderamnt') {
                                return $res['minimum_order_amount_prime'];
                            }
                            if ($for == 'deliveryamnt') {
                                return $res['delivery_charge_prime'];
                            }
                        }
                    } else {
                        if ($for == 'orderamnt') {
                            return $res['minimum_order_amount_express'];
                        }
                        if ($for == 'deliveryamnt') {
                            return $res['delivery_charge_express'];
                        }
                    }

                }
            }
        }
    }
    public function checkstatus($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $date = date('Y-m-d');
        $sq = $connection->prepare("SELECT  * FROM `membership_history` where STR_TO_DATE(expiry_date,'%d-%m-%Y') > '$date' and user_id='$id' and status='0'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            $res = $em->getConnection()->exec("update customer set membership='0' where id='$id'");
            return 0;

        } else {
            $res = $em->getConnection()->exec("update customer set membership='1' where id='$id'");
            return 1;

        }

    }

    public function getPickupSlotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $areaid = $request->get('id');

        $weekOfdays = array();

        $current_date = time(); //get current date.
        $next = strtotime('+0 days');
        while ($current_date <= $next) {
            $weekOfdays[] = date('d-m-Y', $current_date);
            $current_date = strtotime('+1 day', $current_date); // add next date
        }
        // print_r($weekOfdays);
        $frows = array();
        $rows = array();
        foreach ($weekOfdays as $date) {

            $sqls = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and 1 order by st asc");
            $sqls->execute();
            $datas = $sqls->fetchAll();
            foreach ($datas as $d) {
                $time = $d['start'] . ' - ' . $d['end'];

                $sq = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st  from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and orders >= (SELECT COUNT(*) FROM `customer_order` WHERE fixtime='$time' and fixDate='$date' and area in(select b.title from slots as a join location as b on a.area=b.id where a.area='$areaid')) order by st asc");
                $sq->execute();
                $finalresponse = $sq->fetchAll();
                foreach ($finalresponse as $fi) {
                    $difference = strtotime(date('h:i A')) - strtotime($fi['start']);
                    $next = 0;
                    if ($next == 0 || $next == null) {
                        $enddifference = strtotime(date('h:i A')) - strtotime($fi['end']);
                    } else {
                        $now = date('h:i A'); // Seconds since 1970-01-01 00:00:00
                        $minutes = $next;
                        $seconds = ($minutes * 60); // 2400 seconds
                        // $future  = ($now + $seconds);
                        // echo $res=date($fi['end'],strtotime('-'.$next.' minutes'));
                        $To = date("h:i A", strtotime($fi['end']) - ($next * 60));

                        $enddifference = strtotime(date('h:i A')) - strtotime($To);

                    }

                    if ($date == date('d-m-Y') && $difference > 0 && $enddifference >= 0) {
                    } else {
                        $frows[] = array("date" => $date, "time" => $fi['start'] . ' - ' . $fi['end']);
                    }
                }

            }
        }
        if ($frows == '') {
            return array();
        } else {
            $res = array_map("unserialize", array_unique(array_map("serialize", $frows)));

            foreach ($res as $response) {
                // if($response['date']==date('d-m-Y'))
                // {

                // }
                // else
                // {
                $rows[] = array("date" => $response['date'], "time" => $response['time']);

                // }

            }
            return $rows;
        }

    }

    public function getDeliverySlotsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('address');
        $branch = $request->get('branch');
        $sql = $connection->prepare("SELECT * FROM `billing_address` where id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return array();
        } else {
            foreach ($row as $res) {
                $latitude = $res['lattitude'];
                $longitude = $res['logingitude'];
                $area = $this->checklatlong($longitude, $latitude);
                $areaid = $this->getareaId($area);
                $sql = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st  from slots where area='$areaid' order by st ASC");
                $sql->execute();
                $data = $sql->fetchAll();
                if (count($data) == 0) {
                    return array();
                } else {
                    $weekOfdays = array();

                    $current_date = time(); //get current date.
                    $next = strtotime('+2 days');
                    while ($current_date <= $next) {
                        $weekOfdays[] = date('d-m-Y', $current_date);
                        $current_date = strtotime('+1 day', $current_date); // add next date
                    }
                    // print_r($weekOfdays);
                    $rows = array();
                    foreach ($weekOfdays as $date) {

                        $sqls = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and 1 order by st asc");
                        $sqls->execute();
                        $datas = $sqls->fetchAll();
                        foreach ($datas as $d) {
                            $time = $d['start'] . ' - ' . $d['end'];

                            $sq = $connection->prepare("SELECT *,str_to_date(CONCAT('1111-11-11',start), '%Y-%m-%d %l:%i %p') as st  from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and orders >= (SELECT COUNT(*) FROM `customer_order` WHERE fixtime='$time' and fixDate='$date' and area in(select b.title from slots as a join location as b on a.area=b.id where a.area='$areaid')) order by st asc");
                            $sq->execute();
                            $finalresponse = $sq->fetchAll();
                            // $frows='';
                            foreach ($finalresponse as $fi) {
                                $difference = strtotime(date('h:i A')) - strtotime($fi['start']);
                                $next = $this->getLastSlot($branch);
                                if ($next == 0 || $next == null) {
                                    $enddifference = strtotime(date('h:i A')) - strtotime($fi['end']);
                                } else {
                                    $now = date('h:i A'); // Seconds since 1970-01-01 00:00:00
                                    $minutes = $next;
                                    $seconds = ($minutes * 60); // 2400 seconds
                                    // $future  = ($now + $seconds);
                                    // echo $res=date($fi['end'],strtotime('-'.$next.' minutes'));
                                    $To = date("h:i A", strtotime($fi['end']) - ($next * 60));

                                    $enddifference = strtotime(date('h:i A')) - strtotime($To);

                                }

                                if ($date == date('d-m-Y') && $difference > 0 && $enddifference >= 0) {
                                    // $frows='';
                                } else {
                                    $frows[] = array("date" => $date, "time" => $fi['start'] . ' - ' . $fi['end']);
                                }
                            }

                        }
                    }
                    if ($frows == '') {
                        return array();
                    } else {
                        $res = array_map("unserialize", array_unique(array_map("serialize", $frows)));

                        foreach ($res as $response) {
                            // if($response['date']==date('d-m-Y'))
                            // {

                            // }
                            // else
                            // {
                            $rows[] = array("date" => $response['date'], "time" => $response['time']);

                            // }

                        }
                        return $rows;
                    }

                }
            }
        }
    }
    public function getLastSlot($branch)
    {

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where `id`='$branch'");
        $sql->execute();
        $row = $sql->fetchAll();
        foreach ($row as $res) {

            return $res['slot'];
        }
    }
    //************************************************************************
    public function dateslot($time, $areaid, $date)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sq = $connection->prepare("SELECT * from slots WHERE start not in (select start from slotstatus where date='$date' and area='$areaid') and end not in (select end from slotstatus where date='$date' and area='$areaid') and area='$areaid' and orders >= (SELECT COUNT(*) FROM `customer_order` WHERE fixtime='$time' and fixDate='$date' and area in(select b.title from slots as a join location as b on a.area=b.id where a.area='$areaid'))");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        foreach ($finalresponse as $fi) {
            $data[] = array("date" => $date, "time" => $fi['start'] . ' - ' . $fi['end']);

        }

        return $data;

    }

    public function getBranchDetailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $about = $this->about();
        $data = array("description" => $about, "restaurant_address" => 'VEVIP INDUSTRIES INDIA PRIVATE LIMITED, 180/72, BENIGANJ CHOWK, GORAKHPUR, Gorakhpur, U.P – 273001', "primary_email" => 'order@vevipindia.com', "restaurant_name" => 'VEVIP INDUSTRIES INDIA PRIVATE LIMITED', "primary_mobile" => '+91 9005190011', "secondary_email" => '');

        return $data;

    }
    public function about()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $sql = $connection->prepare("SELECT * FROM `restaurants` where id=999");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return 'nothing to show!';
        }
        foreach ($row as $res) {
        }
        return $res['description'];
    }
    public function getmembershipDetailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('userid');
        $sql = $connection->prepare("SELECT * FROM `membership_history` as a join customer_order as b on a.ref=b.id WHERE a.user_id='$id'");
        $sql->execute();
        $row = $sql->fetchAll();
        if (count($row) == 0) {
            return array();
        }
        foreach ($row as $res) {
            $rows = array("orderId" => $res['ref'], 'orderDate' => $res['purchased_date'], 'expiry_date' => $res['expiry_date'], 'name' => $res['name'], 'duration' => $res['duration'], 'price' => $res['price'], 'address' => $res['address'], 'paymentType' => $res['paymentType'], 'user' => $res['customerName']);
            return $rows;
        }
    }

    //************************************************************************
    public function getNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $branch = $request->get('branch');
        $sq = $connection->prepare("SELECT a.*,b.notificationFor,b.dateTime,b.data,b.message from notification_history as a join notification as b on a.ref=b.ref where a.user='$id' and b.branch='$branch'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            $data = array();
        } else {

            foreach ($finalresponse as $fi) {
                $data[] = array("id" => $fi['id'], "status" => $fi['status'], "date" => $fi['dateTime'], "notificationFor" => $fi['notificationFor'], "dateTime" => $fi['dateTime'], "data" => $fi['data'], "message" => $fi['message']);

            }

        }

        return $data;

    }
    //************************************************************************
    public function updateNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $status = $request->get('status');
        $res = $em->getConnection()->exec("update notification_history set status='$status' where id='$id'");
        $data = array("status" => 200);
        return $data;

    }
    public function getuserstatusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        $date = date('Y-m-d');
        //  echo "SELECT  * FROM `membership_history` where STR_TO_DATE(expiry_date,'%d-%m-%Y') > '$date' and user_id='$id' and status='0'";
        $sq = $connection->prepare("SELECT  * FROM `membership_history` where STR_TO_DATE(expiry_date,'%d-%m-%Y') > '$date' and user_id='$id' and status='0'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {

            $sq = $connection->prepare("SELECT  * FROM `membership_history` where STR_TO_DATE(expiry_date,'%d-%m-%Y') > '$date' and user_id='$id' and status='2'");
            $sq->execute();
            $finalresponse = $sq->fetchAll();
            if (count($finalresponse) == 0) {
                $res = $em->getConnection()->exec("update customer set membership='0' where id='$id'");
                return 0;
            } else {
                $res = $em->getConnection()->exec("update customer set membership='2' where id='$id'");
                return 2;
            }

        } else {
            $sq = $connection->prepare("SELECT  * FROM `membership_history` where STR_TO_DATE(expiry_date,'%d-%m-%Y') > '$date' and user_id='$id' and status='2'");
            $sq->execute();
            $finalresponse = $sq->fetchAll();
            if (count($finalresponse) == 0) {
                $res = $em->getConnection()->exec("update customer set membership='1' where id='$id'");
                return 1;
            } else {
                $res = $em->getConnection()->exec("update customer set membership='0' where id='$id'");
                return 0;
            }
            return 1;
        }
    }
    public function getLoyaltyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $branch = $request->get('branch');

        $sq = $connection->prepare("SELECT  * FROM loyalty where 1 and branch='$branch'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return array();

        } else {
            return $finalresponse;

        }

    }

    public function getNearByStoreAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $branch = $request->get('branch');
        $parent = $this->getParentLocation($latitude, $longitude, $branch);
        $statement = $connection->prepare("SELECT * from pickup  where  status='0' and parent in (SELECT id FROM `location` where  branch = '$branch') order by id DESC");
        $statement->execute();
        $finalresponse = $statement->fetchAll();
        if (count($finalresponse) == 0) {
            return array();

        } else {
            foreach ($finalresponse as $ra) {
                # code...
                // $distance = $this->getDistance($latitude,$longitude,$ra['latitude'],$ra['longitude']);
                $res[] = array('id' => $ra['id'], 'name' => $ra['name'], 'address' => $ra['address'], 'contact' => $ra['contact'], 'latitude' => $ra['latitude'], 'longitude' => $ra['longitude'], 'distance' => $this->distance($ra['latitude'], $ra['longitude'], $latitude, $longitude, "K"));

            }
            return $res;
        }
    }
    public function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
    public function getDistance($latitude1, $longitude1, $latitude2, $longitude2)
    {
        $earth_radius = 6371;
        $dLat = deg2rad($latitude2 - $latitude1);
        $dLon = deg2rad($longitude2 - $longitude1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * asin(sqrt($a));
        $d = $earth_radius * $c;

        return $d;
    }

    public function loyaltyBalance($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $sq = $connection->prepare("SELECT * from wallet_logs where ref='$id'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return 0;

        } else {
            foreach ($finalresponse as $ra) {

            }
            return $ra['balance'];

        }
    }

    public function getNearByPickupStoreAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');
        $branch = $request->get('branch');

        $sq = $connection->prepare("SELECT a.* FROM `pickup` as a join location as b on a.parent=b.id where b.branch='$branch'");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return array();

        } else {
            foreach ($finalresponse as $ra) {
                # code...
                //  $distance = $this->getDistance($latitude,$longitude,$ra['latitude'],$ra['longitude']);
                // if ($distance < 5) {
                $res[] = array('id' => $ra['id'], 'name' => $ra['name'], 'address' => $ra['address'], 'contact' => $ra['contact'], 'latitude' => $ra['latitude'], 'longitude' => $ra['longitude'], 'distance' => $this->distance($ra['latitude'], $ra['longitude'], $latitude, $longitude, "K"));

                // } else {
                //   $res=[];
                // }

            }
            return $res;
        }
    }

    public function checkLoyaltyAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $amount = $request->get('id');
        $branch = $request->get('branch');
        $helper = $this->container->get('function_helper');
        $loyalty = $connection->prepare("SELECT * from loyalty where branch='$branch'");
        $loyalty->execute();
        $loyalorder = $loyalty->fetchAll();
        foreach ($loyalorder as $res) {
            # code...
        }
        $amount = $amount * $res['points'];

        if ($res['status'] == '1') {
            return array('status' => false, 'res' => 'Loyalty Disabled');
        }

        if ($amount < $res['minimum_order_amount']) {
            return array('points' => 0);
        }
        if ($res['type'] === '0') {
            //amount
            $points = $amount - $res['maximum_redeem'];
            $discount = $res['discount'] * $res['points'];
            if ($points > $discount) {
                $points = $discount;
            } else {
                $points = $points;
            }
        } else {
            # percentage...
            $percentage = $res['maximum_redeem'];
            $points = $amount * $percentage / 100;
            // $points=$amount-$points;
            $discount = $res['discount'] * $res['points'];
            if ($points > $discount) {
                if ($discount == 0) {
                    $points = $points;

                } else {
                    $points = $discount;

                }
            } else {
                $points = $points;
            }
        }

        return array('points' => round($points));

    }

    public function checkTrayAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $order = $request->get('order');
        $items = $request->get('items');
        $items = json_decode($items);
        foreach ($items as $res) {
            $id = $res->id;
            $qtys = $res->qty;
            $oq = $res->oqty;
            if ($qtys > $oq) {
                $qt = $qtys;
                $status = 2;
            } elseif ($qtys == $oq) {
                $qt = $oq;
                $status = 2;
            } else {
                $qt = $qtys;
                $status = 1;

            }
            $res = $em->getConnection()->exec("update customer_order set trayStatus='2',orderStatus='ready' where id='$order'");

            $res = $em->getConnection()->exec("update customer_order_items set trayQty='$qt',isTray='$status' where id='$ids'");
        }
        return array("status" => 200);

    }

    public function editOrderPickerAction(Request $request)
    {
        // editOrder
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $result['data'] = [];
        $myExtend = "Admin";
        $cancelledFlag = false;
        $order = $request->get('order');
        $items = $request->get('items');
        $isDelivery = $request->get('isDelivery');
        $deliveryBoy = $request->get('deliveryBoy');
        if ($isDelivery == '1') {
            $statement = $connection->prepare("SELECT b.*  FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$order'");
            $statement->execute();
            $mes = $statement->fetchAll();
            foreach ($mes as $resp) {
            }
            $mobile = $resp['mobileNo'];
            $registrationKey = $resp['registrationKey'];
            $out = $em->getRepository('AppBundle:User')->findById($deliveryBoy); // print_r($menus);
            foreach ($out as $res) {
                $da = $res->getMobileNumber();
                $name = $res->getFirstName() . ' ' . $res->getLastName();
                $otp = mt_rand(1111, 9999);

                $em->getConnection()->exec("update customer_order set restoAppFee='$otp' where id='$order'");
                $helper->sendStatus($mobile, array($name, $da, $otp), 'out');
                $helper->sendStatus($da, $order, 'dout');
                $helper->sendGCM('Your order is out for delivery.', $registrationKey, '2', $order);
                $em->getConnection()->exec("update customer_order set orderStatus='dispatched',deliveryBoy='$deliveryBoy' where id='$order'");
            }
        }
        // $qty=$request->get('qty');
        // $oqty=$request->get('oqty');
        // $loyalty=$request->get('loyalty');

        // $user = $this->get('security.token_storage')->getToken()->getUser();
        // $branch=$user->getBranch();

        $count = 0;
        if ($order == '0' || $order == '') {
            return array("status" => 400);
        } else {
            $items = json_decode($items);
            foreach ($items as $res) {
                $i = $res->id;
                $qtys = $res->qty;
                $oqty = $res->oqty;
                $prices = $res->price;
                $loyalty = $res->loyalty;
                $reason = $res->reason;

                $tq = $prices * $qtys;
                //calculate loyalty
                $diffQty = $oqty - $qtys;
                // return new response('hehe');
                $oprice = $prices * $oqty;
                $loyalty = 0;
                if ($loyalty != 0) {
                    $one = $loyalty / $oqty;
                    $loyaltyresp = $one * $qtys;
                } else {
                    $loyaltyresp = $loyalty;
                }
                                $dprice=$prices*$diffQty;

                if ($diffQty > 0) {
                    // $loyaltys=$this->saveLoyalty($i,$order,$loyalty);
                    $resp = $this->saveQty($i, $order, $diffQty);
                    $resp = $this->savePrice($i, $order, $dprice);

                    $statement = $connection->prepare("SELECT a.quantity,b.* FROM `customer_order_items` as a join price_variation as b on a.itemId=b.id where a.order_d='$order'");
                    $statement->execute();
                    $mes = $statement->fetchAll();
                    foreach ($mes as $me) {
                        $stock = $me['quantity'];
                        $cstock = $me['stock'];
                        $ids = $me['id'];
                        $mesd = $me['menu_item_id'];

                        $minus = $stock + $cstock;
                        $em->getConnection()->exec("update price_variation set stock='$minus' where 1 and id='$ids'");
                        $statement = $connection->prepare("SELECT * from menu_item where id='$mesd'");
                        $statement->execute();
                        $mesds = $statement->fetchAll();
                        foreach ($mesds as $med) {}
                        // print_r($mesd);

                        $stock = $me['quantity'];
                        $cstock = $med['totalQty'];
                        // return new response('ss');

                        $minus = $stock + $cstock;
// echo $mesd
                        //       return new response('ss');
                        $em->getConnection()->exec("update menu_item set totalQty='$minus' where 1 and id='$mesd'");

                    }
                    //store decreased loyalty
                    if ($qtys == '0') {
                        // print("delete from customer_order_items  where id='$ids'");
                        $res = $em->getConnection()->exec("delete from customer_order_items  where id='$i'");
                    } else {
                        $res = $em->getConnection()->exec("update customer_order_items set quantity='$qtys',actualAmount='$tq',subTotal='$tq',reason='$reason',edited=1 where id='$i'");
                    }

                }
                $count++;
            }
            $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
            $statement->execute();
            $menus = $statement->fetchAll();
            foreach ($menus as $res) {
                $delivery = $res['deliveryCharge'];
                $customer = $res['customer_d'];
                $branch = $res['branch'];
                $promocode = $res['promocode'];
                $paymentType = $res['paymentType'];
                $totalDiscount = $res['totalDiscount'];
                $sql = $connection->prepare("select sum(subTotal) as sum from customer_order_items where order_d='$order'");
                $sql->execute();
                $sqlquery = $sql->fetchAll();
                if(count($sqlquery)==0)
                {
                    $total=0;
                }
                else
                {
                $total = $sqlquery[0]['sum'];                   
                }
                 if ($totalDiscount != 0) {
                    $totalDiscount = $total - $totalDiscount;
                    $final = $totalDiscount + $delivery;
                } else {
                    $totalDiscount = $totalDiscount;

                    $final = $total + $delivery;

                }
                $actualAmount = $total;
                // return new response('hehe');

                $restaurant = $em->getRepository('AppBundle:CustomerOrder')->find($order);
                 if ($isDelivery == '1') {
                $em->getConnection()->exec("update customer_order set actualAmount='$actualAmount',orderAmount='$final',edited=2,orderStatus='dispatched' where id='$order'");
              }
              else
              {
                 $em->getConnection()->exec("update customer_order set actualAmount='$actualAmount',orderAmount='$final',edited=2,orderStatus='ready' where id='$order'");

                    // 
                  $statement = $connection->prepare("SELECT b.*,a.landmark FROM `customer_order` as a join customer as b on a.customer_d=b.id where a.id='$order'");
            $statement->execute();
            $mes = $statement->fetchAll();
            foreach ($mes as $resp) {
            }
            $mobile = $resp['mobileNo'];
            $registrationKey = $resp['registrationKey'];
            $landmark = $resp['landmark'];
            $helper->sendStatus($mobile, array($order, $landmark), 'pickup');
                $helper->sendGCM('Your order #'.$order.' is ready for pickup from '.$landmark.'.', $registrationKey, '2', $order);
              }
                // $helper->sendOrderMessageCustomer($res['customer_d'],$restaurant,$branch);
                $wallet = $res['total_price'];
                if ($res['loyalty'] == '0') {
                    $loyalty = 0;
                } else {
                    $loyalty = $res['loyalty'] / $res['qty'];
                }
                if ($wallet != 0 && $paymentType != 'cod') {
                    $note = $wallet . ' Refunded for the order number #' . $order;
                    $this->getBalanceAction($customer, 0, $wallet, 'Refund', $note, 0, $branch);
$em->getConnection()->exec("update customer_order set total_price=0 where 1 and id='$order'");

                }
                if ($loyalty != 0 && $paymentType != 'cod') {
                    $note = 'Points Refunded for the order number #' . $order;
                    $this->getBalanceAction($customer, 3, $loyalty, 'Refund', $note, 0, $branch);
                }
            }
            return array("status" => 200);

        }
    }
    public function saveQty($ids, $order, $diffQty)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

        }
        $qtySum = $res['total_quantity'];
        $total = $qtySum + $diffQty;
        $em->getConnection()->exec("update customer_order set total_quantity='$total' where id='$order'");
        return 0;
    }

    public function savePrice($ids, $order, $price)
    {
        $helper = $this->container->get('function_helper');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM customer_order where id='$order'");
        $statement->execute();
        $menus = $statement->fetchAll();
        foreach ($menus as $res) {

        }
        $qtySum = $res['total_price'];
        $total = $qtySum + $price;
        $em->getConnection()->exec("update customer_order set total_price='$total' where id='$order'");
        return 0;

    }
    public function pickerLoginAction(Request $request)
    {
        // $user=new User;
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $mobile = $request->get('mobile');
        $password = $request->get('password');
        $tokenId = $request->get('tokenId');

        $out = $em->getRepository('AppBundle:User')->findBy(array('mobileNumber' => $mobile, 'userType' => 'Picker', 'isActive' => 1));

        if (empty($out)) {
            $data = array("status" => 400, "data" => $out);
        } else {
            foreach ($out as $res) {
                $x[] = $res;
                $res = $em->getConnection()->exec("update user set registrationKey='$tokenId' where mobileNumber='$mobile'");
                $data = array("status" => 200, "data" => $x);
            }
        }
        return $data;
    }
    public function pickerOrdersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sq = $connection->prepare("SELECT * from customer_order where picker='$id' and orderStatus='pick' order by id desc");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return array();
        } else {

            return $finalresponse;

        }
    }
    public function viewOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $statement = $connection->prepare("SELECT * FROM `customer_order` where id='$id'");
        $statement->execute();
        $resp = $statement->fetchAll();
        if (count($resp) == 0) {
            return array();
        } else {
            foreach ($resp as $res) {
                # code...
            }
            $data = array('note' => $res['note'],'wallet' => round($res['wallet']), 'loyalty' => round($res['loyalty']), 'id' => $res['id'], 'orderDate' => $res['orderDate'], 'actualAmount' => round($res['actualAmount'], 2), 'totalTax' => $res['totalTax'], 'totalDiscount' => round($res['totalDiscount']), 'orderAmount' => round($res['orderAmount']), 'customerName' => $res['customerName'], 'mobileNo' => $this->getCutomerDetails($res['customer_d'], 'mobileNo'),'address' => $res['address'], 'promocode' => $res['promocode'], 'orderType' => $res['orderType'], 'paymentType' => $res['paymentType'], 'paymentStatus' => $res['paymentStatus'], 'restPay' => $res['restPay'], 'fixtime' => $res['fixDate'] . '  ' . $res['fixtime'], 'fixdate' => $res['fixDate'], 'customer' => $res['customer_d'], 'orderStatus' => strtoupper($res['orderStatus']), 'deliveryCharge' => $res['deliveryCharge'], "mode" => $res['paymentType'], "items" => $this->getItemsdata($res['id']));

            return $data;
        }

    }
    public function getItemsdata($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from customer_order_items where order_d='$id'");
        $statement->execute();
        $res = $statement->fetchAll();
        foreach ($res as $resp) {
            $data[] = array("id" => $resp['id'], "order_d" => $resp['order_d'], "itemId" => $resp['itemId'], "itemName" => $resp['itemName'].'-'.$resp['priceVariavtion'], "priceVariavtion" => $resp['priceVariavtion'], "price" =>  round($resp['price'],2), "quantity" => $resp['quantity'], "actualAmount" =>  round($resp['actualAmount'],2), "discount" =>  round($resp['discount'],2), "subTotal" =>  round($resp['subTotal'],2), "isTray" => $resp['isTray'], "trayQty" => $resp['trayQty'], "loyalty" => $resp['loyalty'], "image" => $this->getItemImage($resp['itemId']), "menuid" => $this->getMenuid($resp['itemId']), "barcode" => $this->getBarcode($resp['itemId']));
        }
        return $data;

    }
    public function getBarcode($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT barcode from price_variation where id='$id'");
        $statement->execute();
        $res = $statement->fetchAll();
        foreach ($res as $resp) {
            return $resp['barcode'];
        }
    }
    public function getItemImage($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from menu_item where id in (SELECT menu_item_id from price_variation where id='$id')");
        $statement->execute();
        $res = $statement->fetchAll();
        foreach ($res as $resp) {
            return $resp = 'https://' . $_SERVER['SERVER_NAME'] . '/uploads/items/images/' . $resp['itemFeaturedImage'];
        }
    }
    public function getMenuid($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from menu_item where id in (SELECT menu_item_id from price_variation where id='$id')");
        $statement->execute();
        $res = $statement->fetchAll();
        foreach ($res as $resp) {
            return $resp['id'];
        }
    }
    public function pickerCompletedOrdersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sq = $connection->prepare("SELECT * from customer_order where picker='$id' and orderStatus!='pick' order by id desc");
        $sq->execute();
        $finalresponse = $sq->fetchAll();
        if (count($finalresponse) == 0) {
            return array();
        } else {

            return $finalresponse;

        }
    }
    public function pickerOrderCountAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $sq = $connection->prepare("SELECT * from customer_order where picker='$id' and orderStatus!='pick' order by id desc");
        $sq->execute();
        $all = $sq->fetchAll();
        $sqnew = $connection->prepare("SELECT * from customer_order where picker='$id' and orderStatus='pick' order by id desc");
        $sqnew->execute();
        $new = $sqnew->fetchAll();

        return array("new" => count($new), "all" => count($all));
    }
    public function deliveryBoyListAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $branch = $request->get('branch');
        $sq = $connection->prepare("SELECT * from user where userType='Delivery' and isActive=1 and branch='$branch' order by id desc");
        $sq->execute();
        $all = $sq->fetchAll();
        return $all;
    }

    public function getCustomerOrderAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $items = $this->getOrdersItemsdata($id);
        if (count($items) == 0) {
            return array();
        } else {
            return array('items' => $items);
        }
    }
    public function getOrdersItemsdata($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        //$statement = $connection->prepare(" SELECT * from customer_order co join customer_order_items coi on co.`id` = coi.`order_d`  where customer_d='$id'");
        $statement = $connection->prepare(" SELECT * from customer_order where customer_d='$id' order by id desc");
        $statement->execute();
        $res = $statement->fetchAll();
        if (count($res) != 0) {
            foreach ($res as $resp) {
                # code...
                $orderitems = $this->getItemsdata($resp['id']);
                $itemPrice = $orderitems[0]['price'];
                $itemQuantity = $orderitems[0]['quantity'];
                $itemLeftCount = $orderitems[0]['quantity'] - 1;
                $itemImage = $this->getItemImagePath($orderitems[0]['itemId']);
                $data[] = array("id" => $resp['id'], "order_d" => $resp['id'], "itemId" => $orderitems[0]['itemId'], "itemName" => $orderitems[0]['itemName'], "priceVariavtion" => $orderitems[0]['priceVariavtion'], "price" => $orderitems[0]['price'], "quantity" => $orderitems[0]['quantity'], "actualAmount" => $resp['actualAmount'], "discount" => $orderitems[0]['discount'], "subTotal" => $orderitems[0]['subTotal'], "isTray" => $orderitems[0]['isTray'], "trayQty" => $orderitems[0]['trayQty'], "loyalty" => $orderitems[0]['loyalty'], "image" => $this->getItemImage($orderitems[0]['itemId']), "menuid" => $this->getMenuid($orderitems[0]['itemId']), "barcode" => $this->getBarcode($orderitems[0]['itemId']), 'fixdate' => $resp['fixDate'], "itemPrice" => $itemPrice, "itemQuantity" => $itemQuantity, "itemLeftCount" => $itemLeftCount, "itemImage" => $itemImage, "orderStatus" => strtoupper($resp['orderStatus']), "fixtime" => $resp['fixtime'], "orderType" => $resp['orderType'], "orderAmount" => round($resp['orderAmount']));
            }
        } else {
            $data = array();
        }
        return $data;
    }
    public function viewOrderDetailsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');
        $statement = $connection->prepare("SELECT * FROM `customer_order` where id='$id'");
        $statement->execute();
        $resp = $statement->fetchAll();
        if (count($resp) == 0) {
            return array();
        } else {
            foreach ($resp as $res) {
                # code...
            }
            $items = $this->getItemsdata($res['id']);
            $itemsCount = count($items);
            $data = array('wallet' => round($res['wallet']), 'loyalty' => round($res['loyalty']), 'id' => $res['id'], 'orderDate' => $res['orderDate'], 'actualAmount' => round($res['actualAmount'], 2), 'totalTax' => $res['totalTax'], 'totalDiscount' => round($res['totalDiscount']), 'orderAmount' => round($res['orderAmount']), 'customerName' => $res['customerName'], 'address' => $res['address'], 'promocode' => $res['promocode'], 'orderType' => $res['orderType'], 'paymentType' => $res['paymentType'], 'paymentStatus' => $res['paymentStatus'], 'restPay' => $res['restPay'], 'fixtime' => $res['fixDate'] . '  ' . $res['fixtime'], 'fixdate' => $res['fixDate'], 'orderStatus' => strtoupper($res['orderStatus']), 'deliveryCharge' => $res['deliveryCharge'], 'deliveryOn' => $res['deliveryTime'], 'itemsCount' => $itemsCount, "items" => $items);
            return $data;
        }
    }
    public function getItemImagePath($id)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * from menu_item where id in (SELECT menu_item_id from price_variation where id='$id')");
        $statement->execute();
        $res = $statement->fetchAll();
        foreach ($res as $resp) {
            return $resp = '/uploads/items/images/' . $resp['itemFeaturedImage'];
        }
    }
    public function updatePickerStatusAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $helper = $this->container->get('function_helper');
        $orderid = $request->get('id');
        $res = $em->getConnection()->exec("update customer_order set orderStatus='processing' where 1 and id='$orderid'");

        if ($res) {

            $data = array("status" => 200);
        } else {
            $data = array("status" => 400);

        }
        return $data;
    }

    public function getCutomerDetails($custid, $column){

        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM `customer` where id='$custid'");
        $statement->execute();
        $res = $statement->fetchAll();

        if(count($res)!=0){

            return $res[0]['mobileNo'];

        }
        
    }

//////////////////////////////////////////////////////////////////////////
}
