<?php

class AdminProductController
{
    //Hiển thị danh sách sản phẩm
    public function index()
    {
        //Lấy ra tất cả sản phẩm
        $products = (new Product)->all();
        include_once "Views/admin/products/list.php";
    }

    //Hiển thị form thêm
    public function create()
    {
        //Danh sách categories
        $categories = (new Category)->all();
        include_once "Views/admin/products/add.php";
    }
    //Lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        //Nếu người dùng không nhập ảnh
        $data['image'] = "";
        //Sử lý file
        $file = $_FILES['image'];

        //Kiểm tra xem người dùng có nhập file không
        if ($file['size'] > 0) {
            //Lấy ra tên file + đường dẫn chưa file
            $image = "images/" . $file['name'];
            //Upload
            move_uploaded_file($file['tmp_name'], $image);
            //Gán image cho $data
            $data['image'] = $image;
        }

        //Lưu vào database
        (new Product)->create($data);
        //Quay lại trang danh sách
        header("location: " . BASE_URL . '?c=admin-product');
    }

    //Xóa sản phẩm
    public function delete()
    {
        //Lấy id từ URL
        $id = $_GET['id'];
        //Xóa dữ liệu
        (new Product)->delete($id);
        //Quay lại trang danh sách
        header("location: " . BASE_URL . '?c=admin-product');
    }

    //Hiển thị form edit product
    public function edit()
    {
        //Lấy id từ URL
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $product = (new Product)->find($id);
        //Danh sách categories
        $categories = (new Category)->all();

        include_once "Views/admin/products/edit.php";
    }

    //Cập nhật vào database
    public function update()
    {
        //Lấy id từ URL
        $id = $_GET['id'];
        //Lấy thông tin sản phẩm
        $product = (new Product)->find($id);

        //Lấy dữ liệu từ người dùng
        $data = $_POST;
        //Nếu người dùng không nhập ảnh thì giữ lại ảnh cũ
        $data['image'] = $product['image'];

        //Sử lý file
        $file = $_FILES['image'];

        //Kiểm tra xem người dùng có nhập file không
        if ($file['size'] > 0) {
            //Lấy ra tên file + đường dẫn chưa file
            $image = "images/" . $file['name'];
            //Upload
            move_uploaded_file($file['tmp_name'], $image);
            //Gán image cho $data
            $data['image'] = $image;
        }
        //Cập nhật
        (new Product)->update($id, $data);
        //Quay lại trang danh sách
        header("location: " . BASE_URL . '?c=admin-product');
    }
}
