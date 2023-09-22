<?php
session_start();



if(isset($_SESSION['userName'])){


echo "<script>window.location.href='landing.php'</script>";


}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>


</head>
<body>
    
<div class="container">


<form class="row g-3" action="login-action.php"  method="post">

<h1>Log in</h1>
<div class="col-md-6">

    <div class="col-md-6">
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="name">
  </div>
  <div class="col-6"></div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" autocomplete="off" name="password">
  </div>
  <div class="col-6"></div>

  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="login">Log In</button>
  </div>
  <div class="col-12">
    <a class=" text-primary" href="signup.php">you don't have an account ? <span class="text-primary">Signup</span></a>
  </div>
</form>


</div>
</body>
</html>


<?php 

}


?>