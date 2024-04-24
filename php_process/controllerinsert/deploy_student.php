<?php
require_once('../../connection/connect.php');


$student = $_POST['student'];
$intern = $_POST['internship'];
$company = $_POST['company'];


$sql = "SELECT firstname, lastname FROM intern_students WHERE student_id = $student";
$res = $conn->query($sql);

if ($res->num_rows > 0){
     while ($row = $res->fetch_assoc()){
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];
     }
}


$sql = "INSERT INTO deploy_student (student_id, firstname, lastname, intern_id, company_id) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issii", $student, $firstname, $lastname, $intern, $company);
$stmt->execute();
$stmt->close();


$sql = "DELETE FROM intern_application WHERE student_id = $student";
$conn->query($sql);






$conn->close();



?>
