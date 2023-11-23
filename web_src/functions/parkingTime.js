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
    editButton.classList.add("edit");

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
            updateParkingTime(updateUrl, api, timeData);

        }
    });
    
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add("delete");

    deleteButton.addEventListener('click', () => {

        alert('Delete Button clicked')
        //Call delete api for delete this item
        deletUrl = url + 'data_src/api/parkingTime/delete.php';

        deleteParkingTime(deletUrl, api, item.timeID)

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

async function updateParkingTime(url, api, data) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                timeID: data.timeID,
                startTime: data.startTime,
                endTime: data.endTime,
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

async function deleteParkingTime(url, api, timeID) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                
                // Add other necessary headers here
            },
            body: JSON.stringify({
                timeID: timeID,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
        if('Time ID is used in parkingRule table.' === responseData.message){
            alert('Time ID is used in parkingRule table.\nCannot delete!');
        }
        else{
            alert('Time Deleted!');
        }
    } catch (error) {
        console.log('Error:');
    }
}


function addTime(url, api){
    //alert("Rule will add");
    const addTimeBox = document.getElementById('addTimeBox');
    addTimeBox.innerHTML = ''; // Clear previous content
    //element.innerHTML = '<button>Hello</button>';

    var startLabel = document.createElement("label");
    startLabel.innerHTML = "Start Time: ";

    var startBox = document.createElement("input");
    startBox.setAttribute("type", "time");
    startBox.setAttribute("id", "startTime");
    startBox.setAttribute("step", "1");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    startLabel.setAttribute("for", "startLabe");
    addTimeBox.appendChild(startLabel);
    addTimeBox.appendChild(startBox);

    var endLabel = document.createElement("label");
    endLabel.innerHTML = "End Time: ";

    var endBox = document.createElement("input");
    endBox.setAttribute("type", "time");
    endBox.setAttribute("id", "endTime");
    endBox.setAttribute("step", "1");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    endLabel.setAttribute("for", "endLabel");

    addTimeBox.appendChild(startLabel);
    addTimeBox.appendChild(startBox);
    addTimeBox.appendChild(endLabel);
    addTimeBox.appendChild(endBox);

    var addButton = document.createElement("button");
    addButton.innerHTML = "Add";
    addTimeBox.appendChild(addButton);

    function handleClick() {
        var startInput = startBox.value;
        var endInput = endBox.value;

        if(!startInput || !endInput){
            alert('Please enter all info');
        }
        else{
            //alert("Name: " + nameInput + " Image: "+ imageInput +"Top: " + topInput +" Side: " + sideInput);
            updateUrl = url + 'data_src/api/parkingTime/create.php';
            addParkingTime(updateUrl, api, startInput, endInput);
        }
      }
      
      // Add click event listener to the button
      if (addButton.addEventListener) {
        addButton.addEventListener("click", handleClick);
      } else if (addButton.attachEvent) {
        addButton.attachEvent("onclick", handleClick);
      }
}

async function addParkingTime(url, api, startTime, endTime){

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                startTime: startTime,
                endTime: endTime,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
        alert('Lot Added!');
    } catch (error) {
        console.log('Error:');
    }

}