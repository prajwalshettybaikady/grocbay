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
        $message="Your OTP is ".$otp.". Please do not share this with anyone.";
        $this->sendSms($mobile,$message);
    }

    public function sendOrderMessage($mobile,$order){
        $msg="You have new order(#".$order->getId().")";
        // $this->sendSms($mobile,$message);
$subject="You have new order from app";
    $contacts = array(
"prajwalshettybaikady@gmail.com,care@grocjar.com"
//....as many email address as you need
);

foreach($contacts as $contact) {
$to      =  $contact;
$headers = 'From: care@grocjar.com' . "\r\n" .
       'Reply-To: webmaster@grocjar.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
 mail($to, $subject, $msg, $headers);
}

    }
    public function sendStatus($mobile,$message){
        $this->sendSms($mobile,$message);
    }
    public function sendSms($mobile=null, $message=null){
        if($mobile!=null && $message!=null):
            $message=urlencode($message);
            $apiRoute="https://sms.chotaweb.in/api/sendhttp.php?authkey=6565A8ZgmQws3yDp5d1c4044&mobiles=".$mobile."&message=".$message."&sender=GRCJAR&route=4&country=0";
            $ch = curl_init();
	    curl_setopt($ch,CURLOPT_URL, $apiRoute);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
        endif;
    }

    function sendGCM($message, $id,$title="Deliwala") {

        $accessKey='AIzaSyBIVbPQCh9r-e7Tu8g44ty9XK0_CFhXc5A';
        $this->sendToFireBase($accessKey,$message, $id,$title="Parivar");
    }

  

    function sendToFireBase($accessKey,$message, $id,$title="Parivar") {

    
        $registrationIds = $id;
        #prep the bundle
        $msg = array
          (
    		'body' 	=> $message,
    		'title'	=> $title,
                 	'icon'	=> 'myicon',/*Default Icon*/
                  	'sound' => 'mySound'/*Default sound*/
          );
    	$fields = array
    			(
    				'to'		=> $registrationIds,
    				'notification'	=> $msg
    			);
	
	
    	$headers = array
    			(
    				'Authorization: key=' . $accessKey,
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
}

?>
