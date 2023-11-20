
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
        
        if (editButton.textContent === 'Edit') {
            const typeIDField = document.createElement('input');
            typeIDField.type = 'number';
            typeIDField.value = item.typeID; // Assuming 'name' is the property to edit
            typeID.innerHTML = ''; // Clear the cell content
            typeID.appendChild(typeIDField);

            const lotIDField = document.createElement('input');
            lotIDField.type = 'number';
            lotIDField.value = item.lotID;
            lotID.innerHTML = '';
            lotID.appendChild(lotIDField);

            const timeIDField = document.createElement('input');
            timeIDField.type = 'number';
            timeIDField.value = item.timeID;
            timeID.innerHTML = '';
            timeID.appendChild(timeIDField);

            const dayField = document.createElement('input');
            dayField.type = 'text';
            dayField.value = item.day;
            day.innerHTML = '';
            day.appendChild(dayField);

            const descField = document.createElement('input');
            descField.type = 'text';
            descField.value = item.description;
            description.innerHTML = '';
            description.appendChild(descField);

            // Update the edit button to a 'Save' button
            editButton.textContent = 'Update';

            typeIDField.addEventListener('change', () => {
                
            });

            lotIDField.addEventListener('change', () => {
                
            });

            timeIDField.addEventListener('change', () => {
                
            });

            dayField.addEventListener('change', () => {
                
            });

            descField.addEventListener('change', () => {
                
                //alert(currentValue + " " + originalValue);
            });
        }
        else if(editButton.textContent === 'Update'){
       
            // Save functionality here: Get the updated value from the inputField.value
            //const updatedValue = typeIDField.value;
            const typeInput = typeID.querySelector('input');
            const typeUpdate = typeInput.value;

            const lotInput = lotID.querySelector('input');
            const lotUpdate = lotInput.value;

            const timeInput = timeID.querySelector('input');
            const timeUpdate = timeInput.value;

            const dayInput = day.querySelector('input');
            const dayUpdate = dayInput.value;            

            const descInput = description.querySelector('input');
            const descUpdate = descInput.value;
            alert(typeUpdate +" "+lotUpdate +" "+timeUpdate +" "+dayUpdate +descUpdate);  

            const updateUrl = url + 'data_src/api/parkingRule/update.php';
            console.log(updateUrl);

            //alert(item.ruleID + ": " + updatedValue);
            //alert(item.ruleID);
            editButton.textContent = 'Edit';

            typeID.innerHTML = typeUpdate;
            lotID.innerHTML = lotUpdate;
            timeID.innerHTML = timeUpdate;
            day.innerHTML = dayUpdate;
            description.innerHTML = descUpdate;

            const ruleData = {
                ruleID: item.ruleID,
                typeID: typeInput.value,
                lotID: lotInput.value,
                timeID: timeInput.value,
                day: dayInput.value,
                description: descInput.value,
            };
            updateParkingRule(updateUrl, api, ruleData);

        }
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

async function updateParkingRule(url, api, data) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                ruleID: data.ruleID,
                typeID: data.typeID,
                lotID: data.lotID,
                timeID: data.timeID,
                day: data.day,
                desc: data.description,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
    } catch (error) {
        console.log('Error:');
    }
}