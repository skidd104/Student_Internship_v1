<?php 
session_start();
?>

<!DOCTYPE html>
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
        <!--Main Navigation-->
        <!--SideBar-->
        <?php include ("../../includes/sidenav.php");?>
        <!--SideBar End-->

        <!--Navbar-->
        <?php include ("../../includes/topnav.php"); ?>
        <!--navbar end-->


        

        <!---Main Content-->
        <main>
            
            
            <!--Navigation Container -->
            <div id="" class="container pt-4 main" style="margin-top: 100px; margin-left: 10px;">
                <div class="row" id="dashboard">
                    <!--Heading dashboard-->

                    <div class="container-fluid" id="body-content">

                        <?php
                            if (isset($_SESSION['loguser'])) {
                                echo "<h1 style='color:black;'>Welcome " . $_SESSION['loguser'] . "</h1>";
                            }
                        ?>


                    

                        
                        
                    </div>
                </div>

            </div>


            <div style="margin-top: 90px;">
                    <div class="container" style="margin-left: 0px; margin-top: 20px">
                        <div class="row">

                            <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_students";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>
                            <div class="col-md-4 text-center">
                                <h1 style="margin-top: 10px; color: black;">Students</h1>
                                <h1 style="margin-top: 50px; color: black;"><?php echo $total_records; ?></h1>
                                <button class="btn btn-primary" type="button" style="margin-top: 50px;">Manage Students</button>
                            </div>

                            <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_internship";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>

                            <div class="col-md-4 text-center">
                                <h1 style="margin-top: 10px; color: black;">Internship</h1>
                                <h1 style="margin-top: 50px; color: black;"><?php echo $total_records; ?></h1>
                                <button class="btn btn-primary" type="button" style="margin-top: 50px;">Manage Internship</button>
                            </div>


                            <?php
                                require_once ('../../../connection/connect.php');

                                $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_company";
                                $total_records_result = $conn->query($total_records_sql);
                                $total_records_row = $total_records_result->fetch_assoc();
                                $total_records = $total_records_row['total'];
                            ?>

                            <div class="col-md-4 text-center">
                                <h1 style="margin-top: 10px; color: black;">Company</h1>
                                <h1 style="margin-top: 50px; color: black;"><?php echo $total_records; ?></h1>
                                <button class="btn btn-primary" type="button" style="margin-top: 50px;">Manage Companies</button>
                            </div>

                        </div>

                    </div>
            </div>

     

        </main>

        



        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../assets/scripts/jquery-3.7.1.js"></script>
        <script src="../../../assets/scripts/main_load.js"></script>
        
        
    </body>
</html>