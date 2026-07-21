<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $event_name = $_POST['event_name'];
        $city = $_POST['city'];

        $sql = "INSERT INTO events_registration 
        (full_name, email, mobile, event_name, city) 
        VALUES ('$full_name', '$email', '$mobile', '$event_name', '$city')";

        if(mysqli_query($conn, $sql))
           {
              echo "<h3 style='color: green;'>Registration Successful!</h3>";
           } 
           else
          {
            echo mysqli_error($conn);
          }

     }

    ?>
