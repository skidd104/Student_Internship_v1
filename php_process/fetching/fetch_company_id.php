<?php

require_once('../../connection/connect.php');

$selectedCompany = $_POST['company'];


$sql = "SELECT company_id FROM intern_company WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $selectedCompany);
$stmt->execute();
$stmt->bind_result($companyID);
$stmt->fetch();
$stmt->close();

echo $companyID;

$conn->close();




?>