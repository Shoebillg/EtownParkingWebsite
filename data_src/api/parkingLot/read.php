<?php

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


$lotID = isset($_GET["lotID"])?$_GET["lotID"]:"";
$lotName = isset($_GET["lotName"])?$_GET["lotName"]:"";
$image = isset($_GET["image"])?$_GET["image"]:"";
$coords = isset($_GET["coords"])?$_GET["coords"]:"";
$shape = isset($_GET["shape"])?$_GET["shape"]:"";

$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
    echo json_encode(["message"=>"Invalid API KEY"]);
    exit;
}

if($lotID != ""){
    $where = " where lotID = :lotid ";
    $params = [":lotid"=>$lotID];

    $sql = "Select lotID, lotName, image, coords, shape from parkingLots ".$where;
    $data = ParkingDatabase::getDataFromSQL($sql, $params);

    echo json_encode($data);

}
else {

    $where = " ";
    $params = null;

    $sql = "Select * from parkingLots ".$where;
    $data = ParkingDatabase::getDataFromSQL($sql, $params);

    echo json_encode($data);
}

?>