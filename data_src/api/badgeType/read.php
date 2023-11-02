<?php

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$table = isset($_GET["table"])?$_GET["table"]:"";
$id = isset($_GET["id"])?$_GET["id"]:"";
$catID = isset($_GET["catID"])?$_GET["catID"]:"";
$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";
if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
$where = " ";
$params = null;

$sql = "select typeID, name from badgeType ".$where;
$data = FoodDatabase::getDataFromSQL($sql, $params);

echo json_encode($data);

?>