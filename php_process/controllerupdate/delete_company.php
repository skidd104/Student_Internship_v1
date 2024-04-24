<?php
require_once('../../connection/connect.php');

$company_id = $_POST['id'];

$sql = "DELETE FROM intern_company WHERE company_id = $company_id";

$conn->query($sql);

$conn->close();



?>