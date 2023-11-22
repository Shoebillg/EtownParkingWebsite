<?PHP

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

$startTime = $data->startTime;
$endTime = $data->endTime;
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
$params = [":startTime"=>$startTime,":endTime"=>$endTime];
$sql = "Insert into parkingTimes (startTime,endTime) VALUES (:startTime,:endTime);";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Lot Created Successfully"];
echo json_encode($message);
?>