
<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->queryResult->queryText;
	
switch($text) {
	case 'bindhiya':
		$fulfillmentText = "Hi Bindhiya.. Nice to meet you";
		break;
	case 'ramya':
		$fulfillmentText = "Hi Ramya.. Nice to meet you";
		break;
	default:
		$fulfillmentText = "Hello All..";
		break;
}
echo $fulfillmentText;
$response = new \stdClass();
$response->fulfillmentText=$fulfillmentText;
$response->displayText="";
$response->source= "webhook";

echo $response;
echo $response->fulfillmentText;
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>


