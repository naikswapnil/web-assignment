<?php
session_start();
include "connection.php";

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check ID
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    // Delete query
    $sql = "DELETE FROM user WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: users.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }

} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>