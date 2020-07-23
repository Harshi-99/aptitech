<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type= "image/png" href="img/fav_icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/test.css">
  <title>Document</title>
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
    <form action="php/evaluate.php" method="post">
      <?php
     
        include('php/get_questions.php');
        $qno = 1;
        while($que_assoc = $question_table -> fetch_assoc()){
          echo "<div class='que-and-ans'>";
          echo "<div class='question'>";
          echo $qno++.". ".$que_assoc['question'];
          echo "</div>";
          echo "<div class='answer'>";
          echo"<table>
            <tr>
              <th>Options</th>
              <th>Your Answer</th>
              <th>Correct Answer</th>
              <th>Answers</th>
            </tr>
          </table>";
          $qid = $que_assoc['q_id'];
          echo"<table>
          <tr>
              <td>A</td>
              <td> </td>
              <td>    </td>
              <td>".$que_assoc['optionA']."</td>
          </tr>
          <td>B</td>
              <td></td>
              <td>    </td>
              <td>".$que_assoc['optionB']."</td>
          </tr>
          <td>C</td>
              <td>     </td>
              <td>    </td>
              <td>".$que_assoc['optionC']."</td>
          </tr>
          <td>D</td>
              <td>     </td>
              <td>    </td>
              <td>".$que_assoc['optionD']."</td>
          </tr></table>
            ";
          
          echo "</div>";
          echo "</div>";

        }
      ?>
      
      
    </form>
  </div>
</body>
</html>