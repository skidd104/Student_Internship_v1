<?php
require_once('../../connection/connect.php');




if (isset($_FILES['pdf'])){
    

     // Get file details
     $student_id = $_POST['student_id'];
     $fileName = $_FILES['pdf']['name'];
     $fileTmpName = $_FILES['pdf']['tmp_name'];
     $fileSize = $_FILES['pdf']['size'];
     $fileType = $_FILES['pdf']['type'];

     $allowedTypes = ['application/pdf'];

     if (in_array($fileType, $allowedTypes)){

          $existinggFile = null;
          $sql = "SELECT pdf_id, file_name, file_path, file_size, file_type FROM pdf_files WHERE student_id=$student_id LIMIT 1";
          $result = $conn->query($sql);


          if ($result->num_rows > 0){
               $existingFile = $result->fetch_assoc();
          }

          if ($existingFile){
               if (file_exists($existingFile['file_path'])){
                    unlink($existingFile['file_path']);
               }

               $deleteSql = "DELETE FROM pdf_files WHERE pdf_id = ? AND student_id = ?";
               $deleteStmt  = $conn->prepare($deleteSql);
               $deleteStmt->bind_param('ii', $existingFile['pdf_id'], $student_id);
               $deleteStmt->execute();
               $deleteStmt->close();

          }

          $uploadDirectory = "../../uploads/";
          $destination = $uploadDirectory . $fileName;



          if (move_uploaded_file($fileTmpName, $destination)){
               $sql = "INSERT INTO pdf_files (file_name, file_path, file_size, file_type, student_id) VALUES (?,?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->bind_param('ssisi', $fileName, $destination, $fileSize, $fileType, $student_id);
               if ($stmt->execute()){
                    echo "File uploaded successfully";

               } else {
                    echo "Error uploading file: " . $conn->error;

               }

               $stmt->close();
               $conn->close();
    
          } else {
               echo "Error moving file to destination";
          }
     } else {
          echo "Invalid file type. Only PDF files are allowed";
     }
}


?>