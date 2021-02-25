<?php

namespace AppBundle\Helper;
use ICS\ShopBundle\Entity\ShoppingCart;
use ICS\ShopBundle\Entity\HomeCms;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
    
class HelperFunction {

  /**
     *
     * @var EntityManager 
     */
    protected $em;
    protected $session;
    protected $token;
    protected $container;

    public function __construct(TokenStorage $token,EntityManager $entityManager,Session $session,$container)
    {
        $this->em = $entityManager;
        $this->session = $session;
        $this->token = $token;
        $this->container = $container;

    }

    public function testNull($var){
        return ($var==null)?true:false;
    }

    public function testMobile($mobile){
        return !preg_match('/^[0-9]{10}+$/', $mobile);
    }

    public function testOptionalEmail($email){
        if($email==null){
            return false;
        }else{
            return $this->testEmail($email);
        }
    }

    public function testEmail($email){
        return !preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email);
    }

    public function authenticateCustomer($apiKey){
        if($apiKey!=null){
            $edit=true;
            $customer = $this->em->createQueryBuilder()
                    ->select('c')
                    ->from('AppBundle:Customer', 'c')
                    ->where('c.apiKey = :apiKey')
                    ->setParameter('apiKey',$apiKey)
                    ->getQuery()
                    ->getResult();
            if($customer!=null){
                $customer=$customer[0];
                $result['data']=[];
                $result['customer']=$customer;
            }else{
                $result['data'][]="User not authenticated";
                return $result;
            }
        }else{
            $result['data'][]="User not authenticated";
            return $result;
        }
        return $result;
    }

    public function sendOtp($mobile,$otp){
        $message="Your OTP is #".$otp.". Please do not share this with anyone.";
        $this->sendSmsOtp($mobile,$message,$otp);
    }
        public function sendOtpSms($mobile,$otp){
        $message="Your OTP is #".$otp.". Please do not share this with anyone.";
        $this->sendSmsOtp($mobile,$message,$otp);
    }
    public function sendOtpCall($mobile,$otp)
    {
        $this->retryWithCall($mobile);
    }
