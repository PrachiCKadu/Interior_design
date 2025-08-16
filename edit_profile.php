<?php
include('connection.php');
session_start();
error_reporting(0);
 $id= $_SESSION['user_id'];
 $name = $_GET['name'];
 $password = $_GET['password'];
 $email = $_GET['email'];
 $phone = $_GET['phone'];
 $address = $_GET['address'];
 $sqli="SELECT * FROM design where id='$id'";
 $data=mysqli_query($conn, $sqli);
 $total=mysqli_num_rows($data);
 $result=mysqli_fetch_assoc($data);
//  echo $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
<title>update_page</title>
<link href="./css/edit_profile.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">   
 <!-- font awesome file link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body>
<header class="header">
        <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="#about">About Us</a>
                <a href="#service">Services</a>
                <a href="#project">Projects</a>
                <a href="#contact">Contacts</a>
        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
</header>
<div class="container">
<form action="update.php" method="GET">
    <div class="main">
      <div class="profile">
      <img src="images/user2.jpg" width="80%" alt="user">
      <br><br>
      <h6>Email: <?php echo $_SESSION['user_name']; ?></h6>
      <br>
      <!-- <a href="add_profile.php.php"><button>+ Add Profile</button></a> -->

      <!-- <h2>Profile</h2> -->
      </div>

      <div class="child">
        <h2>Update</h2><br>
          <input type="hidden" name="id" value="<?php echo"$id" ?>">
          <!-- <label>Username:</label> -->
          <div class="data">
          <div class="left">
          <input type="text" placeholder="Username" value="<?php echo $result['name']; ?>" class="name" name="name" required>
          <input type="email" placeholder="Email" value="<?php echo $result['email']; ?>" class="email" name="email" required>
          </div>

        <div class="right">
        <input type="tel" id="phone" name="phone" placeholder="Enter mobile number" class="phone" value="<?php echo $result['phone']; ?>">
          <input type="text" placeholder="Address" class="email" name="address" value="<?php echo $result['address']; ?>">
        </div>
        </div>
          <div class="btns">
          <input type="submit" class="btn" name="submit" value="Update">
          <a href="home.php"><input type="button" class="btn" name="cancel" value="Cancel">
          </a>
          </div>
      </div>
    </div>
    </form>
</div>
</body>
</html>