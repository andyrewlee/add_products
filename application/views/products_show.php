<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    </head>
    <body>
        <div id="container">
            <h2><?= $product['name'] ?></h2>
            <form action="/products/update/<?= $product['id'] ?>" method="post">
                <p>
                    <label>Manufacturer/Brand:</label>
                    <select name="manufacturer">
                        <option value="Gucci"
    <?php           if ($manufacturer['name'] == 'Gucci')
                    {   
                        echo "selected";
                    }   ?>  >Gucci</option>
                        <option value="Prada"
    <?php           if ($manufacturer['name'] == 'Prada')
                    {
                        echo "selected";
                    }   ?>  >Prada</option>
                        <option value="Saint Laurent"
    <?php           if ($manufacturer['name'] == 'Saint Laurent')
                    {
                        echo "selected";
                    }   ?>  >Saint Laurent</option>
                        <option value="Fendi"
    <?php           if ($manufacturer['name'] == 'Fendi')
                    {
                        echo "selected";
                    }   ?>  >Fendi</option>
                    </select>
                </p>
                <p>
                    <label>Product Name:</label>
                    <input type="text" name="product_name" value="<?= $product['name'] ?>">
                </p>
                <p>
                    <label>Price:</label>
                    <input type="text" name="price" value="<?= $product['price'] ?>">
                </p>
                <p>
                    <label>Description:</label>
                    <textarea name="description"><?= $product['description'] ?></textarea>
                </p>
                <input type="submit" value="update">
            </form>
            <a href="/products/destroy/<?= $product['id'] ?>">Delete</a>
        </div>
    </body>
</html>
