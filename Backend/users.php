<?php
session_start();

include "connection.php";
include "header.php";
if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}
 
$sql = "SELECT * FROM users order by id";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    ?>
<section>
    <div class="container mt-5">
        <?php
if(isset($_GET['msg']) && $_GET['msg'] == 'deleted')
{
    echo "<div class='alert alert-success'>
            User deleted successfully.
          </div>";
}
 
if(isset($_GET['msg']) && $_GET['msg'] == 'updated')
{
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> User updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
}
 
        ?>
        <h2>Users List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php
     while($row = mysqli_fetch_assoc($result))
     {
         
     ?>

            <tbody>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['pincode']; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            </tbody>

            <?php
 } 
 ?>
        </table>
    </div>
</section>
<?php
} else {  

echo "<h2 class='text-center mt-5'>No Users Found</h2>";
} ?>