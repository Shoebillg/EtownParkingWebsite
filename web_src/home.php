<?php
require_once "./includes/config.php";
require_once "./classes/DatabaseAPIConnection.php";
//require "../index.php";
require_once "./includes/header.php";
require_once "./includes/userInput.php";

?>

<div id="test">
<img src="./images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">


<?php

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
    //echo "<p id=\"".$parkingRule->lotName."2\"";
    //echo "<img src=\"images/lots/CollegeMapBretheranChurch2.png\" id=\"bretheran\" style=\"position: absolute; left: 1094px; top: 141px; display:none;\">";
    //echo "</p>";
}
/*
foreach($parkingRules as $parkingRule){
    
    echo "<script> document.getElementById(.$parkingRule->lotID).style.display = 'block'; </script>";
   
}*/
echo "<script>";

foreach($parkingRules as $parkingRule){
    echo "function show".$parkingRule->lotID."(){
            alert(\"Hello\");
            console.log(\"".$parkingRule->image."\");
            console.log(\"".$parkingRule->lotName."\");
    
        }";
}

echo "</script>";


?>
</div>
<p id="showLot"></p>
<?php

require_once "./includes/footer.php";

?>
<script src="./classes/showParking.js">
</script>

<script>

    function showPicture(lotID, image){
        //alert(lotID + " " + image);
        const element = document.getElementById('showLot');

        // Get the existing content
        var existingContent = element.innerHTML;
        //console.log(existingContent);

        // Add new content to the existing content
        var lotImage = "<img src=\"./images/lots/"+ image +"\" id=\"alphadrive\" style=\"position: absolute; left: 1094px; top: 141px;\">";
        
        if(existingContent.localeCompare(lotImage) == 0){
            lotImage = "";
        }
        const updatedContent = lotImage;

        // Update the content
        element.innerHTML = updatedContent;
    }

</script>

</body>
</html>

