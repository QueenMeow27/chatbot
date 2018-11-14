<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->queryResult->queryText;
echo "Inside php method";
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

$response = new \stdClass();
$response->fulfillmentText=$fulfillmentText;
$response->displayText="This is the display text";
$response->source= "webhook";

echo $response->fulfillmentText;
return $response;
}
else
{
	echo "Method not allowed";
}

?>


