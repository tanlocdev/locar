<?php
$conn = mysqli_connect('127.0.0.1:3306', 'root', '', 'webthuexe') or die('Xin lỗi không thể kết nối đến database');

$conn->query("SET NAMES 'utf8mb4'");
$conn->query("SET CHARACTER SET UTF8MB4");
$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci'");
?>