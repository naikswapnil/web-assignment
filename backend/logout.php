<?php

session_start();

//Remove all session variables
session_unset();

//destroy the session
session_destroy();

echo "Session destroyed successfully.";

//Redirect to login page
header("Location: login.php");
exit();

?>