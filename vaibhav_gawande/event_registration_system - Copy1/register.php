<?php

include("connection.php");


if($_SERVER["REQUEST_METHOD"]=="POST")
{


$name=$_POST['full_name'];

$email=$_POST['email'];

$mobile=$_POST['mobile'];

$event=$_POST['event_name'];

$city=$_POST['city'];



// Server Side Validation


if(empty($name)||empty($email)||empty($mobile)||empty($event)||empty($city))
{
    echo "All fields are required";
    exit();
}



if(!preg_match("/^[A-Za-z ]{3,50}$/",$name))
{
    echo "Invalid Name";
    exit();
}



if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "Invalid Email";
    exit();
}



if(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "Invalid Mobile Number";
    exit();
}




$sql="INSERT INTO event_registrations
(full_name,email,mobile,event_name,city)

VALUES

('$name','$email','$mobile','$event','$city')";



if(mysqli_query($conn,$sql))
{

echo "

<h2 style='color:green;text-align:center;'>
Registration Successful!
</h2>

<p style='text-align:center;'>
Thank you $name for registering.
</p>

";

}

else
{

echo "Error : ".mysqli_error($conn);

}


}


?>