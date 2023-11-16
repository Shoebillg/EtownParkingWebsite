<?php

require_once "../includes/config.php";
require_once "DatabaseAPIConnection.php";

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
        <!-- Add any additional header information or navigation elements -->
    </header>

    <main>
        <section id="badge">
            <h2>Badge Type Table</h2>
            <!-- Form or table to edit data from Table 1 -->
            <button type="button" onclick="showBadge('<?php echo $url; ?>', '<?php echo $api_key; ?>')">Show table!</button>
            <div id="badgeTable">
            </div>
        </section>

        <section id="Lot">
            <h2>Parking Lot Table</h2>
            <!-- Form or table to edit data from Table 2 -->
            <button type="button" onclick="showLot()">Show table!</button>
        </section>

        <section id="time">
            <h2>Paking Time Table</h2>
            <!-- Form or table to edit data from Table 3 -->
            <button type="button" onclick="showTime()">Show table!</button>
        </section>

        <section id="rule">
            <h2>Parking Rule Table</h2>
            <!-- Form or table to edit data from Table 4 -->
            <button type="button" onclick="showRule()">Show table!</button>
        </section>
    </main>

    <footer>
        <!-- Footer content, if needed -->
    </footer>
</body>
</html>

<script>

async function showBadge(url, api) {
    const fulUrl = url + 'data_src/api/badgeType/read.php?APIKEY=' + api;

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('table');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Type ID', 'Name', 'Edit', 'Delete']; // Define your table headers here

        headers.forEach(headerText => {
            const header = document.createElement('th');
            header.appendChild(document.createTextNode(headerText));
            headerRow.appendChild(header);
        });

        tableHeader.appendChild(headerRow);
        table.appendChild(tableHeader);

        const tableBody = document.createElement('tbody');

        data.forEach(item => {
            const row = document.createElement('tr');
            const id = document.createElement('td');
            const name = document.createElement('td');
            const edit = document.createElement('td');
            const delet = document.createElement('td');

            id.appendChild(document.createTextNode(item.typeID));
            name.appendChild(document.createTextNode(item.name));
            edit
            delete


            row.appendChild(cell1);
            row.appendChild(cell2);

            tableBody.appendChild(row);
        });

        table.appendChild(tableBody);

        const element = document.getElementById('badgeTable');
        element.innerHTML = ''; // Clear previous content
        element.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }
}



function showLot(){
    
}


function showTime(){
    alert("Hello World!");
}


function showRule(){
    alert("Hello World!");
}

</script>

<style>

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>