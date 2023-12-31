
async function showRule(url, api){//when edit, if user change id, also change lot name, badge name, start and end time, cancel button for update
    const fulUrl = url + 'data_src/api/parkingRule/read.php?APIKEY=' + api;
    //console.log(fulUrl);   

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        //console.log(data); // Log the response from the PHP file

        const table = document.createElement('rule');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Rule ID', 'TypeID', 'Badge Type', 'Lot ID', 'Lot Name', 'Time ID', 'Start Time', 'End Time', 'Day', 'Description', 'Edit', 'Delete']; // Define table headers here

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
    const typeName = document.createElement('td');
    const lotID = document.createElement('td');
    const lotName = document.createElement('td');
    const timeID = document.createElement('td');
    const startTime = document.createElement('td');
    const endTime = document.createElement('td');
    const day = document.createElement('td');
    const description = document.createElement('td');
    const edit = document.createElement('td');
    const del = document.createElement('td');

    ruleID.appendChild(document.createTextNode(item.ruleID));
    typeID.appendChild(document.createTextNode(item.typeID));
    typeName.appendChild(document.createTextNode(item.name));
    lotID.appendChild(document.createTextNode(item.lotID));
    lotName.appendChild(document.createTextNode(item.lotName));
    timeID.appendChild(document.createTextNode(item.timeID));
    startTime.appendChild(document.createTextNode(item.startTime));
    endTime.appendChild(document.createTextNode(item.endTime));
    day.appendChild(document.createTextNode(item.day));
    description.appendChild(document.createTextNode(item.description));


    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.classList.add("edit");

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
            //alert(typeUpdate +" "+lotUpdate +" "+timeUpdate +" "+dayUpdate +descUpdate);  

            const updateUrl = url + 'data_src/api/parkingRule/update.php';
            //console.log(updateUrl);

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
    deleteButton.classList.add("delete");

    deleteButton.addEventListener('click', () => {

        //alert('Button clicked: ' + item.ruleID)
        //Call delete api for delete this item
        deletUrl = url + 'data_src/api/parkingRule/delete.php';

        deleteParkingRule(deletUrl, api, item.ruleID)

        // Add functionality to delete button click
        // For example: deleteRow(item.typeID);
        // Replace 'deleteRow' with your delete function and pass necessary parameters
    });
    del.appendChild(deleteButton);

    row.appendChild(ruleID);
    row.appendChild(typeID);
    row.appendChild(typeName);
    row.appendChild(lotID);
    row.appendChild(lotName);
    row.appendChild(timeID);
    row.appendChild(startTime);
    row.appendChild(endTime);
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
        //console.log(responseData); // Log the response from the server
        alert('Rule Updated');
        const table = document.getElementById('ruleTable');
        const button = document.getElementById('showRule');
        table.style.display = 'none';
        button.textContent = 'Show Table!';
        ruleTableVisible = !ruleTableVisible;
    } catch (error) {
        console.log('Error:');
    }
}

async function deleteParkingRule(url, api, ruleID) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                
                // Add other necessary headers here
            },
            body: JSON.stringify({
                ruleID: ruleID,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        //console.log(responseData); // Log the response from the server
        alert('Rule Deleted!');
        const table = document.getElementById('ruleTable');
        const button = document.getElementById('showRule');
        table.style.display = 'none';
        button.textContent = 'Show Table!';
        ruleTableVisible = !ruleTableVisible;
    } catch (error) {
        console.log('Error:');
    }
}

