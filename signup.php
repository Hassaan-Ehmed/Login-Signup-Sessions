<?php session_start();

if(isset($_SESSION['userName'])){

  echo "<script>window.location.href='landing.php';</script>";

}else{

;?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Account</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>


</head>
<body>
    
<div class="container">


<form class="row g-3" action="signup-action.php"  method="post">

<h1>Create a Account</h1>

<div class="col-6">
    <label class="form-label">User Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter your name..."  name="name">
  </div>
<div class="col-6"></div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-6"></div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" autocomplete="off" name="password">
  </div>
  <div class="col-6"></div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Phone no</label>
    <input type="text" class="form-control" id="inputCity" name="phoneno">
  </div>

  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
  </div>
  <div class="col-12">
    <a class=" text-primary" href="login.php">Already have an account ? <span class="text-primary">Login</span></a>
  </div>
</form>


</div>
</body>
</html>

<?php }?>