
<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->result->parameters->text;
echo "Inside post method";
echo $json;
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
$response->speech="zzzzzzzzzzzzzzzzzzz";
$response->displayText="xxxxxxxxxxxxxxxxxxx";
$response->source= "webhook";
echo $response;
}
else
{
	echo "Method not allowed";
}

?>


