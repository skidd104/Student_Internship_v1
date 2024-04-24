<?php
require_once('../../connection/connect.php');

$intern_id = $_POST['intern_id'];
$student_id = $_POST['student_id'];
$company_id = $_POST['company_id'];


echo $student_id . $intern_id . $company_id;

$sql = "INSERT INTO intern_application (student_id, internship_id, company_id) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $student_id, $intern_id, $company_id);
$stmt->execute();
$stmt->close();
$conn->close();





?>