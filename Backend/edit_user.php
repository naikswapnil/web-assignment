<?php



include "connection.php";
include "header.php";

$id= $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);
}
else
{
    echo "<h2 class='text-center mt-5'>User Not Found</h2>";
    exit();
}

?>

<section>

    <div class="container mt-5">
        <h1 class="text-center">Update User</h1>
        <fieldset>
            <form class="text-center" action="update_user.php" method="POST"
                style="border: 1px solid black; padding: 20px;margin:10px;">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Enter Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" readonly><br><br>
                <label>Enter Email</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" readonly><br><br>

                <label>Mobile Number</label><br>
                <input type="tel" name="mobile" pattern="[0-9]{10}" maxlength="10"
                    value="<?php echo $row['mobile']; ?>">
                <br><br>

                <label>Gender</label><br>

                <input type="radio" name="gender" value="Male" <?= ($row['gender'] == 'Male') ? 'checked' : ''; ?>> Male

                <input type="radio" name="gender" value="Female" <?= ($row['gender'] == 'Female') ? 'checked' : ''; ?>>
                Female

                <input type="radio" name="gender" value="Other" <?= ($row['gender'] == 'Other') ? 'checked' : ''; ?>>
                Other
                <br> <br>

                <label>Date of Birth</label><br>
                <input type="date" name="dob" value="<?= $row['dob']; ?>">
                <br><br>

                <label>Address</label><br>
                <textarea name="address" rows="4" cols="30"><?= $row['address']; ?></textarea>
                <br><br>

                <label>City</label><br>
                <input type="text" name="city" value="<?php echo $row['city']; ?>">
                <br><br>

                <label>State</label><br>
                <input type="text" name="state" value="<?php echo $row['state']; ?>">
                <br><br>

                <label>Pincode</label><br>
                <input type="text" name="pincode" pattern="[0-9]{6}" maxlength="6"
                    value="<?php echo $row['pincode']; ?>" required>
                <br><br>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>


            </form>
        </fieldset>

    </div>

</section>