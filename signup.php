
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

<link rel="stylesheet" href="css\signup.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">   

</head>
  <body>
    <form action="insert.php" method="POST">
      <div class="main">
          <div class="child">
          <h1>Sign Up</h1><br>
          <input type="text" placeholder="User Name" class="name" name="name" required>
          <i class="fa fa-fw fa-user" style="margin-left: 65%; margin-top: -10%;" ></i>

          <input type="email" placeholder="Email" class="email" name="email" required>
          <i class="fa fa-fw fa-envelope"  style="margin-left: 65%; margin-top: -10%;" ></i>

          <input type="password" placeholder="Password" id="password" name="password" required>
          <i class="bi bi-eye-slash"  id="togglePassword" style="margin-left: 65%; margin-top: -10%;" ></i>

          <input type="hidden" id="phone" name="phone">
          <input type="hidden" id="address" name="address" value="3487">

          <input type="submit" class="btn" name="register" value="Sign Up">
          <p class="text">Already have an account? <a href="login.php" class="log">Login</a></p>  
          </div>
      </div>
    </form>
  </body>

<script src="./js/script.js"></script>
</html>