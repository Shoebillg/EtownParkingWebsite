async function showBadge(url, api) {//add cancel button for update
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
    editButton.addEventListener('click', async () => {
        // Here you can trigger the editing process for the specific item
        // For example, create an input field within the table cell and populate it with the existing value
    
        const inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.value = item.name; // Assuming 'name' is the property to edit
        name.innerHTML = ''; // Clear the cell content
        name.appendChild(inputField);
    
        // Update the edit button to a 'Save' button
        editButton.textContent = 'Update';
        editButton.addEventListener('click', async () => {
            // Save functionality here: Get the updated value from the inputField.value
            editButton.textContent = 'Edit'; 
            
            const updatedValue = inputField.value;
            //update here
            alert(item.typeID);
            const updateUrl = url + 'data_src/api/badgeType/read.php';
            const response = await fetch(updateUrl);
            const data = await response.json(); // Parse JSON response
            console.log(data);

        });
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


