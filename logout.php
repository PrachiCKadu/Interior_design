<?php
  session_start();
  include('connection.php');
  session_destroy();
  header ("Location:/Home_Interior/login.php");
  ?>