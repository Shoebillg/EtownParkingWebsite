<?php
require_once "../includes/config.php";
require_once "DatabaseAPIConnection.php";


$fullUrl = $url."data_src/api/badgeType/read.php";

$vars = ["APIKEY"=>$api_key];
$web_string = DatabaseAPIConnection::get($fullUrl, $vars);

$badgeTypes = json_decode($web_string);

echo "<select class=\"badgeType\" id=\"badgeType\" onchange=\"showParking()\"\"><option id = 0>Choose an option</option>";
foreach($badgeTypes as $badgeType){
    echo "<option value=\"".$badgeType->name."\" id=\"".$badgeType->typeID."\">".$badgeType->name."</option>";
}
echo "</select>";
?>

<select class="day" id="day" onchange="showParking()">
    <option id = "0">Please Choose a Day!</option>
    <option id="sun" value="Sunday">Sunday</option>
    <option id="mon" value="Monday">Monday</option>
    <option id="tue" value="Tuesday">Tuesday</option>
    <option id="wed" value="Wednesday">Wednesday</option>
    <option id="thu" value="Thursday">Thursday</option>
    <option id="fri" value="Friday">Friday</option>
    <option id="sat" value="Saturday">Saturday</option>
</select>

<form id="timeForm">
  <label for="appt">Select a time:</label>
  <input type="time" id="appt" name="appt" onchange="showParking()">
</form>

<div id="test">
<img src="../images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">

<?php

$fullUrl = $url."data_src/api/parkingLot/read.php";
$vars = ["APIKEY"=>$api_key];
$web_string = DatabaseAPIConnection::get($fullUrl, $vars);
$parkingRules = json_decode($web_string);

foreach($parkingRules as $parkingRule){
    //echo $parkingRule->side." ".$parkingRule->top." ".$parkingRule->image;
    echo "<p id=\"brownPin2\">";
    echo "<img src=\"../images/lotpin.png\" usemap=\"#brownPinMap\" id=\"brownPin\" style=\"position: absolute; left: ".$parkingRule->side."px; top: ".$parkingRule->top."px; display:block;\">";
    echo "</p>";
}

?>
</div>

<script src="showParking.js">
</script>

</body>
</html>

<style>
.badgeType{
    font-size: 24px;
    background-color: #C8C8C8;
}
</style>
