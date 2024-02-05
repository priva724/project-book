<?php
 include 'db.php';
 session_start();
 if(isset($_POST['login'])){
   $studentid = $_POST['studentid'];
   $pass = $_POST['pass'];

    $select= "SELECT * FROM add_student where studentid ='$studentid' AND 
      pass='$pass' ";
     $mj = mysqli_query($con,$select);
      $row = mysqli_fetch_array($mj);
      if($row){
         $_SESSION['studentid'] = $row['$studentid'];
         $_SESSION['id'] = $row['$id'];
         header("location:result_page.php");
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
      
      <script src="assets/js/modernizr/modernizr.min.js"></script>
      <link rel="stylesheet" href="assets/CSS/main.css">
   </head>
   <body>
       
 <div class="container">
 <div class="row">
   <div class="col-md-6">
   <div class="S_Login-form">
      <div class="Student_sing">
       
         <a href="index.php"><h3 class="pt-5 text-uppercase">Student SingIn</h3></a>
      </div>
      <form method="post" class="student_form">
         <label for="stid">Student ID<span class="text-danger">*</span></label><br>
         <input id="stid" type="text" required="required"
         name="studentid" placeholder="Student ID" 
         class="form-control form-control-lg">
         <label for="pass">Password<span class="text-danger">*</span></label><br>
         <input id="pass" type="password" name="pass" required="required"
         placeholder="Enter Password"
         class="form-control form-control-lg"><br>
         <span><a href="student_register.php">Register</a></span><br>
         <button class="btn btn-success login" name="login">Login</button>
      </form>
   </div>
   </div>
 </div>
 </div>

     
      <!-- ========== JS ========== -->
      <script src="assets/js/main.js"></script>
      
   </body>
</html>