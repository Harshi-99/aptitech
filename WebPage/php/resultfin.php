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
		<style type="text/css">
  table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  background-color: white;
  color: black;
}
th, td {
  padding: 25px;
  text-align: left;
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
        $qno = 1;
         while($que_assoc = $question_table -> fetch_assoc()){
          echo "<div class='que-and-ans'>";
          echo "<div class='question'>";
          echo $qno++.". ".$que_assoc['question'];
          echo "</div>";
          echo "<div class='answer'>";
          $qid = $que_assoc['q_id'];
          echo "<table>
          		<tr>
              		<th>Options</th>
              		<th>Your Answer</th>
              		<th>Correct Answer</th>
              		<th>Answers</th>
            	</tr>
            	<tr>
              		<td>A</td>
              		<td><span class='glyphicon glyphicon-ok' id='1' style='display:none;'></td>
              		<td><span class='glyphicon glyphicon-ok' id='1' style='display:none;'></td>
                    <td>".$que_assoc['optionA']."</td>
          		</tr>
          			<td>B</td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td>".$que_assoc['optionB']."</td>
          		</tr>
          		<td>C</td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td>".$que_assoc['optionC']."</td>
          		</tr>
          			<td>D</td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td><span class='glyphicon glyphicon-ok' style='display:none;'></td>
              		<td>".$que_assoc['optionD']."</td>
          		</tr>
          	</table>";
          
      }
    ?>
    <?php
  	$con = mysqli_connect("localhost", "root", "", "aptitech");
  if(isset($_POST['sub_btn'])){
    $sql_qid ="SELECT `q_id`, `answer` FROM `question` WHERE `topic_id` = 1";
    $res_eveluate = mysqli_query($con,$sql_qid);
    while($eveluated = $res_eveluate -> fetch_assoc()){
      if($_POST['options'.$eveluated['q_id']] == $eveluated['answer']){
        echo '#1{display:block;}';
      }
      else
        echo '#1{display:block;}';
    }

  }?>

</body>
</html>