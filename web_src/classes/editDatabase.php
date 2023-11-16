<?php

require_once "../includes/config.php";
require_once "DatabaseAPIConnection.php";

//Add show parking time table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
</head>
<body>
    <header>
        <h1>Edit Database</h1>
    </header>

    <main>
        <section id="badge">
            <h2>Badge Type Table</h2>
            <button id="addBadge">Add</button>
            <button id="showBadge" type="button" onclick="badgeTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="badgeTable">
            </div>
        </section>

        <section id="Lot">
            <h2>Parking Lot Table</h2>
            <button id="addLot">Add</button>
            <button id="showLot" type="button" onclick="lotTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="lotTable">
            </div>
        </section>

        <section id="time">
            <h2>Paking Time Table</h2>
            <button id="addTime">Add</button>
            <button id="showTime" type="button" onclick="showTime('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="timeTable">
            </div>
        </section>

        <section id="rule">
            <h2>Parking Rule Table</h2>
            <button id="addRule">Add</button>
            <button id="showRule" type="button" onclick="ruleTableVisibility('<?php echo $url; ?>', '<?php echo $api_key; ?>')">
                Show table!
            </button>
            <div id="ruleTable">
            </div>
        </section>
    </main>

    <footer>
    </footer>
</body>
</html>

<script src="showTable.js"></script>

<script>

let badgeTableVisible = false;
let lotTableVisible = false;
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

async function showTime(rul, api){
    //alert("Hello World!");
    //const fulUrl = url + 'data_src/api/parkingTime/read.php?APIKEY=' + api;
    //console.log(fulUrl);
}

</script>

<style>

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>