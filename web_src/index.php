<?php
require_once "includes/config.php";
require_once "classes/DatabaseAPIConnection.php";
require_once "includes/header.php";
?>

<!DOCTYPE html>
<html>
<!--Formatting-->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(0, 0, 0, 0.4);

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

        /* Container for the map */
        .map-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 10%;
            /* Adjust the left margin to create space between dropdowns and image */
        }

        /* CSS for container */
        .container {
            position: relative;
        }

        /* CSS for dropdown container */
        .dropdown-container {
            position: absolute;
            top: 12%;
            left: -2px;
            right: 88%;
            /* Adjust the left position to move the dropdowns to the left */
            z-index: 1000;
            border: 1% solid #ccc;
            /* Border properties for the selectable portion */
            border-radius: 8px;
            /* Rounded corners */
            overflow: hidden;
            /* Hide overflow from rounded corners */
        }

        /* CSS for dropdown */
        .dropdown {
            font-size: 18px;
            font-family: Arial, sans-serif;
            /* Example font-family */
            background-color: #666;
            /* Dark gray background */
            color: #fff;
            /* White text color */
            padding: 5%;
            /* Increased padding for better spacing */
            transition: background-color 0.3s;
            /* Smooth transition for hover effect */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Add shadow for depth */
        }

        /* Hover effect */
        .dropdown:hover {
            background-color: #555;
            /* Slightly darker gray on hover */
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

<!--Dropdown Creation and Placement-->

<body>
    <div class="dropdown-container">
        <!-- Parking Rules Dropdown -->
        <div class="dropdown">
            <select>
                <option>Choose an option</option>
                <option value="First">First Year</option>
                <option value="Sophmore">Sophmore</option>
                <option value="Junior">Junior</option>
                <option value="Senior">Senior</option>
                <option value="Visitor">Visitor</option>
                <option value="Staff">Faculty/Staff</option>
                <option value="Commuter">Commuter</option>
            </select>
        </div>

        <!-- Day Dropdown -->
        <div class="dropdown" style="top: 100px;"> <!-- Adjust top as needed -->
            <select>
                <option>Please Choose Day!</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
        </div>

        <!-- Time Dropdown -->
        <div class="dropdown" style="top: 100px;"> <!-- Adjust top as needed -->
            <select>
                <option>Please Choose Time!</option>
                <option value="Night">6pm-2am on a Weekday</option>
                <option value="Weekend">4pm Friday-2am Monday</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <input type="radio" id="noneEV" name="EV" checked onclick="showEV(true);">
        <label for="noneEV">none EV</label>

        <input type="radio" id="EV" name="EV" onclick="showEV(false);">
        <label for="EV">EV</label><br>

        <img src="images/ETOWN_Footer_Logo.png" alt="Map" usemap="#campusMap" width="200" height="84"
            style="position:relative">
    </div>
</body>

<!--Modal Creation and Display Control-->

<body>
    <!-- Admissions Lot Modal -->
    <div id="admissionsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('admissionsModal')">&times;</span>
            <div class="image-container">
                <p>Admissions Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapAdmissions.png">
            </div>
        </div>
    </div>

    <!-- Hoover Lot Modal -->
    <div id="hooverModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('hooverModal')">&times;</span>
            <div class="image-container">
                <p>Hoover Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapHoover.png">
            </div>
        </div>
    </div>

    <!-- Esbenshade Lot Modal -->
    <div id="esbenshadeModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('esbenshadeModal')">&times;</span>
            <div class="image-container">
                <p>Esbenshade Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapEsbenshade.png">
            </div>
        </div>
    </div>

    <!-- Leffler West Lot Modal -->
    <div id="chapelWestModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('chapelWestModal')">&times;</span>
            <div class="image-container">
                <p>Leffler Chapel West Lot</p>
                <p>Available 24/7 for all staff, 4pm-6am and weekends for students</p>
                <img src="images/lots/ElizabethtownLotLefflerWest.png">
            </div>
        </div>
    </div>

    <!-- Leffler East Lot Modal -->
    <div id="chapelEastModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('chapelEastModal')">&times;</span>
            <div class="image-container">
                <p>Leffler Chapel East Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotLefflerEast.png">
            </div>
        </div>
    </div>

    <!-- Young Center Lot Modal -->
    <div id="youngCenterModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('youngCenterModal')">&times;</span>
            <div class="image-container">
                <p>Young Center Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/ElizabethtownLotYoungCenter.png">
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
            <span class="close" onclick="closeModal('alphaVisitorModal')">&times;</span>
            <div class="image-container">
                <p>Alpha Visitor Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapAlphaVisitor.png">
            </div>
        </div>
    </div>

    <!-- Alpha Modal -->
    <div id="alphaModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('alphaModal')">&times;</span>
            <div class="image-container">
                <p>Alpha Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapAlpha.png">
            </div>
        </div>
    </div>

    <!-- Alpha Drive Modal -->
    <div id="alphaDriveModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal('alphaDriveModal')">&times;</span>
            <div class="image-container">
                <p>Alpha Drive Lot</p>
                <p>Available 24/7 for all students and staff</p>
                <img src="images/lots/CollegeMapAlphaDrive.png">
            </div>
        </div>
    </div>

    <!-- Campus Security Lot Modal -->
    <div id="campusSecurityModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('campusSecurityModal')">&times;</span>
            <div class="image-container">
                <p>Campus Security Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapCampusSafety.png">
            </div>
        </div>
    </div>

    <!-- Myer West Lot Modal -->
    <div id="myerWestModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('myerWestModal')">&times;</span>
            <div class="image-container">
                <p>Myer West Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapMyerWest.png">
            </div>
        </div>
    </div>

    <!-- Brethren Lot Modal -->
    <div id="brethrenModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('brethrenModal')">&times;</span>
            <div class="image-container">
                <p>Church of the Brethren Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapBretheranChurch2.png">
            </div>
        </div>
    </div>

    <!-- Brinser Lot Modal -->
    <div id="brinserModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('brinserModal')">&times;</span>
            <div class="image-container">
                <p>Brinser Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapBrinser.png">
            </div>
        </div>
    </div>

    <!-- Hackman Apartments North Modal -->
    <div id="hackmanNorthModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('hackmanNorthModal')">&times;</span>
            <div class="image-container">
                <p>Hackman Apartments North Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapHackman.png">
            </div>
        </div>
    </div>

    <!-- Hackman Apartments South Modal -->
    <div id="hackmanSouthModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('hackmanSouthModal')">&times;</span>
            <div class="image-container">
                <p>Hackman Apartments South Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapHackmanSouth.png">
            </div>
        </div>
    </div>

    <!-- South Founders Lot Modal -->
    <div id="foundersSouthModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('foundersSouthModal')">&times;</span>
            <div class="image-container">
                <p>South Founders Lot (behind tennis courts)</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapSouthFounders.png">
            </div>
        </div>
    </div>

    <!-- Bowers Fitness Center Lot -->
    <div id="bowersModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('bowersModal')">&times;</span>
            <div class="image-container">
                <p>Bowers Center Lot</p>
                <p>Available Monday 6am - Friday 6pm for all students and staff</p>
                <img src="images/lots/CollegeMapBowers.png">
            </div>
        </div>
    </div>

    <script>
        // Get the modals
        var modal1 = document.getElementById("admissionsModal");
        var modal2 = document.getElementById("hooverModal");
        var modal3 = document.getElementById("esbenshadeModal");
        var modal4 = document.getElementById("chapelWestModal");
        var modal5 = document.getElementById("chapelEastModal");
        var modal6 = document.getElementById("youngCenterModal");
        var modal7 = document.getElementById("brownModal");
        var modal8 = document.getElementById("alphaVisitorModal");
        var modal9 = document.getElementById("alphaModal");
        var modal10 = document.getElementById("alphaDriveModal");
        var modal11 = document.getElementById("campusSecurityModal");
        var modal12 = document.getElementById("myerWestModal");
        var modal13 = document.getElementById("brethrenModal");
        var modal14 = document.getElementById("brinserModal");
        var modal15 = document.getElementById("hackmanNorthModal");
        var modal16 = document.getElementById("hackmanSouthModal");
        var modal17 = document.getElementById("foundersSouthModal");
        var modal18 = document.getElementById("bowersModal");

        // When the user clicks the button, open the corresponding modal 
        function showAdmissionsLot() { modal1.style.display = "block"; }
        function showHooverLot() { modal2.style.display = "block"; }
        function showEsbenshadeLot() { modal3.style.display = "block"; }
        function showChapelWestLot() { modal4.style.display = "block"; }
        function showChapelEastLot() { modal5.style.display = "block"; }
        function showYoungCenterLot() { modal6.style.display = "block"; }
        function showBrownLot() { modal7.style.display = "block"; }
        function showAlphaVisitorLot() { modal8.style.display = "block"; }
        function showAlphaLot() { modal9.style.display = "block"; }
        function showAlphaDriveLot() { modal10.style.display = "block"; }
        function showCampusSafetyLot() { modal11.style.display = "block"; }
        function showMyerWestLot() { modal12.style.display = "block"; }
        function showChurchOfTheBrethrenLot() { modal13.style.display = "block"; }
        function showBrinserLot() { modal14.style.display = "block"; }
        function showHackmanNorthLot() { modal15.style.display = "block"; }
        function showHackmanSouthLot() { modal16.style.display = "block"; }
        function showFoundersSouthLot() { modal17.style.display = "block"; }
        function showBowersCenterLot() { modal18.style.display = "block"; }

        // When the user clicks on <span> (x), close the modal
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal1) { modal1.style.display = "none"; }
            if (event.target == modal2) { modal2.style.display = "none"; }
            if (event.target == modal3) { modal3.style.display = "none"; }
            if (event.target == modal4) { modal4.style.display = "none"; }
            if (event.target == modal5) { modal5.style.display = "none"; }
            if (event.target == modal6) { modal6.style.display = "none"; }
            if (event.target == modal7) { modal7.style.display = "none"; }
            if (event.target == modal8) { modal8.style.display = "none"; }
            if (event.target == modal9) { modal9.style.display = "none"; }
            if (event.target == modal10) { modal10.style.display = "none"; }
            if (event.target == modal11) { modal11.style.display = "none"; }
            if (event.target == modal12) { modal12.style.display = "none"; }
            if (event.target == modal13) { modal13.style.display = "none"; }
            if (event.target == modal14) { modal14.style.display = "none"; }
            if (event.target == modal15) { modal15.style.display = "none"; }
            if (event.target == modal16) { modal16.style.display = "none"; }
            if (event.target == modal17) { modal17.style.display = "none"; }
            if (event.target == modal18) { modal18.style.display = "none"; }
        }
    </script>
