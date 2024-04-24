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
          <!--Navbar-->
          <?php include ("../../includes/stud_topnav.php"); ?>
          <!--Sidenav-->
          <?php include ("../../includes/stud_sidenav.php");?>


          

          <main>
               <div id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                    
                    <?php

                         require_once  ('../../../connection/connect.php');

                
                         


                    ?>

                    <?php
                              
                              if (isset($_SESSION['studuser'])) {
                                   $studuser = $_SESSION['studuser'];
                                   
                              }
                              echo "<h1>Welcome " . $studuser . "</h1>";

                              $sql = "SELECT student_id FROM intern_students WHERE firstname = ?";
                              $stmt = $conn->prepare($sql);
                              $stmt->bind_param('s', $studuser);
                              $stmt->execute();
                              $stmt->bind_result($stud_id);
                              $stmt->fetch();
                              $stmt->close();




                              
                              echo "<input id='stud_id' type='hidden' value=$stud_id>";
                              




                         ?>
                    
                    

                    
                    

                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->

                         <div class="container-fluid" id="body-content">
                              <!--Start-->
                              

                              <!--Load inside Container Fluid-->
                              <!--Table-->
                              
                              <h3 class="text-dark mb-4">Intership Offer</h3>

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
                                                            
                                                            <th>Job Title</th>
                                                            <th>Description</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                            
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            
                                                            $company_id = $_GET['company_id'];

                                                            $records_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;

                                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                                            $start_from = ($current_page - 1) * $records_per_page;

                                                            $sql = "SELECT * FROM intern_internship WHERE company_id=$company_id LIMIT $start_from, $records_per_page";


                                                            if ($result = $conn->query($sql)){
                                                                 while ($row = $result->fetch_assoc()){
                                                                      $intern_id = $row['internship_id'];
                                                                      $title = $row['title'];
                                                                      $desc = $row['description'];
                                                                      $start_date = $row['start_date'];
                                                                      $end_date = $row['end_date'];
                                                                      $company_id = $row['company_id'];

                                                                      


                                                       ?>

                                                       <tr>
                                                            
                                                            <td><?php echo $title; ?></td>
                                                            <td><?php echo $desc; ?></td>
                                                            <td><?php echo $start_date; ?></td>
                                                            <td><?php echo $end_date; ?></td>
                                                            
                                                            <td><button class="btn btn-primary apply_btn" data-intern_id="<?php echo $intern_id; ?>"
                                                            data-company_id="<?php echo $company_id; ?>">Apply</button></td>




                                                       </tr>
                                                       <?php
                                                                 }
                                                            }


                                                            $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_internship WHERE company_id=$company_id";
                                                            $total_records_result = $conn->query($total_records_sql);
                                                            $total_records_row = $total_records_result->fetch_assoc();
                                                            $total_records = $total_records_row['total'];
                                                            $total_pages = ceil($total_records / $records_per_page);


                                                            


                                                       ?>
                                                  </tbody>
                                                  <tfoot>
                                                            <tr>
                                                                
                                                                 <th>Job Title</th>
                                                                 <th>Description</th>
                                                                 <th>Start Date</th>
                                                                 <th>End Date</th>
                                                                 <th></th>
                                                  </tr>
                                                  </tfoot>
                                             </table>
                                        </div>

                                        <div class="row">
                                             <div class="col-md-6 align-self-center">
                                                  <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to <?php echo $records_per_page?> of <?php echo $total_records;?></p>
                                             </div>
                                             <div class="col-md-6">
                                                  <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                                       <ul class="pagination">
                                                            <?php for ($i = 1; $i <= $total_pages; $i++){ ?>
                                                                 <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
                                                                      <a class="page-link" id="page_change" href="?page=<?php echo $i; ?>&company_id=<?php echo $company_id; ?>"><?php echo $i; ?></a>
                                                                      
                                                                 </li>
                                                            <?php } ?>

                                                       </ul>
                                                  </nav>

                                             </div>

                                        </div>

                                   </div>

                              </div>

               </div>
          </main>
          


     </body>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
     <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="../../../assets/scripts/jquery-3.7.1.js"></script>
     <script>
     
     $(document).ready(function(){

 

          function ReloadPage (){
                    // Get the current page number from the URL
                    var currentPage = new URLSearchParams(window.location.search).get('page') || 1;

                    $.ajax ({
                         url: 'teachers_control.php?page=' + currentPage,
                         type: "GET",
                         success:function(response){
                              $("body").html (response);
               
                         },
                         error: function (xhr, status, error){
                              console.error (xhr.responseText);
                         }
                    });
          }

          
          


          $('#searchInput').on('keyup', function(){
                    var value = $(this).val().toLowerCase();
                    $("#dataTable tbody tr").filter(function(){
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

                    });
          });


          $('#recordsPerPage').on('change', function(){
               var selectedValue = $(this).val();
                // Get the current company_id from the URL
               var company_id = new URLSearchParams(window.location.search).get('company_id') || '';
               window.location.href = '?page=1&per_page=' +selectedValue + '&company_id=' + company_id;
          });


          $(".apply_btn").click(function(){
               var intern_id = $(this).data('intern_id');
               var company_id = $(this).data('company_id');
               var student_id = $("#stud_id").val();
             
               alert (student_id + intern_id + company_id);

               $.post("../../../php_process/controllerinsert/application.php", {
                    intern_id: intern_id,
                    company_id:company_id,
                    student_id:student_id,

               }, function(d, s){
                    alert ("data:" + d + " status:" + s);


               });
              
          });


           



          

     
          
          

          
          
     });
          

</script>
</html>

