<?php

//define php array to store form data

$returnData = array("Type" => "[GET|POST]", "parameters" => null);

//determine if POST request

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$returnData["Type"] = "POST";

	//transfer data to php array

	foreach ($_POST as $key => $value) 
	{
		$newKey = $key;
		$newValue = $value;

		$returnData["parameters"][$newKey] = $newValue;
	}
}

//determine if GET reqest

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
	$returnData["Type"] = "GET";

	//transfer data to php array

	foreach ($_GET as $key => $value) 
	{
		$newKey = $key;
		$newValue = $value;

		$returnData["parameters"][$newKey] = $newValue;
	}
}

if (is_null($returnData["parameters"]))
{
	$returnData["Type"] = "[GET|POST]";
}

//return array as JSON object

echo json_encode($returnData);

?>