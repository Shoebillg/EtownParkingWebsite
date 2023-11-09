<?php
/*require_once "database_functions.php";

$sql = "Select * from badgeType;";
$badgeTypes = getDataFromSQL($sql);
echo "<select class=\"type\"> <option>Choose an option</option>";
foreach($badgeTypes as $badgeType){
    echo "<option value=".$badgeType["name"].">".$badgeType["name"]."</option>";
    echo $badgeType["name"]."<br>";
}
echo "</select>";
*/
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

<select class="Time">
    <option>Please Choose Time!</option>
</select>

<input type="radio" id="noneEV" name="EV" checked>
<label for="noneEV">Nonde EV</label>

<input type="radio" id="EV" name="EV">
<label for="EV">EV</label><br>
<!-- Add onclick to display EV charging station-->

<!-- Onclick method and display pins and what user selected-->

</html>