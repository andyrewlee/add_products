<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    </head>
    <body>
    <div id="container">

        <div id="add_product">
            <form action="/products/add" method="post">
                <h2>Add a Product</h2>
                <p>
                    <label>Manufacturer Name:</label>
                    <select name="manufacturer">
                        <option value="Gucci">Gucci</option>
                        <option value="Prada">Prada</option>
                        <option value="Saint Laurent">Saint Laurent</option>
                        <option value="Fendi">Fendi</option>
                    </select>
                </p>
                <p>
                    <label>Product Name:</label>
                    <input type="text" name="product_name">
                </p>
                <p>
                    <label>Price ($):</label>
                    <input type="text" name="price">
                </p>
                <p>
                    <label>Description:</label>
                    <textarea name="description"></textarea>
                </p>
                <input type="submit" value="Add">
            </form>
        </div>

        <div id="product_listing">
            <h2>Product Listing</h2>
            <table>
                <thead>
                    <tr>
                        <th>Manufacturer</th>
                        <th>Product Name</th>
                        <th>Price ($)</th>
                        <th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<?php           foreach ($products as $product)
                {   ?>
                    <tr>
                        <td><?= $product['manufacturer_name'] ?></td>
                        <td><a href="/products/show/<?= $product['id'] ?>"><?= $product['name'] ?></a></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['created_at'] ?></td>
                        <td>
                            <a href="/products/destroy/<?= $product['id'] ?>">Delete</a>
                            <a href="/products/show/<?= $product['id'] ?>">Edit</a>
                        </td>
                    </tr>
<?php           }   ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
