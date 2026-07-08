<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "event_management";

 $conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $event_name = trim($_POST['event_name']);
    $city = trim($_POST['city']);

    if (empty($full_name) || empty($email) || empty($mobile) || empty($event_name) || empty($city)) {
        die("All fields are required.");
    }

    $sql = "INSERT INTO event_registration (full_name, email, mobile, event_name, city)
            VALUES ('$full_name', '$email', '$mobile', '$event_name', '$city')";

    if(mysqli_query($conn, $sql)) {
        echo "<h2 style='color:green;text-align:center;'>Registration Successful!</h2>";
    } else {
        echo "<h2 style='color:red;text-align:center;'>Error: " . mysqli_error($conn) . "</h2>";
    }
}

mysqli_close($conn);

?>