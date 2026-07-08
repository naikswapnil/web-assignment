<?php
include 'connection.php';

if(isset($_POST['full_name']))
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $event_name = $_POST['event_name'];
    $city = $_POST['city'];

    $sql = "INSERT INTO event_registrations
    (full_name,email,mobile,event_name,city)
    VALUES
    ('$full_name','$email','$mobile','$event_name','$city')";

    if(mysqli_query($conn,$sql))
    {
        echo "<h2 style='color:green;text-align:center;'>
        Registration Successful
        </h2>";

        echo "<center><a href='index.php'>Back</a></center>";
    }
    else
    {
        echo "<h2 style='color:red;text-align:center;'>
        Registration Failed
        </h2>";
    }
}

mysqli_close($conn);
?>