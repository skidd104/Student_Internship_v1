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
                              
                              <h3 class="text-dark mb-4">Company</h3>

                              <div class="card shadow">
                                   <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Company Info</p>

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
                                                            <th>Company Id</th>
                                                            <th>Company Name</th>
                                                            <th>Company Address</th>
                                                            <th>Phone Number</th>
                                                            <th>Email</th>
                                                            <th>CEO</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                            require_once ('../../../connection/connect.php');

                                                            $records_per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;

                                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                                            $start_from = ($current_page - 1) * $records_per_page;

                                                            $sql = "SELECT * FROM intern_company LIMIT $start_from, $records_per_page";


                                                            if ($result = $conn->query($sql)){
                                                                 while ($row = $result->fetch_assoc()){
                                                                      $company_id = $row['company_id'];
                                                                      $company_name = $row['name'];
                                                                      $company_address = $row['address'];
                                                                      $company_phone = $row['phone_no'];
                                                                      $company_email = $row['email'];
                                                                      $company_ceo = $row['ceo'];


                                                       ?> 


                                                       <tr>
                                                            <td><?php echo $company_id; ?></td>
                                                            <td><?php echo $company_name; ?></td>
                                                            <td><?php echo $company_address; ?></td>
                                                            <td><?php echo $company_phone; ?></td>
                                                            <td><?php echo $company_email; ?></td>
                                                            <td><?php echo $company_ceo; ?></td>


                                                            
                                                            <td><a class="btn btn-primary update-btn" 
                                                            data-bs-toggle='modal' 
                                                            data-bs-target='#exampleUpdateModal'
                                                            data-id="<?php echo $company_id; ?>"
                                                            data-name="<?php echo $company_name; ?>"
                                                            data-address="<?php echo $company_address; ?>"
                                                            data-phone="<?php echo $company_phone; ?>"
                                                            data-email="<?php echo $company_email; ?>"
                                                            data-ceo="<?php echo $company_ceo; ?>">Edit</a></td>
                                                            <td><a class="btn btn-danger delete-btn" data-id="<?php echo $company_id;?>">Delete</a></td>
                                                            

                                                       </tr>
                                                       <?php
                                                                 }
                                                            }


                                                            $total_records_sql = "SELECT COUNT(*) AS total FROM  intern_company";
                                                            $total_records_result = $conn->query($total_records_sql);
                                                            $total_records_row = $total_records_result->fetch_assoc();
                                                            $total_records = $total_records_row['total'];
                                                            $total_pages = ceil($total_records / $records_per_page);



                                                       ?>
                                                  </tbody>
                                                  <tfoot>
                                                            <tr>
                                                                 <th>Company Id</th>
                                                                 <th>Company Name</th>
                                                                 <th>Company Address</th>
                                                                 <th>Phone Number</th>
                                                                 <th>Email</th>
                                                                 <th>CEO</th>
                                                      
                                                                           
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


                              <!--Update Modal TP1-->
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
                                                                      <input type="hidden" name="company_id" id="updateId">
                                                                      <div class="container pt-4">
                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <label for="updateFirstName" class="form-label">Company Name:</label>
                                                                                     <input type="text" class="form-control" id="updateName" name="name">
                                                                                </div>
                                                                           
                                                                                <div class="col">
                                                                                     <label for="updateLastName" class="form-label">Company Address</label>
                                                                                     <input type="text" class="form-control" id="updateAddress" name="address">
                                                                                </div>    
                                                                           </div>

                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <label for="updateUserName" class="form-label">Company Phone:</label>
                                                                                     <input type="text" class="form-control" id="updatePhone" name="phone">
                                                                                </div>
                                                                                
                                                                                <div class="col">
                                                                                     <label for="updateEmail" class="form-label">Email:</label>
                                                                                     <input type="text" class="form-control" id="updateEmail" name="email">
                                                                                </div>

                                                                                
                                                                           
                                                                           </div>
                                                                           
                                                                           <div class="row">
                                                                                <div class="col">
                                                                                     <label for="updateEmail" class="form-label">CEO:</label>
                                                                                     <input type="text" class="form-control" id="updateCeo" name="ceo">
                                                                                </div>

                                                                           </div>
                                                                           <br>

                                                                           <button type="submit" class="btn btn-primary">Update</button>




                                                                      </div>

                                                                 </form>

                                                            

                                                            </div>
                                                       
                              

                                                       </div>

                                                  </div>
                                                  
                                             </div>
                                        </div>
                                                            

                         <!--End-->


                         <!--Insert Modal TP5-->
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
                                                  <div class="container pt-4">
                                                       <div class="row">
                                                            <div class="col">
                                                                 <label for="Uname1" class="form-label">Company Name:</label>
                                                                 <input type="text" class="form-control" id="in_name" name="Uname1">
                                                            </div>
                                                       
                                                            <div class="col">
                                                                 <label for="Email1" class="form-label">Company Address:</label>
                                                                 <input type="text" class="form-control" id="in_address" name="Email1">
                                                            </div>
                                                       </div>

                                                       <div class="row">
                                                            <div class="col">
                                                                 <label for="Uname1" class="form-label">Company Phone:</label>
                                                                 <input type="text" class="form-control" id="in_phone" name="Uname1">
                                                            </div>
                                                            
                                                            <div class="col">
                                                                 <label for="Email1" class="form-label">Company Email:</label>
                                                                 <input type="text" class="form-control" id="in_email" name="Email1">
                                                            </div>
                                                       
                                                       
                                                       </div>

                                                       <div class="row">
                                                            <div class="col">
                                                                 <label for="Email1" class="form-label">Company CEO:</label>
                                                                 <input type="text" class="form-control" id="in_ceo" class="dateTest">
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
               var name = $(this).data('name');
               var address = $(this).data('address');
               var phone = $(this).data('phone');
               var email = $(this).data('email');
               var ceo = $(this).data('ceo');

               
               
               $('#updateId').val (internship_id);
               $('#updateName').val(name);
               $('#updateAddress').val(address);
               $('#updatePhone').val(phone);
               $('#updateEmail').val(email);
               $('#updateCeo').val(ceo);
               

               
          });

         //TP
          $("#updateForm").on('submit', function(e){
               e.preventDefault();
               var form = $(this);
               
            

               
               $.ajax ({
                    type: 'POST',
                    url: '../../../php_process/controllerupdate/update_company.php',
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
                    

                    $.post ('../../../php_process/controllerupdate/delete_company.php',{
                         id: id,


                    }, function(d, s){
                         //alert (d + s);
                         location.reload(true);
                         
                         
                    });

          });

          

          
          $("#web-form-insert").submit(function(e){
               e.preventDefault();
               var name = $("#in_name").val();
               var address = $("#in_address").val();
               var phone = $("#in_phone").val();
               var email = $("#in_email").val();
               var ceo = $("#in_ceo").val();
               

               //alert (firstname + lastname + username + email + password);
               
               $.post ("../../../php_process/auth_company.php",{
                    company_name: name,
                    company_address:address,
                    company_phone: phone,
                    company_email: email,
                    company_ceo: ceo,

               }, 
               function(d, s){
                    //alert (d + s);
                    
                    $('#exampleModal').modal('hide');
                    location.reload(true);
               

               });
               
          });
          
          
          

          
          
     });
          

</script>