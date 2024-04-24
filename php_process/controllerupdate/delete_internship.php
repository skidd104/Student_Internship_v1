<?php
require_once('../../connection/connect.php');

$internship_id = $_POST['id'];

$sql = "DELETE FROM intern_internship WHERE internship_id = $internship_id";

$conn->query($sql);

$conn->close();



?>