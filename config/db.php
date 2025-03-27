<?php
$servername = "localhost";
$username = "root";
$password = "drakekarto@";
$dbname = "ql_nhansu";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error)
    die("Kết nối thất bại: " . $conn->connect_error);
?>