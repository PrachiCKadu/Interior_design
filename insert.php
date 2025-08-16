<?php
include('connection.php');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $sqli = "INSERT INTO design VALUES('','$name','$email','$password','$phone','$address')";
    $data=mysqli_query($conn,$sqli);

    if($data)
    {
        header("Location:login.php");
    }
    else
    {
        echo "Data are incorrect";
    }

?> 