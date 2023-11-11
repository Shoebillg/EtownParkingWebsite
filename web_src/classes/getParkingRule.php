<?php

require_once "../includes/config.php";
require_once "DatabaseAPIConnection.php";

if (isset($_GET['id']) || isset($_GET['day']) || isset($_GET['time'])) {
    $id = $_GET['id'];
    $day = $_GET['day'];
    $time = $_GET['time'];

    if($id == 0 && $day == 0 && $time == ""){ //show all parking lots

        $fullUrl = $url."data_src/api/parkingLot/read.php";
        $vars = ["APIKEY"=>$api_key];
        $web_string = DatabaseAPIConnection::get($fullUrl, $vars);
        $parkingRules = json_decode($web_string);

        foreach($parkingRules as $parkingRule){

            echo "<p id=\"brownPin2\">";
            echo "<img src=\"../images/lotpin.png\" usemap=\"#brownPinMap\" id=\"brownPin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
        }
    }/*
    else if($day != 0 && $id == 0){//only day is selected
        $fullUrl = $url."data_src/api/parkingRule/read.php";
        $vars = ["APIKEY"=>$api_key, "day"=>$day];
        $web_string = DatabaseAPIConnection::get($fullUrl, $vars);
        $parkingRules = json_decode($web_string);
        foreach($parkingRules as $parkingRule){
            echo "<p id=\"brownPin2\">";
            echo "<img src=\"../images/lotpin.png\" usemap=\"#brownPinMap\" id=\"brownPin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
        }
    }
    else if($day == 0 && $id != 0){
        $fullUrl = $url."data_src/api/parkingRule/read.php";
        $vars = ["APIKEY"=>$api_key, "typeID"=>$id];
        $web_string = DatabaseAPIConnection::get($fullUrl, $vars);
        $parkingRules = json_decode($web_string);
        foreach($parkingRules as $parkingRule){
            echo "<p id=\"brownPin2\">";
            echo "<img src=\"../images/lotpin.png\" usemap=\"#brownPinMap\" id=\"brownPin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
        }
    }*/
    else{
        if($day == 0){
            $day ="";
        }
        if($id == 0){
            $id = "";
        }
        $fullUrl = $url."data_src/api/parkingRule/read.php";
        $vars = ["APIKEY"=>$api_key, "typeID"=>$id, "day"=>$day, "time"=>$time];
        $web_string = DatabaseAPIConnection::get($fullUrl, $vars);
        $parkingRules = json_decode($web_string);

        foreach($parkingRules as $parkingRule){
            echo "<p id=\"brownPin2\">";
            echo "<img src=\"../images/lotpin.png\" usemap=\"#brownPinMap\" id=\"brownPin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
        }
    }
} else {
    echo "No name parameter provided.";
}
?>
