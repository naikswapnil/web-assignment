<?php

include "connection.php";

$id = $_POST['id'];
$mobile = $_POST['mobile']; 
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];

$sql = "UPDATE users SET
mobile='$mobile',
gender='$gender',
dob='$dob',
address='$address',
state='$state',
city='$city',
pincode='$pincode'
WHERE id='$id'";

if(mysqli_query($conn,$sql))
{
    header("Location: users.php?msg=updated");
}
else
{
    echo "Update Failed";
}


?>