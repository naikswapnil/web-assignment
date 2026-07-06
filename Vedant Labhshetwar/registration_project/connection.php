<?php
$conn = mysqli_connect("localhost","root","","students");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>