<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_name";
// not orginal ...

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>
