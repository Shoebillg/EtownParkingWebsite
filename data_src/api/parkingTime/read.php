<?php

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$table = isset($_GET["table"])?$_GET["table"]:"";
//$id = isset($_GET["id"])?$_GET["id"]:"";

$timeID = isset($_GET["timeID"])?$_GET["timeID"]:"";
$startTime = isset($_GET["strat"])?$_GET["start"]:"";
$endTime = isset($_GET["end"])?$_GET["end"]:"";

$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}

$where = " ";
$params = null;

$sql = "Select * from parkingTimes ".$where;
$data = ParkingDatabase::getDataFromSQL($sql, $params);

echo json_encode($data);

?>