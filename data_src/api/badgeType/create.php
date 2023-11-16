<?php
require_once "classes/ParkingDatabase.php";
require_once "includes/database_config.php";

// Retrieve query parameters from the URL
$key = isset($_POST["APIKEY"]) ? $_POST["APIKEY"] : "";
$id = isset($_POST["typeID"]) ? intval($_POST["typeID"]) : "";
$name = isset($_POST["name"]) ? intval($_POST["name"]) : 1;

// Check if the provided API key matches the global API key
if ($key != $GLOBAL_API_KEY) {
    echo json_encode(["message" => "Invalid API KEY"]);
    exit;
}

// Check if the id is valid
if ($id == "" || $id == 0) {
    echo json_encode(["message" => "No item under that ID"]);
    exit;
}

// Prepare an array of parameters for SQL queries
$params = [":id" => $id, ":name" => $name];

try {
    // Check if the id already exists in the table
    $sqlCheck = "SELECT * FROM badgeTypes WHERE typeID = :id AND name = :name";
    $data = etownparking::getDataFromSQL($sqlCheck, [":id" => $id, ":name" => $name]);

    if ($data !== false) {
        // If the id doesn't exist in the table, insert it
        $sqlInsert = "INSERT INTO badgeTypes (typeID, name) VALUES (:id, :name)";
        etownparking::executeSQL($sqlInsert, $params);
    } else {
        $message = ["message" => "Invalid entry"];
        echo json_encode($message);
    }

    // Respond with a success message and HTTP status code 200 (OK)
    http_response_code(200);
    $message = ["message" => "ID Added to Table"];
    echo json_encode($message);
} catch (PDOException $e) {
    // If there's a database error, respond with an error message and HTTP status code 500 (Internal Server Error)
    http_response_code(500);
    echo json_encode(["message" => "Database Error: " . $e->getMessage()]);
}



















?>