public function ordersms($mobile,$order){
        $msg="You have new order(#".$order->getId().")";
        $response=$this->getGlobal();
        $this->sendSms($response['mobile'],$message);
}
public function decodeJson($data,$order,$id)
{
     $response=$this->getGlobals($id);
                  $template=$this->getTemplatekey();

 $restaurantName=$response['restaurantName'];
 $sender=$response['sms'];
$connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `customer` where `id`='$data'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {
    $message="Thank you ".$res['username']." for purchasing with ".$restaurantName.". Your order #".$order->getId()." is now procesing";
    $datas=array(
"mobiles" => "91".$res['mobileNo'],
"flow_id" => trim($template['order_u']),
"name"=>$res['username'],
"id"=>$order->getId(),
"shop"=>$restaurantName,
"sender"=>$sender
);

  $this->sendSms($res['mobileNo'],$message);
}
// sendOrderMessage($mobile);
} 
public function sendOrderMessageCustomerRefund($id,$order,$res)
{
   $connection = $this->em->getConnection();

$response=$this->getGlobals($res);    
 $from=$response['email'];
  $company=$response['restaurantName'];

 $responseres=$this->getCustomerData($id);
$to=$responseres['email'];
 $username=$responseres['username'];

 $subject="Your order with ".$company." been edited!";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$orderid=$order->getId();

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>
        <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head><body>';

 
 $message.='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Oxygen Invoice</title>

  <style type="text/css">
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 5px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .button {
      padding: 30px 0;
    }

    .mini-block {
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      background-color: #ffffff;
      padding: 12px 15px 15px;
      text-align: left;
      width: 253px;
    }

    .mini-container-left {
      width: 278px;
      padding: 10px 0 10px 15px;
    }

    .mini-container-right {
      width: 278px;
      padding: 10px 14px 10px 15px;
    }

    .product {
      text-align: left;
      vertical-align: top;
      width: 175px;
    }

    .total-space {
      padding-bottom: 8px;
      display: inline-block;
    }

    .item-table {
      padding: 50px 20px;
      width: 560px;
    }

    .item {
      width: 300px;
    }

    .mobile-hide-img {
      text-align: left;
      width: 125px;
    }

    .mobile-hide-img img {
      border: 1px solid #e6e6e6;
      border-radius: 4px;
    }

    .title-dark {
      text-align: left;
      border-bottom: 1px solid #cccccc;
      color: #4d4d4d;
      font-weight: 700;
      padding-bottom: 5px;
    }

    .item-col {
      padding-top: 20px;
      text-align: left;
      vertical-align: top;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

  </style>

  <style type="text/css" media="screen">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type="text/css" media="screen">
    @media screen {
      /* Thanks Outlook 2013! */
     
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="container-for-gmail-android"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      img[class="force-width-gmail"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      table[class="w320"] {
        width: 320px !important;
      }

      td[class*="mobile-header-padding-left"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*="mobile-header-padding-right"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class="header-lg"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class="content-padding"] {
        padding: 5px 0 5px !important;
      }

       td[class="button"] {
        padding: 5px 5px 30px !important;
      }

      td[class*="free-text"] {
        padding: 10px 18px 30px !important;
      }

      td[class~="mobile-hide-img"] {
        display: none !important;
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
      }

      td[class~="item"] {
        width: 140px !important;
        vertical-align: top !important;
      }

      td[class~="quantity"] {
        width: 50px !important;
      }

      td[class~="price"] {
        width: 90px !important;
      }

      td[class="item-table"] {
        padding: 30px 20px !important;
      }

      td[class="mini-container-left"],
      td[class="mini-container-right"] {
        padding: 0 15px 15px !important;
        display: block !important;
        width: 290px !important;
      }

    }
  </style>
</head>

<body bgcolor="#f7f7f7">
<table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
  <tr>
    <td align="left" valign="top" width="100%" style="background:repeat-x url(http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg) #ffffff;">
      <center>
      <img src="http://s3.amazonaws.com/swu-filepicker/SBb2fQPrQ5ezxmqUTgCr_transparent.png" class="force-width-gmail">
        <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" background="http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg" style="background-color:transparent">
          <tr>
            <td width="100%" height="80" valign="top" style="text-align: center; vertical-align:middle;">
            <!--[if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:80px; v-text-anchor:middle;">
              <v:fill type="tile" src="http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg" color="#ffffff" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
              <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                  <tr>
                    <td class="pull-left mobile-header-padding-left" style="vertical-align: middle;">
                      <a href=""></a>
                    </td>
                   
                  </tr>
                </table>
                <h3></h3>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg">
             '.$company.'
            </td>
          </tr>
          <tr>
            <td class="free-text">
             Dear '.$username.' , Your order #'.$order->getId().' has been edited!
            </td>
          </tr>
          <tr>
            <td class="button">
              <div></div>
            </td>
          </tr>
          <tr>
            <td class="w320">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td class="mini-container-left">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td class="mini-block-padding">
                          <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                            <tr>
                              <td class="mini-block">
                                <span class="header-sm">Address</span><br />
                              
 Name : '.$order->getCustomerName().'<br>
 Address : '.$order->getAddress().'<br>
 Delivery Area   : '.$order->getArea().'<br>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="mini-container-right">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td class="mini-block-padding">
                          <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                            <tr>
                              <td class="mini-block">
                                                            
                                #'.$order->getId().'<br>
                             Payment Type: '.$order->getPaymentType().'<br>
Delivery Date: '.$order->getFixdate().'<br>
Delivery Time: '.$order->getFixtime().'<br>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
      <center>
        <table cellpadding="0" cellspacing="0" width="600" class="w320">
            <tr>
              <td class="item-table">
                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="title-dark" width="300">
                       Item
                    </td>
                    <td class="title-dark" width="163">
                      Qty
                    </td>
                    <td class="title-dark" width="97">
                      Total
                    </td>
                  </tr>';
  #order : '.$order->getId().'<br>

    # code...$order->getId()

$sql = $connection->prepare("SELECT * FROM `customer_order_items` where `order_d`='$orderid'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

  $message.='
                    <tr>
                    <td class="item-col item"> '.$res['itemName'].' - '.$res['priceVariavtion'].'                  
                    </td>
                    <td class="item-col quantity">
                     '.$res['quantity'].'
                    </td>
                    <td class="item-col">
                      '.$response['currencyFormat'].$res['subTotal'].'
                    </td>
                  </tr>';
}


       $message.='              

                  <tr>
                    <td class="item-col item mobile-row-padding"></td>
                    <td class="item-col quantity"></td>
                    <td class="item-col price"></td>
                  </tr>


                  <tr>
                    <td class="item-col item">
                    </td>
                    <td class="item-col quantity" style="text-align:right; padding-right: 10px; border-top: 1px solid #cccccc;">
                      <span class="total-space">Subtotal</span> <br />
                      <span class="total-space">Delivery Charges</span>  <br />
                      <span class="total-space">Promo Code</span> <br />
                      <span class="total-space" style="font-weight: bold; color: #4d4d4d">Total</span>
                    </td>
                    <td class="item-col price" style="text-align: left; border-top: 1px solid #cccccc;">
                      <span class="total-space">'.$response['currencyFormat'].$order->getActualAmount().'</span> <br />
                      <span class="total-space">'.$response['currencyFormat'].$order->getDeliveryCharge().'</span>  <br />
                      <span class="total-space">'.$response['currencyFormat'].'0</span>  <br />
                      <span class="total-space" style="font-weight:bold; color: #4d4d4d">'.$response['currencyFormat'].$order->getOrderAmount().'</span>
                    </td>


                  </tr>  
                </table>
              </td>
            </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td style="padding: 25px 0 25px">
              <strong>'.$response['restaurantName'].'</strong><br />
              '.$response['restaurantAddress'].'<br />
              '.$response['restaurantLocation'].' <br />
              '.$response['email'].' <br />
               '.$response['mobile'].'<br /><br />
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</div>
</body>
</html>';
// Sending email
mail($to, $subject, $message, $headers);

}   
public function sendOrderMessageCustomer($id,$order,$res)
{
   $connection = $this->em->getConnection();

$response=$this->getGlobals($res);    
 $from=$response['email'];
  $company=$response['restaurantName'];

 $responseres=$this->getCustomerData($id);
$to=$responseres['email'];
 $username=$responseres['username'];

 $subject="Thank you for ordering with ".$company;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$orderid=$order->getId();

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>
        <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head><body>';

 
 $message.='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Oxygen Invoice</title>

  <style type="text/css">
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 5px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .button {
      padding: 30px 0;
    }

    .mini-block {
      border: 1px solid #e5e5e5;
      border-radius: 5px;
      background-color: #ffffff;
      padding: 12px 15px 15px;
      text-align: left;
      width: 253px;
    }

    .mini-container-left {
      width: 278px;
      padding: 10px 0 10px 15px;
    }

    .mini-container-right {
      width: 278px;
      padding: 10px 14px 10px 15px;
    }

    .product {
      text-align: left;
      vertical-align: top;
      width: 175px;
    }

    .total-space {
      padding-bottom: 8px;
      display: inline-block;
    }

    .item-table {
      padding: 50px 20px;
      width: 560px;
    }

    .item {
      width: 300px;
    }

    .mobile-hide-img {
      text-align: left;
      width: 125px;
    }

    .mobile-hide-img img {
      border: 1px solid #e6e6e6;
      border-radius: 4px;
    }

    .title-dark {
      text-align: left;
      border-bottom: 1px solid #cccccc;
      color: #4d4d4d;
      font-weight: 700;
      padding-bottom: 5px;
    }

    .item-col {
      padding-top: 20px;
      text-align: left;
      vertical-align: top;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

  </style>

  <style type="text/css" media="screen">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type="text/css" media="screen">
    @media screen {
      /* Thanks Outlook 2013! */
     
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="container-for-gmail-android"] {
        min-width: 290px !important;
        width: 100% !important;
      }

      img[class="force-width-gmail"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      table[class="w320"] {
        width: 320px !important;
      }

      td[class*="mobile-header-padding-left"] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*="mobile-header-padding-right"] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class="header-lg"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class="content-padding"] {
        padding: 5px 0 5px !important;
      }

       td[class="button"] {
        padding: 5px 5px 30px !important;
      }

      td[class*="free-text"] {
        padding: 10px 18px 30px !important;
      }

      td[class~="mobile-hide-img"] {
        display: none !important;
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
      }

      td[class~="item"] {
        width: 140px !important;
        vertical-align: top !important;
      }

      td[class~="quantity"] {
        width: 50px !important;
      }

      td[class~="price"] {
        width: 90px !important;
      }

      td[class="item-table"] {
        padding: 30px 20px !important;
      }

      td[class="mini-container-left"],
      td[class="mini-container-right"] {
        padding: 0 15px 15px !important;
        display: block !important;
        width: 290px !important;
      }

    }
  </style>
</head>

<body bgcolor="#f7f7f7">
<table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
  <tr>
    <td align="left" valign="top" width="100%" style="background:repeat-x url(http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg) #ffffff;">
      <center>
      <img src="http://s3.amazonaws.com/swu-filepicker/SBb2fQPrQ5ezxmqUTgCr_transparent.png" class="force-width-gmail">
        <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" background="http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg" style="background-color:transparent">
          <tr>
            <td width="100%" height="80" valign="top" style="text-align: center; vertical-align:middle;">
            <!--[if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:80px; v-text-anchor:middle;">
              <v:fill type="tile" src="http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg" color="#ffffff" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
              <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                  <tr>
                    <td class="pull-left mobile-header-padding-left" style="vertical-align: middle;">
                      <a href=""></a>
                    </td>
                   
                  </tr>
                </table>
                <h3></h3>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg">
             '.$company.'
            </td>
          </tr>
          <tr>
            <td class="free-text">
             Thank you '.$username.' for purchasing with '.$company.'. Your order #'.$order->getId().' is now procesing
            </td>
          </tr>
          <tr>
            <td class="button">
              <div></div>
            </td>
          </tr>
          <tr>
            <td class="w320">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td class="mini-container-left">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td class="mini-block-padding">
                          <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                            <tr>
                              <td class="mini-block">
                                <span class="header-sm">Address</span><br />
                              
 Name : '.$order->getCustomerName().'<br>
 Address : '.$order->getAddress().'<br>
 Delivery Area   : '.$order->getArea().'<br>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td class="mini-container-right">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td class="mini-block-padding">
                          <table cellspacing="0" cellpadding="0" width="100%" style="border-collapse:separate !important;">
                            <tr>
                              <td class="mini-block">
                                                            
                                #'.$order->getId().'<br>
                             Payment Type: '.$order->getPaymentType().'<br>
Delivery Date: '.$order->getFixdate().'<br>
Delivery Time: '.$order->getFixtime().'<br>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
      <center>
        <table cellpadding="0" cellspacing="0" width="600" class="w320">
            <tr>
              <td class="item-table">
                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="title-dark" width="300">
                       Item
                    </td>
                    <td class="title-dark" width="163">
                      Qty
                    </td>
                    <td class="title-dark" width="97">
                      Total
                    </td>
                  </tr>';
  #order : '.$order->getId().'<br>

    # code...$order->getId()

$sql = $connection->prepare("SELECT * FROM `customer_order_items` where `order_d`='$orderid'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

  $message.='
                    <tr>
                    <td class="item-col item"> '.$res['itemName'].' - '.$res['priceVariavtion'].'                  
                    </td>
                    <td class="item-col quantity">
                     '.$res['quantity'].'
                    </td>
                    <td class="item-col">
                      '.$response['currencyFormat'].$res['subTotal'].'
                    </td>
                  </tr>';
}


       $message.='              

                  <tr>
                    <td class="item-col item mobile-row-padding"></td>
                    <td class="item-col quantity"></td>
                    <td class="item-col price"></td>
                  </tr>


                  <tr>
                    <td class="item-col item">
                    </td>
                    <td class="item-col quantity" style="text-align:right; padding-right: 10px; border-top: 1px solid #cccccc;">
                      <span class="total-space">Subtotal</span> <br />
                      <span class="total-space">Delivery Charges</span>  <br />
                      <span class="total-space">Promo Code</span> <br />
                      <span class="total-space" style="font-weight: bold; color: #4d4d4d">Total</span>
                    </td>
                    <td class="item-col price" style="text-align: left; border-top: 1px solid #cccccc;">
                      <span class="total-space">'.$response['currencyFormat'].$order->getActualAmount().'</span> <br />
                      <span class="total-space">'.$response['currencyFormat'].$order->getDeliveryCharge().'</span>  <br />
                      <span class="total-space">'.$response['currencyFormat'].'0</span>  <br />
                      <span class="total-space" style="font-weight:bold; color: #4d4d4d">'.$response['currencyFormat'].$order->getOrderAmount().'</span>
                    </td>


                  </tr>  
                </table>
              </td>
            </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td style="padding: 25px 0 25px">
              <strong>'.$response['restaurantName'].'</strong><br />
              '.$response['restaurantAddress'].'<br />
              '.$response['restaurantLocation'].' <br />
              '.$response['email'].' <br />
               '.$response['mobile'].'<br /><br />
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</div>
</body>
</html>';
// Sending email
mail($to, $subject, $message, $headers);

}
    public function sendOrderMessage($order,$id){
        // $this->sendSms($mobile,$message);
 $response=$this->getGlobals($id);
 $email=$response['email'];
 $company=$response['restaurantName'];

$from=$email;

$to = $email;
 $subject="You have new order(#".$order->getId().")";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$orderid=$order->getId();
 $connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `customer_order_items` where `order_d`='$orderid'");
$sql->execute();
$row = $sql->fetchAll();
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>
        <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head><body>';
   $message .= $company.'<br>
   ----------------------------------------<br>
  #order : '.$order->getId().'<br>
Customer Name : '.$order->getCustomerName().'<br>
 Address : '.$order->getAddress().'<br>
 Delivery Area   : '.$order->getArea().'<br>
----------------------------------------<br>Order Details:<br>';
foreach($row as $res){
$message.=$res['quantity'].'X  '.$res['itemName'].'('.$res['priceVariavtion'].')<br>';
}

$message.='----------------------------------------<br>
Subtotal: ₹ '.$order->getActualAmount().'<br>
Delivery Charges: ₹ '.$order->getDeliveryCharge().'<br>
Promo Code: -- ₹ '.$order->getPromocode().'<br>
Grand Total: ₹'.$order->getOrderAmount().'<br>
----------------------------------------<br>
Payment Type: '.$order->getPaymentType().'<br>
Delivery Time: '.$order->getFixtime().'<br>';
 $message .= '</body></html>';
 
// Sending email
mail($to, $subject, $message, $headers);

 
    }
  public function sendStatus($mobile,$id,$mode){
             $response=$this->getGlobal();
             $template=$this->getTemplatekey();

 $restaurantName=$response['restaurantName'];
 $sender=$response['sms'];
$connection = $this->em->getConnection();

if($mode=='delivered')
{
   $datas=array(
"mobiles" => "91".$mobile,
"flow_id" => trim($template['delivered']),
"order"=>$id,
"sender"=>$sender
);

  $this->sendSms($mobile,"Your order ".$id." is delivered. Thank you for choosing us!");
}
if($mode=='onway')
{
   $datas=array(
"mobiles" => "91".$mobile,
"flow_id" =>trim($template['delivered']),
"order"=>$id,
"sender"=>$sender
);

  $this->sendSms($mobile,"Your order ".$id." is on way");
}

if($mode=='out')
{
   $datas=array(
"mobiles" => "91".$mobile,
"flow_id" => trim($template['delivery_u']),
"name"=>$id[0],
"phone"=>$id[1],
"sender"=>$sender
);

  $this->sendSms($mobile,"Your order is out for delivery. Please check your parcel, you can return improper or damaged products on the spot at the time of collecting delivery. Please cooperate with us. Team Tokre");
}

if($mode=='cancelled')
{
   $datas=array(
"mobiles" => "91".$mobile,
"flow_id" => trim($template['cancelled']),
"order"=>$id,
"sender"=>$sender
);

  $this->sendSms($mobile,"Your order ".$id." has been cancelled");
}
    }
public function sendemailtocustomer($email,$customer)
{
   $response=$this->getGlobal();
 $from=$response['email'];
 $company=$response['restaurantName'];

// $from="mail@appinsight.tech";

$to = $email;
 $subject="Thank you for registering with ".$company;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>
        <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$message.='<img src="https://freshcompany.in/email.jpg" style="width:100%;">';

 $message.='</head><body>';
 mail($to, $subject, $message, $headers);

}
         public function sendSmsOtp($mobile=null, $message=null,$otp=null){
             $response=$this->getGlobal();
 $sender=$response['sms'];
  $apiKey=$response['apiKey'];
  $countryCode=$response['countryCode'];
             $template=$this->getTemplatekey();
$key=trim($template['otp']);
        if($mobile!=null && $message!=null):
            $message=urlencode($message);
         $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,'https://www.hellotext.live/vb/apikey.php?apikey=pO6Eab953Cgzna5s&senderid=TOKREE&number='.$mobile.'&message='.$message);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

$err = curl_error($ch);
curl_close($ch);
        endif;
    }
    public function sendSms($mobile,$message){
                  $response=$this->getGlobal();
 $sender=$response['sms'];
  $apiKey=$response['apiKey'];
  $countryCode=$response['countryCode'];
      
$ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,'https://www.hellotext.live/vb/apikey.php?apikey=pO6Eab953Cgzna5s&senderid=TOKREE&number='.$mobile.'&message='.$message);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

$err = curl_error($ch);
curl_close($ch);
    }

        public function retryWithCall($mobile=null){
        if($mobile!=null):
            $message=urlencode($message);
       
            $apiRoute="http://sms.chotaweb.com/api/retryotp.php?authkey=246433AcgIcYWo5be18fb9&mobile=91".$mobile."&retrytype=voice";
              // $apiRoute="http://sms.chotaweb.com/api/retryotp.php?authkey=246433AcgIcYWo5be18fb9&mobile=919686741043&retrytype=voice";
            $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $apiRoute);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
        endif;
    }
       function sendGCM($message, $id,$mode,$orderid) {
$response=$this->getGlobal();

 $sender=$response['sms'];
 $title=$response['restaurantName'];
  $firebase=$response['firebase'];
  $countryCode=$response['countryCode'];
        $accessKey=$firebase;
        $link="-";

$nid='';
$ref="0";

        $this->sendToFireBase($accessKey,$message, $id,$title,$link,$mode,$orderid,$nid,'');
    }

