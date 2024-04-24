<?php
require_once ('../connection/connect.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
//$email = $_POST['email'];
$password = $_POST['password'];


$sql = $conn->prepare( "INSERT INTO intern_students (firstname, lastname, username, password) VALUES (?, ?, ?, ?)");
$sql->bind_param('ssss', $firstname, $lastname, $username, $password);
$sql->execute();



?>
