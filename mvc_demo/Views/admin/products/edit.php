<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="container w-80">
            <h1>Edit Product</h1>
            <form action="<?= BASE_URL . '?c=admin-product-update&id=' . $product['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label> <br>
                    <img src="<?= BASE_URL . $product['image'] ?>" width="99" alt=""><br>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <?php foreach ($categories as $cate): ?>
                            <option value="<?= $cate['id'] ?>"
                                <?= ($cate['id'] == $product['category_id']) ? 'selected' : '' ?>>
                                <?= $cate['name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" name="price" value="<?= $product['price'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input type="number" name="quantity" value="<?= $product['quantity'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" rows="3" id="" class="form-control"><?= $product['description'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea name="content" rows="6" id="" class="form-control"><?= $product['content'] ?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= BASE_URL . '?c=admin-product' ?>" class="btn btn-primary">List Product</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>