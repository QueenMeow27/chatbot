<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text1 = $json->queryResult->queryText;
$ans = $json->queryResult->fulfillmentText;	

	
header('Content-Type: application/json');	
echo json_encode($queryResult);
$appres = file_get_contents('https://my.wowcareers.com.au/myprofile2api_basic/wow/candidate/Picklist2?picklistId=yesNo');	
$newdata = json_encode($appres);
echo $newdata;
	
switch($text1) {
	case 'give me yes no picklist':
		$fulfillmentText = $newdata;
		break;
	case 'picklist':
		$fulfillmentText = $ans;
		break;
	default:
		$fulfillmentText = "Hello All..";
		break;
}
	
$queryResult = new \stdClass();
$queryResult->fulfillmentText=$fulfillmentText;
	
$text1->text2="my new msg";	
$text->text1 = $text1->text2;

	


$queryResult->fulfillmentMessages = $text->text1;
$queryResult->source= "webhook";



	
return json_encode($queryResult);
}
else
{
	echo "Method not allowed";
}

?>


