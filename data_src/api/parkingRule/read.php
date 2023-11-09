<?php
require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";


//$ruleID = isset($_GET["ruleID"])?$_GET["ruleID"]:"";
$typeID = isset($_GET["typeID"])?$_GET["typeID"]:"";
$lotID = isset($_GET["lotID"])?$_GET["lotID"]:"";
$timeID = isset($_GET["timeID"])?$_GET["timeID"]:"";
$day = isset($_GET["day"])?$_GET["day"]:"";

//$desc = isset($_GET["desc"])?$_GET["desc"]:"";
//$badgeName;
//$lotName, image, coor, time user choose

$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
    echo json_encode(["message"=>"Invalid API KEY"]);
    exit;
}
//Change code to join to other three tables

$where = "  ";
$params = null;

/*if($lotID != ""){
    $where = " where l.lotID = :lotid";
    $params = [":lotid"=>$lotID];

}*/
if($typeID != ""){
    $where = " where r.typeID = :typeid";
    $params = [":typeid"=>$typeID];
}
else if($day != ""){
    $where = " where day LIKE :day";
    $params = [":day"=>"%".$day."%"];
}
else if($time != ""){
    $where = "";
    $params = [":time"=>$time];

}
//else if for time user choose

$sql = "Select * from parkingRules r JOIN badgeTypes t ON r.typeID = t.typeID JOIN parkingLots l ON l.lotID = r.lotID JOIN parkingTimes p ON p.timeID = r.timeID ".$where;
$data = ParkingDatabase::getDataFromSQL($sql, $params);

echo json_encode($data);


?>