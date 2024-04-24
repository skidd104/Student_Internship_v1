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
          <!--Main Navigation-->
        <!--SideBar-->
        <?php include ("../../includes/stud_sidenav.php");?>
        <!--SideBar End-->

        <!--Navbar-->
        <?php include ("../../includes/stud_topnav.php"); ?>
        <!--navbar end-->
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
               <div id="" class="container pt-4 main" style="margin-top: 100px; padding: 60px 50px;">
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

                         <!--End-->

            
          </main>

     </body>

     <script src="../../../assets/scripts/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>


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

