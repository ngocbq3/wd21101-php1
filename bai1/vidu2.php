<?php
if (isset($_GET['hoten'])) {
    $hoten = $_GET['hoten'];
    $tuoi = $_GET['tuoi'];

    if ($tuoi < 18) {
        echo "Bạn chưa đủ tuổi học cao đẳng đại học";
    } else {
        echo "Bạn đủ tuổi để học cao đẳng đại học";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form thông tin sinh viên</title>
</head>

<body>
    <form action="" method="get">
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" id="">
        </div>
        <div>
            <label for="">Tuổi</label>
            <input type="number" name="tuoi" id="">
        </div>
        <div>
            <button type="submit">Gửi</button>
        </div>
    </form>
</body>

</html>