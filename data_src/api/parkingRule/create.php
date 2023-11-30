<?PHP

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

$typeID = $data->typeID;
$lotID = $data->lotID;
$timeID = $data->timeID;
$day = $data->day;
$description = $data->desc;
$key = $data->APIKEY;
/*
$typeID = isset($_POST["typeID"])?$_POST["typeID"]:"";
$lotID = isset($_POST["lotID"])?$_POST["lotID"]:"";
$timeID = isset($_POST["timeID"])?$_POST["timeID"]:"";
$day = isset($_POST["day"])?$_POST["day"]:"";
$description = isset($_POST["desc"])?$_POST["desc"]:"";

$key = isset($_POST["APIKEY"])?$_POST["APIKEY"]:"";*/
if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}


$params = [":typeID"=>$typeID,":lotID"=>$lotID,":timeID"=>$timeID,":day"=>$day,":description"=>$description];

$paramsType = [":typeID"=>$typeID];
$checkTypeID = "Select count(*) AS count from badgeTypes where typeID=:typeID";
$dataType = ParkingDatabase::getDataFromSQL($checkTypeID, $paramsType);
$countType = intval($dataType[0]["count"]);

$paramsLot = [":lotID"=>$lotID];
$checkLotID = "Select count(*) AS count from parkingLots where lotID=:lotID";
$dataLot = ParkingDatabase::getDataFromSQL($checkLotID, $paramsLot);
$countLot = intval($dataLot[0]["count"]);

$paramsTime = [":timeID"=>$timeID];
$checkTimeID = "Select count(*) AS count from parkingTimes where timeID=:timeID";
$dataTime = ParkingDatabase::getDataFromSQL($checkTimeID, $paramsTime);
$countTime = intval($dataTime[0]["count"]);

if($countType == 0 || $countLot == 0 || $countTime == 0){
  if($countType == 0 && $countLot == 0 && $countTime == 0){
    echo json_encode (["message"=>"Type ID is not found in badgeTypes table and Lot ID is not found in parkingLots table and Time ID is not found in parkingTimes table."]);
    exit;
  }
  if($countType == 0 && $countLot == 0){
    echo json_encode (["message"=>"Type ID is not found in badgeTypes table and Lot ID is not found in parkingLots table."]);
    exit;
  }
  if($countLot == 0 && $countTime == 0){
    echo json_encode (["message"=>"Lot ID is not found in parkingLots table and Time ID is not found in parkingTimes table."]);
    exit;
  }
  if($countType == 0 && $countTime == 0){
    echo json_encode (["message"=>"Type ID is not found in badgeTypes table and Time ID is not found in parkingTimes table."]);
    exit;
  }
  if($countType == 0){
    echo json_encode (["message"=>"Type ID is not found in badgeTypes table."]);
    exit;
  }
  if($countLot == 0){
    echo json_encode (["message"=>"Lot ID is not found in parkingLots table."]);
    exit;
  }
  
  echo json_encode (["message"=>"Time ID is not found in parkingTimes table."]);
  exit;

}


$sql = "Insert into parkingRules (typeID,lotID,timeID,day,description) VALUES (:typeID,:lotID,:timeID,:day,:description);";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Rule Created Successfully"];
echo json_encode($message);

?>