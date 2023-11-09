<?php

// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();


require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$id = $data->ruleID;
$typeID = $data->typeID;
$lotID = $data->lotID;
$timeID = $data->timeID;
$day = $data->day;
$description = $data->desc;
$key = $data->APIKEY;

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
if($ruleID==""||$ruleID==0){
    echo json_encode(["message"=>"No rule ID"]);
    exit;
}

if($typeID == ""){
    //update
}
//if else()

?>