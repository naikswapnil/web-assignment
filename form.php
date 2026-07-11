<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $mobile   = $_POST['mobile'];
    $gender   = $_POST['gender'];
    $dob      = $_POST['dob'];
    $city     = $_POST['city'];
    $state    = $_POST['state'];
    $pincode  = $_POST['pincode'];
    $address  = $_POST['address'];


    $sql = "INSERT INTO users(name,email,password,mobile,gender,dob,city,state,pincode,address,created_at)
            VALUES('$name','$email','$password','$mobile','$gender','$dob','$city','$state','$pincode','$address', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "<h3 style='color:green;'>Form Submitted Successfully!</h3>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>

<html>

<head>

    <style>
    section {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0 40px 0;
    }

    .city {
        width: 50%;
        margin: 10px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    form input,
    form textarea,
    input:not([type="radio"]),
    form select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    input[type="radio"] {
        width: auto;
        margin-right: 5px;
    }
    </style>
    <?php include "header.php"; ?>
    <title>Form Submission</title>
</head>

<body>
    <section>
        <div class="city">
            <h1 style="text-align: center;">Registration Form</h1>
            <form method="POST">
                <label>Enter Name</label>
                <input type="text" name="name" required><br><br>
                <label>Enter Email</label>
                <input type="email" name="email" required><br><br>
                <label>Enter Password</label>
                <input type="password" name="password" required><br><br>
                <label>Mobile Number</label><br>
                <input type="tel" name="mobile" pattern="[0-9]{10}" maxlength="10" required>
                <br><br>

                <label>Gender</label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <br><br>

                <label>Date of Birth</label><br>
                <input type="date" name="dob" required>
                <br><br>

                <label>Address</label><br>
                <textarea name="address" rows="4" cols="30" required></textarea>
                <br><br>

                <label>City</label><br>
                <input type="text" name="city" required>
                <br><br>

                <label>State</label><br>
                <input type="text" name="state" required>
                <br><br>

                <label>Pincode</label><br>
                <input type="text" name="pincode" pattern="[0-9]{6}" maxlength="6" required>
                <br><br>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </section>
</body>

<?php include "footer.php"; ?>

</html>