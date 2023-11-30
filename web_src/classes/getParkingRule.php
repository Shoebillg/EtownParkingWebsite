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

            //echo $parkingRule->lotName." ".$parkingRule->side." ".$parkingRule->top." ".$parkingRule->image;
            echo "<p id=\"".$parkingRule->lotName."Pin2\">";
            
            if($parkingRule->top == null || $parkingRule->side == null || $parkingRule->top == "" || $parkingRule->side == ""){
                continue;
            }
            
            echo "<img src=\"./images/lotpin.png\" usemap=\"#".$parkingRule->lotName."PinMap\" id=\"".$parkingRule->lotName."Pin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
            echo "<map name=\"".$parkingRule->lotName."PinMap\">";
            //echo "<area shape=\"circle\" coords=\"10,10,10\" href=\"#".$parkingRule->lotName."\" onclick=\"show".$parkingRule->lotID."();\">";
            echo "<area shape=\"circle\" coords=\"10,10,10\" href=\"#".$parkingRule->lotName."\" onclick=\"showPicture(".$parkingRule->lotID.",'".$parkingRule->image."');\">";
            
            echo "</map>";
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
            exit;
        }
        if($id == 0){
            $id = "";
            exit;
        }
        if($time == ""){
            exit;
        }
        $fullUrl = $url."data_src/api/parkingRule/read.php";
        $vars = ["APIKEY"=>$api_key, "typeID"=>$id, "day"=>$day, "time"=>$time];
        $web_string = DatabaseAPIConnection::get($fullUrl, $vars);
        $parkingRules = json_decode($web_string);

        foreach($parkingRules as $parkingRule){
            //echo $parkingRule->lotName." ".$parkingRule->side." ".$parkingRule->top." ".$parkingRule->image;
            echo "<p id=\"".$parkingRule->lotName."Pin2\">";
            
            if($parkingRule->top == null || $parkingRule->side == null || $parkingRule->top == "" || $parkingRule->side == ""){
                continue;
            }
            
            echo "<img src=\"./images/lotpin.png\" usemap=\"#".$parkingRule->lotName."PinMap\" id=\"".$parkingRule->lotName."Pin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
            echo "</p>";
            echo "<map name=\"".$parkingRule->lotName."PinMap\">";
            //echo "<area shape=\"circle\" coords=\"10,10,10\" href=\"#".$parkingRule->lotName."\" onclick=\"show".$parkingRule->lotID."();\">";
            echo "<area shape=\"circle\" coords=\"10,10,10\" href=\"#".$parkingRule->lotName."\" onclick=\"showPicture(".$parkingRule->lotID.",'".$parkingRule->image."');\">";
            
            echo "</map>";
        }
    }
} else {
    echo "No name parameter provided.";
}
?>
