<?php
 include 'db.php';
 session_start();
 if(isset($_POST['register'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];

    $insert= "INSERT INTO admin(name,email,pass)
    VALUES('$name','$email','$pass')";
    $ex = mysqli_query($con,$insert);
    if($ex){
      
      echo "<script>window.location='student_register.php'</script>";
    }else{
      echo "<script>alert('Data insert failed')</script>";
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
      
      <script src="assets/js/modernizr/modernizr.min.js"></script>
      <link rel="stylesheet" href="assets/CSS/main.css">
   </head>
   <body>
       
 <div class="container">
 <div class="row">
   <div class="col-md-12">
   <div class="Student_sing">
         <a href="index.php"><h3 class="text-center text-uppercase 
         pt-4 text-decoration-underline">Admin Registration</h3></a>
      </div>
   </div>
   <div class="col-md-6">
   <div class="S_Login-form">
      
      <form method="post" class="student_form">
         <label for="studentid">Name<span class="text-danger">*</span></label><br>
         <input id="studentid" type="text" name="name" placeholder="Enter Name"
         required="required" class="form-control form-control-lg">
         <label for="email">Email<span class="text-danger">*</span></label><br>
         <input id="email" type="email" name="email"
         required="required" placeholder="Enter Email" 
         class="form-control form-control-lg">
         <label for="pass">Passwoard<span class="text-danger">*</span></label><br>
         <input id="pass" type="passwoard" name="pass"
         required="required" placeholder="Passwoard " 
         class="form-control form-control-lg"><br>
         <span><a href="admin_login.php">sigin</a></span><br>
         <button class="btn btn-success login" name="register">Register Now</button>
      </form>
   </div>
   </div>
 </div>
 </div>

     
      <!-- ========== JS ========== -->
      <script src="assets/js/main.js"></script>
      
   </body>
</html>