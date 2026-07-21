<?php
include "connection.php";
if(isset($_GET['submit']))
    {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $event_name = $_POST['event_name'];
    $city = $_POST['city'];

    $sql = "INSERT INTO events_registration (full_name, email, mobile, event_name, city) 
           VALUES ('$name', '$email', '$mobile', '$event_name', '$city')";

    if(mysqli_query($conn, $sql)){
    echo "<h3 style='color: green;'>Form Submitted Successfully!</h3>";
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo "<h3 style='color: green;'>Form Submitted Successfully!</h3>";
    //echo "<p>Name: $name</p>";
    //echo "<p>Email: $email</p>";
    //echo "<p>Password: $password</p>";
}

?>


<html>
    <head>
        <title> Form Submission</title>
</head>
<body>
    <h1>Form Submission</h1>
    <form action="event_registration.php" method="POST">
        <label>Enter Name:</label>
        <input type="text" name="full_name" required><br><br>
        <label>Enter Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Enter Mobile:</label>
        <input type="mobile" name="mobile" required><br><br>
        <label>Enter Event Name:</label>
        <input type="text" name="event_name" required><br><br>
        <label>Enter City:</label>
        <input type="text" name="city" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>