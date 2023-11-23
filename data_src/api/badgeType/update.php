<?php

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-type, Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$typeID = $data->typeID;
$name = $data->name;
$key = $data->APIKEY;

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
if($typeID==""||$typeID==0){
    echo json_encode(["message"=>"No lot ID"]);
    exit;
}

$params = [":name"=>$name,":typeID"=>$typeID];
$sql = "update badgeTypes set name=:name WHERE typeID=:typeID;";

$status = ParkingDatabase::executeSQL($sql, $params);

if ($status) {
    echo json_encode(["message" => "✅ Parking Badge Updated!"]);
} else {
    echo json_encode(["message" => "❌ Cannot Update!"]);
}


?>