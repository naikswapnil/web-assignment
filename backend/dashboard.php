<?php

session_start();

if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name']))
{
    header("Location: login.php");
    exit();
}

?>

<h2>
Welcome, <?php echo $_SESSION['user_name']; ?>!
</h2>

<p>Login successful!</p>