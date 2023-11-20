async function showBadge(url, api) {
    const fulUrl = url + 'data_src/api/badgeType/read.php?APIKEY=' + api;

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('badge');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Type ID', 'Name', 'Edit', 'Delete']; // Define table headers here

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
    const del = document.createElement('td'); // Changed from 'delet' to 'del'

    id.appendChild(document.createTextNode(item.typeID));
    name.appendChild(document.createTextNode(item.name));

    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', () => {

        alert(item.typeID);
        // Add functionality to edit button click
        // For example: editRow(item.typeID);
        // Replace 'editRow' with your edit function and pass necessary parameters
    });
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('BUtton clicked: ' + item.typeID)
        //Call delete api for delete this item


        // Add functionality to delete button click
        // For example: deleteRow(item.typeID);
        // Replace 'deleteRow' with your delete function and pass necessary parameters
    });
    del.appendChild(deleteButton);

    row.appendChild(id);
    row.appendChild(name);
    row.appendChild(edit);
    row.appendChild(del);

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

async function showLot(url, api){

    const fulUrl = url + 'data_src/api/parkingLot/read.php?APIKEY=' + api;
    console.log(fulUrl);    

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('lot');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Lot ID', 'Lot Name', 'image', 'side', 'top', 'Edit', 'Delete']; // Define table headers here

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
    const image = document.createElement('td');
    const side = document.createElement('td');
    const top = document.createElement('td');
    const edit = document.createElement('td');
    const del = document.createElement('td'); // Changed from 'delet' to 'del'

    id.appendChild(document.createTextNode(item.lotID));
    name.appendChild(document.createTextNode(item.lotName));
    image.appendChild(document.createTextNode(item.image));
    side.appendChild(document.createTextNode(item.side));
    top.appendChild(document.createTextNode(item.top));

    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', () => {

        alert(item.lotID);
        // Add functionality to edit button click
        // For example: editRow(item.typeID);
        // Replace 'editRow' with your edit function and pass necessary parameters
    });
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('BUtton clicked: ' + item.lotID)
        //Call delete api for delete this item


        // Add functionality to delete button click
        // For example: deleteRow(item.typeID);
        // Replace 'deleteRow' with your delete function and pass necessary parameters
    });
    del.appendChild(deleteButton);

    row.appendChild(id);
    row.appendChild(name);
    row.appendChild(image);
    row.appendChild(side);
    row.appendChild(top);
    row.appendChild(edit);
    row.appendChild(del);

    tableBody.appendChild(row);
});


        table.appendChild(tableBody);

        const element = document.getElementById('lotTable');
        element.innerHTML = ''; // Clear previous content
        element.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }

}

async function showRule(url, api){
    const fulUrl = url + 'data_src/api/parkingRule/read.php?APIKEY=' + api;
    console.log(fulUrl);   

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('rule');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Rule ID', 'TypeID', 'Lot ID', 'Time ID', 'Day', 'Description', 'Edit', 'Delete']; // Define table headers here

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
    const ruleID = document.createElement('td');
    const typeID = document.createElement('td');
    const lotID = document.createElement('td');
    const timeID = document.createElement('td');
    const day = document.createElement('td');
    const description = document.createElement('td');
    const edit = document.createElement('td');
    const del = document.createElement('td');

    ruleID.appendChild(document.createTextNode(item.ruleID));
    typeID.appendChild(document.createTextNode(item.typeID));
    lotID.appendChild(document.createTextNode(item.lotID));
    timeID.appendChild(document.createTextNode(item.timeID));
    day.appendChild(document.createTextNode(item.day));
    description.appendChild(document.createTextNode(item.description));


    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', () => {

        alert(item.ruleID);
        // Add functionality to edit button click
        // For example: editRow(item.typeID);
        // Replace 'editRow' with your edit function and pass necessary parameters
    });
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('Button clicked: ' + item.ruleID)
        //Call delete api for delete this item


        // Add functionality to delete button click
        // For example: deleteRow(item.typeID);
        // Replace 'deleteRow' with your delete function and pass necessary parameters
    });
    del.appendChild(deleteButton);

    row.appendChild(ruleID);
    row.appendChild(typeID);
    row.appendChild(lotID);
    row.appendChild(timeID);
    row.appendChild(day);
    row.appendChild(description);
    row.appendChild(edit);
    row.appendChild(del);

    tableBody.appendChild(row);
});

        table.appendChild(tableBody);

        const element = document.getElementById('ruleTable');
        element.innerHTML = ''; // Clear previous content
        element.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }
    //alert("Hello World!");

}