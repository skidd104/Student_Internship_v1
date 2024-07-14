<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Application</title>
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../assets/css/bg.css">
    
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(var(--bs-yellow), var(--bs-blue) 100%), var(--bs-yellow);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-0"><img class="rounded-circle" src="../../../assets/img/isatlogo.png" width="75" height="71" style="height: 65px;width: 65px;"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 24px;">Sip sys</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="stud_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="stud_control2.php"><i class="fas fa-user"></i>Internship Offers</a></li>
                    <li class="nav-item"><a class="nav-link" href="stud_control3.php"><i class="fas fa-table"></i><span>My Application</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background: var(--bs-teal);">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: var(--bs-yellow);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown  no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="true" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end  dropdown-list animated--grow-in" data-bs-popper="none">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="true" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end  dropdown-list animated--grow-in" data-bs-popper="none">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Yugen deyb</span><img class="border rounded-circle img-profile" src="../../../assets/img/dabe4.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="settings.html"><i class="fas fa-user-cog fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="../../../index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                <main>
               <!--Navigation Container -->
               <?php
               require_once ('../../../connection/connect.php');
               if (isset($_SESSION['studuser'])) {
                    $studuser = $_SESSION['studuser'];
                    
               }
               //fetch the students id
               $sql = "SELECT student_id FROM intern_students WHERE firstname = ?";
               $stmt = $conn->prepare($sql);
               $stmt->bind_param('s', $studuser);
               $stmt->execute();
               $stmt->bind_result($stud_id);
               $stmt->fetch();
               $stmt->close();

               ?>
               <div id="" class="container pt-4 main" style="margin-top: 5  0px; padding: 60px 50px;">
                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->

                         <div class="container-fluid" id="body-content">
                              <!--Start-->
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">INSERT</button>

                              <!--Load inside Container Fluid-->
                              <!--Table-->
                              


                              <div class="card shadow">
                                   <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">My Application</p>

                                   </div>

                                   <?php
                                   require_once ('../../../connection/connect.php');


                                   $sql = "SELECT pdf_id, file_name, file_path, file_size, file_type FROM pdf_files WHERE student_id=$stud_id";
                                   $result = $conn->query($sql);
            
                                   ?>

                                   <ul>
                                        <?php
                                        while ($row = $result->fetch_assoc()){
                                             $fileName = $row['file_name'];
                                             $filePath = $row['file_path'];
                                             echo "<li><a href='../$filePath' target='_blank'>$fileName</a></li>";


                                        }
                                        ?>
                                   </ul>


                                   



                                        

                                   </div>

                              </div>
                         </div>


          
                    </div>
               </div>


               <!--Insert Modal-->
               <div  id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                              
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>
                                        <div class="modal-body">
                                             
                                             <form id="uploadForm" enctype="multipart/form-data">
                                                  <?php
                                                  
                                                  echo "<input id='stud_id' type='hidden' name='student_id' value=$stud_id>";
                                                  ?>
                                                  
                                                  <input type="file" id="pdfFile" name="pdf" accept="application/pdf" required>
                                                  <button type="submit">Upload</button>
                                             </form>

                                             
                                           
                                        </div>

                                   </div>

                                   </div>
                                   
                              </div>
                              <div id="message"></div>
               </div>


            
          </main>
                         
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: linear-gradient(var(--bs-blue), var(--bs-blue) 100%);height: 70.8px;position: fixed;bottom: 0;width: 100%;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span><span style="color: rgb(255, 255, 255);">Copyright © SIP SYS 2024</span></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/bs-init.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="../../../assets/js/theme.js"></script>
    <script src="../../../assets/scripts/jquery-3.7.1.js"></script>
</body>


<script>
     $(document).ready(function(){
          $("#uploadForm").submit(function(e){
               e.preventDefault();
               
               
              var formData = new FormData(this);
              
              
              $.ajax({
               url: '../../../php_process/send/upload.php',
               type: 'POST',
               data:formData,
               contentType: false,
               processData: false,
               success: function(response){
                    location.reload(true);
               },
               error: function(xhr, status, error){
                    console.error(xhr.responseText);
                    alert (status);

               }
              })
              
             
               
          });
          
     });
</script>
</html>