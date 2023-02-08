<?php
   include '../dbcon.php';

   if (isset($_POST['submit'])) {
     //fetching uploaded files name
    $question = $_POST['question'];
    $question_type = $_POST['question_type'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $additional = $_POST['additional'];
    
     //inserting query
     $insertquery = "INSERT INTO `questions`(`question`, `question_type`, `option1` , `option2` , `option3` , `option4` , `additional`)
      VALUES ('$question','$question_type','$option1' ,'$option2' ,'$option3' ,'$option4' ,'$additional')";

     //firing the $query
     $res = mysqli_query($con,$insertquery);

     if(!$res){
       ?>
       <script type="text/javascript">
         alert('Data inserted not Successful !');
       </script>
       <?php

     }
     else {
        //echo 'data inserted';
      
       // location.replace("dashboard2.php");
       echo "<script> window.location.href = '../questions.php'; </script>";
     }
   }

  ?>