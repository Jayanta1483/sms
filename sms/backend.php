<?php
if (isset($_POST['mobile']) && $_POST['mobile'] != ""){
    $mob = '91'.$_POST['mobile'];
    $msg = 'Hi there, thank you for sending your first test message from Textlocal. See how you can send effective SMS campaigns here: https://tx.gl/r/2nGVj/';//$_POST['msg'];

    // Account details
	$apiKey = urlencode('3bR7iiq1w9w-z66iR4vkVeQaEOP5F92sDLaBclDzzh');
	
	// Message details
	$numbers = array($mob);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode();
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
}



?>