<?php
require_once ('../connection/connect.php');

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);



$sql = "INSERT INTO intern_supervisor (name, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$user', '$email', '$password')";

if ($conn->query($sql)){
     echo "Insert Success";
} else {
     echo "Error" . $sql . "<br>" . $conn->error;
}



?>