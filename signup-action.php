<?php
session_start();

require("connection.php");





if(isset($_POST['signup'])){


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phoneno = $_POST["phoneno"];



// First we check Duplication 


$checkName = mysqli_query($connection,"SELECT * FROM  `usertable` WHERE username = '$name'");

$checkEmail = mysqli_query($connection,"SELECT * FROM  `usertable` WHERE email = '$email'");



// mysqli_num_of_rows () check's if any row/result exsist or not 

if(mysqli_num_rows($checkName)){


    echo "<script>alert('The name is already taken !');window.location.href='signup.php';</script>";

}else if (mysqli_num_rows($checkEmail)){
    
    
    echo "<script>alert('This email is already taken !');window.location.href='signup.php';</script>";
    
}else{
    


    $_SESSION['userName'] = $name;

    // If name and email are not exsist in my database so my data will send !
    
    $query_post =  "INSERT INTO `usertable`(`username`, `email`, `userpassword`, `phoneno`) VALUES ('$name','$email','$password','$phoneno')";
    
    $res = mysqli_query($connection,$query_post);
    
    echo "<script>alert('User Register Successfuly !');window.location.href='landing.php';</script>";


   


}


}



?>