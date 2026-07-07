<?php

include "connection.php";

if(isset($_POST['submit']))
{
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $event_name = trim($_POST['event_name']);
    $city = trim($_POST['city']);

    // Server Side Validation

    if(empty($full_name) || empty($email) || empty($mobile) || empty($event_name) || empty($city))
    {
        die("<h2 style='color:red;text-align:center;'>All Fields are Required.</h2>");
    }

    if(!preg_match("/^[A-Za-z ]{3,50}$/",$full_name))
    {
        die("<h2 style='color:red;text-align:center;'>Invalid Name.</h2>");
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        die("<h2 style='color:red;text-align:center;'>Invalid Email.</h2>");
    }

    if(!preg_match("/^[0-9]{10}$/",$mobile))
    {
        die("<h2 style='color:red;text-align:center;'>Mobile Number must be exactly 10 digits.</h2>");
    }

    $sql = "INSERT INTO event_registrations(full_name,email,mobile,event_name,city)
            VALUES('$full_name','$email','$mobile','$event_name','$city')";

    if(mysqli_query($conn,$sql))
    {
?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Successful</title>

<style>

body{
font-family:Arial;
background:#f2f2f2;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 0 10px gray;
text-align:center;
}

a{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:green;
color:white;
text-decoration:none;
border-radius:5px;
}

a:hover{
background:darkgreen;
}

</style>

</head>

<body>

<div class="box">

<h1 style="color:green;">Registration Successful!</h1>

<p>Your event registration has been saved successfully.</p>

<a href="index.html">Register Another Event</a>

</div>

</body>
</html>

<?php
    }
    else
    {
        echo "<h2 style='color:red;text-align:center;'>Registration Failed.</h2>";
        echo mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>