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
               <div id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                    <div class="row" id="dashboard">
                         <!--Heading dashboard-->

                         <div class="container-fluid" id="body-content">
                              <!--Start-->
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">INSERT</button>

                              <!--Load inside Container Fluid-->
                              <!--Table-->
                              
                              <h3 class="text-dark mb-4">Intership</h3>

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
                                                            <th>Internship Id</th>
                                                            <th>Job Title</th>
                                                            <th>Description</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                            <th>Company ID</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            require_once ('../../../connection/connect.php');

                                                            $records_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;

                                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                                            $start_from = ($current_page - 1) * $records_per_page;

                                                            $sql = "SELECT * FROM intern_internship LIMIT $start_from, $records_per_page";


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
                                                            <td><?php echo $intern_id; ?></td>
                                                            <td><?php echo $title; ?></td>
                                                            <td><?php echo $desc; ?></td>
                                                            <td><?php echo $start_date; ?></td>
                                                            <td><?php echo $end_date; ?></td>
                                                            <td><?php echo $company_id; ?></td>

                                                            <td><a class="btn btn-primary update-btn" 
                                                            data-bs-toggle='modal' 
                                                            data-bs-target='#exampleUpdateModal'
                                                            data-id="<?php echo $intern_id; ?>"
                                                            data-title="<?php echo $title; ?>"
                                                            data-desc="<?php echo $desc; ?>"
                                                            data-start_date="<?php echo $start_date; ?>"
                                                            data-end_date="<?php echo $end_date; ?>"
                                                            data-comp_id="<?php echo $company_id?>">Edit</a></td>
                                                            <td><a class="btn btn-danger delete-btn" data-id="<?php echo $intern_id;?>">Delete</a></td>
                                                       </tr>
                                                       <?php
                                                                 }
                                                            }


                                                            $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_internship";
                                                            $total_records_result = $conn->query($total_records_sql);
                                                            $total_records_row = $total_records_result->fetch_assoc();
                                                            $total_records = $total_records_row['total'];
                                                            $total_pages = ceil($total_records / $records_per_page);

                                                       ?>
                                                  </tbody>
                                                  <tfoot>
                                                            <tr>
                                                                 <th>Internship Id</th>
                                                                 <th>Job Title</th>
                                                                 <th>Description</th>
                                                                 <th>Start Date</th>
                                                                 <th>End Date</th>
                                                                 <th>Company ID</th>
                                                      
                                                                           
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

                              <!--End Table-->


                              <!--Update Modal TP-->
                              <div  id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                                             <div class="modal fade" id="exampleUpdateModal" tabindex="-1" aria-labelledby="exampleUpdateModal" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                                       </div>
                                                       

                              
                                                            <div class="modal-body">
                                                                 <form id="updateForm">
                                                                      <input type="hidden" name="internship_id" id="updateId">
                                                                      <input type="hidden" name="company_id" id="company_id" >
                                                                      <div class="container pt-4">
                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <select id="companySelectUpdate" required>
                                                                                          <option>Select--Company</option>
                                                                                          <?php
                                                                      
                                                                                          $sql = "SELECT name FROM intern_company";

                                                                                          $res = $conn->query($sql);

                                                                                          if ($res->num_rows > 0){
                                                                                               while ($row = $res->fetch_assoc()){
                                                                                                    $company_name = $row['name'];

                                                                                               
                                                                                               
                                                                                          ?>
                                                                                          <option value="<?php echo $company_name; ?>"><?php echo $company_name; ?></option>

                                                                                          <?php
                                                                                          
                                                                                               }
                                                                                          }
                                                                                          ?>
                                                                                          
                                                                                          
                                                                                          
                                                                                     </select>
                                                                                </div>

                                                                           </div>
                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <label for="updateFirstName" class="form-label">Job Title</label>
                                                                                     <input type="text" class="form-control" id="updateTitle" name="title">
                                                                                </div>
                                                                           
                                                                                <div class="col">
                                                                                     <label for="updateLastName" class="form-label">Description</label>
                                                                                     <input type="text" class="form-control" id="updateDesc" name="desc">
                                                                                </div>    
                                                                           </div>

                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <label for="updateUserName" class="form-label">Start Date:</label>
                                                                                     <input type="date" class="form-control" id="updateStartdate" name="start_date">
                                                                                </div>
                                                                                
                                                                                <div class="col">
                                                                                     <label for="updateEmail" class="form-label">End Date:</label>
                                                                                     <input type="date" class="form-control" id="updateEndate" name="end_date">
                                                                                </div>
                                                                           
                                                                           </div><br>

                                                                           <button type="submit" class="btn btn-primary">Update</button>


                                                                      </div>

                                                                 </form>

                                                            

                                                            </div>
                                                       
                              

                                                       </div>

                                                  </div>
                                                  
                                             </div>
                                        </div>
                                                            

                         <!--End-->


                         <!--Insert Modal-->
                         <div  id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
                              
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>
                                        <div class="modal-body">
                                             <form method="post" id="web-form-insert">
                                                  <input type="hidden" id="company_id" >
                                                  <div class="container pt-4">
                                                       <div class="row">
                                                            <div class="col">
                                                                 


                                                                      
                                                                 <select id="companySelectInsert" required>
                                                                      
                                                                      <option>Select--Company</option>
                                                                      <?php
                                                                      
                                                                      $sql = "SELECT name FROM intern_company";

                                                                      $res = $conn->query($sql);

                                                                      if ($res->num_rows > 0){
                                                                           while ($row = $res->fetch_assoc()){
                                                                                $company_name = $row['name'];

                                                                           
                                                                           
                                                                      ?>

                                                                      <option value="<?php echo $company_name; ?>"><?php echo $company_name;?></option>
                                                                      

                                                                      <?php
                                                                      
                                                                                }
                                                                           }
                                                                      ?>
                                                                      
                                                                      
                                                                 </select>
                                                            </div>

                                                            

                                                       </div>
                                                       <div class="row">
                                                            <div class="col">
                                                                 <label for="Uname1" class="form-label">Job Title:</label>
                                                                 <input type="text" class="form-control" id="in_title" name="Uname1">
                                                            </div>
                                                       
                                                       <div class="col">
                                                            <label for="Email1" class="form-label">Description:</label>
                                                            <input type="text" class="form-control" id="in_desc" name="Email1">
                                                       </div>
                                                       </div>
                                                       <div class="row">
                                                       <div class="col">
                                                            <label for="Uname1" class="form-label">Start Date:</label>
                                                            <input type="date" class="form-control" id="in_start" name="Uname1">
                                                       </div>
                                                       <!--
                                                       <div class="col">
                                                            <label for="Email1" class="form-label">Email:</label>
                                                            <input type="email" class="form-control" id="in_email" name="Email1">
                                                       </div>
                                                            -->
                                                       <div class="col">
                                                            <label for="Email1" class="form-label">End Date:</label>
                                                            <input type="date" class="form-control" id="in_end" class="dateTest">
                                                       </div>
                                                       </div>

                                                       


                                                       <br>


                                                       <div class="row">
                                                       <div class="col">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                       </div>
                                                       </div>
                                                  </div>

                                                  
                                             

                                                  
                                             </form>

                                        </div>

                                   </div>

                                   </div>
                                   
                              </div>
                         </div>

                         <!--End-->

                         <h1 id="company_id">Test</h1>
                    

                        
                        
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

          $(".dateTest").click(function(e){
               e.preventDefault();
               alert("The value of this field is currently set to: " + $(this).val());
          });



          //Fetching data
          $('#companySelectInsert').change(function(){
                    var selectedCompany = $(this).val();
                    
                    //alert (selectedCompany);
                    $.post ("../../../php_process/fetching/fetch_company_id.php", {
                         company:selectedCompany
                    }, function(d, s){
                         
                         //alert ("Data" + d + "Status" + s);
                         $("#company_id").val (d);
                    });
                    
                   
          });

          $('#companySelectUpdate').change(function(){
                    var selectedCompany = $(this).val();
                    
                    //alert (selectedCompany);
                    $.post ("../../../php_process/fetching/fetch_company_id.php", {
                         company:selectedCompany
                    }, function(d, s){
                         
                         alert ("Data" + d + "Status" + s);
                         $("#company_id").val (d);
                    });
                    
                   
          });



          

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
               window.location.href = '?page=1&per_page=' +selectedValue;
          });

          

     
          //TP2
          $(".update-btn").on('click', function(){
               
               
               var internship_id = $(this).data('id');
               var title = $(this).data('title');
               var desc = $(this).data('desc');
               var start_date = $(this).data('start_date');
               var end_date = $(this).data('end_date');
               var company_id = $("#company_id").val();
               
               $('#updateId').val(internship_id);
               $('#updateTitle').val(title);
               $('#updateDesc').val(desc);
               $('#updateStartdate').val(start_date);
               $('#updateEndate').val(end_date);
               
               

               
          });

         
          $("#updateForm").on('submit', function(e){
               e.preventDefault();
               var form = $(this);

               
               
               
               $.ajax ({
                    type: 'POST',
                    url: '../../../php_process/controllerupdate/update_internship.php',
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
          

         
          $('.delete-btn').on('click', function(){
                    var id = $(this).data('id');
                    
                    alert (id);
                    $.post ('../../../php_process/controllerupdate/delete_internship.php',{
                         id: id,


                    }, function(d, s){
                         alert (d + s);
                         location.reload(true);
                         
                         
                    });
                    

          });


          $("#web-form-insert").submit(function(e){
               e.preventDefault();
               var title = $("#in_title").val();
               var desc = $("#in_desc").val();
               var start_date = $("#in_start").val();
               var end_date = $("#in_end").val();
               var company_id = $("#company_id").val();

               

               //alert (firstname + lastname + username + email + password);
             
               
               
               $.post ("../../../php_process/auth_internship.php",{
                    title: title,
                    description: desc,
                    start_date: start_date,
                    end_date: end_date,
                    company_id:company_id
               }, 
               function(d, s){
                    //alert (d + s);
                    
                    $('#exampleModal').modal('hide');
                    location.reload(true);
               

               });
               
               
          });
          
          
          

          
          
     });
          

</script>