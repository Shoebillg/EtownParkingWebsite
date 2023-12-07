function showParking() {
    
    var selectElement = document.getElementById("badgeType");
    var selectedIndex = selectElement.selectedIndex;
    var selectedOption = selectElement.options[selectedIndex];
    //var badgeType = selectedOption.value;
    var badgeID = selectedOption.id;

    var selectElement = document.getElementById("day");
    var selectedIndex = selectElement.selectedIndex;
    var selectedOption = selectElement.options[selectedIndex];
    //var badgeType = selectedOption.value;
    var dayID = selectedOption.id;

    //var form = document.getElementById("timeForm");
    var time = document.getElementById("appt").value;
    /*if(time == ""){
        setCurrentTime()
    }*/


    // Use the Fetch API to make an HTTP GET request to the PHP file with the name as a query parameter
    fetch(`./classes/getParkingRule.php?id=${encodeURIComponent(badgeID)}&day=${encodeURIComponent(dayID)}&time=${encodeURIComponent(time)}`)
        .then(response => response.text()) // Assuming the response is plain text
        .then(data => {
            //console.log(data); // Log the response from the PHP file
            
            const element = document.getElementById('test');

            // Get the existing content
            const existingContent = "<img src=\"./images/CollegeMap2.png\" alt=\"Map\" usemap=\"#campusMap\" width=\"1094\" height=\"754\" style=\"position:relative\">";

            // Add new content to the existing content
            const newContent = data;
            const updatedContent = existingContent + newContent;

            // Update the content
            element.innerHTML = updatedContent;

            //console.log("TypeID: " + badgeID + " Day: " + dayID + " Time: " + time);

            //document.getElementById("test").innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
        const element = document.getElementById('showLot');
        element.innerHTML = "";

}

// Function to set the default value to the current time
function setCurrentTime() {
    const now = new Date();
    const formattedTime = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}`;
    document.getElementById('appt').value = formattedTime;
}