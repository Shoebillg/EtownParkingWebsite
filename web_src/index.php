<?php
require_once "includes/config.php";
require_once "classes/DatabaseAPIConnection.php";
require_once "includes/header.php";
?>

<?php
require_once "includes/dropdown.php";
?>
<br>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-height: 80%;
            /* Set a max height for the modal content */
            overflow-y: auto;
            /* Enable vertical scroll if needed */
        }

        /* Container for the image */
        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Text color inside the modal */
        .modal-content p {
            color: #000;
            /* Set the text color to black or your desired color */
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Responsive image */
        .modal-content img {
            max-width: 100%;
            /* Ensure images don't exceed the width of the modal content */
            height: auto;
            /* Maintain aspect ratio */
        }
    </style>
</head>

<body>

    <!-- Brown Lot Modal -->
    <div id="brownModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Brown Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotBrown.png">
            </div>
        </div>
    </div>

    <!-- Brethren Lot Modal -->
    <div id="brethrenModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>Church of the Brethren Lot</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <!-- Brown Lot Modal -->
    <div id="chapelWestModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Brown Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotBrown.png">
            </div>
        </div>
    </div>

    <!-- Brown Lot Modal -->
    <div id="chapelEastModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Brown Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotBrown.png">
            </div>
        </div>
    </div>

    <!-- Brown Lot Modal -->
    <div id="youngCenterModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Brown Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotBrown.png">
            </div>
        </div>
    </div>

    <!-- Brown Lot Modal -->
    <div id="admissionsModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Brown Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotBrown.png">
            </div>
        </div>
    </div>

    <script>
        // Get the modals
        var modal1 = document.getElementById("brownModal");
        var modal2 = document.getElementById("brethrenModal");

        // When the user clicks the button, open the corresponding modal 
        function showBrownLot() {
            modal1.style.display = "block";
        }

        function showBrethrenLot() {
            modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
            if (event.target == modal4) {
                modal4.style.display = "none";
            }
        }
    </script>


</body>

</html>


<!--Etown Parking Website Coming Soon!-->

<img src="images/CollegeMap2.png" alt="Map" usemap="#campusMap" width="1094" height="754" style="position:relative">

<!--all pin locations are stored here-->
<p id="brownPin2">
    <img src="images/lotpin2.png" usemap="#brownPinMap" id="7" width="14.88" height="23.76"
        style="position: absolute; left: 429px; top: 268px; display:block;">
</p>

<p id="bretheranPin2">
    <img src="images/lotpin2.png" usemap="#bretheranPinMap" id="13" width="14.88" height="23.76"
        style="position: absolute; left: 310px; top: 726px; display:block;">
</p>

<p id="hooverPin2">
    <img src="images/lotpin2.png" usemap="#hooverPinMap" id="2" width="14.88" height="23.76"
        style="position: absolute; left: 330px; top: 453px; display:block;">
</p>

<p id="bowersPin2">
    <img src="images/lotpin2.png" usemap="#bowersPinMap" id="18" width="14.88" height="23.76"
        style="position: absolute; left: 555px; top: 538px; display:block;">
</p>

<p id="chapelEastPin2">
    <img src="images/lotpin2.png" usemap="#chapelEastPinMap" id="5" width="14.88" height="23.76"
        style="position: absolute; left: 518px; top: 387px; display:block;">
</p>

<p id="youngPin2">
    <img src="images/lotpin2.png" usemap="#youngPinMap" id="6" width="14.88" height="23.76"
        style="position: absolute; left: 576px; top: 364px; display:block;">
</p>

<p id="esbenshadePin2">
    <img src="images/lotpin2.png" usemap="#esbenshadePinMap" id="3" width="14.88" height="23.76"
        style="position: absolute; left: 400px; top: 410px; display:block;">
</p>

<p id="chapelWestPin2">
    <img src="images/lotpin2.png" usemap="#chapelWestPinMap" id="4" width="14.88" height="23.76"
        style="position: absolute; left: 435px; top: 420px; display:block;">
</p>

<p id="hackmanPin2">
    <img src="images/lotpin2.png" usemap="#hackmanPinMap" id="15" width="14.88" height="23.76"
        style="position: absolute; left: 570px; top: 580px; display:block;">
</p>

<p id="hackmanSouthPin2">
    <img src="images/lotpin2.png" usemap="#hackmanSouthPinMap" id="16" width="14.88" height="23.76"
        style="position: absolute; left: 580px; top: 646px; display:block;">
</p>

<p id="southFoundersPin2">
    <img src="images/lotpin2.png" usemap="#southFoundersPinMap" id="17" width="14.88" height="23.76"
        style="position: absolute; left: 545px; top: 681px; display:block;">
</p>

<p id="myerWestPin2">
    <img src="images/lotpin2.png" usemap="#myerWestPinMap" id="12" width="14.88" height="23.76"
        style="position: absolute; left: 287px; top: 667px; display:block;">
</p>
<p id="brinserPin2">
    <img src="images/lotpin2.png" usemap="#brinserPinMap" id="14" width="14.88" height="23.76"
        style="position: absolute; left: 433px; top: 577px; display:block;">
</p>
<p id="admissionsPin2">
    <img src="images/lotpin2.png" usemap="#admissionsPinMap" id="1" width="14.88" height="23.76"
        style="position: absolute; left: 150px; top: 567px; display:block;">
</p>
<p id="alphaPin2">
    <img src="images/lotpin2.png" usemap="#alphaPinMap" id="9" width="14.88" height="23.76"
        style="position: absolute; left: 290px; top: 576px; display:block;">
</p>
<p id="alphaDrivePin2">
    <img src="images/lotpin2.png" usemap="#alphaDrivePinMap" id="10" width="14.88" height="23.76"
        style="position: absolute; left: 325px; top: 604px; display:block;">
</p>
<p id="alphaVisitorPin2">
    <img src="images/lotpin2.png" usemap="#alphaVisitorPinMap" id="8" width="14.88" height="23.76"
        style="position: absolute; left: 316px; top: 537px; display:block;">
</p>
<p id="campusSafetyPin2">
    <img src="images/lotpin2.png" usemap="#campusSafetyPinMap" id="11" width="14.88" height="23.76"
        style="position: absolute; left: 232px; top: 649px; display:block;">
</p>

<!--All maps with images are stored here (basically the buttons)-->
<map name="brownPinMap">
    <area shape="circle" coords="10,10,10" href="#brown" onclick="showBrownLot();" alt="BrownLot">
</map>

<map name="bretheranPinMap">
    <area shape="circle" coords="10,10,10" href="#Bretheran" onclick="showBrethrenLot();" alt="BretheranChurch">
</map>


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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("myerwest").style.display = 'none';
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("brinser").style.display = 'none';
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
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
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphavisitor").style.display = 'none';
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
            document.getElementById("admissions").style.display = 'none';
            document.getElementById("campussafety").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
            document.getElementById("alphavisitor").style.display = 'none';
            document.getElementById("alphadrive").style.display = 'none';
            document.getElementById("alpha").style.display = 'none';
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
?>