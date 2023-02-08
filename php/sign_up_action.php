  <?php
   include '../dbcon.php';

   if (isset($_POST['submit'])) {
     //fetching uploaded files name
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
     //inserting query
     $insertquery = "INSERT INTO `user`(`name`, `email`, `password`)
      VALUES ('$user_name','$email','$password')";

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
       echo "<script> window.location.href = '../index.php'; </script>";
     }
   }

  ?>
