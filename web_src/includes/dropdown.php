<?php


$fullUrl = $url."data_src/api/badgeType/read.php";

$vars = ["APIKEY"=>$api_key];
$web_string = DatabaseAPIConnection::get($fullUrl, $vars);

$badgeTypes = json_decode($web_string);
echo "<select class=\"badgeType\"><option>Choose an option</option>";
foreach($badgeTypes as $badgeType){
    echo "<option value=\"".$badgeType->name."\">".$badgeType->name."</option>";
}
echo "</select>";
?>

<html>
<LINK rel='stylesheet' href='css/dropdown.css'>

<select class="eligibility">
    <option>Choose an option</option>
    <option value="First">First Year</option>
    <option value="Sophmore">Sophmore</option>
    <option value="Junior">Junior</option>
    <option value="Senior">Senior</option>
    <option value="Visitor">Visitor</option>
    <option value="Staff">Faculty/Staff</option>
    <option value="Commuter">Commuter</option>

</select>

<select class="eligibility">
    <option>Please Choose Day!</option>
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>

</select>

<select class="eligibility">
    <option>Please Choose Time!</option>
</select>

<input type="radio" id="noneEV" name="EV" checked onclick="showEV(true);">
<label for="noneEV">none EV</label>

<input type="radio" id="EV" name="EV" onclick="showEV(false);">
<label for="EV">EV</label><br>
<!-- Add onclick to display EV charging station-->
 <img src="images/EVPinNew.png" id="evpin1" style="z-index:200; position: absolute; left: 415px; top: 238px; display:none;">

 <img src="images/EVPinNew.png" id="evpin2" style="z-index:200; position: absolute; left: 400px; top: 238px; display:none;">

 <img src="images/EVPinNew.png" id="evpin3" style="z-index:200; position: absolute; left: 330px; top: 428px; display:none;">

 <img src="images/EVPinNew.png" id="evpin4" style="z-index:200; position: absolute; left: 555px; top: 508px; display:none;">
<script>
    
    function showEV(imgOn) {
        if (imgOn) {
            console.log("off "+imgOn);
            document.getElementById("evpin1").style.display='none';
            document.getElementById("evpin2").style.display='none';
            document.getElementById("evpin3").style.display='none';
            document.getElementById("evpin4").style.display='none';
            //imgOn=false;
        }
        else {
            console.log("on "+imgOn);
            document.getElementById("evpin1").style.display='block';
            document.getElementById("evpin2").style.display='block';
            document.getElementById("evpin3").style.display='block';
            document.getElementById("evpin4").style.display='block';
            //imgOn=true;
        }
    }
</script>

<!-- Onclick method and display pins and what user selected-->

</html>