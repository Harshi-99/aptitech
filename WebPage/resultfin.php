<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type= "image/png" href="img/fav_icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/test.css">
	<title></title>
	
		<style type="text/css">
  
  table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  background-color: white;
  color: black;
  
}
th, td {
  padding: 25px;
  
  color: black;
}

	</style>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src = "img/logo.png" align="left"  style="width: 60%; padding-top: 7px; left: 8px;">
      </div>  
    </div>
  </nav>  
  <div class="container">
  	
    
    <?php
    	include('php/get_questions.php');
    	$sum = 0;
        $qno = 1;
         while($que_assoc = $question_table -> fetch_assoc()){
          echo "<div class='que-and-ans'>";
          echo "<div class='question'>";
          echo $qno.". ".$que_assoc['question'];
          echo "</div>";
          echo "<div class='answer'>";
          $qid = $que_assoc['q_id'];

          echo "<table style='width:100%; border:3px solid black;'>
          		<tr style='border:3px; color:#6c8380;'>
              		
              		<th style='border:3px solid black;'>Options</th>
              		<th style='border:3px solid black;'>Your Answer</th>
              		<th style='border:3px solid black;'>Correct Answer</th>
              		<th style='border:3px solid black;'>Answers</th>
            	</tr>
            	<tr style='border:3px solid black;'>
              		<td style='border:3px solid black;'>A</td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='you".$qid."optionA' style='display:none;left:60px;color:red; '></span</td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='Correct".$qid."optionA' style='display:none;left:60px;color:red;'></span></td>
                    <td style='border:3px solid black;'>".$que_assoc['optionA']."</td>
          		</tr>
          		<tr style='border:3px #6c8380;'>
          			<td style='border:3px solid black;'>B</td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='you".$qid."optionB' style='display:none; left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='Correct".$qid."optionB' style='display:none;left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'>".$que_assoc['optionB']."</td>
          		</tr>
          		<tr style='border:3px solid black;'>
          		<td style='border:3px solid black;'>C</td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='you".$qid."optionC' style='display:none;left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='Correct".$qid."optionC' style='display:none;left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'>".$que_assoc['optionC']."</td>
          		</tr>
          		<tr style='border:3px solid black;'>
          			<td style='border:3px solid black;'>D</td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='you".$qid."optionD' style='display:none;left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'><span class='glyphicon glyphicon-ok' id='Correct".$qid."optionD' style='display:none;left:60px;color:red;'></span></td>
              		<td style='border:3px solid black;'>".$que_assoc['optionD']."</td>
          		</tr>
          	</table>";
     
  
    $sql_qid ="SELECT `q_id`, `answer` FROM `question` WHERE `q_id` = $qno";
    $res_eveluate = mysqli_query($con,$sql_qid);
    if($eveluated = $res_eveluate -> fetch_assoc()){
    	$qno++;
    	echo "<script>document.getElementById('Correct".$qid."".$eveluated['answer']."').style.display='block'; </script>";
    		if(isset($_POST['options'.$eveluated['q_id']])){
    	
        echo "<script>document.getElementById('you".$qid."".$_POST['options'.$eveluated['q_id']]."').style.display='block'; </script>";
        
        }else{continue;}

      	

      if($_POST['options'.$eveluated['q_id']] == $eveluated['answer']){
      	
        	$sum++;}

}
  }
echo $sum;
    ?>
    

</body>
</html>