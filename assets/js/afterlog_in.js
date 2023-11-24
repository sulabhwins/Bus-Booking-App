function validateForm() {
    var origin = document.getElementById("origin").value;
    var destination = document.getElementById("destination").value;
    var selectedDate = new Date(document.getElementById("date").valueAsNumber);
    var currentDate = new Date();

    if (origin === destination) {
        alert("Origin and destination cannot be the same.");
        return false;
    }

    if (selectedDate < currentDate) {
        alert("Please select a date that is not in the past.");
        return false;
    }

   
    window.location.href = "bus_layout.php";
    return false; 
}