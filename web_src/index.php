<?php
require_once "includes/config.php";
require_once "classes/DatabaseAPIConnection.php";
require_once "includes/header.php";
?>

<?php
require_once "includes/dropdown.php";
?>
<br>

<!--Etown Parking Website Coming Soon!-->

<img src="images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">

<!--all pin locations are stored here-->
<p id="brownPin2">
    <img src="images/lotpin.png" usemap="#brownPinMap" id="brownPin"
        style="position: absolute; left: 429px; top: 268px; display:block;">
</p>

<p id="bretheranPin2">
    <img src="images/lotpin.png" usemap="#bretheranPinMap" id="bretheranPin"
        style="position: absolute; left: 310px; top: 726px; display:block;">
</p>

<p id="hooverPin2">
    <img src="images/lotpin.png" usemap="#hooverPinMap" id="hooverPin"
        style="position: absolute; left: 330px; top: 453px; display:block;">
</p>

<p id="bowersPin2">
    <img src="images/lotpin.png" usemap="#bowersPinMap" id="bowersPin"
        style="position: absolute; left: 555px; top: 538px; display:block;">
</p>

<p id="chapelEastPin2">
    <img src="images/lotpin.png" usemap="#chapelEastPinMap" id="chapelEastPin"
        style="position: absolute; left: 518px; top: 387px; display:block;">
</p>

<p id="youngPin2">
    <img src="images/lotpin.png" usemap="#youngPinMap" id="youngPin"
        style="position: absolute; left: 576px; top: 364px; display:block;">
</p>

<p id="esbenshadePin2">
    <img src="images/lotpin.png" usemap="#esbenshadePinMap" id="esbenshadePin"
        style="position: absolute; left: 400px; top: 410px; display:block;">
</p>

<p id="chapelWestPin2">
    <img src="images/lotpin.png" usemap="#chapelWestPinMap" id="chapelWestPin"
        style="position: absolute; left: 435px; top: 420px; display:block;">
</p>

<p id="hackmanPin2">
    <img src="images/lotpin.png" usemap="#hackmanPinMap" id="hackmanPin"
        style="position: absolute; left: 570px; top: 580px; display:block;">
</p>

<p id="hackmanSouthPin2">
    <img src="images/lotpin.png" usemap="#hackmanSouthPinMap" id="hackmanSouthPin"
        style="position: absolute; left: 580px; top: 646px; display:block;">
</p>

<p id="southFoundersPin2">
    <img src="images/lotpin.png" usemap="#southFoundersPinMap" id="southFoundersPin"
        style="position: absolute; left: 545px; top: 681px; display:block;">
</p>

<p id="myerWestPin2">
    <img src="images/lotpin.png" usemap="#myerWestPinMap" id="myerWestPin"
        style="position: absolute; left: 287px; top: 667px; display:block;">
</p>
<p id="brinserPin2">
    <img src="images/lotpin.png" usemap="#brinserPinMap" id="brinserPin"
        style="position: absolute; left: 433px; top: 577px; display:block;">
</p>
<p id="admissionsPin2">
    <img src="images/lotpin.png" usemap="#admissionsPinMap" id="admissionsPin"
        style="position: absolute; left: 150px; top: 567px; display:block;">
</p>
<p id="alphaPin2">
    <img src="images/lotpin.png" usemap="#alphaPinMap" id="alphaPin"
        style="position: absolute; left: 307px; top: 576px; display:block;">
</p>
<p id="alphaDrivePin2">
    <img src="images/lotpin.png" usemap="#alphaDrivePinMap" id="alphaDrivePin"
        style="position: absolute; left: 343px; top: 604px; display:block;">
</p>
<p id="alphaVisitorPin2">
    <img src="images/lotpin.png" usemap="#alphaVisitorPinMap" id="alphaVisitorPin"
        style="position: absolute; left: 316px; top: 537px; display:block;">
</p>
<p id="campusSafetyPin2">
    <img src="images/lotpin.png" usemap="#campusSafetyPinMap" id="campusSafetyPin"
        style="position: absolute; left: 232px; top: 649px; display:block;">
