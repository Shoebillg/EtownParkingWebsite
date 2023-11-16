<?php

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$table = isset($_GET["table"])?$_GET["table"]:"";
//$id = isset($_GET["id"])?$_GET["id"]:"";

$typeID = isset($_GET["typeID"])?$_GET["typeID"]:"";
$name = isset($_GET["name"])?$_GET["name"]:"";
$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}

$where = " ";
$params = null;

$sql = "Select typeID, name from badgeTypes ".$where;
$data = ParkingDatabase::getDataFromSQL($sql, $params);

echo json_encode($data);

?>