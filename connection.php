<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database="home_interior";
$conn=mysqli_connect($servername,$username,$password,$database);
 if($conn)
 {
  // echo "Connection ok";
	 
}
else
{
	echo "Connection failed".mysqli_connect_error();
}
?>