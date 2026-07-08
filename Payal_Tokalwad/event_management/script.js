function validateForm()
{
    let name = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let mobile = document.getElementById("mobile").value.trim();
    let event = document.getElementById("event").value;
    let city = document.getElementById("city").value;

    let namePattern = /^[A-Za-z ]{3,50}$/;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let mobilePattern = /^[0-9]{10}$/;

    if(name=="")
    {
        alert("Full Name is required");
        return false;
    }

    if(!namePattern.test(name))
    {
        alert("Enter valid Full Name");
        return false;
    }

    if(!emailPattern.test(email))
    {
        alert("Enter valid Email");
        return false;
    }

    if(!mobilePattern.test(mobile))
    {
        alert("Mobile Number must be exactly 10 digits");
        return false;
    }

    if(event=="")
    {
        alert("Please select Event Name");
        return false;
    }

    if(city=="")
    {
        alert("Please select City");
        return false;
    }

    return true;
}