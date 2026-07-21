<?php
session_start(); //To start a session


$_SESSION["user_id"] = 1; // Set a session variable for user ID
$_SESSION["name"] = "Suraj More"; // Set a session variable for user name


 
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
echo "Session variables are set. User ID: " . $_SESSION["user_id"] . ", Name: " . $_SESSION["name"];
?>