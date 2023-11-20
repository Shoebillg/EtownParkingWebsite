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
        // Here you can trigger the editing process for the specific item
        // For example, create an input field within the table cell and populate it with the existing value
    
        const nameField = document.createElement('input');
        nameField.type = 'text';
        nameField.value = item.lotName; // Assuming 'name' is the property to edit
        name.innerHTML = ''; // Clear the cell content
        name.appendChild(nameField);
        
        const imageField = document.createElement('input');
        imageField.type = 'text';
        imageField.value = item.image;
        image.innerHTML = '';
        image.appendChild(imageField);

        const sideField = document.createElement('input');
        sideField.type = 'number';
        sideField.value = item.side;
        side.innerHTML = '';
        side.appendChild(sideField);

        const topField = document.createElement('input');
        topField.type = 'number';
        topField.value = item.top;
        top.innerHTML = '';
        top.appendChild(topField);

    
        // Update the edit button to a 'Save' button
        editButton.textContent = 'Update';
        editButton.addEventListener('click', () => {
            // Save functionality here: Get the updated value from the inputField.value
            //const updatedValue = inputField.value;
            alert(item.lotID);
            editButton.textContent = 'Edit'; 
            
        });
    });
    
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('Button clicked: ' + item.lotID)
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