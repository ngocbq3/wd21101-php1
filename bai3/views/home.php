<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav></nav>
        <div class="row">
            <?php foreach ($result as $product): ?>
                <div class="col-4">
                    <a href="#">
                        <h3><?= $product['name'] ?></h3>
                    </a>
                    <div>Price: <?= $product['price'] ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>