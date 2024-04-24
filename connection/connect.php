<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$db = "sip_system";


$conn = new mysqli ($servername, $username, $password, $db);


if ($conn->connect_error){
     die ("Connection Failed") . $conn->connect_error;

}






?>