</p>
<!--All maps with images are stored here (basically the buttons)-->
<map name="brownPinMap">
    <area shape="circle" coords="10,10,10" href="#brown" onclick="showBrown();" alt="BrownLot">
</map>
<p id="brown2">
    <img src="images/lots/CollegeMapBrownLot.png" id="brown"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="bretheranPinMap">
    <area shape="circle" coords="10,10,10" href="#Bretheran" onclick="showBretheran();" alt="BretheranChurch">
</map>
<p id="bretheran2">
    <img src="images/lots/CollegeMapBretheranChurch2.png" id="bretheran"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="hooverPinMap">
    <area shape="circle" coords="10,10,10" href="#Hoover" onclick="showHoover();" alt="Hoover">
</map>
<p id="hoover2">
    <img src="images/lots/CollegeMapHoover.png" id="hoover"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="bowersPinMap">
    <area shape="circle" coords="10,10,10" href="#Bowers" onclick="showBowers();" alt="Bowers">
</map>
<p id="bowers2">
    <img src="images/lots/CollegeMapBowers.png" id="bowers"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="youngPinMap">
    <area shape="circle" coords="10,10,10" href="#YoungCenter" onclick="showYoung();" alt="YoungCenter">
</map>
<p id="bowers2">
    <img src="images/lots/CollegeMapYoungCenter.png" id="young"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="chapelEastPinMap">
    <area shape="circle" coords="10,10,10" href="#ChapelEast" onclick="showChapelEast();" alt="ChapelEast">
</map>
<p id="chapelEast2">
    <img src="images/lots/CollegeMapChapelEast.png" id="chapeleast"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="esbenshadePinMap">
    <area shape="circle" coords="10,10,10" href="#Esbenshade" onclick="showEsbenshade();" alt="Esbenshade">
</map>
<p id="esbenshade2">
    <img src="images/lots/CollegeMapEsbenshade.png" id="esbenshade"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="chapelWestPinMap">
    <area shape="circle" coords="10,10,10" href="#ChapelWest" onclick="showChapelWest();" alt="ChapelWest">
</map>
<p id="chapelWest2">
    <img src="images/lots/CollegeMapChapelWest.png" id="chapelwest"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="hackmanPinMap">
    <area shape="circle" coords="10,10,10" href="#Hackman" onclick="showHackman();" alt="Hackman">
</map>
<p id="hackman2">
    <img src="images/lots/CollegeMapHackman.png" id="hackman"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="hackmanSouthPinMap">
    <area shape="circle" coords="10,10,10" href="#HackmanSouth" onclick="showHackmanSouth();" alt="HackmanSouth">
</map>
<p id="hackmanSouth2">
    <img src="images/lots/CollegeMapHackmanSouth.png" id="hackmansouth"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>

<map name="southFoundersPinMap">
    <area shape="circle" coords="10,10,10" href="#SouthFounders" onclick="showSouthFounders();" alt="SouthFounders">
</map>
<p id="southFounders2">
    <img src="images/lots/CollegeMapSouthFounders.png" id="southfounders"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="myerWestPinMap">
    <area shape="circle" coords="10,10,10" href="#MyerWest" onclick="showMyerWest();" alt="MyerWest">
</map>
<p id="myerWest2">
    <img src="images/lots/CollegeMapMyerWest.png" id="myerwest"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="brinserPinMap">
    <area shape="circle" coords="10,10,10" href="#Brinser" onclick="showBrinser();" alt="Brinser">
</map>
<p id="brinser2">
    <img src="images/lots/CollegeMapBrinser.png" id="brinser"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="admissionsPinMap">
    <area shape="circle" coords="10,10,10" href="#Admissions" onclick="showAdmissions();" alt="Admissions">
</map>
<p id="admissions2">
    <img src="images/lots/CollegeMapAdmissions.png" id="admissions"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="alphaPinMap">
    <area shape="circle" coords="10,10,10" href="#Alpha" onclick="showAlpha();" alt="Alpha">
