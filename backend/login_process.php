<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        // Plain text password check
        if ($password == $row['password']) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];   // किंवा username

            header("Location: user.php");
            exit();

        } else {

            echo "<script>
                    alert('Invalid Password');
                    window.location='login.php';
                  </script>";
        }

    } else {

        echo "<script>
                alert('Email Not Found');
                window.location='login.php';
              </script>";
    }

} else {

    header("Location: login.php");
    exit();
}
?>