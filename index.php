<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
      include 'dbcon.php';

      if(isset($_POST['submit'])){
        $user = $_POST['email'];
        $password = $_POST['password'];

        $user_search = " select * from user where email = '$user' ";
        $query = mysqli_query($con,$user_search);

        $user_count =   mysqli_num_rows($query);

        if($user_count){
            $user_pass = mysqli_fetch_assoc($query);
            $db_pass = $user_pass['password'];

            $_SESSION['username'] = $user_pass['name'];
            $_SESSION['login'] = $user_pass['email'];

            if($password==$db_pass){
              ?>
                <script>
                  location.replace("dashboard3.php");
                </script>
              <?php
            }else {
              ?>
                <script>
                  alert('Incorrect Userid or Password !');
                </script>
              <?php
            }
        }else{
          ?>
            <script>
              alert('Incorrect Userid or Password !');
            </script>
          <?php
        }
      }
    ?>
    <div class="main">
        <!-- Log in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>


                    <div class="signin-form">
                        <h2 class="form-title">Log in </h2>
                        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>