async function showTime(url, api){//when edit, if user change id, also change lot name, badge name, start and end time, cancel button for update
    const fulUrl = url + 'data_src/api/parkingTime/read.php?APIKEY=' + api;
    console.log(fulUrl);   

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('time');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Time ID', 'Start Time', 'End Time', 'Edit', 'Delete']; // Define table headers here

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
    const timeID = document.createElement('td');
    const start = document.createElement('td');
    const end = document.createElement('td');
    const edit = document.createElement('td');
    const del = document.createElement('td');

    timeID.appendChild(document.createTextNode(item.timeID));
    start.appendChild(document.createTextNode(item.startTime));
    end.appendChild(document.createTextNode(item.endTime));

    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', () => {
        
        if (editButton.textContent === 'Edit') {
            /*const timeIDField = document.createElement('input');
            timeIDField.type = 'number';
            timeIDField.value = item.timeID; // Assuming 'name' is the property to edit
            timeID.innerHTML = ''; // Clear the cell content
            timeID.appendChild(timeIDField);*/

            const startField = document.createElement('input');
            startField.type = 'time';
            startField.step = '1';
            startField.value = item.startTime;
            start.innerHTML = '';
            start.appendChild(startField);

            const endField = document.createElement('input');
            endField.type = 'time';
            endField.step = '1';
            endField.value = item.endTime;
            end.innerHTML = '';
            end.appendChild(endField);

            // Update the edit button to a 'Save' button
            editButton.textContent = 'Update';

            startField.addEventListener('change', () => {
                
            });

            endField.addEventListener('change', () => {
                
            });

        }
        else if(editButton.textContent === 'Update'){
       
            // Save functionality here: Get the updated value from the inputField.value
            //const updatedValue = typeIDField.value;
            const startInput = start.querySelector('input');
            const startUpdate = startInput.value;

            const endInput = end.querySelector('input');
            const endUpdate = endInput.value;

            alert(startUpdate +" "+endUpdate);  

            const updateUrl = url + 'data_src/api/parkingTime/update.php';
            console.log(updateUrl);

            //alert(item.timeID + ": " + updatedValue);
            //alert(item.tiemID);
            editButton.textContent = 'Edit';

            //typeID.innerHTML = typeUpdate;
            start.innerHTML = startUpdate;
            end.innerHTML = endUpdate;

            const timeData = {
                timeID: item.timeID,
                startTime: startInput.value,
                endTime: endInput.value,
            };
            //updateParkingTime(updateUrl, api, timeData);

        }
    });
    
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('Button clicked: ' + item.timeID)
        //Call delete api for delete this item
        deletUrl = url + 'data_src/api/parkingTime/delete.php';

        //deleteParkingTime(deletUrl, api, item.timeID)

        // Add functionality to delete button click
        // For example: deleteRow(item.typeID);
        // Replace 'deleteRow' with your delete function and pass necessary parameters
    });
    del.appendChild(deleteButton);

    row.appendChild(timeID);
    row.appendChild(start);
    row.appendChild(end);
    row.appendChild(edit);
    row.appendChild(del);

    tableBody.appendChild(row);
});

        table.appendChild(tableBody);

        const element = document.getElementById('timeTable');
        element.innerHTML = ''; // Clear previous content
        element.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }

}