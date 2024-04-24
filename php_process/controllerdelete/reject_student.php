<?php
require_once('../../connection/connect.php');


$student = $_POST['student'];
$intern = $_POST['internship'];
$company = $_POST['company'];





$sql = "DELETE FROM intern_application WHERE student_id = $student AND internship_id = $intern AND company_id = $company";
$conn->query($sql);






$conn->close();



?>
