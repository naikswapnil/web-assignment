<?php
include "connection.php";
if(isset($_POST['submit']))
    {
        $full_name=$_POST["full_name"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $event_name=$_POST["event_name"];
        $city=$_POST["city"];
      
        
        $sql="INSERT INTO event_registrations(full_name,email,mobile,event_name,city)
        VALUES ('$full_name','$email','$mobile','$event_name','$city')";

        if(mysqli_query($conn,$sql))
            {
              echo  "<h3 style='color:green'>Form Submitted Successfully!</h3>";
            }
        else
            {
               echo "error".$sql."<br>". mysqli_error($conn);
            }
    }
?>
<html>
    <head>
        <title>Database Registration</title>
        <style>
            button:hover{
                background-color:green;
            }
            input:focus
            {
                border:2px solid blue;
                outline:none;
            }
            select:focus
            {
                border:2px solid blue;
                outline:none;
            }
            body
            {
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                height:100vh;
                margin:0;
            }
            .sub-bt
            {
                background-color:#1877f2;
                color:white;
            }
            .sub-bt:hover
            {
                background-color:green;
                
            }
            .reset-bt
            {
                background-color:red;
                color:white;
            }
            .reset-bt:hover
            {
                background-color:yellow;
                
            }
            </style>
</head>
<body>
    
    <h1>Database Registration</h1>
    <form method="POST" onsubmit="return validateForm()">
        <label>Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
        <label>Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label>Mobile:</label>
        <input type="text" id="mobile" name="mobile" maxlength="10" required><br><br>
        <label>Event Name:</label>
       <select id="event_name" name="event_name" required>
        <option value="">Select event_name</option>
        <option>Sports</option>
         <option>Hackathon</option>
          <option>Coding Competition</option>
           <option>Quiz Competition</option>
        </select><br><br>
        <label>City:</label>
        <select id="city" name="city" required>
            <option value="">Selected city</option>
            <option>Nagpur</option>
             <option>Pune</option>
              <option>Mumbai</option>
               <option>Nashik</option>
                <option>Hydrabad</option>
               </select><br><br>
        <button type="submit" name="submit" class="sub-bt">Submit</button>
        <button type="reset" class="reset-bt">Reset</button>
                <script>
function validateForm()
{
    let full_name = document.getElementById("full_name").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let event_name = document.getElementById("event_name").value;
    let city = document.getElementById("city").value;

    if(full_name == "")
    {
        alert("Full Name should not be empty");
        return false;
    }

    if(!/^[A-Za-z ]+$/.test(full_name))
    {
        alert("Full Name should contain only alphabets and spaces");
        return false;
    }

    if(email == "")
    {
        alert("Email should not be empty");
        return false;
    }

    if(mobile.length != 10)
    {
        alert("Mobile Number should contain exactly 10 digits");
        return false;
    }

    if(event_name == "")
    {
        alert("Please select an Event Name");
        return false;
    }

    if(city == "")
    {
        alert("Please select a City");
        return false;
    }

    return true;
}
</script>
</form>
</body>
</html>

