<?php
require_once "config.php";
//Model
require_once "Models/DB.php";
require_once "Models/Product.php";
require_once "Models/Category.php";
//Controller
require_once "Controllers/HomeController.php";
require_once "Controllers/ProductController.php";
require_once "Controllers/Admin/AdminProductController.php";
//Biến điều khiển, lấy dữ liệu từ trên đường dẫn trình duyệt
$c = $_GET['c'] ?? '';

match ($c) {
    '' => (new HomeController)->index(),
    'danh-sach' => (new ProductController)->index(),
    'chi-tiet'  => (new ProductController)->show(),

    //Admin
    'admin-product' => (new AdminProductController)->index(),
    'admin-product-add' => (new AdminProductController)->create(),
    'admin-product-store' => (new AdminProductController)->store(),
    'admin-product-delete' => (new AdminProductController)->delete(),
    'admin-product-edit' => (new AdminProductController)->edit(),
    'admin-product-update' => (new  AdminProductController)->update(),
    default => (new HomeController)->error404()
};
