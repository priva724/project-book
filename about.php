<?php
include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sonargaon College</title>
       <link type="Image" rel="icon" href="assets/images/Logo.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
     <link ral="stylesheet" href="assets/CSS/main.css">

     <!-- internal css here -->
     <style>
      .body{
        font-family: var_dump;
     
      }
          .about p{
            text-align: justify;
            font-size: 20px;
          }
          .text-run{
            background: #172541;
          }

         </style>

   </head>
   <body class="body">
    <!-- Header code start -->
    <div class="container-fluid text-run">
        <div class="container">
            <div class="row">
              <div class="col-12">
          <?php 
                $select = "SELECT * FROM marquee";
                $ex = mysqli_query($con,$select);
              while($row = mysqli_fetch_array($ex)) { 
                ?>
                <div class="marquee">
                   <a href=""> <h3><marquee behavior="" direction="1"
                   class=" text-white mt-4"><?php echo $row['title'] ?></marquee></h3></a>
                 </div>       
         <?php
          }
         ?>              
              </div>
            </div>
          </div>
       </div>

      <header>
        

         <nav class="navbar navbar-expand-lg bg-white">
          <div class="container">
         <a class="navbar-brand" href="index.php"><img src="assets/images/Logo.png" style="height: 70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  id="aboutus">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student_login.php">Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="admin_login.php">Admin</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input type="text" class="form-control mx-1">
                <button class="btn btn-danger" type="submit" href="#">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <!-- Head Section end -->

     
      <!-- Slider Section Start -->
  <div class="container-fluid mt-1">     
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
                 <h1 class="text-white mb-5">Sonargaon College</h1>
            </div>
            <img src="assets/images/mainbanner3.jpg" width="100%" height="350" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="assets/images/mainbanner2.jpg" width="100%" height="350" alt="...">
            <div class="carousel-caption d-none d-md-block">
                 <h1 class="text-white mb-5">Sonargaon College</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/mainbanner1.jpg" width="100%" height="350"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                 <h1 class="text-white mb-5">Sonargaon College</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
 </div>
      

 <div class="container py-5">
  <div class="row">
    <div class="col">
      <div class="about">
        <?php 
          $select = "SELECT * FROM about";
          $ex = mysqli_query($con,$select);
         while($row = mysqli_fetch_array($ex)){ 
          ?>
        <h3 class=" text-uppercase"><?php echo $row['title'] ?></h3>
        <p><?php echo $row['aboutus'] ?></p>
        <?php
          }
        ?>
        
      </div>
    </div>
  </div>
 </div>
    

    <!-- footer Code Start -->
<footer class="footer pt-5">
          <div class="container py-5">
            <div class="row footer-top-29">
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                <div class="footer-logo mb-4">
                  <a class="navbar-brand" href="index.php">
                    <img src="assets/images/Logo.png" alt="sonargaon_college" style="width: 150px; height:auto;">
                  </a>
                </div>
                <p>(sonargaon_college)</p>
                <div class="main-social-footer-29 mt-4">
                  <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                  <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                  <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                  <a href="#linkedin" class="linkedin"><span class="fab fa-linkedin-in"></span></a>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                <ul>
                  <h6 class="footer-title-29">Information</h6>
                  <li><a href="#">About Us</a></li>
                 
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact us</a></li>
                 
                </ul>
              </div>
             
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                <h6 class="footer-title-29">Contact Info </h6>
                <p>Address : Green road 147/I, pantha poth, Dhaka </p>
                <p class="mt-2">Phone : <a href="tel:(+91) 9090909090">+8801625426186</a></p>
                <p class="mt-2">Email : <a href="mailto:info@result.com">info@result.com</a></p>
                <p class="mt-2">Support : <a href="mailto:info@result.com">info@sc23.com</a></p>
              </div>
            </div>
          </div>
          
        <!-- copyright -->
        <section class="w3l-copyright text-center">
          <div class="container">
            <p class="copy-footer-29">Copyright &copy; Sonargaon College </p>
          </div>
      </section>
      </footer>
      <!-- footer Code end -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script src="assets/js/main.js"></script>
   </body>
</html>