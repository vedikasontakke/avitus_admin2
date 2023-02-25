<?php

    $server = "localhost";
    $user = "root";
    $password = "" ;
    $db = "avitus_db" ; // EDIT DB_NAME

    $con = mysqli_connect($server,$user,$password,$db,3307); // EDIT PORT NUMBER 

    if(!$con){
      ?>
      <script>
          alert("Connection Failed !");
      </script>
      <?php
    }
    mysqli_set_charset($con,"utf8mb4")
?>
