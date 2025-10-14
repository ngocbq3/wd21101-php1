<?php

$choin = $_GET['choin'] ?? '';

// switch ($choin) {
//     case '':
//         echo "Trang chủ";
//         break;
//     case 'lien-he':
//         echo "Trang Liên hệ";

//         break;
//     case 'gioi-thieu':
//         echo "Trang giới thiệu";
//         break;
//     default:
//         echo "404 Trang web không tồn tại";
// }
function home()
{
    echo "<h1>Trang chủ</h1>";
    echo "<hr>";
    echo "<div>Nội dung trang chủ</div>";
}


$message = match ($choin) {
    '', 'home' => home(),
    'lien-he'   => "Trang liên hệ",
    'gioi-thieu'    => "Trang giới thiệu",
    default => "404 Trang web không tồn tại"
};

echo $message;
