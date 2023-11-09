<?php
require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";


//$ruleID = isset($_GET["ruleID"])?$_GET["ruleID"]:"";
$typeID = isset($_GET["typeID"])?$_GET["typeID"]:"";
$lotID = isset($_GET["lotID"])?$_GET["lotID"]:"";
$time = isset($_GET["time"])?$_GET["time"]:"";
$day = isset($_GET["day"])?$_GET["day"]:"";

$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
    echo json_encode(["message"=>"Invalid API KEY"]);
    exit;
}

$where = "  ";
$params = null;

/*if($lotID != ""){
    $where = " where l.lotID = :lotid";
    $params = [":lotid"=>$lotID];

}*/
if($typeID != "" && $day != "" && $time != ""){
    $where = " where r.typeID = :typeid and day LIKE :day and :time between startTime and endTime";
    $params = [":typeid"=>$typeID, ":day"=>"%".$day."%", ":time"=>$time];
}
else if($typeID != "" && $day != ""){
    $where = " where r.typeID = :typeid and day LIKE :day";
    $params = [":typeid"=>$typeID, ":day"=>"%".$day."%"];
}
else if($typeID != "" && $time != ""){
    $where = " where r.typeID = :typeid and :time between startTime and endTime";
    $params = [":typeid"=>$typeID, ":time"=>$time];
}
else if($day != "" && $time != ""){
    $where = " where day LIKE :day and :time between startTime and endTime";
    $params = [":day"=>"%".$day."%", ":time"=>$time];
}
else if($typeID != ""){
    $where = " where r.typeID = :typeid";
    $params = [":typeid"=>$typeID];
}
else if($day != ""){
    $where = " where day LIKE :day";
    $params = [":day"=>"%".$day."%"];
}
else if($time != ""){
    $where = "where :time between startTime and endTime";
    $params = [":time"=>$time];
}


$sql = "Select * from parkingRules r JOIN badgeTypes t ON r.typeID = t.typeID JOIN parkingLots l ON l.lotID = r.lotID JOIN parkingTimes p ON p.timeID = r.timeID ".$where;
$data = ParkingDatabase::getDataFromSQL($sql, $params);

echo json_encode($data);


?>