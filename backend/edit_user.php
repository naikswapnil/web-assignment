<?php

include "connection.php";
include "header.php";


if(!isset($_SESSION['user_id']))
{
    header("location: login.php");
    exit();
}


if(!isset($_GET['id']))
{
    die("User ID Not Found");
}


$id = intval($_GET['id']);

$sql = "SELECT * FROM user WHERE id = $id";

$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
}
else
{
    die("User Not Found");
}

?>

<section>

<div class="container mt-5">

<h1 class="text-center">Update User</h1>


<fieldset>

<form class="text-center" action="update_user.php" method="POST"
style="border:1px solid black; padding:20px; margin:10px;">


<input type="hidden" name="id" value="<?php echo $row['id']; ?>">


<label>Enter Name</label><br>

<input type="text" 
name="name" 
value="<?php echo $row['name']; ?>" 
readonly>

<br><br>



<label>Enter Email</label><br>

<input type="email" 
name="email" 
value="<?php echo $row['email']; ?>" 
readonly>

<br><br>



<label>Mobile Number</label><br>

<input type="tel" 
name="mobile" 
pattern="[0-9]{10}" 
maxlength="10"
value="<?php echo $row['mobile']; ?>">

<br><br>



<label>Gender</label><br>


<input type="radio" 
name="gender" 
value="Male"
<?php echo ($row['gender']=="Male") ? "checked" : ""; ?>>
Male


<input type="radio" 
name="gender" 
value="Female"
<?php echo ($row['gender']=="Female") ? "checked" : ""; ?>>
Female


<input type="radio" 
name="gender" 
value="Other"
<?php echo ($row['gender']=="Other") ? "checked" : ""; ?>>
Other


<br><br>




<label>Date of Birth</label><br>

<input type="date" 
name="dob" 
value="<?php echo $row['dob']; ?>">

<br><br>




<label>Address</label><br>

<textarea name="address" rows="4" cols="30"><?php echo $row['address']; ?></textarea>

<br><br>




<label>City</label><br>

<input type="text" 
name="city"
value="<?php echo $row['city']; ?>">

<br><br>




<label>State</label><br>

<input type="text" 
name="state"
value="<?php echo $row['state']; ?>">

<br><br>




<label>Pincode</label><br>

<input type="text"
name="pincode"
pattern="[0-9]{6}"
maxlength="6"
value="<?php echo $row['pincode']; ?>"
required>

<br><br>




<button type="submit" 
name="submit" 
class="btn btn-primary">

Update

</button>


</form>

</fieldset>


</div>

</section>