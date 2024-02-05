<?php
 include 'db.php';
 session_start();
 if(isset($_POST['ad-login'])){
   $email = $_POST['email'];
   $pass = $_POST['pass'];

    $select= "SELECT * FROM admin where email ='$email' AND 
      pass='$pass' ";
     $mj = mysqli_query($con,$select);
      $row = mysqli_fetch_array($mj);
      if($row){
         $_SESSION['email'] = $row['$email'];
         header("location:assets/Admin/index.php");

   }else{
      echo "<script>alert('email and password dosenot match')</script>";
   }
   }
 ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>sonargaon college</title>
      <link rel="icon" type="image/x-icon" href="assets/images/Logo.png">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" >
      <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" >
      <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen" >
      <link rel="stylesheet" href="assets/css/prism/prism.css" media="screen" >
      <link rel="stylesheet" href="assets/css/main.css" media="screen" >
      <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      <script src="assets/js/modernizr/modernizr.min.js"></script>
      <link rel="stylesheet" href="assets/CSS/style.css">
   <style>
      /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
   </style>
   </head>
   <body class="text-white">
       
 <div class="container">
 <div class="row">
   <div class="col-md-4">
   <!-- <div class="Login-form ">
      <div class="sing-in">
         <a href="index.php"><img height="180" width="250" class="pt-2" src="assets/images/Logo.png"></a>
         <h3 class="pt-2 text-uppercase text-white" 
         >Admin SingIn</h3>
      </div>
      <form method="post" class="main-form">
         <label for="user_name">UserName</label><br>
         <input id="user_name" type="email" name="email" required="" placeholder="Enter UserName" class="form-control form-control-lg">
         <label for="pass">Password</label><br>
         <input id="pass" type="password" name="pass" required="" placeholder="Enter Password" class="form-control form-control-lg"><br>
         <span><a href="#">Forget Password?</a></span><br>
         <button class="btn btn-success login" name="ad-login">Login</button>
      </form>
   </div>
   </div> -->


   <div class="wrapper">
        <div class="logo">
            <a href="index.php"><img src="assets/images/Logo.png" alt=""></a>
        </div>
        <div class="text-center mt-4 name">
            Admin Login
        </div>
        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="user_name" type="email" name="email" required="required" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="pass" type="password" name="pass" required="required" placeholder="Password">
            </div>
            
            <button class="btn" name="ad-login">Login</button>
         </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="admin_register.php">Sign up</a>
        </div>
    </div>
 </div>
 </div>
 
      <!-- ========== JS ========== -->
      
      <script src="assets/js/main.js"></script>
      
   </body>
</html>