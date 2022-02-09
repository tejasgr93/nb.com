<?php
session_start();
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.

if($_POST['Email']!='' && $_POST['Message']!='' && $_POST['Phone']!='' && $_POST['Last_name']!='' && $_POST['First_name']!=''){

define("SENDGRID_API_URL","https://api.sendgrid.com/api/mail.send.json");	//sendgrid api url
define("SENDGRID_API_USER","neeraj@nextbrickinc.com");	//sendgrid api user
define("SENDGRID_API_KEY","Nextbrick$123Nextbrick$123");	//sendgrid api pass
define("SENDGRID_API_KEY_V3","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");	//sendgrid api key for v3 new
	
require("sendgrid-php/sendgrid-php.php");
	
	
$from_email = 'shrey@nextbrickinc.com';
$from_name = 'NextBrick Inc';

$firstname = 'Shrey';
$lastname = '';

// an email address that will receive the email with the output of the form
$sendTo = 'shrey@nextbrickinc.com';


// subject of the email
$subject = 'Submission Confirmation';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array(
'First_name' => 'First_name', 
'Last_name' => 'Last_name', 
'Email' => 'Email', 
'Phone' => 'Phone', 
'Message' => 'Message'
); 

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) {
		//throw new \Exception('Form is empty');
		 $responseArray = array('type' => 'danger', 'message' =>'Form is empty');
		 echo json_encode($responseArray);
		 exit;
	}
	
    if( $_SESSION['security_code'] == $_POST['security_code']) {
        
		$emailText = "You have a new message from your contact form [".$_POST['pageName']."]\n=============================\n";

		foreach ($_POST as $key => $value) {
			// If the field exists in the $fields array, include it in the email 
			if (isset($fields[$key])) {
				$emailText .= "$fields[$key]: $value\n";
			}
		}

		
		$sg = new \SendGrid(SENDGRID_API_KEY_V3);
		$request_body = array();
		$request_body['content'][0]['type'] = "text/plain";
		$request_body['content'][0]['value'] = "".$emailText."";

		$request_body['from']['email'] = $from_email;
		$request_body['from']['name'] = $from_name;


		$request_body['personalizations'][0]['to'][0]['email'] = $sendTo;
		$request_body['personalizations'][0]['to'][0]['name'] = $firstname . ' ' . $lastname;


		$request_body['reply_to']['email'] = $_POST['Email'];
		$request_body['reply_to']['name'] = $_POST['First_name'];


		 $request_body['subject'] = $subject;


		//echo $description;
		//print_r($request_body); exit;

		$response = $sg->client->mail()->send()->post($request_body);
		 if($response->statusCode()=='202' || $response->statusCode()=='200' ){
			  $responseArray = array('type' => 'success', 'message' => $okMessage);         
		}else{
			$responseArray = array('type' => 'danger', 'message' => $errorMessage);
		}

		// All the neccessary headers for the email.
	   /* $headers = array(
			'MIME-Version: 1.0',
			'Content-Type: text/plain; charset=UTF-8',
			'From: ' . $from,
			'Reply-To: ' . $from,
			'Return-Path: ' . $from,
		);*/
		
		// Send email
		//mail($sendTo, $subject, $emailText, implode("\r\n", $headers));

		// write message into file
		$emailText_r = "\n=========".date("Y-m-d H:i:s")."============\n";
		$emailText_r .= $emailText;
		$fp = fopen('data.json', 'a');//opens file in append mode  
		fwrite($fp, $emailText_r);  
		fclose($fp);

	}else{
		 $errorMessage = "Sorry, you have provided an invalid security code.";
		 $responseArray = array('type' => 'danger', 'message' => $errorMessage);
	 }	
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}
//print_r($responseArray);
echo json_encode($responseArray);
   //header('Location:https://www.nextbrick.com/');
} 
   