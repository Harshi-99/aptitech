 <?php include 'front.php';?>
<?php

session_start();
if(isset($_SESSION['user']))
{
  unset($_SESSION['user']);
}
?>
</<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- JS, Popper.js, and jQuery -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
 


















/* Full-width input fields */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}







  </style>

</head>
<body>


<div class="posl" align="center" style="align-items: center; padding-top: 50px;" >
  <form action="" method="POST" style="margin: 20px;max-width: 350px;height: 400px; padding: 16px;background-color:#005461;color: white; border-radius: 10px;">
    <h1 style="text-decoration: none; text-decoration-color: #9d9d9d">Login</h1>
    
    <label for="user" style="font-size: 20px;"><b>User Name</b></label>
    
    <input  style="width: 100%;padding: 15px;margin: 5px 0 22px 0;border: none;background: #eee; color: #111;" type="text"  placeholder="Enter Name" name="user" required  >

    <label for="psw" style="font-size: 20px;"><b>Password</b></label>
    <input type = "Password"  placeholder="Enter Password" name="pass" required style="width: 100%;padding: 15px;margin: 5px 0 22px 0;border: none;background: #eee; color: #111;" >
  
    <button type="submit" class="btnl" name="sub" style="background-color: red;color: white;padding: 16px 20px;border: none;cursor: pointer;width: 100%; opacity: 0.9; font-size: 20px; ">Login</button>
  </form>
</div>
<?php
if (isset($_POST["sub"]))
{
  $conn=mysqli_connect("localhost","root","","aptitech");
  $name=$_POST['user'];
  $pass=$_POST['pass'];
  $s=("SELECT * FROM users WHERE name='$name' AND password='$pass'")or die("could not execute".mysqli_error($conn));
  $result = mysqli_query($conn,$s);
  $num = mysqli_num_rows($result);
  if($num!=1)
  {
    echo"<script>alert('wrong username or password.Try again.');</script>";
    sleep(1);
    echo "<script type='text/javascript'>document.location='login.php';</script?";
  }
  else
  {
    $log="INSERT INTO users_login(user_name,pass) values ('$name','$pass')";
    mysqli_query($conn,$log);
    $_SESSION['USER']=$name;
    echo "<script type='text/javascript'>document.location='HOME.php';</script>";
  }
  $sql = "call remove_data();";
  $r = mysql_query($conn,$sql);
}
?>



</body>
</html>