</map>
<p id="alpha2">
    <img src="images/lots/CollegeMapAlpha.png" id="alpha"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="alphaDrivePinMap">
    <area shape="circle" coords="10,10,10" href="#AlphaDrive" onclick="showAlphaDrive();" alt="AlphaDrive">
</map>
<p id="alphaDrive2">
    <img src="images/lots/CollegeMapAlphaDrive.png" id="alphadrive"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="alphaVisitorPinMap">
    <area shape="circle" coords="10,10,10" href="#AlphaVisitor" onclick="showAlphaVisitor();" alt="AlphaVisitor">
</map>
<p id="alphaVisitor2">
    <img src="images/lots/CollegeMapAlphaVisitor.png" id="alphavisitor"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<map name="campusSafetyPinMap">
    <area shape="circle" coords="10,10,10" href="#CampusSafety" onclick="showCampusSafety();" alt="CampusSafety">
</map>
<p id="campusSafety2">
    <img src="images/lots/CollegeMapCampusSafety.png" id="campussafety"
        style="position: absolute; left: 1094px; top: 141px; display:none;">
</p>
<!--All functions are stored here-->
<script>
    var imgOn = false;
    function showBrown() {
        if (imgOn) {
            document.getElementById("brown").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("young").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("brown").style.display = 'block';
            imgOn = true;
        }

        //brown.src = "images/lots/CollegeMapBrownLot.png";
    }

    function showBretheran() {
        if (imgOn) {
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("young").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("bretheran").style.display = 'block';
            imgOn = true;
        }
    }

    function showHoover() {
        if (imgOn) {
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("young").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("hoover").style.display = 'block';
            imgOn = true;
        }
    }

    function showBowers() {
        if (imgOn) {
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("young").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("bowers").style.display = 'block';
            imgOn = true;
        }
    }

    function showYoung() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("young").style.display = 'block';
            imgOn = true;
        }
    }

    function showChapelEast() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("chapeleast").style.display = 'block';
            imgOn = true;
        }
    }

    function showEsbenshade() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("esbenshade").style.display = 'block';
            imgOn = true;
        }
    }

    function showChapelWest() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("chapelwest").style.display = 'block';
            imgOn = true;
        }
    }

    function showHackman() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("hackman").style.display = 'block';
            imgOn = true;
        }
    }

    function showHackmanSouth() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("hackmansouth").style.display = 'block';
            imgOn = true;
        }
    }

    function showSouthFounders() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("southfounders").style.display = 'block';
            imgOn = true;
        }
    }

    function showMyerWest() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("myerwest").style.display = 'block';
            imgOn = true;
        }
    }

    function showBrinser() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("brinser").style.display = 'block';
            imgOn = true;
        }
    }
    function showAdmissions() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("admissions").style.display = 'block';
            imgOn = true;
        }
    }
    function showAlpha() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("alpha").style.display = 'block';
            imgOn = true;
        }
    }
    function showAlphaDrive() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("alphadrive").style.display = 'block';
            imgOn = true;
        }
    }
    function showAlphaVisitor() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("alphavisitor").style.display = 'block';
            imgOn = true;
        }
    }
    function showCampusSafety() {
        if (imgOn) {
            document.getElementById("young").style.display = 'none';
            document.getElementById("bowers").style.display = 'none';
            document.getElementById("hoover").style.display = 'none';
            document.getElementById("bretheran").style.display = 'none';
            document.getElementById("brown").style.display = 'none';
            document.getElementById("chapeleast").style.display = 'none';
            document.getElementById("esbenshade").style.display = 'none';
            document.getElementById("chapelwest").style.display = 'none';
            document.getElementById("hackmansouth").style.display = 'none';
            document.getElementById("southfounders").style.display = 'none';
            document.getElementById("hackman").style.display = 'none';
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            imgOn = false;
        }
        else {
            document.getElementById("campussafety").style.display = 'block';
            imgOn = true;
        }
    }
</script>

<?php
require_once "includes/footer.php";

// http://localhost/EtownParkingWebsite/web_src/index.php
// https://www.earthdatascience.org/courses/scientists-guide-to-plotting-data-in-python/plot-spatial-data/customize-raster-plots/interactive-maps/

?>