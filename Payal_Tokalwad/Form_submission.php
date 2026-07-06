<?php
include "connection.php";

if (isset($_POST['submit']))
    {
        $name =$_POST['name'];
        $email =$_POST['email'];
        $password =$_POST['password'];

        $sql = "INSERT INTO user 
        (name,email,password)
        VALUES('$name','$email','$password')";

        if (mysqli_query($conn,$sql))
            {
                echo "<h3 style='color : green;'> form submitted successfully </h3>";

            }else {
                echo "error: " . $sql . "<br>" . mysqli_error($conn);
            }
    }

?>
<html>
<head>
 <title>Form submission</title>
</head>
<body> 
    
        <h1> form submission</h1>
        <form method= "POST">
        <label> enter name </label>
        <input type="text" name="name" id="name" require><br>

         <label> enter email </label>
        <input type="email" name="email" id="email" require><br>

         <label> enter password </label>
        <input type="password" name="password" id="password" require><br>

        <button type="submit">submit</button>
        </div>
   
</body>
</html>