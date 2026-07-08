<?php

$conn = mysqli_connect("localhost","root","","event_management");

if(!$conn)
{
    die("Database Connection Failed: ".mysqli_connect_error());
}

?>