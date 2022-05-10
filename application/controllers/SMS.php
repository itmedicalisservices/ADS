<?php
declare(strict_types=1);
defined('BASEPATH') OR exit('No direct script access allowed');
//require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;


use Smsapi\Client\Service\SmsapiComService;
use Smsapi\Client\Feature\Sms\Bag\SendSmsBag;
use telesign\sdk\messaging\MessagingClient;
/** @var SmsapiComService $service */
//require_once 'service.php';

class SMS extends CI_Controller {

	/*public function sendSMS(){
		// Your Account SID and Auth Token from twilio.com/console
		$account_sid = 'AC28359885cd6529ce28dc52fd1d7195f3';
		$auth_token = 'fd5a313740d91712fd2830ca93b8e998';
		// In production, these should be environment variables. E.g.:
		// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

		// A Twilio number you own with SMS capabilities
		$twilio_number = "+17064442819";
		try{
			$client = new Client($account_sid, $auth_token);
			$sms=$client->messages->create(
				// Where to send a text message (your cell phone?)
				'+242068403941',
				array(
					'from' => $twilio_number,
					'body' => 'Test message twilo'
				)
			);
			echo 'SMS envoié';
		}catch(Exception $ex){
			echo 'SMS non envoié';
		}
		
	}*/
	
	
	//Telesign
	/*public function sendSMS(){
		
	  $customer_id = "17ACF99A-805F-4D7F-9D3B-5A3F89C1221F";
	  $api_key = "hMevakKNTvxeMJ6Dtqa8DWPUVezdYsQkYa3qKkRveIGyUvu1vBxwJPC6qHazRKlehtzbI17+KckM5jDSujGL3Q==";
	  $phone_number = "242064863434";
	  $message = "RABY TEST MESSAGE";
	  $message_type = "ARN";
	  $messaging = new MessagingClient($customer_id, $api_key);
	  $response = $messaging->message($phone_number, $message, $message_type);
	  
		
	}*/
	
	//smsFactor
	public function sendSMS(){
		$msg="TEST message SMSFactor Model";
		$date=date("Y-m-d");
		$tel='068403941';
		$this->md_config->sendSMS($msg,$date,$tel);
	}
	
	/*public function sendSMS(){
		// Get Parameters

			$client="xxxxx";
			$SenderID="medicalis";
			$password="xxxxxx";
			$phone="242068403941";
			$message="Bonjour Evrald test message wirepick";

			
			$params = [
			  "client" =>$client,"password"=>$password,"phone"=>$phone,"text"=>$message,"from"=>$SenderID
			];

		 
		 $url = "https://api.wirepick.com/httpsms/send";
		 
		$curl = curl_init();
		$data = http_build_query($params);
		$getUrl = $url."?".$data;
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_URL, $getUrl);
		curl_setopt($curl, CURLOPT_TIMEOUT, 80);
		 
		$response = curl_exec($curl);
		curl_close($curl);
		echo $response;

	}*/
	
	
}

