<?php

function index()
{
    //Lấy thông tin connection
    global $conn;
    //SQL Lấy dữ của sản phẩm
    $sql = "SELECT * FROM products";
    //Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    //Thực thi câu lệnh
    $stmt->execute();
    //Lấy dữ liệu: là một mảng dữ liệu có key là tên cột
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //hiển thị view
    include_once "views/home.php";
}

//thêm dữ liệu
function create()
{
    global $conn;
    //Câu lệnh SQL thêm dữ liệu
    $sql = "INSERT INTO products(name, price, description, category_id) VALUES('Ipad 9 pro', 810, 'Ipad 9 pro', 2)";
    //Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    //Thực thi câu lệnh
    $stmt->execute();
    //Quay về danh sách trang chủ
    header("location: index.php");
    die;
}
//cập nhật DL
function edit()
{
    global $conn;
    //Câu lệnh SQL thêm dữ liệu
    $sql = "UPDATE products SET name='Iphone 17 pro max', price=1500 WHERE id=1";
    //Chuẩn bị xử lý dữ liệu
    $stmt = $conn->prepare($sql);
    //Thực thi câu lệnh
    $stmt->execute();
    //Quay về danh sách trang chủ
    header("location: index.php");
    die;
}
