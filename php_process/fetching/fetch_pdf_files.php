<?php
require_once('../../connection/connect.php');

$student_id = $_POST['studentId'];


$sql = "SELECT pdf_id, file_name, file_path, file_size, file_type FROM pdf_files WHERE student_id=$student_id";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
     $fileName = $row['file_name'];
     $filePath = $row['file_path'];
     echo "<li><a href='../$filePath' target='_blank'>$fileName</a></li>";
}




//$stmt->fetch();
//$stmt->close();




?>