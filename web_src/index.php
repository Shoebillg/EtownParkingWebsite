<?php
//require_once "includes/config.php";
//require_once "classes/DatabaseAPIConnection.php";
require_once "includes/header.php";
?>

<?php
require_once "includes/dropdown.php";
?>
<br>

<!--Etown Parking Website Coming Soon!-->

<img src="images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">

<map name="campusMap">
<area shape="circle" coords="585,483,30" href="#HackmanLots" onclick="" alt="HackmanLots">
</map>
<!--all pin locations are stored here-->
<p id="brownPin2">
 <img src="images/lotpin.png" usemap="#brownPinMap" id="brownPin" style="position: absolute; left: 429px; top: 268px; display:block;">
</p>

<p id="bretheranPin2">
 <img src="images/lotpin.png" usemap="#bretheranPinMap" id="bretheranPin" style="position: absolute; left: 310px; top: 726px; display:block;">
</p>

<p id="hooverPin2">
 <img src="images/lotpin.png" usemap="#hooverPinMap" id="hooverPin" style="position: absolute; left: 330px; top: 453px; display:block;">
</p>

<p id="bowersPin2">
 <img src="images/lotpin.png" usemap="#bowersPinMap" id="bowersPin" style="position: absolute; left: 555px; top: 538px; display:block;">
</p>

<p id="youngPin2">
 <img src="images/lotpin.png" usemap="#youngPinMap" id="youngPin" style="position: absolute; left: 576px; top: 364px; display:block;">
</p>
<!--All maps with images are stored here (basically the buttons)-->
<map name="brownPinMap">
<area shape="circle" coords="10,10,10" href="#brown" onclick="showBrown();" alt="BrownLot">
</map>
<p id="brown2">
 <img src="images/lots/CollegeMapBrownLot.png" id="brown" style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="bretheranPinMap">
<area shape="circle" coords="10,10,10" href="#Bretheran" onclick="showBretheran();" alt="BretheranChurch">
</map>
<p id="bretheran2">
 <img src="images/lots/CollegeMapBretheranChurch2.png" id="bretheran" style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="hooverPinMap">
<area shape="circle" coords="10,10,10" href="#Hoover" onclick="showHoover();" alt="Hoover">
</map>
<p id="hoover2">
 <img src="images/lots/CollegeMapHoover.png" id="hoover" style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="bowersPinMap">
<area shape="circle" coords="10,10,10" href="#Bowers" onclick="showBowers();" alt="Bowers">
</map>
<p id="bowers2">
 <img src="images/lots/CollegeMapBowers.png" id="bowers" style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="youngPinMap">
<area shape="circle" coords="10,10,10" href="#YoungCenter" onclick="showYoung();" alt="YoungCenter">
</map>
<p id="bowers2">
 <img src="images/lots/CollegeMapYoungCenter.png" id="young" style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>



<!--All functions are stored here-->
<script>
    var imgOn = false;
        function showBrown() {
            if ( imgOn ){
                document.getElementById("brown").style.display='none';
                document.getElementById("bretheran").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("brown").style.display='block';
                imgOn = true;
            }
            
            //brown.src = "images/lots/CollegeMapBrownLot.png";
        }

        function showBretheran() {
            if ( imgOn ){
                document.getElementById("bretheran").style.display='none';
                document.getElementById("brown").style.display='none';
                document.getElementById("bowers").style.display='none';
                document.getElementById("hoover").style.display='none';
                document.getElementById("young").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("bretheran").style.display='block';
                imgOn = true;
            }
        }

        function showHoover() {
            if ( imgOn ){
                document.getElementById("hoover").style.display='none';
                document.getElementById("bretheran").style.display='none';
                document.getElementById("brown").style.display='none';
                document.getElementById("bowers").style.display='none';
                document.getElementById("young").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("hoover").style.display='block';
                imgOn = true;
            }
        }

        function showBowers() {
            if ( imgOn ){
                document.getElementById("bowers").style.display='none';
                document.getElementById("hoover").style.display='none';
                document.getElementById("bretheran").style.display='none';
                document.getElementById("brown").style.display='none';
                document.getElementById("young").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("bowers").style.display='block';
                imgOn = true;
            }
        }

        function showYoung() {
            if ( imgOn ){
                document.getElementById("young").style.display='none';
                document.getElementById("bowers").style.display='none';
                document.getElementById("hoover").style.display='none';
                document.getElementById("bretheran").style.display='none';
                document.getElementById("brown").style.display='none';
                imgOn = false;
            }
            else {
                document.getElementById("young").style.display='block';
                imgOn = true;
            }
        }

</script>

<?php
require_once "includes/footer.php";

// http://localhost/EtownParkingWebsite/web_src/index.php
// https://www.earthdatascience.org/courses/scientists-guide-to-plotting-data-in-python/plot-spatial-data/customize-raster-plots/interactive-maps/

?>
