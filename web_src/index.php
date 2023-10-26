<?php
require_once "includes/header.php";
?>

<!--Etown Parking Website Coming Soon!-->

<!--<img src="images/CollegeMap.png">-->

<img src="images/CollegeMap.png" alt="Map" usemap="#campusMap" width="1422" height="860">

<map name="campusMap">
<area shape="circle" coords="439,137,20" href="#brown" onclick="showBrown2('brown');" alt="BrownLot">
<area shape="circle" coords="318,585,20" href="#Bretheran" onclick="pizza('church');" alt="BretheranChurch">
<area shape="circle" coords="339,322,10" href="#Hoover" onclick="" alt="HooverLot">
<area shape="circle" coords="585,483,30" href="#HackmanLots" onclick="" alt="HackmanLots">
</map>

<!--<p id="brown">
 <img src="images/lots/CollegeMapBrownLot.png">
</p>-->

<script>
        function showBrown(str) {
            document.getElementById("brown").style.display='block';
            brown.src = "images/lots/CollegeMapBrownLot.png"
        }

        function showBrown2(str) {
            alert(str, <img src="images/lots/CollegeMapBrownLot.png">)
        }


        function pizza(str){
            alert(str);
        }
</script>

<?php
require_once "includes/footer.php";
?>
 



