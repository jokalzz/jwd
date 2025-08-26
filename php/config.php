<?php
$host = 'localhost'; 
$db = 'jwd';
$user = 'root'; 
$pass = ''; 
// Establish connection using MySQLi
$con = mysqli_connect($host, $user, $pass, $db);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>