<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include "connection.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include "header.php"; ?>

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Registered Users</h2>

            <a href="dashboard.php" class="btn btn-primary">
                Dashboard
            </a>
        </div>

        <table class="table table-bordered table-hover table-striped">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Created At</th>
                </tr>

            </thead>

            <tbody>

                <?php

        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
        ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['mobile']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td><?php echo $row['dob']; ?></td>

                    <td><?php echo $row['address']; ?></td>

                    <td><?php echo $row['city']; ?></td>

                    <td><?php echo $row['state']; ?></td>

                    <td><?php echo $row['pincode']; ?></td>

                    <td><?php echo $row['created_at']; ?></td>

                </tr>

                <?php
            }
        }
        else
        {
        ?>

                <tr>
                    <td colspan="11" class="text-center text-danger">
                        No Users Found
                    </td>
                </tr>

                <?php
        }
        ?>

            </tbody>

        </table>

    </div>

</body>

</html>