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
        <?php include ("../../includes/stud_sidenav.php");?>
        <!--SideBar End-->

        <!--Navbar-->
        <?php include ("../../includes/stud_topnav.php"); ?>
        <!--navbar end-->
          <main>
               <!--Navigation Container -->
               <div id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
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

     </body>
</html>

<script src="../../../assets/scripts/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>


<script>
     $(document).ready(
          $()
     );
</script>