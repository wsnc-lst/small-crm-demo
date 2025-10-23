<?php
$host = "db";  // ชื่อ container DB ใน Docker
$username = "root";
$password = "root";  // จาก .env
$dbname = "crm";  // แก้จาก 'crm_admin' เป็น 'crm' (ชื่อ DB จริง)

$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());  // แสดง error ชัดๆ ถ้า fail
}
mysqli_set_charset($con, "utf8mb4");  // Charset UTF-8
?>