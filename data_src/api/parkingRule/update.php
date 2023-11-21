<?php

// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();


require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$ruleID = $data->ruleID;
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

$params = [":ruleID"=>$ruleID,":typeID"=>$typeID,":lotID"=>$lotID,":timeID"=>$timeID,":day"=>$day,":description"=>$description];
$sql = "update parkingRules set typeID=:typeID,lotID=:lotID,timeID=:timeID,day=:day, description=:description WHERE ruleID=:ruleID;";

$status = ParkingDatabase::executeSQL($sql, $params);

if ($status) {
    echo json_encode(["message" => "✅ Parking Rule Updated!"]);
} else {
    echo json_encode(["message" => "❌ Cannot Update!"]);
}


?>