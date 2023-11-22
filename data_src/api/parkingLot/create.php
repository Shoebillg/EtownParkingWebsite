<?PHP

require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

$lotName = $data->lotName;
$image = $data->image;
$side = $data->side;
$top = $data->top;
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
$params = [":lotName"=>$lotName,":image"=>$image,":side"=>$side,":top"=>$top];
$sql = "Insert into parkingLots (lotName,image,side,top) VALUES (:lotName,:image,:side,:top);";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Lot Created Successfully"];
echo json_encode($message);
?>