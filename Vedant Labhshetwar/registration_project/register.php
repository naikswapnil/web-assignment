<?php

include "connection.php";
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
die("Invalid Email");
}
if(!preg_match("/^[0-9]{10}$/",$mobile))
{
die("Mobile number must be 10 digits");
}
if(strlen($password)<6)
{
die("Password must be at least 6 characters");
}

if(!preg_match("/^[0-9]+$/",$pincode))
{
die("Invalid Pincode");
}
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users(name,email,password,mobile,gender,dob,address,city,state,pincode)
VALUES('$name','$email','$hash','$mobile','$gender','$dob','$address','$city','$state','$pincode')";
if(mysqli_query($conn,$sql))
{
echo "<h2 style='color:green;'>Registration Successful</h2>";
}
else
{
echo mysqli_error($conn);
}

}

?>