function validateForm() {

    let name = document.getElementById("full_name").value.trim();
    let email = document.getElementById("email").value.trim();
    let mobile = document.getElementById("mobile").value.trim();
    let event = document.getElementById("event_name").value;
    let city = document.getElementById("city").value;

    // Name Validation
    let namePattern = /^[A-Za-z ]{3,50}$/;

    if(name == ""){
        alert("Please enter your full name");
        return false;
    }

    if(!namePattern.test(name)){
        alert("Name should contain only alphabets and spaces (3-50 characters)");
        return false;
    }

    // Email Validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!emailPattern.test(email)){
        alert("Please enter a valid email address");
        return false;
    }

    // Mobile Validation
    let mobilePattern = /^[0-9]{10}$/;

    if(!mobilePattern.test(mobile)){
        alert("Mobile number must be exactly 10 digits");
        return false;
    }

    // Event Validation
    if(event == ""){
        alert("Please select an event");
        return false;
    }

    // City Validation
    if(city == ""){
        alert("Please select a city");
        return false;
    }

    return true;
}