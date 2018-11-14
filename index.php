
<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->queryResult->queryText;

echo "Inside post method";
	
echo $requestBody;
echo $text;
	
switch($test) {
	case 'bindhiya':
		$speech = "Hi Bindhiya.. Nice to meet you";
		break;
	case 'ramya':
		$speech = "Hi Ramya.. Nice to meet you";
		break;
	default:
		$speech = "Hello All..";
		break;
}
echo $speech;
$response = new \stdClass();
$response->speech="default response";
$response->displayText="xxxxxxxxxxxxxxxxxxx";
$response->source= "webhook";
echo $response->speech;
}
else
{
	echo "Method not allowed";
}

?>


