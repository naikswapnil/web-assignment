<?php

include "connection.php";


if(!isset($_POST['id']))
{
    die("User ID Not Found");
}


$id = intval($_POST['id']);

$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];



$sql = "UPDATE user SET
        mobile=?,
        gender=?,
        dob=?,
        address=?,
        state=?,
        city=?,
        pincode=?
        WHERE id=?";


$stmt = mysqli_prepare($conn, $sql);


mysqli_stmt_bind_param(
    $stmt,
    "sssssssi",
    $mobile,
    $gender,
    $dob,
    $address,
    $state,
    $city,
    $pincode,
    $id
);



if(mysqli_stmt_execute($stmt))
{
    header("Location: user.php?msg=updated");
    exit();
}
else
{
    echo "Update Failed: " . mysqli_error($conn);
}


mysqli_stmt_close($stmt);
mysqli_close($conn);

?>