<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->queryResult->queryText;

switch($text) {
	case 'check the link':
		$fulfillmentText = "Hi Bindhiya.. Nice to meet you";
		break;
	case 'ramya':
		$fulfillmentText = "Hi Ramya.. Nice to meet you";
		break;
	default:
		$fulfillmentText = "Hello All..";
		break;
}

$queryResult = new \stdClass();
$queryResult->fulfillmentText=$fulfillmentText;
$queryResult->fulfillmentMessages= json_encode(array('text' => "This is the display text"));
	
$queryResult->source= "webhook";

header('Content-Type: application/json');
echo json_encode($queryResult);	
	
$appres = file_get_contents('https://my.wowcareers.com.au/myprofile2api_basic/wow/candidate/existsPrimary?primaryEmail=rajgow321@gmail.com');	
$newdata = json_encode($appres);
echo $newdata;
	
return json_encode($queryResult);
}
else
{
	echo "Method not allowed";
}

?>


