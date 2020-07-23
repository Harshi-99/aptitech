<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/front.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<body>
	<div class="navbar" style="height:68px;">
      <p><img src="img/logo.png"style="float: left;width:100px;position:relative;top:-8px;"></p>
      <a href="company.php" style="margin-left: 100px;"><i class="fa fa-building"></i>Company</a>
      <div class="dropdown">
        <button class="dropbtn">Aptitude<i class="fa fa-caret-down" style="padding-left:15px"></i></button>
        <div class="dropdown-content">
          
          <a href="aptitude.php">Aptitude</a>
          <a href="verbal.php">Verbal</a>
          <a href="reasoning.php">Reasoning</a>
        </div>
      </div> 
     
      <div class="dropdown" style="float: right;padding-right: 40px">
      	<a href="php/sigUP.php"><i class="fa fa-sign-in"></i> Sign Up</a>
      		<a href="php/loginfin.php"><i class="fa fa-sign-in"></i> Login</a>
        
      </div> 
    </div>

    <div class="footer">
      <p>Footer</p>
    </div>
    <br><br>
</body>
</html>