</body>

</html>
<div class="map-container">
    <img src="images/CampusMap.png" alt="Map" usemap="#campusMap" width="1200" height="979" style="position:relative">
</div>
<!--Pin Locations-->

<body>
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
</body>

<!--Show Map Images-->

<body>
    <map name="brownPinMap">
        <area shape="circle" coords="10,10,10" href="#brown" onclick="showBrownLot();" alt="BrownLot">
    </map>

    <map name="bretheranPinMap">
        <area shape="circle" coords="10,10,10" href="#Bretheran" onclick="showChurchOfTheBrethrenLot();"
            alt="BretheranChurch">
    </map>

    <map name="hooverPinMap">
        <area shape="circle" coords="10,10,10" href="#Hoover" onclick="showHooverLot();" alt="Hoover">
    </map>

    <map name="bowersPinMap">
        <area shape="circle" coords="10,10,10" href="#Bowers" onclick="showBowersCenterLot();" alt="Bowers">
    </map>

    <map name="youngPinMap">
        <area shape="circle" coords="10,10,10" href="#YoungCenter" onclick="showYoungCenterLot();" alt="YoungCenter">
    </map>

    <map name="chapelEastPinMap">
        <area shape="circle" coords="10,10,10" href="#ChapelEast" onclick="showChapelEastLot();" alt="ChapelEast">
    </map>

    <map name="esbenshadePinMap">
        <area shape="circle" coords="10,10,10" href="#Esbenshade" onclick="showEsbenshadeLot();" alt="Esbenshade">
    </map>

    <map name="chapelWestPinMap">
        <area shape="circle" coords="10,10,10" href="#ChapelWest" onclick="showChapelWestLot();" alt="ChapelWest">
    </map>

    <map name="hackmanPinMap">
        <area shape="circle" coords="10,10,10" href="#Hackman" onclick="showHackmanNorthLot();" alt="Hackman">
    </map>

    <map name="hackmanSouthPinMap">
        <area shape="circle" coords="10,10,10" href="#HackmanSouth" onclick="showHackmanSouthLot();" alt="HackmanSouth">
    </map>

    <map name="southFoundersPinMap">
        <area shape="circle" coords="10,10,10" href="#SouthFounders" onclick="showFoundersSouthLot();"
            alt="SouthFounders">
    </map>

    <map name="myerWestPinMap">
        <area shape="circle" coords="10,10,10" href="#MyerWest" onclick="showMyerWestLot();" alt="MyerWest">
    </map>

    <map name="brinserPinMap">
        <area shape="circle" coords="10,10,10" href="#Brinser" onclick="showBrinserLot();" alt="Brinser">
    </map>

    <map name="admissionsPinMap">
        <area shape="circle" coords="10,10,10" href="#Admissions" onclick="showAdmissionsLot();" alt="Admissions">
    </map>

    <map name="alphaPinMap">
        <area shape="circle" coords="10,10,10" href="#Alpha" onclick="showAlphaLot();" alt="Alpha">
    </map>

    <map name="alphaDrivePinMap">
        <area shape="circle" coords="10,10,10" href="#AlphaDrive" onclick="showAlphaDriveLot();" alt="AlphaDrive">
    </map>

    <map name="alphaVisitorPinMap">
        <area shape="circle" coords="10,10,10" href="#AlphaVisitor" onclick="showAlphaVisitorLot();" alt="AlphaVisitor">
    </map>

    <map name="campusSafetyPinMap">
        <area shape="circle" coords="10,10,10" href="#CampusSafety" onclick="showCampusSafetyLot();" alt="CampusSafety">
    </map>
</body>


<?php
require_once "includes/footer.php";
?>