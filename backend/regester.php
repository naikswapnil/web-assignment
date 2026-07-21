<?php
include "connection.php";

if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);

    $check = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already exists');</script>";
    } else {

        $sql = "INSERT INTO user
        (name,email,password,mobile,gender,dob,address,city,state,pincode)
        VALUES
        ('$name','$email','$password','$mobile','$gender','$dob','$address','$city','$state','$pincode')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Registration Successful');
                    window.location='login.php';
                  </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="col-md-6 mx-auto">

        <h2 class="text-center mb-4">User Registration</h2>

        <form method="POST">

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="mb-3">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
            </div>

            <div class="mb-3">
                <label>Gender:</label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <div class="mb-3">
                <input type="date" name="dob" class="form-control" required>
            </div>

            <div class="mb-3">
                <textarea name="address" class="form-control" placeholder="Address" required></textarea>
            </div>

            <div class="mb-3">
                <input type="text" name="city" class="form-control" placeholder="City" required>
            </div>

            <div class="mb-3">
                <input type="text" name="state" class="form-control" placeholder="State" required>
            </div>

            <div class="mb-3">
                <input type="text" name="pincode" class="form-control" placeholder="Pincode" required>
            </div>

            <button type="submit" name="register" class="btn btn-primary w-100">
                Register
            </button>

        </form>

    </div>
</div>

</body>
</html>