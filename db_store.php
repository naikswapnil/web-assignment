<?php
include 'db.php';

if(isset($_POST['submit']))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<h3 style='color:green;'>User Added Successfully!</h3>";
    }
    else
    {
        echo "Error : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
</head>

<body>

    <h2>User Registration Form</h2>

    <form method="POST">

        <label>Name</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="submit">Submit</button>

    </form>

</body>

</html>