//add rule
function addRule(url, api){
    //alert("Rule will add");
    const addRuleBox = document.getElementById('addRuleBox');
    addRuleBox.innerHTML = ''; // Clear previous content
    //element.innerHTML = '<button>Hello</button>';

    var typeLabel = document.createElement("label");
    typeLabel.innerHTML = "Type ID: ";

    var typeBox = document.createElement("input");
    typeBox.setAttribute("type", "number");
    typeBox.setAttribute("id", "typeNumber");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    typeLabel.setAttribute("for", "typeLabe");
    addRuleBox.appendChild(typeLabel);
    addRuleBox.appendChild(typeBox);

    var lotLabel = document.createElement("label");
    lotLabel.innerHTML = "Lot ID: ";

    var lotBox = document.createElement("input");
    lotBox.setAttribute("type", "number");
    lotBox.setAttribute("id", "lotNumber");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    lotLabel.setAttribute("for", "lotLabel");
    
    var timeLabel = document.createElement("label");
    timeLabel.innerHTML = "Time ID: ";

    var timeBox = document.createElement("input");
    timeBox.setAttribute("type", "number");
    timeBox.setAttribute("id", "timeNumber");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    timeLabel.setAttribute("for", "timeLabel");
    
    var dayLabel = document.createElement("label");
    dayLabel.innerHTML = "Day:";

    // Create a text box (input element)
    var dayBox = document.createElement("input");
    dayBox.setAttribute("type", "text");
    dayBox.setAttribute("id", "dayText");
    //typeIDBox.setAttribute("placeholder", "Enter text...");
    dayLabel.setAttribute("for", "dayText");

    var descLabel = document.createElement("label");
    descLabel.innerHTML = " Description:";

    // Create a text box (input element)
    var descBox = document.createElement("input");
    descBox.setAttribute("type", "text");
    descBox.setAttribute("id", "dayText");
    //typeIDBox.setAttribute("placeholder", "Enter text...");
    descLabel.setAttribute("for", "descText");

    addRuleBox.appendChild(typeLabel);
    addRuleBox.appendChild(typeBox);
    addRuleBox.appendChild(lotLabel);
    addRuleBox.appendChild(lotBox);
    addRuleBox.appendChild(timeLabel);
    addRuleBox.appendChild(timeBox);
    addRuleBox.appendChild(dayLabel);
    addRuleBox.appendChild(dayBox);
    addRuleBox.appendChild(descLabel);
    addRuleBox.appendChild(descBox);

    var addButton = document.createElement("button");
    addButton.innerHTML = "Add";
    addRuleBox.appendChild(addButton);

    function handleClick() {
        var typeInput = typeBox.value;
        var lotInput = lotBox.value;
        var timeInput = timeBox.value;
        var dayInput = dayBox.value;
        var descInput = descBox.value;
        if(!typeInput || !lotInput || !timeInput || !dayInput){

            var text = 'Please enter:';
            if(!typeInput){
                if(!lotInput || !timeInput || !dayInput){
                    text = text + ' Type ID,';
                }
                else{
                    text = text + ' Type ID';
                }
            }
            if(!lotInput){
                if(!timeInput || !dayInput){
                    text = text + ' Lot ID,';
                }
                else{
                    text = text + ' Lot ID';
                }
            }
            if(!timeInput){
                if(!dayInput){
                    text = text + ' Time ID,';
                }
                else{
                    text = text + ' Time ID';
                }
            }
            if(!dayInput){
                text = text + ' Day';
            }
            alert(text);
            //alert('Please enter all info');
        }
        else{
            //alert("Type: " + typeInput + " Lot: "+ lotInput +"Time ID: " + timeInput +" Day: " + dayInput + " Description: " + descInput);
            updateUrl = url + 'data_src/api/parkingRule/create.php';
            addParkingRule(updateUrl, api, typeInput, lotInput, timeInput, dayInput, descInput);
        }
      }
      
      // Add click event listener to the button
      if (addButton.addEventListener) {
        addButton.addEventListener("click", handleClick);
      } else if (addButton.attachEvent) {
        addButton.attachEvent("onclick", handleClick);
      }
}

async function addParkingRule(url, api, typeID, lotID, timeID, day, description){

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                typeID: typeID,
                lotID: lotID,
                timeID: timeID,
                day: day,
                desc: description,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        //console.log(responseData); // Log the response from the server
        alert(responseData.message);
        
    } catch (error) {
//        console.log('Error:');
        alert('Rule cannot be added!\nError!');

    }

}