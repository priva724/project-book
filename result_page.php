<?php
include 'db.php';
session_start();
     
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
      <link rel="stylesheet" href="assets/css/prism/prism.css" media="screen" >   <title>student-result</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />  
     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>  
 
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a href="index.php"><button class="btn btn-danger mt-2">
            Logout</button></a>
        </div>
        <div class="col-md-12">
          <h2 class="text-center text-uppercase text-white mt-2 bg-primary">Basic Student Information</h2>      
          <table id="myTable" class="table table-bordered display text-dark">
                  <thead class="text-uppercase">
                      <tr>                   
                      <th>Name</th>
                      <th>Student ID</th>
                      <th>Group</th>
                      <th>Session</th>
                                                    
                      </tr>
                  </thead>
                  <tbody>
                  <?php

                  // Assuming you have the user ID to match stored in a variable named $user_id
                    $user_id = 20012;  // Replace with the actual user ID to match

                    $select = "SELECT name, studentid, department,year FROM add_student 
                    WHERE studentid = $user_id";
                    $result = mysqli_query($con, $select);

                    if ($result) {  
                        $useful_data = [];

                        while ($row = mysqli_fetch_assoc($result)) {
                            $useful_data[] = $row;
                        }

                       
                        if ($useful_data) {
                            foreach ($useful_data as $row) { ?>
                             <tr>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['studentid'] ?></td>
                          <td><?php echo $row['department'] ?></td>
                          <td><?php echo $row['year'] ?></td>
                      </tr>
                         <?php 
                           }
                        } else {
                            echo "No data found for the specified user ID.";
                        }
                    } else {
                        echo "Error fetching data: " . mysqli_error($con);
                    }
                    
                  ?>
                                  
                  </tbody>
         </table> 
        </div>
        <hr>
        
        <div class="col-md-12">
          <h2 class="text-center text-uppercase text-white 
          mt-2 bg-primary">Exam Result</h2>      
          <table class="table table-bordered">
               <thead class="text-center bg-success text-white">
               <tr>
                  <th>SL</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>                 
                  <th>Latter</th>
                </tr>
               </thead>
               <tbody>
                <?php
                $select = "SELECT * FROM tblresult";
                $quary = mysqli_query($con,$select);
                $count=1;
                while($row = mysqli_fetch_array($quary)){ ?>
                  <tr>
                  <td><?php echo $count++ ?></td>
                  <td></td>
                  <td></td>
                  <td><?php echo $row['latter'] ?></td>     
                  </tr>
                  
                <?php 
                }
                ?>
                <tr>
                <th><td>GPA</td></th>
                
                  </tr>
               </tbody>
                </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Required Js files -->

    <!-- data table code start -->
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
      } );
    </script>
    <!-- data table code end -->

    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Theme Required Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/app.init.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <!-- perfect scrollbar JavaScript -->
    <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
   
    <!-- This page JavaScript -->
    
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/dashboard1.js"></script>
</body>
</html>