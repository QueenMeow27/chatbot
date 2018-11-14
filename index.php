
<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text = $json->result->parameters->text;

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

$response = new \stdClass();
$response->speech="";
$response->displayText="";
$response->source= "webhook";

}
else
{
	echo "Method not allowed";
}

?>


