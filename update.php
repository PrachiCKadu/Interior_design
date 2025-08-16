<?php
include "connection.php";
// session_start();
error_reporting(0);

if(isset($_GET["submit"])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];

    $id = mysqli_real_escape_string($conn, $id);
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $address = mysqli_real_escape_string($conn, $address);

    $query = "UPDATE `design` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE `id` = $id";
    $data = mysqli_query($conn, $query);

    if($data) {
        // Record updated successfully
        header("Location: /HomeInterior/home.php");
        exit();
    } 
	else {
        echo "Failed to update record";
    }
}
?>
