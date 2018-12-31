<?php

$method = $_SERVER['REQUEST_METHOD'];

//process only when method id post

if($method =="POST"){

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);
$text1 = $json->queryResult->queryText;
$ans = $json->queryResult->fulfillmentText;	
	

	
switch($text1) {
	case 'picklist':
		$fulfillmentText = "Hi Bindhiya";
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
$queryResult->source= "webhook";

header('Content-Type: application/json');	
echo json_encode($queryResult);
$appres = file_get_contents('https://my.wowcareers.com.au/myprofile2api_basic/wow/candidate/Picklist2?picklistId=yesNo');	
$newdata = json_encode($appres);
echo $newdata;

	
return json_encode($queryResult);
}
else
{
	echo "Method not allowed";
}

?>


