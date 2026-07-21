<?php
session_start();//To start the session


$_SESSION["user_id"] = "1";//To set the session variables
$_SESSION["user_name"] = "John Doe";//To set the session variables

echo "Session variables are set.<br><br>  User ID: " . $_SESSION["user_id"] . " ,<br><br> Name: " . $_SESSION["user_name"];

session_unset();//Remove all session variables

session_destroy();//destroy the session

?>