<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$password')";

    if(mysqli_query($conn, $sql))
    {
        echo "<h3 style='color: green;'>Form Submitted Successfully!</h3>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    //echo "<P>Name: $name</p>";
    //echo "<P>Email: $email</p>";
    //echo "<P>Password: $password</p>";
}

?>





<html>
    <head>
        <style>
            .City {
                width: 400px;
                margin: 10px;
                padding: 20px;
                border: 1px solid #481fb8;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
        </style>
        <?php include "header.php"; ?><br>
        <title>Form</title>
</head>
<body>
    <leftside>
    <section>
    <div class="City">
    <h1>Form Submission</h1>
    <form method="POST" action="">
        <label>Enter Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Enter Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Enter Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>
</leftside>
    </body>
    </section>

    <?php include "footer.php"; ?>


</html>