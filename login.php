<?php
session_start();
if(!isset($_GET['submit'])){
  header("location:index.php");
  die();
}
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

  <!-- stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css\login.css">
</head>

<body>
  <form action="login_check.php" method="POST">
    <div class="main">
      <div class="container">

        <h1>Login</h1>

        <input type="email" name="email" id="email" placeholder="Email" required>
        <i class="fa fa-envelope" style="margin-left: 70%; margin-top: -12%;" > </i>

        <input type="password" name="password" id="password" placeholder="Password" required>
        <i class="bi bi-eye-slash" id="togglePassword"></i>

      <div class="remember-forgot">
        <a href="#" class="forgot">Forgot Password?</a> 
      </div>

      <input type="submit" class="btn-submit" name="login_btn" value="Login">

      <div class="register"> Don't have an account?
        <a href="signup.php" class="r-link">Sign Up</a>
      </div>

      </div>
    </div>

</form>
</body>

<script src="./js/script.js"></script>
</html>