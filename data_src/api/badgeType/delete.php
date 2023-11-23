<?PHP
require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: DELETE"); // Specify allowed methods (e.g., DELETE)
header("Access-Control-Allow-Headers: Content-Type");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

$key = $data->APIKEY;
$id = $data->typeID;

//$id = isset($_DELETE["ruleID"])?intval($_DELETE["ruleID"]):"";
//$key = isset($_DELETE["APIKEY"])?$_DELETE["APIKEY"]:"";
//$id = isset($_GET["ruleID"])?$_GET["ruleID"]:"";
//$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
if($id==""||$id==0){
    echo json_encode(["message"=>"No Lot ID"]);
    exit;
}

$params = [":id"=>$id];
//Check if this is used for parking rule table
$sqlcheck = "Select count(*) AS count from parkingRules where typeID=:id";
$data = ParkingDatabase::getDataFromSQL($sqlcheck, $params);
$count = intval($data[0]["count"]);

if($count > 0){
    echo json_encode (["message"=>"Type ID is used in parkingRule table."]);
    exit;
}

$sql = "Delete from badgeTypes WHERE typeID=:id;";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Badge Deleted Successfully"];
echo json_encode($message);

?>