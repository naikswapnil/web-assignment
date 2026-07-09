<!DOCTYPE html>
<html>
<head>

<title>Event Registration System</title>

<link rel="stylesheet" href="style.css">

</head>

<body>


<div class="container">

<h2>Event Registration Form</h2>


<form action="register.php" method="POST" onsubmit="return validateForm()">



<label>Full Name</label>
<input type="text" id="name" name="full_name">


<span id="nameError"></span>



<label>Email Address</label>
<input type="email" id="email" name="email">


<span id="emailError"></span>



<label>Mobile Number</label>
<input type="text" id="mobile" name="mobile">


<span id="mobileError"></span>



<label>Event Name</label>

<select id="event" name="event_name">

<option value="">Select Event</option>

<option value="Technical Seminar">
Technical Seminar
</option>

<option value="Workshop">
Workshop
</option>

<option value="Cultural Program">
Cultural Program
</option>

</select>


<span id="eventError"></span>



<label>City</label>

<select id="city" name="city">

<option value="">
Select City
</option>

<option value="Solapur">
Solapur
</option>

<option value="Pune">
Pune
</option>

<option value="Mumbai">
Mumbai
</option>

</select>


<span id="cityError"></span>



<div class="buttons">

<button type="submit">
Register
</button>


<button type="reset">
Reset
</button>

</div>


</form>


</div>


<script src="script.js"></script>

</body>
</html>