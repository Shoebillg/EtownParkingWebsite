async function showLot(url, api){//change user can updload image

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

        if(editButton.textContent === 'Edit'){

            editButton.textContent = 'Update';

    
            const lotNameField = document.createElement('input');
            lotNameField.type = 'text';
            lotNameField.value = item.lotName; // Assuming 'name' is the property to edit
            name.innerHTML = ''; // Clear the cell content
            name.appendChild(lotNameField);
            
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

            lotNameField.addEventListener('change', () =>{

            });

            editButton.textContent = 'Update';
        }

        else if(editButton.textContent === 'Update'){
       
            // Save functionality here: Get the updated value from the inputField.value
            const updatedValue = typeIDField.value;
            //const lotNameInput = name.querySelector('input');
            //const lotNameUpdate = lotNameInput.value;

            //const imageInput = image.querySelector('input');
            //const imageUpdate = imageInput.value;

            //const sideInput = side.querySelector('input');
            //const sideUpdate = sideInput.value;

            //const topInput = top.querySelector('input');
            //const topUpdate = topInput.value;            
            const lotNameInput = name.querySelector('input').value;
            const imageInput = image.querySelector('input').value;
            const sideInput = side.querySelector('input').value;
            const topInput = top.querySelector('input').value;

            alert(lotNameUpdate +" "+imageUpdate +" "+sideUpdate +" "+topUpdate);  

            const updateUrl = url + 'data_src/api/parkingLot/update.php';
            console.log(updateUrl);

            alert(item.ruleID + ": " + updatedValue);
            alert(item.ruleID);
            editButton.textContent = 'Edit';

            //name.innerHTML = lotNameUpdate;
            //image.innerHTML = imageUpdate;
            //side.innerHTML = sideUpdate;
            //top.innerHTML = topUpdate;

            //const lotData = {
                //lotID: item.lotID,
                //lotName: lotNameInput.value,
                //image: imageInput.value,
                //side: sideInput.value,
                //top: topInput.value,
            //};
            //updateParkingLot(updateUrl, api, lotData);
            // Get updated values from input fields
              
            // Make an API call to update data
            const updatedLotData = {
                lotID: item.lotID,
                lotName: lotNameInput,
                image: imageInput,
                side: sideInput,
                top: topInput,};
            updateParkingLot(updateUrl, api, updatedLotData);}});
    
    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        //alert('Delete Button clicked')
        //Call delete api for delete this item
        deleteUrl = url + 'data_src/api/parkingLot/delete.php';
        console.log(deleteUrl);
        deleteParkingLot(deleteUrl, api, item.lotID);

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

async function updateParkingLot(url, api, data) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                lotID: data.lotID,
                lotName: data.lotName,
                image: data.image,
                side: data.side,
                top: data.top,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
        
        // Update the UI based on the API response
        // For example, if the response is successful, you might inform the user or refresh the data displayed
        // Example: Reload the data after successful update
        if (response.ok) {
            // Call the function to refresh the displayed data after update
            showLot(url, api);
        } else {
            // Handle failed update here (optional)
        }
    } catch (error) {
        console.log('Error:', error);
        // Handle error (optional)
    }
    alert('Lot Updated!');
}

async function deleteParkingLot(url, api, lotID) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                
                // Add other necessary headers here
            },
            body: JSON.stringify({
                lotID: lotID,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server

        console.log("Response Message:", responseData.message);

        if('Lot ID is used in parkingRule table.' === responseData.message){
            alert('Lot ID is used in parkingRule table.\nCannot delete!');
        }
        else{
            alert('Lot Deleted!');
        }
    } catch (error) {
        console.log('Error:');
    }
}

//add lot
function addLot(url, api){
    //alert("Rule will add");
    const addLotBox = document.getElementById('addLotBox');
    addLotBox.innerHTML = ''; // Clear previous content
    //element.innerHTML = '<button>Hello</button>';

    var nameLabel = document.createElement("label");
    nameLabel.innerHTML = "Lot Name: ";

    var nameBox = document.createElement("input");
    nameBox.setAttribute("type", "text");
    nameBox.setAttribute("id", "nameText");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    nameLabel.setAttribute("for", "nameLabe");
    addLotBox.appendChild(nameLabel);
    addLotBox.appendChild(nameBox);

    var imageLabel = document.createElement("label");
    imageLabel.innerHTML = "Image: ";

    var imageBox = document.createElement("input");
    imageBox.setAttribute("type", "text");
    imageBox.setAttribute("id", "imageText");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    imageLabel.setAttribute("for", "imageLabel");
    
    var sideLabel = document.createElement("label");
    sideLabel.innerHTML = "Side: ";

    var sideBox = document.createElement("input");
    sideBox.setAttribute("type", "number");
    sideBox.setAttribute("id", "sideNumber");
    //typeInput.setAttribute("placeholder", "Enter a number...");

    sideLabel.setAttribute("for", "sideLabel");
    
    var topLabel = document.createElement("label");
    topLabel.innerHTML = "Top:";

    // Create a text box (input element)
    var topBox = document.createElement("input");
    topBox.setAttribute("type", "number");
    topBox.setAttribute("id", "topNumber");
    //typeIDBox.setAttribute("placeholder", "Enter text...");
    topLabel.setAttribute("for", "topNumber");

    addLotBox.appendChild(nameLabel);
    addLotBox.appendChild(nameBox);
    addLotBox.appendChild(imageLabel);
    addLotBox.appendChild(imageBox);
    addLotBox.appendChild(sideLabel);
    addLotBox.appendChild(sideBox);
    addLotBox.appendChild(topLabel);
    addLotBox.appendChild(topBox);

    var addButton = document.createElement("button");
    addButton.innerHTML = "Add";
    addLotBox.appendChild(addButton);

    function handleClick() {
        var nameInput = nameBox.value;
        var imageInput = imageBox.value;
        var sideInput = sideBox.value;
        var topInput = topBox.value;

        if(!nameInput || !imageInput || !sideInput || !topInput){
            alert('Please enter all info');
        }
        else{
            //alert("Name: " + nameInput + " Image: "+ imageInput +"Top: " + topInput +" Side: " + sideInput);
            updateUrl = url + 'data_src/api/parkingLot/create.php';
            addParkingLot(updateUrl, api, nameInput, imageInput, sideInput, topInput);
        }
      }
      
      // Add click event listener to the button
      if (addButton.addEventListener) {
        addButton.addEventListener("click", handleClick);
      } else if (addButton.attachEvent) {
        addButton.attachEvent("onclick", handleClick);
      }
}

async function addParkingLot(url, api, lotName, image, side, top){

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                lotName: lotName,
                image: image,
                side: side,
                top: top,
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