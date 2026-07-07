<?php

require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $mobile = trim($_POST['mobile']);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $pincode = trim($_POST['pincode']);

    // Email Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid Email");
    }

    // Mobile Validation
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        die("Mobile number must be exactly 10 digits");
    }

    // Password Validation
    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    // Pincode Validation
    if (!preg_match("/^[0-9]{6}$/", $pincode)) {
        die("Pincode must be 6 digits");
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users
    (name, email, password, mobile, gender, dob, address, city, state, pincode)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "ssssssssss",
        $name,
        $email,
        $hash,
        $mobile,
        $gender,
        $dob,
        $address,
        $city,
        $state,
        $pincode
    );

    if ($stmt->execute()) {
        echo "<h2 style='color:green;'>Registration Successful</h2>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>