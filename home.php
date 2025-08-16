<?php
session_start();
if(!isset($_SESSION['user_id']))
  {
    header("location:/HomeInterior/index.php");
    die();
  }
  include('connection.php');
  $username=$_SESSION['user_name'];
  $email=$_SESSION['email'];
  //  echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>

  <link rel="stylesheet" href="css\home.css">
  <!-- magnific popup css link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <!-- font awesome file link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- bootstrap file link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  
</head>

<body>
<!-- header section starts -->
    <header class="header">
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#service">Services</a>
            <a href="#project">Projects</a>
            <a href="#contact">Contacts</a>
            <a href="edit_profile.php"><i class="fa-solid fa-pen-to-square" style="color:#ffd500;font-size:20px;"></i></a>
            <a href="logout.php"><button>Logout</button></a>
        </nav>

        <div class="icons">
          <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    </header>
<!-- header section ends -->
    
<!-- home section starts  -->
<section id="home" class="home container-fluid p-0">
<div class="row hero">

  <div class="col pl-3 ml-sm-5 p-0">
    <h1 class="text1">Interior Design</h1>
    <h3 class="text2">Architecture services</h3>
    <br>
    <h5>Email: <?=$_SESSION['user_name']?></h5>
  </div>

</div>
</section>
<!-- home section ends -->

<!-- about section starts  -->
<section id="about" class="about container">
<h1 class="heading">about us</h1>
<div class="row align-items-center">

  <div class="col-md-6 image">
    <img src="images/IN4.jpg" width="90%" alt="architecture">
  </div>

  <div class="col-md-6 info">
    <h2>the best Interior Design in the city</h2>
    <p>Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space.</p>
    <p>An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects. Interior designers are trained to develop creative solutions that are functional, safe, and sustainable.</p>
    
    <div class="icons">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-pinterest "></a>
    </div>
  </div>
</div>

</section>
<!-- about section ends -->

<!-- project section starts   -->
<section id="project" class="project">

  <div class="heading">our projects</div>
  
  <div class="box-container mx-auto">
  
  <div class="box">
    <a href="images/IN6.jpg" title="hall">
      <img src="images/IN6.jpg" alt="">
    </a>
  </div>
  
  <div class="box">
    <a href="images/IN5.jpg" title="house">
      <img src="images/IN5.jpg" alt="">
    </a>
  </div>
  
  <div class="box">
    <a href="images/IN2.jpg" title="hall">
      <img src="images/IN2.jpg" alt="">
    </a>
  </div>
  
  <div class="box">
    <a href="images/IN8.jpg" title="hall">
      <img src="images/IN8.jpg" alt="">
    </a>
  </div>
  
  <div class="box">
    <a href="images/IN1.jpg" title="hall">
      <img src="images/IN1.jpg" alt="">
    </a>
  </div>
  
  <div class="box">
    <a href="images/IN7.jpg" title="kitchen">
      <img src="images/IN7.jpg" alt="">
    </a>
  </div>
  
  </div>
  </section>
<!-- project section ends -->

<!-- contact section starts  -->
<section id="contact" class="contact">
<h1 class="heading">contact us</h1>
<div class="form-container mx-auto">

<form action="#">
  <div class="inputBox">
    <input type="text" placeholder="first name">
    <input type="text" placeholder="last name">
  </div>

  <input type="email" placeholder="E-mail">
  <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
  <input type="submit" value="send">
</form>

</div>
</section>
<!-- contact section ends -->

</body>
<script src="./js/script.js"></script>
</html>