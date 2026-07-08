<?php 
include "connection.php"; 
if(isset($_POST['submit'])) 
{ 
    $name     = $_POST['name']; 
    $email    = $_POST['email']; 
    $password = $_POST['password']; 
    $mobile =$_POST['mobile'];
    $gender =$_POST['gender'];
    $dob =$_POST['dob']; 
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode =$_POST['pincode'];
    $created_at =$_POST['created_at'];
 
    $sql = "INSERT INTO students(name,email,password,mobile,gender,dob,address,city,state,pincode,created_at) 
            VALUES('$name','$email','$password','$mobile','$gender','$dob','$address','$city','$state','$pincode','$created_at')"; 
 
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
    <?php
    include "header.php"
    ?>
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
         <label>Enter Mobile</label> 
        <input type="number" name="mobile" required><br><br> 
         <label>Enter Gender</label> <br>
        <input type="radio" name="gender" value="Male" required>Male<br><br> 
        <input type="radio" name="gender" value="Female" required>Female<br><br> 
        <label>Enter DOB</label> 
        <input type="date" name="dob" required><br><br> 
         <label>Enter Address</label> 
        <input type="text" name="address" required><br><br> 
         <label>Enter City</label> 
        <input type="text" name="city" required><br><br>  
         <label>Enter State</label> 
        <input type="text" name="state" required><br><br>    
         <label>Enter Pincode</label> 
        <input type="number" name="pincode" required><br><br>  
         <label>Enter Created_at</label> 
        <input type="datetime-local" name="created_at" required><br><br> 
        <button type="submit" name="submit">Submit</button>
    </form> 
</body> 
<?php 
include "footer.php"
?>
</html>