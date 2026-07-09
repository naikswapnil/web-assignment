function validateForm()
{

let name=document.getElementById("name").value;
let email=document.getElementById("email").value;
let mobile=document.getElementById("mobile").value;
let event=document.getElementById("event").value;
let city=document.getElementById("city").value;


let valid=true;


document.getElementById("nameError").innerHTML="";
document.getElementById("emailError").innerHTML="";
document.getElementById("mobileError").innerHTML="";
document.getElementById("eventError").innerHTML="";
document.getElementById("cityError").innerHTML="";



// Name Validation

let namePattern=/^[A-Za-z ]{3,50}$/;


if(!namePattern.test(name))
{
document.getElementById("nameError").innerHTML=
"Enter valid name (only alphabets)";
valid=false;
}



// Email Validation

let emailPattern=
/^[^\s@]+@[^\s@]+\.[^\s@]+$/;


if(!emailPattern.test(email))
{
document.getElementById("emailError").innerHTML=
"Enter valid email";
valid=false;
}



// Mobile Validation

let mobilePattern=/^[0-9]{10}$/;


if(!mobilePattern.test(mobile))
{
document.getElementById("mobileError").innerHTML=
"Mobile number must contain 10 digits";
valid=false;
}



// Event Validation

if(event=="")
{
document.getElementById("eventError").innerHTML=
"Select event";

valid=false;
}



// City Validation

if(city=="")
{
document.getElementById("cityError").innerHTML=
"Select city";

valid=false;
}


return valid;


}