<?php
session_start();
// echo $_SESSION['user_id'];
if(isset($_SESSION['user_id'])){
    header("location:home.php");
    die();
  }  
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>

    <link rel="stylesheet" href="css\style.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
<!-- header section starts -->
    <header class="header">
        <nav class="navbar">
            <form action="login.php" method="get">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#service">Services</a>
                <a href="#project">Projects</a>
                <a href="#contact">Contacts</a>
                <button type="submit" name="submit" class="log-btn">Login</button>
            </form>
        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

    </header>
<!-- header section ends -->

<!-- home section starts -->
    <section class="text" id="text">
        <div class="content">
            <h3 class="save">A great<span> Way to your new</span> interior home</h3>
            <p>We are a team of professional ,energetic individuals with talented designers.</p>

            <!-- <form action="login.php" method="get">
                <button type="submit" name="submit" class="btn">Learn more</button>
            </form> -->
            <a href="login.php" class="btn" >Learn More</a>
        </div>
    </section>
<!-- home section ends -->

</body>
<script src="./js/script.js"></script>
</html>