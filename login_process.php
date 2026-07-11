<?php

session_start();

include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);
  if(password_verify($password, $row['password']))
    // if(password_verify($password,$row['password']))
    {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        header("Location: dashboard.php");
    }
    else
    {
        echo "Invalid Password";
    }
}
else
{
    echo "Email Not Found";
}

?>