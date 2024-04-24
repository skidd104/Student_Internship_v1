<?php
require_once ('../connection/connect.php');


$title = $_POST['title'];
$desc = $_POST['description'];
$start_date = $_POST['start_date'];
$start_date = date ('Y/m/d', strtotime($start_date));
//$email = $_POST['email'];
$end_date = $_POST['end_date'];
$end_date = date ('Y/m/d', strtotime($end_date));
$company_id = $_POST['company_id'];


$sql = $conn->prepare( "INSERT INTO intern_internship (title, description, start_date, end_date, company_id) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param('ssssi', $title, $desc, $start_date, $end_date, $company_id);
$sql->execute();



?>
