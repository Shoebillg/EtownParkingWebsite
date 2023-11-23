<?php

session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page after logout
    exit();
}
require_once "./includes/config.php";
require_once "./classes/DatabaseAPIConnection.php";
require_once "./includes/header.php";

//Add show parking time table
?>

<!DOCTYPE html>
<html lang="en">
<LINK rel='stylesheet' href='css/editdb.css'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
</head>
<body>
    <header>
        <h1 style="background-color:transparent;">Edit Database</h1>
        <form method="post">
            <input type="submit" name="logout" value="Logout" class="logout">
        </form>
    </header>

    <main>
        <section id="badge">
            <h2>Badge Type Table</h2>
            <button class="add" id="addBadge" onclick="addBadge('<?php echo $url; ?>', '<?php echo $api_key; ?>')">Add to badge type table</button>
            <div id="addBadgeBox">
            </div>
            <button class="show"id="showBadge" type="button" onclick="badgeTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="badgeTable" style="overflow-x:auto;">
            </div>
        </section>

        <section id="Lot">
            <h2>Parking Lot Table</h2>
            <button class="add" id="addLot"onclick="addLot('<?php echo $url; ?>', '<?php echo $api_key; ?>')">Add to parking lot table</button>
            <div id="addLotBox">
            </div>
            <button class="show"id="showLot" type="button" onclick="lotTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="lotTable" style="overflow-x:auto;">
            </div>
        </section>

        <section id="time">
            <h2>Paking Time Table</h2>
            <button class="add" id="addTime" onclick="addTime('<?php echo $url; ?>', '<?php echo $api_key; ?>')">Add to parking time table</button>
            <div id="addTimeBox">
            </div>
            <button class="show" id="showTime" type="button" onclick="timeTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="timeTable" style="overflow-x:auto;">
            </div>
        </section>

        <section id="rule">
            <h2>Parking Rule Table</h2>
            <button class="add" id="addRule" onclick="addRule('<?php echo $url; ?>', '<?php echo $api_key; ?>')">Add to parking rule table</button>
            <div id="addRuleBox">
            </div>
            <button class="show" id="showRule" type="button" onclick="ruleTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="ruleTable" style="overflow-x:auto;">
            </div>
        </section>
    </main>

    <footer>
    </footer>
</body>
</html>

<script src="./functions/badgeType.js"></script>
<script src="./functions/parkingLot.js"></script>
<script src="./functions/parkingTime.js"></script>
<script src="./functions/parkingRule.js"></script>

<script>

let badgeTableVisible = false;
let lotTableVisible = false;
let timeTableVisible = false;
let ruleTableVisible = false;

function badgeTableVisibility(url, api) {
    const table = document.getElementById('badgeTable');
    const button = document.getElementById('showBadge');

    if (badgeTableVisible) {
        table.style.display = 'none';
        button.textContent = 'Show Table!';
    } else {
        // Show the table (assuming showLot function does this)
        showBadge(url, api);
        table.style.display = 'block';
        button.textContent = 'Hide Table!';
    }
    badgeTableVisible = !badgeTableVisible;
}

function lotTableVisibility(url, api) {
    const table = document.getElementById('lotTable');
    const button = document.getElementById('showLot');

    if (lotTableVisible) {
        table.style.display = 'none';
        button.textContent = 'Show Table!';
    } else {
        // Show the table (assuming showLot function does this)
        showLot(url, api);
        table.style.display = 'block';
        button.textContent = 'Hide Table!';
    }
    lotTableVisible = !lotTableVisible;
}

function timeTableVisibility(url, api) {
    const table = document.getElementById('timeTable');
    const button = document.getElementById('showTime');

    if (timeTableVisible) {
        table.style.display = 'none';
        button.textContent = 'Show Table!';
    } else {
        // Show the table (assuming showLot function does this)
        showTime(url, api);
        table.style.display = 'block';
        button.textContent = 'Hide Table!';
    }
    timeTableVisible = !timeTableVisible;
}

function ruleTableVisibility(url, api) {
    const table = document.getElementById('ruleTable');
    const button = document.getElementById('showRule');

    if (ruleTableVisible) {
        table.style.display = 'none';
        button.textContent = 'Show Table!';
    } else {
        // Show the table (assuming showLot function does this)
        showRule(url, api);
        table.style.display = 'block';
        button.textContent = 'Hide Table!';
    }
    ruleTableVisible = !ruleTableVisible;
}


</script>