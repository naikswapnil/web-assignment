<?php
include "connection.php";

if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];

    $sql = "DELETE FROM users WHERE id='$id'";

    if(mysqli_query($conn,$sql))
    {
        header("Location: users.php?msg=deleted");
    }
    else
    {
        echo "Delete Failed";
    }
}
else
{
    echo "Invalid Request";
    exit();
}
 


?>