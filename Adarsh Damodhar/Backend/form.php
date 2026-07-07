<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if(mysqli_query($conn, $sql))
    {
        echo "<h2 style='color:green;'>Form submitted successfully!</h2>";
    }
    else
    {
        echo "<h2 style='color:red;'>Error: " . mysqli_error($conn) . "</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'header.php'; ?>

    <title>Form Submission</title>

    <style>
        .city{
            width:50%;
            margin:20px auto;
            padding:20px;
            border:1px solid #ccc;
            border-radius:5px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
        }

        button{
            padding:10px 20px;
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }

        button:hover{
            background:darkgreen;
        }
    </style>
</head>

<body>

<h1 align="center">Form Submission</h1>

<form class="city" method="POST" action="">
    <label>Enter your name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Enter your email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Enter your password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

<?php include 'footer.php'; ?>

</body>
</html>