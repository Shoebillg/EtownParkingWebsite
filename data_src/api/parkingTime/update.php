<?php

// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();


require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$timeID = $data->timeID;
$startTime = $data->startTime;
$endTime = $data->endTime;
$key = $data->APIKEY;

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
if($timeID==""||$timeID==0){
    echo json_encode(["message"=>"No time ID"]);
    exit;
}

$params = [":timeID"=>$timeID,":startTime"=>$startTime,":endTime"=>$endTime];
$sql = "update parkingTimes set startTime=:startTime,endTime=:endTime WHERE timeID=:timeID;";

$status = ParkingDatabase::executeSQL($sql, $params);

if ($status) {
    echo json_encode(["message" => "✅ Parking Time Updated!"]);
} else {
    echo json_encode(["message" => "❌ Cannot Update!"]);
}


?>