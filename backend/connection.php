<?php
//Database Configuration
$serevername = "localhost";
$userename = "root";
$password = "";
$database = "student";

//Cerate Connections
$conn = mysqli_connect($serevername,$userename,$password,$database);

//Check Connection
if(!$conn) 
    {
    die("Database Connection Failed:" .mysqli_connect_error());
}
else
    {
       // echo "Database Connected Succcessfully!";

    }
    ?>

    