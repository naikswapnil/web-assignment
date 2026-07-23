<?php

 
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

include "connection.php";

// Read JSON Input
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode([
        "status" => false,
        "message" => "Invalid JSON Data"
    ]);
    exit;
}

 
// Get Data
$name     = trim($data['name'] ?? '');
$email    = trim($data['email'] ?? '');
$password = trim($data['password'] ?? '');
$mobile   = trim($data['mobile'] ?? '');
$gender   = trim($data['gender'] ?? '');
$dob      = trim($data['dob'] ?? '');
$address  = trim($data['address'] ?? '');
$city     = trim($data['city'] ?? '');
$state    = trim($data['state'] ?? '');
$pincode  = trim($data['pincode'] ?? '');

// Validation
if (
    empty($name) ||
    empty($email) ||
    empty($password) ||
    empty($mobile)
) {
    echo json_encode([
        "status" => false,
        "message" => "Required fields are missing."
    ]);
    exit;
}

// Check Email Exists
$check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");

if (mysqli_num_rows($check) > 0) {

    echo json_encode([
        "status" => false,
        "message" => "Email already exists."
    ]);
    exit;
}

// Encrypt Password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert User
$sql = "INSERT INTO users
(name,email,password,mobile,gender,dob,address,city,state,pincode)
VALUES
('$name','$email','$hashedPassword','$mobile','$gender','$dob','$address','$city','$state','$pincode')";

if (mysqli_query($conn, $sql)) {

    echo json_encode([
        "status" => true,
        "message" => "Registration Successful"
    ]);

} else {

    echo json_encode([
        "status" => false,
        "message" => "Registration Failed"
    ]);
}

?>



 