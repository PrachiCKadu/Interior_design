<?php
session_start();
error_reporting(0);
include('connection.php');

$email=$_POST['email'];
$password=$_POST['password'];
$sqli="SELECT * FROM design WHERE email='$email' && password='$password'"; 
$execute=mysqli_query($conn,$sqli);

$_SESSION["user_id"] = $count['id'];
$_SESSION["user_name"] = "$email";
   
if($execute->num_rows === 0)
{
    $row = $execute->fetch_assoc();
    $_SESSION["user_id"] = $row['id'];
    header("location:insert.php");
}
else
{
   header("location:error.php");
}
?>