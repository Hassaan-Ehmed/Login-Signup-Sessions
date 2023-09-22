<?php

session_start();

require("connection.php");

if(isset($_POST['login'])){



$name = $_POST["name"];
$password = $_POST["password"];


$query = "SELECT * FROM `usertable` where username = '$name' AND  userpassword = '$password'  ";


$checkUser  = mysqli_query($connection,$query);


if(mysqli_num_rows($checkUser)){

$_SESSION['userName'] = $name;
    echo "<script>alert('User Logged in Successfuly !');window.location.href='landing.php';</script>";
    
}else{
     
    echo "<script>alert('Invalid Crediential !');window.location.href='login.php';</script>";
}


}

?>