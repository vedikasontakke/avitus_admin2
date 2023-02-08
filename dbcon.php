<?php

    $server = "localhost";
    $user = "root";
    $password = "" ;
    $db = "avitus" ; // EDIT DB_NAME

    $con = mysqli_connect($server,$user,$password,$db,3308); // EDIT PORT NUMBER 

    if(!$con){
      ?>
      <script>
          alert("Connection Failed !");
      </script>
      <?php
    }
    mysqli_set_charset($con,"utf8mb4")
?>
