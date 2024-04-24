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
          <main>
               <!--Navigation Container -->
               <div id="" class="container pt-4 main" style="margin-top: 0px; padding: 0px 0px;">
                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->

                         <div class="container-fluid" id="body-content">
                              <!--Start-->
                              

                              <!--Load inside Container Fluid-->
                              <!--Table-->
                              
                              <h3 class="text-dark mb-4">Deployed Students</h3>

                              <div class="card shadow">
                                   <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Info</p>

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
                                                            <th>Student ID</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Internship Job</th>
                                                            <th>Company Name</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>

                                                            
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            require_once ('../../../connection/connect.php');

                                                            $records_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;

                                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                                            $start_from = ($current_page - 1) * $records_per_page;

                                                            $sql = "SELECT * FROM deploy_student LIMIT $start_from, $records_per_page";


                                                            if ($result = $conn->query($sql)){
                                                                 while ($row = $result->fetch_assoc()){
                                                                      
                                                                      $student_id = $row['student_id'];
                                                                      $firstname = $row['firstname'];
                                                                      $lastname = $row['lastname'];
                                                                      $intern_id = $row['intern_id'];
                                                                      $company_id = $row['company_id'];


                                                                      $sql = "SELECT title FROM intern_internship WHERE internship_id = $intern_id";

                                                                      $intern_job = $conn->query($sql);
                                                                      $intern_job = $intern_job->fetch_assoc();
                                                                      $intern_job = $intern_job['title'];


                                                                      $sql = "SELECT name from intern_company WHERE company_id = $company_id";

                                                                      $company_job = $conn->query($sql);
                                                                      $company_job = $company_job->fetch_assoc();
                                                                      $company_job = $company_job['name'];

                                                                      $sql = "SELECT start_date, end_date FROM intern_internship WHERE internship_id = $intern_id";
                                                                      
                                                                      $start_date = $conn->query($sql);
                                                                      $start_date = $start_date->fetch_assoc();
                                                                      $start_date = $start_date['start_date'];

                                                                      $end_date = $conn->query($sql);
                                                                      $end_date = $end_date->fetch_assoc();
                                                                      $end_date = $end_date['end_date'];


                          

                                                                      



                                                       ?>

                                                       <tr>
                                                            <td><?php echo $student_id; ?></td>
                                                            <td><?php echo $firstname; ?></td>
                                                            <td><?php echo $lastname; ?></td>
                                                            <td><?php echo $intern_job; ?></td>
                                                            <td><?php echo $company_job; ?></td>
                                                            <td><?php echo $start_date; ?></td>
                                                            <td><?php echo $end_date; ?></td>
                                                            
                                                            <!--
                                                            <td><a class="btn btn-danger delete-btn" data-id="<?php echo $stud_id;?>">Delete</a></td>
                                                            TP2
                                                            -->
                                                           

                                                            
                                                       </tr>
                                                       <?php
                                                                 }
                                                            }


                                                            $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_students";
                                                            $total_records_result = $conn->query($total_records_sql);
                                                            $total_records_row = $total_records_result->fetch_assoc();
                                                            $total_records = $total_records_row['total'];
                                                            $total_pages = ceil($total_records / $records_per_page);

                                                       ?>
                                                  </tbody>
                                                  <tfoot>
                                                            <tr>
                                                                 <th>Student ID</th>
                                                                 <th>First Name</th>
                                                                 <th>Last Name</th>
                                                                 <th>Internship Job</th>
                                                                 <th>Company Name</th>
                                                                 <th>Start Date</th>
                                                                 <th>End Date</th>
                                                      
                                                                           
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
                                                                      <a class="page-link" id="page_change" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                                                      
                                                                 </li>
                                                            <?php } ?>

                                                       </ul>
                                                  </nav>

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
                                             <h5 class="modal-title" id="exampleModalLabel">View Application</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>
                                        <div class="modal-body">
                                                  <div class="container pt-4">
                                                       <div class="row" >
                                                            <a id="link"></a>


                                                                
                                                            
                                                       
                                                                 


                                                       <br>

                                                                 <!--TP-->
                                                       <div class="row">
                                                            <div class="col">
                                                                 <form method="post" id="form1">
                                                                      
                                                                      <input type="text" id="stud_id" name="student">
                                                                      <input type="text" id="int_id" name="internship">
                                                                      <input type="text" id="comp_id" name="company">

                                                                      <button type="submit" class="btn btn-primary deploy_btn">Deploy</button>
                                                                      <button type="submit" class="btn btn-danger reject_btn">Reject</button>

                                                  

                                                                 </form>

                                                            </div>
                                                       </div>
                                                  </div>

                                        </div>

                                   </div>

                                   </div>
                                   
                              </div>
                         </div>

                         <!--End-->
                    

                        
                        
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
     
     $(document).ready(function(){
          $(".view-btn").on("click", function(){
               
               var studentID = $(this).data('student_id');
               var internID = $(this).data('intern_id');
               var companyID = $(this).data('company_id');

               

               $("#stud_id").val(studentID);
               $("#int_id").val(internID);
               $("#comp_id").val(companyID);


              

           
               $.ajax ({
                    url: '../../../php_process/fetching/fetch_pdf_files.php',
                    method: 'POST',
                    data: {studentId: studentID},
                    success: function(response){
                         $("#link").html(response);
                    },
                    error: function(xhr, status, error){
                         console.error (xhr.responseText);
                    }
               });
              

               
          });

          $(".deploy_btn").click(function(e){
               
               e.preventDefault();
               var form = $('#form1').serialize();

               $.ajax ({
                    type: 'POST',
                    url: '../../../php_process/controllerinsert/deploy_student.php',
                    data: form,
                    success:function(response){
                         alert ('Data updated successfully!' + response);
                         //ReloadPage();
                         location.reload(true);
       

                    },
                    error: function (xhr, status, error){
                         console.error (xhr.responseText);

                    }
               });


          });


          $(".reject_btn").click(function(e){
               e.preventDefault();
               var form = $('#form1').serialize();

               $.ajax ({
                    type: 'POST',
                    url: '../../../php_process/controllerdelete/reject_student.php',
                    data: form,
                    success:function(response){
                         alert ('Data updated successfully!' + response);
                         //ReloadPage();
                         location.reload(true);
       

                    },
                    error: function (xhr, status, error){
                         console.error (xhr.responseText);

                    }
               });


          });



          $('#searchInput').on('keyup', function(){
                    var value = $(this).val().toLowerCase();
                    $("#dataTable tbody tr").filter(function(){
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

                    });
          });


          $('#recordsPerPage').on('change', function(){
               var selectedValue = $(this).val();
               window.location.href = '?page=1&per_page=' +selectedValue;
          });

          

     
          //TP1
          $(".update-btn").on('click', function(){
               
               
               var id = $(this).data('id');
               var fname = $(this).data('fname');
               var lname = $(this).data('lname');
               var uname = $(this).data('uname');
               var password = $(this).data('pass');

               
               $('#updateId').val(id);
               $('#updateFirstName').val(fname);
               $('#updateLastName').val(lname);
               $('#updateUserName').val(uname);
               $('#updatePassword').val(password);

               
          });

         
          $("#updateForm").on('submit', function(e){
               e.preventDefault();
               var form = $(this);
               
              
               $.ajax ({
                    type: 'POST',
                    url: '../../../php_process/controllerupdate/update_student.php',
                    data: form.serialize(),
                    success:function(response){
                         alert ('Data updated successfully!');
                         $('#exampleUpdateModal').modal('hide');
                         //ReloadPage();
                         location.reload(true);
       

                    },
                    error: function (xhr, status, error){
                         console.error (xhr.responseText);
                    }
               });
               
               
          });
          


          


          
          

</script>