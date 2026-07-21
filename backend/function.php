<?php 
include "connection.php"; 
if(isset($_POST['submit'])) 
{ 
    $name     = $_POST['name']; 
    $email    = $_POST['email']; 
    $password = $_POST['password']; 
 
    $sql = "INSERT INTO user(name,email,password) 
            VALUES('$name','$email','$password')"; 
 
    if (mysqli_query($conn, $sql)) { 
        echo "<h3 style='color:green;'>Form Submitted Successfully!</h3>"; 
    } else { 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    } 
} 
?> 
 
<html> 
<head> 
    <title>Form Submission</title> 
</head> 
 
<body> 
    <h1>Form Submission</h1> 
    <form method="POST"> 
        <label>Enter Name</label> 
        <input type="text" name="name" required><br><br> 
        <label>Enter Email</label> 
        <input type="email" name="email" required><br><br> 
        <label>Enter Password</label> 
        <input type="password" name="password" required><br><br> 
        <button type="submit" name="submit">Submit</button> 
 
    </form> 
</body> 
 
</html>