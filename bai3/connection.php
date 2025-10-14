<?php

//Thông tin truy cập vào database
$host = "localhost"; //127.0.0.1
$dbname = "wd21101_php1";
$username = "root";
$password = "";
$port = "3306";

try {
    //Kết nối đến database
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8; port=$port", $username, $password);
    // echo "Kết nối dữ liệu thành công";
} catch (PDOException $e) {
    echo "Lỗi kết nối database: " . $e->getMessage();
}
