<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hoten = $_POST['hoten'];
    $tuoi = $_POST['tuoi'];

    if ($tuoi >= 18) {
        $message = "$hoten đủ tuổi $tuoi vào cao đẳng đại học";
    } else {
        $message = "$hoten tuổi $tuoi chưa đủ để vào cao đẳng đại học";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" value="<?= $hoten ?? '' ?>" id="">
        </div>
        <div>
            <label for="">Tuổi</label>
            <input type="number" name="tuoi" value="<?= $tuoi ?? '' ?>" id="">
        </div>
        <div>
            <button type="submit">Gửi</button>
        </div>
    </form>
    <div>
        <?= $message ?? '' ?>
    </div>
</body>

</html>