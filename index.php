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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
      

     <!-- internal css here -->
     <style>
     .body {
  box-sizing: border-box;
  text-decoration: none;
  list-style-type: none;
  font-family: var_dump;
}
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}


/* Principal css start here */
.pri-text p {
  text-align: justify;
  color: black;
  font-size: 25px;
}
.principal a img {
  width: 300px;
  height: 250px;
  border: 1px solid blue;
  border-radius: 5px;
}

/* notice css start here */
.notice-img img {
  border-radius: 10px;
}
.notice h3 {
  text-align: center;
  padding: 5px 0;
  text-transform: uppercase;
}
.notice p {
  text-align: justify;
  padding-top: 7px;
  color: black;
  font-size: 25px;
}
/* marquee code css start */
.text-run {
  background: #172541;
}

/* course css start here */
.course h3 {
  text-transform: uppercase;
}
.card {
  box-shadow: 10px 15px 10px green;
}
.card:hover {
  box-shadow: 5px 5px 10px #172541;
  transition: 0.5s;
}
.card h3 {
  font-size: 28px;
  text-transform: uppercase;
  text-align: center;
  padding: 15px 0;
}
.card p {
  text-align: justify;
  font-size: 20px;
  font-family: var_dump;
  color: black;
  font-weight: 300;
  padding: 10px 10px;
}
.card a img {
  border: 1px solid blueviolet;
  border-radius: 10px;
  margin: 0 12px;
}
.btn-more {
  margin: 0 116px;
}
.lrnmore p {
  text-align: justify;
}

          /* course css end here */
         </style>

   </head>
   <body class="body">
        <!-- marquee section here -->
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

    <!-- Header code start -->
      <header>
         <div class="topbar d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-8 text-decoration-none">
               
                </div>
                <div class="col-4">
                
                </div>
              </div>
               
            </div>
         </div>
   
<div class="main-social-footer-29 mt-4 icon-bar">
                  <a href="https://www.facebook.com/" target="_blank" class="facebook"><span class="fab fa-facebook-f"></span></a>
                  <a href="https://twitter.com/" class="twitter" target="_blank"><span class="fab fa-twitter"></span></a>
                  <a href="https://www.google.com/" target="_blank" class="google"><span class="fab fa-google"></span></a>
                  <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><span class="fab fa-linkedin-in"></span></a>
                </div>
<div class="content">


</div>
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
                  <a class="nav-link" href="about.php"  id="aboutus">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student_login.php">Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="admin_login.php">Admin</a>
                </li>
              </ul>
              
              <form method="post" class="d-flex" role="search">
                <input name="search" type="text" class="form-control mx-1" placeholder="Enter Keyword...">
                <button name="search_btn" class="btn btn-danger" type="submit" href="#">Search</button>
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
      
 <!-- Principal comment code start -->
   <div class="container-fluid my-5">
    <div class="container">
      <div class="row">

        <div class="col-12">
         <div class="pri-text">

         <?php 
          $select = "SELECT * FROM principal";
          $ex = mysqli_query($con,$select);
         while($row = mysqli_fetch_array($ex)) { 
              ?>
            <h3 class="text-dark text-uppercase"><?php echo $row['title'] ?></h3>
            <p class=""><?php echo $row['message'] ?></p>
            <div class="teacher">
                <h4><?php echo $row['name'] ?></h4>
                <span><?php echo $row['post'] ?></span>
                <p class=""><?php echo $row['clg'] ?></p>
              </div>
              
        <?php
          }
        ?>
      <br>
          
         </div>
        </div>
      </div>
        
      </div>
   </div>
      <!-- Notice Code Start -->
      <section class="py-5 about"> 
        <div class="container">
          <div class="row ">
           <div class="col-md-6 ">
                <div class="notice">

                <?php
                      $select = "SELECT * FROM noticeboard";
                      $quary = mysqli_query($con,$select);
                     
                      while($row = mysqli_fetch_array($quary)){ ?>
                      <h3 class="title-big text-white bg-success"><?php echo $row['title'] ?></h3>
                          <p><?php echo $row['notice'] ?></p>
                    <?php
                      }
                    ?>

                </div>             
            </div>
            <div class="col-md-6">
            <?php 
          $select = "SELECT * FROM noticeboard";
          $ex = mysqli_query($con,$select);
         while($row = mysqli_fetch_array($ex)) { 
          ?>                              
            <a><img width="550" height="380" 
                  src="assets/Admin/assets/images/<?php echo $row['image'] ?>"
                   alt="">
                   
                  </a>
          <?php
          }
        ?>      
               
             </div>
          </div>
        </div>
      </section>
      <!-- Notice Code end -->

      <!-- Course Code Start -->
      <section class="py-5 "> 
        <div class="container">
           <div class="course">
           <h3 class="title-big text-center pb-5">Our Course</h3>
           </div>
            <div class="row ">
              <div class="col-md-4">
                <div class="card">
                   <a href=""><img class="my-2 mdi-border-none" width="380" 
                   height="250" src="assets/images/arts.jpeg" alt=""></a>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestias necessitatibus beatae fugiat deleniti rerum. Ratione?</p>
                    <button class="btn btn-primary">See more</button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                   <a href=""><img class="my-2 mdi-border-none" width="380" 
                   height="250" src="assets/images/commerce2.png" alt=""></a>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestias necessitatibus beatae fugiat deleniti rerum. Ratione?</p>
                    <button class="btn btn-primary">See more</button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                   <a href=""><img class="my-2 mdi-border-none" width="380" 
                   height="250" src="assets/images/science.jpeg" alt=""></a>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestias necessitatibus beatae fugiat deleniti rerum. Ratione?</p>
                    <button class="btn btn-primary">See more</button>
                </div>
              </div>
            </div>
      </section>
      <!-- Course Code End -->
    

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
                  <li><a href="about.php">About Us</a></li>
                 
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact us</a></li>
                 
                </ul>
              </div>
             
              <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                <h6 class="footer-title-29">Contact Info </h6>
                <p>Address : Green road 147/I, pantha poth, Dhaka </p>
                <p class="mt-2">Phone : <a href="tel:(+880) 1625426186">+8801625426186</a></p>
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

      <!-- required js link and code here -->
      <script>
      function ImgShow(event){
          var image = document.getElementById("output");
          image.src = URL.createObjectURL(event.target.files[0]);
      }
    </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

      <script src="assets/js/main.js"></script>
   </body>
</html>

<!-- Develope by "Freelancer: Muhammad Mijanur Rahman, 
                  1.Full stack webdeveloper, 
                  2.Digital Marketer, SEO expert" -->