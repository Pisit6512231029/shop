<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "products&shop_db"; // เปลี่ยนเป็นชื่อ DB ของคุณ

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("เชื่อมต่อไม่สำเร็จ: " . $conn->connect_error);
}

session_start();
?>