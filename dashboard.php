<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body> -->
<?php include 'header.php'; ?>

<section>

    <div class="container mt-5 mb-5">

        <h2>Welcome, <?php echo $_SESSION['name']; ?></h2>

        <p class="text-success">Login Successful!</p>

        <div class="card mt-4">
            <div class="card-body">
                <h4>Dashboard</h4>
                <p>This is your dashboard page.</p>
            </div>
        </div>

    </div>
</section>
<!-- </body> -->
<?php include 'footer.php'; ?>