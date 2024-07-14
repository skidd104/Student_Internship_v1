<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Internships</title>
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
                                <div class="nav-item dropdown  no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="true" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-envelope fa-fw"></i></a>
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
               <div id="" class="container pt-4 main" style="margin-top: 50px; padding: 60px 50px;">
                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->

                         <div class="container-fluid" id="body-content">
                              <!--Start-->
                              

                              <!--Load inside Container Fluid-->
                              <!--Table-->
                              


                              <div class="card shadow">
                                   <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Internship Job Offer</p>

                                   </div>


                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-md-6 text-nowrap">
                                                  <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm" id="recordsPerPage">
                                                                           <option >Select no. rows</option>
                                                                           <option value="10">10</option>
                                                                           <option value="25">25</option>
                                                                           <option value="50">50</option>
                                                                           <option value="100">100</option>
                                                                           </select>&nbsp;</label></div>

                                             </div>
                                             <div class="col-md-6">
                                                  <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" id="searchInput" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                             </div>
                                             

                                        </div>
                                        

                                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                             <table class="table my-0" id="dataTable">
                                                  <thead>
                                                       <tr>
                                                            <th>Company</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       

                                                       <tr>
                                                            <td>
                                                                      <?php
                                                                      
                                                                      require_once ('../../../connection/connect.php');

                                                                      $sql = "SELECT company_id, name FROM intern_company";
                                                                      $res = $conn->query($sql);

                                                                      if ($res->num_rows > 0){
                                                                           while ($row = $res->fetch_assoc()){
                                                                                $company_id = $row['company_id'];
                                                                                $company_name = $row['name'];
                                                                           
                                                                      ?>
                                                                 <div class="card-body">

                                                                      
                                                                      <div class="row">
                                                                           <div class="col-md-6">
                                                                                <h1><?php echo $company_name; ?></h1>


                                                                           </div>
                                                                           <div class="col-md-6">
                                                                                <div class="text-md-end">
                                                                                     <a class="btn btn-primary" href="stud_view.php?company_id=<?php echo urlencode($company_id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                                     View
                                                                                     </a>
                                                                                     <a class="btn btn-primary" data-bs-toggle="collapse" href="<?php echo "#" . $company_name; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                                     +
                                                                                     </a>

                                                                                </div>
                                                                                
                                                                                

                                                                           </div>
                                                                      </div>

                                                                 </div>
                                                                 

                                                                 <div class="collapse" id="<?php echo $company_name; ?>">
                                                                                <div class="card card-body">
                                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                                                </div>
                                                                 </div>

                                                                 <?php
                                                                           }
                                                                      }
                                                                 
                                                                 ?>
                                                                 

                                                            </td>
                                                            
                                                       </tr>


                                                       <?php
                                                                 

                                                            /*
                                                            $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_internship";
                                                            $total_records_result = $conn->query($total_records_sql);
                                                            $total_records_row = $total_records_result->fetch_assoc();
                                                            $total_records = $total_records_row['total'];
                                                            $total_pages = ceil($total_records / $records_per_page);
                                                            */

                                                       ?>
                                                  </tbody>
                                                  <tfoot>
                                                            <tr>
                                                                 <th>Company</th>
                                                                 
                                                      
                                                                           
                                                            </tr>
                                                  </tfoot>
                                             </table>
                                        </div>



                                        <div class="row">
                                             <div class="col-md-6 align-self-center">
                                                  <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to <?php //echo $records_per_page?> of <?php //echo $total_records;?></p>
                                             </div>
                                             <div class="col-md-6">
                                                  <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                       <ul class="pagination">
                         
                                                            <?php /* for ($i = 1; $i <= $total_pages; $i++){ ?>
                                                                 <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
                                                                      <a class="page-link" id="page_change" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                                      
                                                                 </li>
                                                            <?php } */ ?>

                                                       </ul>
                                                  </nav>

                                             </div>

                                        </div>

                                   </div>

                              </div>


          
                    </div>
                </div>

            </div>
          </main>
                         
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: linear-gradient(var(--bs-blue), var(--bs-blue) 100%);height: 70.8px;">
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

</html>

<script>
     $(document).ready(
          $()
     );
</script>