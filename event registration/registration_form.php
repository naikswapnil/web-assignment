 <?php
 include "connection.php";
 $msg = "";

 if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $full_name=$_POST['full_name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $event_name=$_POST['event_name'];
        $city=$_POST['city'];

        $sql= "INSERT INTO event_registration(id,full_name,email,mobile,event_name,city)
        VALUES('$id','$full_name','$email',' $mobile','$event_name',' $city')";
    
    if(mysqli_query($conn,$sql))
    {
        $msg = "Data Submitted Successfully";
    }
    else
    {
        $msg = "Error:".$sql."<br>".mysqli_error($conn);
    }
}

 ?>
 <!DOCTYPE html>
    <html lang="en">
    <head>
        
        <title>form </title>
        
        
          <style>
                   body{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                     background-color: #f0f2f5;
                     }
                 .container{
                     border: 0px solid;
                     width: 400px;
                     min-height: 300px;
                     padding: 20px;
                     display: flex;
                     flex-direction: column;
                     justify-content: center;
                     align-items: center;
                     background-color: white;
                     border-radius: 20px;
                     box-shadow: 5px 5px 10px gray;
                     }
                  input{
                    border: 1px solid;
                    border-radius: 5px;
                    width: 200px;
                    height: 25px;
                   }
                   .field:focus{
                    border: 2px solid red;
                    outline: none;
                   }
                  .bt{
                    margin-top: 5px;
                    width: 100px;
                    height: 30px;
                    border: 0;
                    background-color: green;
                    color: white;
                    font-weight:bold;
                   }
                   .bt:hover{
                       background-color: pink;
                   }
                 .in{
                   display: flex;
                   justify-content: space-around;
                   }
                  .success{
                    width:300px;
                     margin:20px auto;
                     padding:10px;
                    text-align:center;
                     background-color:#d4edda;
                     color:green;
                      border:1px solid green;
                      border-radius:5px;
                      font-size:18px;
                      font-weight:bold;
                      }
                      select{
                        border-radius: 5px;
                        width: 200px;
                        height: 30px;
                      }
</style>
    </head>
    <body>
       <div class="container">
       <form method="POST" onsubmit="return validation()";>

         <label>Enter id:</label>
        <input class="field" type="text" id="id" name="id"><br><br>

        <label>Enter Full name:</label>
        <input class="field" type="text" id="full_name" name="full_name" required><br><br>

         <label>Enter email:</label>
        <input class="field" type="email" id="email" name="email" required><br><br>

          <label>Enter Mobile Number:</label>
        <input class="field" type="tel" id="mobile" name="mobile" required><br><br>

        <label for="event_name">Enter Event:</label>
         <select class="field" id="event_name" name="event_name" required>
             <option value="">Select Event Name</option>
            <option value="Web Development">Web Development</option>
            <option value="Python Development">Python Development</option>
            <option value="Flutter Development">Flutter Development</option>
         </select><br><br>
         
        <label for="city">Select city:</label>
         <select class="field" id="city" name="city" required>
             <option value="">Select city</option>
            <option value="Nanded"> Nanded</option>
            <option value="Pune">Pune</option>
            <option value="Nashik">Nashik</option>
            <option value="Hydrabad">Hydrabad</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Mumbai">Mumbai</option>
             <option value="Nagpur">Nagpur</option>
         </select><br><br>
         <div class="in">
        <input class="bt" type="submit" name="submit" value="Submit" ><br><br>
        <input class="bt" type="reset" name="reset" value="Reset"><br><br>
        </div>
       </form>
       <?php
        if($msg != "")
       {
           echo "<p class='success'>$msg</p>";
        }
        ?>
     </div>
       <script>
       function validation()
       {
        let id=document.getElementById("id").value;
        let full_name=document.getElementById("full_name").value;
        let email=document.getElementById("email").value;
        let mobile=document.getElementById("mobile").value;
        let event_name=document.getElementById("event_name").value;
        let city=document.getElementById("city").value;

        if(id=="")
        {
            alert('Please enter id');
            return false;
        }

        if(full_name=="")
        {
            alert('Full name should not be empty');
            return false;
        }

        if(email=="")
        {
            alert('Please enter email');
            return false;
        }
        let emailPattern =/^[^ ]+@[^]+\.[a-z]{2,3}$/;
        if(!email.match(emailPattern))
        {
            alert('Email should be in a valid format');
            return false;
        }

        if(mobile.length!=10 || isNaN(mobile))
        {
            alert('Please enter valid 10 Digit mobile number');
            return false;
        }

        if(event_name=="")
        {
            alert('Please select event_name');
            return false;
        }

        if(city=="")
        {
            alert('Please Select city');
            return false;
        }
        return true;  
        
       }
       </script>
    </body>
</html>
        


    