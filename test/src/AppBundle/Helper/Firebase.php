<?php
 
namespace AppBundle\Helper;

/**
 * @author Ravi Tamada
 * @link URL Tutorial link
 */
class Firebase {
 
    // sending push message to single user by firebase reg id
    public function send($to, $message) {
        $message = array
        (
            'message' 	=> 'here is a message. message',
            'title'		=> 'This is a title. title',
            'subtitle'	=> 'This is a subtitle. subtitle',
            'tickerText'	=> 'Ticker text here...Ticker text here...Ticker text here',
            'vibrate'	=> 1,
            'sound'		=> 1,
            'largeIcon'	=> 'large_icon',
            'smallIcon'	=> 'small_icon'
        );
        $fields = array(
            'to' => $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
 
    // Sending message to a topic by topic name
    public function sendToTopic($to, $message) {
        $fields = array(
            'to' => '/topics/' . $to,
            'data' => $message,
        );
        return $this->sendPushNotification($fields);
    }
// sending push message to multiple users by firebase registration ids
    public function sendMultiple($registration_ids, $message) {
        
       // $messag=json_encode($message);
        $fields = array(
            'to' => $registration_ids,
            'data' => $message,
        );
 
        return $this->sendPushNotification($fields);
    }
 
    // function makes curl request to firebase servers
    private function sendPushNotification($fields) {
// Set POST variables
        $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = array(
            'Authorization:key=AAAA-6twNF8:APA91bFIrEvxBTIGsXSUwftXLrcNdm6tRwawIFeZ8kzdsxIoHt5YKaLwvO9CLWgCc7ruSrCq5ZjSkTPBZMWGFmdrZc9bvIZOF_RCwscb2pG4SicriRaaXX4kZErJ_j3HVg_7xLOk-GRi',
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        dump($result);
        // Close connection
        curl_close($ch);
 
        return $result;
    }
}