<?PHP
require_once "../../includes/database_config.php";
require_once "../../classes/ParkingDatabase.php";

$id = isset($_DELETE["ruleID"])?intval($_DELETE["ruleID"]):"";
$key = isset($_DELETE["APIKEY"])?$_DELETE["APIKEY"]:"";
//$id = isset($_GET["ruleID"])?$_GET["ruleID"]:"";
//$key = isset($_GET["APIKEY"])?$_GET["APIKEY"]:"";

if($key!=$GLOBAL_API_KEY){
  echo json_encode(["message"=>"Invalid API KEY"]);
  exit;
}
if($id==""||$id==0){
    echo json_encode(["message"=>"No Rule ID"]);
    exit;
}

$params = [":id"=>$id];
$sql = "Delete from parkingRules WHERE ruleID=:id;";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Rule Deleted Successfully"];
echo json_encode($message);

?>