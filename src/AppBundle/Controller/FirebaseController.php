<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FirebaseController extends Controller
{
    public function sendPushnotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $type = $request->get('type');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        if ($type == 'all') {
            $statement = $connection->prepare("SELECT * FROM `customer` where  branch='$branch'");
        } elseif ($type == 'prime') {
            $statement = $connection->prepare("SELECT * FROM `customer` where  membership=1 and  branch='$branch'");
        } elseif ($type == 'active') {
            $statement = $connection->prepare("SELECT * from customer where id in (SELECT customer_d from  customer_order WHERE YEAR(orderDate) = YEAR(CURRENT_DATE()) AND MONTH(orderDate) = MONTH(CURRENT_DATE())) and  branch='$branch'");
        } elseif ($type == 'new') {
            $statement = $connection->prepare("SELECT * from customer where id in (SELECT customer_d from  customer_order WHERE   branch='$branch')");
        }
        $statement->execute();
        $customer = $statement->fetchAll();

        $catsql = $connection->prepare("select * from sub_category where parent_id!='' and status='0' and branch='$branch'");
        $catsql->execute();
        $cat = $catsql->fetchAll();
        $statement = $connection->prepare("SELECT a.* FROM `menu_item` as a join brands as b on a.brand=b.id  where a.isActive='1' and 1 and a.id in(select menu_item_id from price_variation where stock > minItem) and a.branch='$branch'");
        $statement->execute();
        $items = $statement->fetchAll();

        $braands = $connection->prepare("SELECT * FROM `brands` where branch='$branch'");
        $braands->execute();
        $brands = $braands->fetchAll();
        return $this->render('AppBundle:Admin:Firebase/sendBulk.html.twig', array('customer' => $customer, 'category' => $cat, 'items' => $items, 'brands' => $brands, 'type' => $type));
    }

    public function filterNotifcationUserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $type = $request->get('type');
        return $this->redirectToRoute('send_push_notification', array("type" => $type));

    }

    public function listNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $statement = $connection->prepare("SELECT * FROM `customer` where  branch='$branch' ");
        $statement->execute();
        $customer = $statement->fetchAll();
        $catsql = $connection->prepare("select * from notification where branch='$branch' order by id asc");
        $catsql->execute();
        $data = $catsql->fetchAll();

        return $this->render('AppBundle:Admin:Firebase/list.html.twig', array('data' => $data));
    }
    public function viewNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $id = $request->get('id');

        $statement = $connection->prepare("SELECT * FROM `notification` where  ref='$id'");
        $statement->execute();
        $not = $statement->fetchAll();

        foreach ($not as $key) {
            # code...
        }
        $for = $key['notificationFor'];
        if ($for == '4') {
            $data = $key['data'];
            $catsql = $connection->prepare("SELECT a.itemName FROM `menu_item` as a join brands as b on a.brand=b.id where a.isActive='1' and a.id in($data)");
            $catsql->execute();
            $data = $catsql->fetchAll();
            if (count($data) == 0) {
                $response = '';
            } else {
                foreach ($data as $resp) {
                    $response[] = $resp['itemName'];
                }
                $response = implode(',', $response);
            }

        }
        if ($for == '5') {
            $data = $key['data'];
            $catsql = $connection->prepare("SELECT categoryName FROM `sub_category` where  id in($data) and status='0'");
            $catsql->execute();
            $data = $catsql->fetchAll();
            if (count($data) == 0) {
                $response = '';
            } else {

                foreach ($data as $resp) {
                    $response[] = $resp['categoryName'];
                }
                $response = implode(',', $response);
            }

        }
        if ($for == '10') {
            $data = $key['data'];
            $catsql = $connection->prepare("SELECT categoryName FROM `brands` where  id in($data)");
            $catsql->execute();
            $data = $catsql->fetchAll();
            if (count($data) == 0) {
                $response = '';
            } else {

                foreach ($data as $resp) {
                    $response[] = $resp['categoryName'];
                }
                $response = implode(',', $response);
            }

        }

        if ($for == '6') {
            $response = "Home Page";
        }
        if ($for == '3') {
            $response = $key['data'];
        }
        $catsql = $connection->prepare("select a.*,b.username from notification_history as a join customer as b on a.user=b.id  where a.ref='$id'");
        $catsql->execute();
        $data = $catsql->fetchAll();

        return $this->render('AppBundle:Admin:Firebase/view.html.twig', array('data' => $not, "history" => $data, "response" => $response));
    }

    public function sendNotificationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $helper = $this->container->get('function_helper');

        $message = addslashes($_POST['message']);
        $title = addslashes($_POST['title']);
        $message = $this->cleanNonAsciiCharactersInString($message);
        $message = addslashes($message);

        $all = $_POST['all'];
        if ($_POST['all'] == '') {
            $request->getSession()->getFlashBag()->add('error', "Please select customer!");
            return $this->redirectToRoute('send_push_notification', array("type" => 'all'));

        }

        $file = $_FILES['image'];

        $basename = $_FILES["image"]["name"];
        $destination = "../uploads/" . $basename;
        if ($basename == '') {

        } else {
            move_uploaded_file($_FILES["image"]["tmp_name"], $destination);
        }

        $statement = $connection->prepare("SELECT * FROM `notification`");
        $statement->execute();
        $response = $statement->fetchAll();
        $total = count($response);
        foreach ($all as $customer) {

//send push
            $statement = $connection->prepare("SELECT * FROM `customer` where id='$customer'");
            $statement->execute();
            $response = $statement->fetchAll();
            foreach ($response as $res) {

            }
            $fkey = $res['registrationKey'];

            $for = $_POST['for'];
            if ($for == 0) {
                $mode = 3;

                if ($_POST['link'] == '') {
                    $request->getSession()->getFlashBag()->add('error', "Please Mention Link while Triggering notification!");
                    return $this->redirectToRoute('send_push_notification', array("type" => 'all'));

                }

                $ref = $_POST['link'];}

            if ($for == 1) {
                $mode = 4;
                if ($_POST['items'] == '') {
                    $request->getSession()->getFlashBag()->add('error', "Please select menu items");
                    return $this->redirectToRoute('send_push_notification', array("type" => 'all'));

                } else {
                    $res = implode(", ", $_POST['items']);
                }
                $ref = $res;
            }
            if ($for == 2) {
                $mode = 5;
                if ($_POST['category'] == '') {
                    $request->getSession()->getFlashBag()->add('error', "Please select menu items");
                    return $this->redirectToRoute('send_push_notification', array("type" => 'all'));

                } else {
                    $res = implode(", ", $_POST['category']);
                }
                $ref = $res;
            }
            if ($for == 4) {
                $mode = 10;
                if ($_POST['brands'] == '') {
                    $request->getSession()->getFlashBag()->add('error', "Please select brands");
                    return $this->redirectToRoute('send_push_notification', array("type" => 'all'));

                } else {
                    $res = implode(", ", $_POST['brands']);
                }
                $ref = $res;
            }
            if ($for == 3) {
                $mode = 6;
                $ref = 0;
            }
            $em->getConnection()->exec("INSERT INTO `notification_history`(`ref`, `user`, `status`) VALUES ('$total','$customer','0')");

            $nid = $em->getConnection()->lastInsertId();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $branch = $user->getBranch();
  $url = 'https://' . $_SERVER['SERVER_NAME'] . '/uploads/'.$basename;
            $helper->sendGCMultiple($message, $fkey, $_POST['link'], $mode, $ref, $nid, $branch, $title,$url);

        }

        // Image Upload Start

        // End

        $date = date('d-m-Y') . ' at ' . date('H:i A');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $branch = $user->getBranch();
        $em->getConnection()->exec("INSERT INTO `notification`(`ref`, `notificationFor`, `dateTime`, `data`, `message`,`branch`,`image`) VALUES ('$total','$mode','$date','$ref','$message','$branch','$basename')");

        $request->getSession()->getFlashBag()->add('success', "Notification sent!");
        return $this->redirectToRoute('send_push_notification', array("type" => 'all'));
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
        $trans["'"] = array(
            '&lsquo;', // Left Single Quotation Mark
            '&rsquo;', // Right Single Quotation Mark
            '&rsaquo;', // Single Right-Pointing Angle Quotation Mark
            '&sbquo;', // Single Low-9 Quotation Mark
            '&circ;', // Modifier Letter Circumflex Accent
            '&lsaquo;', // Single Left-Pointing Angle Quotation Mark
        );

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

}
