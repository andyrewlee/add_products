<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    </head>
    <body>
        <div id="container">
            <h2><?= $show_product['name'] ?></h2>
            <p>
                <label>Manufacturer/Brand:</label>
                <select name="manufacturer">
                    <option value="Gucci">Gucci</option>
                    <option value="Prada">Prada</option>
                    <option value="Saint Laurent" selected>Saint Laurent</option>
                    <option value="Fendi">Fendi</option>
                </select>
            </p>
            <p>
                <label>Product Name:</label>
                <input type="text" name="product_name" value="<?= $show_product['name'] ?>">
            </p>
            <p>
                <label>Price:</label>
                <input type="text" name="price" value="<?= $show_product['price'] ?>">
            </p>
            <p>
                <label>Description:</label>
                <textarea name="description" value="<?= $show_product['description'] ?>">
                </textarea>
            </p>
            <a href="/products/update/<?= $show_product['id'] ?>">Update</a>
            <a href="/products/destroy/<?= $show_product['id'] ?>">Delete</a>
        </div>
    </body>
</html>
