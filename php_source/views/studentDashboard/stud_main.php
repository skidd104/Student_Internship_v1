<?php 
session_start();
?>
<html>
     <head>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../assets/css/main.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

     </head>

     <body>
          <?php include ("../../includes/stud_topnav.php");?>

          <?php include ("../../includes/stud_sidenav.php");?>
          <!---Main Content-->
          <main>
               
               
               <!--Navigation Container -->
               <div id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->
                         
                         <div class="container-fluid" id="body-content">

                         <?php
                              
                              if (isset($_SESSION['studuser'])) {
                                   $studuser = $_SESSION['studuser'];
                                   echo "<h1>Welcome " . $studuser . "</h1>";
                              }
                         ?>
                         

                         
                         
                         </div>
                    </div>

               </div>

          

          </main>
     </body>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
     <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/scripts/jquery-3.7.1.js"></script>
</html>