public function sendGCMultiple($message, $id,$link,$mode,$ref,$nid,$branch,$title,$url) {
$response=$this->getGlobals($branch);

 $sender=$response['sms'];
 // $title=$response['restaurantName'];
  $firebase=$response['firebase'];
  $countryCode=$response['countryCode'];
        $accessKey=$firebase;
      
        $this->sendToFireBase($accessKey,$message, $id,$title,$link,$mode,$ref,$nid,$url);
    }

  

    function sendToFireBase($accessKey,$message, $id,$title,$link,$mode,$ref,$nid,$url) {

    
        $registrationIds = $id;
        #prep the bundle
        $msg = array
          (
        'body'  => $message,
        'title' => $title,
        'icon' => 'icon.png',/*Default Icon*/
         'sound' => 'hollow.mp3',/*Default sound*/
        "image" => $url,
        "picture" => $url,
          );
      $fields = array
          (
            'to'    => $registrationIds,
            'notification'  => $msg,
             'data'=>array(
         'click_action'=>'FLUTTER_NOTIFICATION_CLICK',
         'mode'=>$mode,
         'ref'=>$ref,
         'nid'=>$nid,)
          );
  
  
      $headers = array
          (
            'Authorization: key='.$accessKey,
            'Content-Type: application/json'
          );
        #Send Reponse To FireBase Server  
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    $result = curl_exec($ch );
    curl_close( $ch );
    }
    public function getMonthlyStats($yearData=null,$status){
        $countings=$this->em->createQueryBuilder()
                            ->select('count(ord.id) as countings')
                            ->from('AppBundle:CustomerOrder', 'ord')
                            ->where('ord.orderStatus = :status')
                            ->andWhere("DATE_FORMAT(ord.orderDate, '%m-%Y') = :yearDate")
                            ->setParameter('yearDate',$yearData)
                            ->setParameter('status',$status)
                            ->getQuery()
                            ->getSingleResult();
        if($countings==[]){
            $countings=0;
        }else{
            $countings=$countings["countings"];
        }

        return $countings;
    }

