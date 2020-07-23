<?php
    include 'front.php';
  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
     <div id="log">
        <center><h2>SignUp</h2>
          <img src ="images/login1.png" class = "avatar"><span id="lo"></span>
        </center>
         <form  class="formstyle" action="config.php" method="post">
             <label><b>Username:</b></label><br>
             <input name="username"type="email" class = "values" placeholder="Type your name" required/><br>
             <label><b>Password:</b></label><br>
             <input name ="password"type="password" class = "values" placeholder="Type your password" required/><br>
             <label><b> Confirm Password:</b></label><br>
             <input name ="cpassword" type="password" class = "values" placeholder=" your password" required/><br>
             <input  name ="submit_btn" type="submit" id ="Sign-btn" value="SignUp"/><br>
             <a href="login.php"><input type="button" id ="back-btn" value="Back"/></a>
            </form>
    

    </div>
</body>
</html>









