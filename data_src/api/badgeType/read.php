<?php

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

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