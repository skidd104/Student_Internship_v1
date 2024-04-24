<?php
require_once ('../connection/connect.php');


$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$company_phone = $_POST['company_phone'];
$company_email = $_POST['company_email'];
$company_ceo = $_POST['company_ceo'];


$sql = $conn->prepare( "INSERT INTO intern_company (name, address, phone_no, email, ceo) VALUES (?, ?, ?, ?, ?)");
$sql->bind_param('sssss', $company_name, $company_address, $company_phone, $company_email, $company_ceo);
$sql->execute();



?>
