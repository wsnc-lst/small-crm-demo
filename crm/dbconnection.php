<?php
$host = "db";  // แก้จาก 'localhost' เป็น 'db' (ชื่อ service ใน docker-compose.yml)
$username = "root";
$password = "root";  // จาก .env
$dbname = "crm";

$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());  // แสดง error ชัดๆ ถ้า fail
}
mysqli_set_charset($con, "utf8mb4");  // Charset สำหรับ UTF-8
?>