function getGlobal()
{
$connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `restaurants` where `id`='999'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

    $response=array("id"=>$res['id'],"restaurantName"=>$res['restaurantName'],"mobile"=>$res['primaryMobile'],"email"=>$res['primaryEmail'],"countryCode"=>$res['countryCode'],"currencyFormat"=>$res['currencyFormat'],"sms"=>$res['sms'],"apiKey"=>$res['apiKey'],"firebase"=>$res['firebase'],"restaurantAddress"=>$res['restaurantAddress'],"restaurantLocation"=>$res['restaurantLocation']);
    return $response;
}
}
function getGlobals($id)
{
$connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `restaurants` where `id`='$id'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

    $response=array("id"=>$res['id'],"restaurantName"=>$res['restaurantName'],"mobile"=>$res['primaryMobile'],"email"=>$res['primaryEmail'],"countryCode"=>$res['countryCode'],"currencyFormat"=>$res['currencyFormat'],"sms"=>$res['sms'],"apiKey"=>$res['apiKey'],"firebase"=>$res['firebase'],"restaurantAddress"=>$res['restaurantAddress'],"restaurantLocation"=>$res['restaurantLocation']);
    return $response;
}
}
function getTemplatekey()
{
$connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `sms` where `id`='1'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

    $response=array("id"=>$res['id'],"registration_user"=>$res['registration_user'],"registration_delivery"=>$res['registration_delivery'],"otp"=>$res['otp'],"order_u"=>$res['order_u'],"order_a"=>$res['order_a'],"recciving"=>$res['recciving'],"delivery_u"=>$res['delivery_u'],"delivery_d"=>$res['delivery_d'],"delivered"=>$res['delivered'],"completed"=>$res['completed'],"cancelled"=>$res['cancelled']);
    return $response;
}
}
function getCustomerData($id)
{
  
 $connection = $this->em->getConnection();
$sql = $connection->prepare("SELECT * FROM `customer` where `id`='$id'");
$sql->execute();
$row = $sql->fetchAll();
foreach ($row as $res) {

    $response=array("id"=>$res['id'],"email"=>$res['email'],"mobileNo"=>$res['mobileNo'],"username"=>$res['username']);
    return $response;
}

}

//end
}

