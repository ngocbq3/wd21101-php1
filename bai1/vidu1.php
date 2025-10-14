<?php

echo "<h1>Lập trình PHP1</h1>";

//khai báo mảng
$arr = ['a', 23, 5, 'string'];

$arr2 = [
    'id' => 'ph12345',
    'email' => 'ngocbq3@fe.edu.vn',
    'name'  => 'Bùi Quang Ngọc'
];

//Hiển thị mảng

echo "<pre>";
print_r($arr);
echo "</pre>";

print_r($arr2);

$sinhvien = [
    [
        'id' => 'ph12345',
        'email' => 'annv@gmail.com',
        'name'  => 'Nguyễn Văn An'
    ],
    [
        'id' => 'ph12346',
        'email' => 'longtt@gmail.com',
        'name'  => 'Trần Tuấn Long'
    ],
    [
        'id' => 'ph12347',
        'email' => 'quyettv@gmail.com',
        'name'  => 'Trịnh Văn Quyết'
    ]
];

?>

<h2>Vòng lặp for</h2>
<?php for ($i = 0; $i < count($arr); $i++) : ?>
    <div> <?= $arr[$i] ?> </div>
<?php endfor ?>

<h2>Vòng lặp foreach</h2>
<table border="1">
    <tr>
        <th>#ID</th>
        <th>Email</th>
        <th>Name</th>
    </tr>

    <?php foreach ($sinhvien as $sv) : ?>
        <tr>
            <td><?= $sv['id'] ?></td>
            <td><?= $sv['email'] ?></td>
            <td><?= $sv['name'] ?></td>
        </tr>
    <?php endforeach ?>

</table>