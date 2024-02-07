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

    <!-- Admissions Lot Modal -->
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

    <!-- Hoover Lot Modal -->
    <div id="hooverModal" class="modal">

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

    <!-- Esbenshade Lot Modal -->
    <div id="esbenshadeModal" class="modal">

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

    <!-- Leffler West Lot Modal -->
    <div id="chapelWestModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all staff, 4pm-6am and weekends for students</p>
                <img src="images/lots/ElizabethtownLotLefflerWest.png">
            </div>
        </div>
    </div>

    <!-- Leffler East Lot Modal -->
    <div id="chapelEastModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
            </div>
        </div>
    </div>

    <!-- Young Center Lot Modal -->
    <div id="chapelEastModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
            </div>
        </div>
    </div>

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

    <!-- Alpha Visitor Modal -->
    <div id="alphaVisitorModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
            </div>
        </div>
    </div>

    <!-- Alpha Modal -->
    <div id="alphaModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
            </div>
        </div>
    </div>

    <!-- Alpha Drive Modal -->
    <div id="alphaDriveModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brownModal')">&times;</span>

            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
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

    <!-- Brinser Lot Modal -->
    <div id="brinserModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>Church of the Brethren Lot</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <!-- Hackman Apartments North Modal -->
    <div id="hackmanNorthzModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>Church of the Brethren Lot</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <!-- Hackman Apartments South Modal -->
    <div id="hackmanSouthModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>Church of the Brethren Lot</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <!-- South Founders Lot Modal -->
    <div id="brethrenModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>South Founders Lot Modal (behind tennis courts)</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <!-- Bowers Fitness Center Lot -->
    <div id="brethrenModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <p>Church of the Brethren Lot</p>
            <img src="images/lots/CollegeMapBretheranChurch2.png">
            <p>Available Monday 6am - Friday 6pm for all students and staff</p>
        </div>
    </div>

    <script>
        // Get the modals
        var modal1 = document.getElementById("brownModal");
        var modal2 = document.getElementById("brethrenModal");
        var modal3 = document.getElementById("chapelWestModal");
        var modal4 = document.getElementById("chapelEastModal");


        // When the user clicks the button, open the corresponding modal 
        function showBrownLot() {
            modal1.style.display = "block";
        }

        function showBrethrenLot() {
            modal2.style.display = "block";
        }

        function showChapelWest() {
            modal3.style.display = "block";
        }

        function showChapelEast() {
            modal4.style.display = "block";
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

<map name="bowersPinMap">
    <area shape="circle" coords="10,10,10" href="#Bowers" onclick="showBowers();" alt="Bowers">
</map>

<map name="youngPinMap">
    <area shape="circle" coords="10,10,10" href="#YoungCenter" onclick="showYoung();" alt="YoungCenter">
</map>

<map name="chapelEastPinMap">
    <area shape="circle" coords="10,10,10" href="#ChapelEast" onclick="showChapelEast();" alt="ChapelEast">
</map>

<map name="esbenshadePinMap">
    <area shape="circle" coords="10,10,10" href="#Esbenshade" onclick="showEsbenshade();" alt="Esbenshade">
</map>

<map name="chapelWestPinMap">
    <area shape="circle" coords="10,10,10" href="#ChapelWest" onclick="showChapelWest();" alt="ChapelWest">
</map>

<map name="hackmanPinMap">
    <area shape="circle" coords="10,10,10" href="#Hackman" onclick="showHackman();" alt="Hackman">
</map>

<map name="hackmanSouthPinMap">
    <area shape="circle" coords="10,10,10" href="#HackmanSouth" onclick="showHackmanSouth();" alt="HackmanSouth">
</map>

<map name="southFoundersPinMap">
    <area shape="circle" coords="10,10,10" href="#SouthFounders" onclick="showSouthFounders();" alt="SouthFounders">
</map>

<map name="myerWestPinMap">
    <area shape="circle" coords="10,10,10" href="#MyerWest" onclick="showMyerWest();" alt="MyerWest">
</map>

<map name="brinserPinMap">
    <area shape="circle" coords="10,10,10" href="#Brinser" onclick="showBrinser();" alt="Brinser">
</map>

<map name="admissionsPinMap">
    <area shape="circle" coords="10,10,10" href="#Admissions" onclick="showAdmissions();" alt="Admissions">
</map>

<map name="alphaPinMap">
    <area shape="circle" coords="10,10,10" href="#Alpha" onclick="showAlpha();" alt="Alpha">
</map>

<map name="alphaDrivePinMap">
    <area shape="circle" coords="10,10,10" href="#AlphaDrive" onclick="showAlphaDrive();" alt="AlphaDrive">
</map>

<map name="alphaVisitorPinMap">
    <area shape="circle" coords="10,10,10" href="#AlphaVisitor" onclick="showAlphaVisitor();" alt="AlphaVisitor">
</map>

<map name="campusSafetyPinMap">
    <area shape="circle" coords="10,10,10" href="#CampusSafety" onclick="showCampusSafety();" alt="CampusSafety">
</map>

<?php
require_once "includes/footer.php";
?>