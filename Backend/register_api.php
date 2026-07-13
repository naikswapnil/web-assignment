<?php

header("Content-Type: application/json");

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



<!-- 
+------------------------+------------------+----------------------------------------------+
| Frontend Technology | Can Use PHP API? | How |
+------------------------+------------------+----------------------------------------------+
| HTML + JavaScript | Yes | fetch() or XMLHttpRequest |
| Bootstrap | Yes | Bootstrap is only for UI; use JavaScript |
| | | (fetch() or AJAX) to call the API |
| jQuery | Yes | $.ajax() or $.post() |
| React.js | Yes | fetch() or axios |
| Angular | Yes | HttpClient |
| Vue.js | Yes | axios or fetch() |
| Next.js | Yes | fetch() or axios |
| Nuxt.js | Yes | fetch() or axios |
| Flutter | Yes | http package |
| React Native | Yes | fetch() or axios |
| Android (Java/Kotlin) | Yes | Retrofit, Volley, or OkHttp |
| iOS (Swift) | Yes | URLSession |
| Ionic | Yes | Angular HttpClient |
| .NET (Frontend) | Yes | HttpClient |
+------------------------+------------------+----------------------------------------------+

Conclusion:
A PHP API can be consumed by any frontend technology or mobile application
that can send HTTP requests (GET, POST, PUT, DELETE) and process JSON
responses. The frontend and backend communicate through REST APIs over HTTP.
 -->