<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
   <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="form-container">
    <img src="img/h4.jpg" class="m-img" alt="">
    <form action="login.php" class="login-form" method="POST">
        <img src="img/worldskills.jpg" alt="">
        <div class="btns">
            <a href="index.php" class="user-btn btn btn-success">User</a>
            <a href="adminindex.php" class="admin-btn btn btn-info">Admin</a>
        </div>
        <input type="text" name="username" placeholder="Enter Username">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="password" name="password" placeholder="Enter Password">
        <button class="btn btn-primary login-btn" type="submit" class="btn btn-primary" name="login">Login</button>
        <p>Don't have an account? <a href="signup.php">Sign up</a>
    </form>
</div>
    
</body>
</html>