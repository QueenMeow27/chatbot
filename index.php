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
$queryResult->displayText="This is the display text";
$queryResult->source= "webhook";

echo $queryResult->fulfillmentText;
$res = json_encode($queryResult);
echo $res;
return json_encode($queryResult);
}
else
{
	echo "Method not allowed";
}

?>


