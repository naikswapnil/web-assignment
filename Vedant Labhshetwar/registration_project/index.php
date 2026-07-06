<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>User Registration</h2>
<form action="register.php" method="POST">

<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="password" name="password" placeholder="Password" required>
<input type="text" name="mobile" placeholder="Mobile Number" required>
<div class="gender-group">
    <label><b>Gender</b></label><br><br>

    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>

    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>

    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label>
</div>
<input type="date" name="dob" required>
<textarea name="address" placeholder="Address" required></textarea>
<input type="text" name="city" placeholder="City" required>
<input type="text" name="state" placeholder="State" required>
<input type="text" name="pincode" placeholder="Pincode" required>
<button type="submit" name="submit">Register</button>
</form>

</div>

</body>

</html>