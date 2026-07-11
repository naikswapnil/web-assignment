<?php
// Database Configuration
$servername = "localhost";
$username   = "root";
$password   = "root";
$database   =  "students";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
    die(" Database Connection Failed: " . mysqli_connect_error());
}
else
{
    // echo "Database Connected Successfully!";
}


 