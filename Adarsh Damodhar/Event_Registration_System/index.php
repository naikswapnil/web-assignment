<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Event Registration Form</h2>

  <form action="register.php" method="POST" id="regForm" onsubmit="return validateForm()">
        <label>Full Name</label><br>
        <input type="text" name="full_name" id="full_name"><br><br>

        <label>Email Address</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label>Mobile Number</label><br>
        <input type="text" name="mobile" id="mobile"><br><br>

        <label>Event Name</label><br>
        <select name="event_name" id="event_name">
            <option value="">Select Event</option>
            <option>Web Development</option>
            <option>AI Workshop</option>
            <option>Python Bootcamp</option>
        </select><br><br>

        <label>City</label><br>
        <select name="city" id="city">
            <option value="">Select City</option>
            <option>Nanded</option>
            <option>Pune</option>
            <option>Mumbai</option>
        </select><br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Reset">

    </form>
</div>

<script src="script.js"></script>

</body>
</html>