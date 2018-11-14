
<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->queryResult->queryText;
echo $json;
echo $text;
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
$response->displayText="This is the display text";
$response->source= "webhook";

echo $response;
echo $response->displayText;
echo $response->source;

	$res = json_encode($response);
	echo $res;
	
}
else
{
	echo "Method not allowed";
}

?>


