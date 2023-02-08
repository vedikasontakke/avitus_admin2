
<?php

session_start();

if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Dashboard || Hello <?php echo $_SESSION['username']?></h1>
    
    <?php if (isset($user)): ?>
        
    <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
    
    <p><a href="logout.php">Log out</a></p>
    
<?php else: ?>
    
    <p><a href="index.php">Log in</a> or <a href="signup.php">sign up</a> or <a href="logout.php">logout</a></p>
    
<?php endif; ?>
    
</body>
</html>
