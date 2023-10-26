<?php
require_once "includes/header.php";
?>

<?php
require_once "includes/dropdown.php";
?>
<br>

<!--Etown Parking Website Coming Soon!-->

<!--<img src="images/CollegeMap.png">-->

<img src="images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">



<map name="campusMap">
<area shape="circle" coords="439,137,20" href="#brown" onclick="showBrown();" alt="BrownLot">
<area shape="circle" coords="318,585,20" href="#Bretheran" onclick="pizza('church');" alt="BretheranChurch">
<area shape="circle" coords="339,322,10" href="#Hoover" onclick="" alt="HooverLot">
<area shape="circle" coords="585,483,30" href="#HackmanLots" onclick="" alt="HackmanLots">
</map>

<p id="brownPin2">
 <img src="images/pinresized.jpg" id="brownPin" style="position: absolute; left: 429px; top: 207px; display:block;">
</p>

<p id="brown2">
 <img src="images/lots/CollegeMapBrownLot.png" id="brown" style="position: absolute; left: 1094px; top: 80px; display:none;">
</p>




<script>
    var imgOn = false;
        function showBrown() {
            if ( imgOn ){
                document.getElementById("brown").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("brown").style.display='block';
                imgOn = true;
            }
            
            //brown.src = "images/lots/CollegeMapBrownLot.png";
        }

        function showBrown2(str) {
            
            alert(str);
        }


        function pizza(str){
            alert(str);
        }
</script>

<?php
require_once "includes/footer.php";
?>
 



