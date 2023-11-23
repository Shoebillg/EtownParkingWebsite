<?php
require_once "../../classes/ParkingDatabase.php";
require_once "../../includes/database_config.php";
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");

// Retrieve query parameters from the URL
//$key = isset($_POST["APIKEY"]) ? $_POST["APIKEY"] : "";
//$id = isset($_POST["typeID"]) ? intval($_POST["typeID"]) : 1;
//$name = isset($_POST["name"]) ? $_POST["name"] : "";

$data = file_get_contents("php://input") != null ? json_decode(file_get_contents("php://input")) : die();

$name = $data->name;
$key = $data->APIKEY;

// Check if the provided API key matches the global API key
if ($key != $GLOBAL_API_KEY) {
    echo json_encode(["message" => "Invalid API KEY"]);
    exit;
}
$params = [":name"=>$name];
$sql = "Insert into badgeTypes (name) VALUES (:name);";
ParkingDatabase::executeSQL($sql, $params);
$message = ["message"=>"Badge Created Successfully"];
echo json_encode($message);


// Check if the id is valid
/*if ($id == "" || $id == 0) {
    echo json_encode(["message" => "No item under that ID"]);
    exit;
}

try {
    if ($id === 0) {
        http_response_code(400); // Bad Request
        echo json_encode(["message" => "No item under that ID"]);
        exit;
    }
    // Prepare an array of parameters for SQL queries
    $params = [":id" => $id, ":name" => $name];
    // Check if the id already exists in the table
    $sqlCheck = "SELECT * FROM badgeTypes WHERE typeID = :id AND name = :name";
    $data = ParkingDatabase::getDataFromSQL($sqlCheck, $params);

    if ($data === false) {
        // If the id doesn't exist in the table, insert it
        $sqlInsert = "INSERT INTO badgeTypes (typeID, name) VALUES (:id, :name)";
        ParkingDatabase::executeSQL($sqlInsert, $params);
        http_response_code(200);
        $message = ["message" => "ID Added to Table"];
        echo json_encode($message);
    } else {
        http_response_code(409); // Conflict
        $message = ["message" => "ID already exists"];
        echo json_encode($message);
    }
} catch (PDOException $e) {
    http_response_code(500); // Internal Server Error
    echo json_encode(["message" => "Database Error: " . $e->getMessage()]);
}*/
?>