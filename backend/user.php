<?php
session_start();

include "connection.php";

if(!isset($_SESSION['user_id']))
{
    header("location: login.php");
    exit();
}

$sql = "SELECT * FROM user ORDER BY id";

$result = mysqli_query($conn, $sql);

?>

<section>
<div class="container mt-5">

<h2 class="text-center">Users List</h2>

<table class="table table-bordered">

<thead>
<tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>mobile</th>
    <th>gender</th>
    <th>dob</th>
    <th>address</th>
    <th>city</th>
    <th>state</th>
    <th>pincode</th>
    <th>created_at</th>
</tr>
</thead>

<tbody>

<?php

if(mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['password']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td><?php echo $row['dob']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['city']; ?></td>

<td><?php echo $row['state']; ?></td>

<td><?php echo $row['pincode']; ?></td>

<td>

<a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">
    Edit
</a>


<a href="delete_user.php?id=<?php echo $row['id']; ?>" 
class="btn btn-sm btn-danger"
onclick="return confirm('Are you sure you want to delete this user?')">
Delete
</a>

</td>

</tr>

<?php

    }

}
else
{

echo "<tr><td colspan='8' class='text-center'>No User Found</td></tr>";

}

?>

</tbody>

</table>

</div>
</section>

//test