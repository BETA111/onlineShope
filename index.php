<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snow Moon | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Snow Moon Store</h2>
                <img src="logo1.png" alt="logo" width="60%">
                <input type="text" name="name" placeholder="Product Name" required>
                <br>
                <input type="text" name="price" placeholder="Product Price" required>
                <br>
                <br>
                <label for="file">Product image</label>
                <input type="file" id="file" name="image" style="display: none;" required>
                <button name="upload">Upload product</button>
                <br><br>
                <a href="products.php">display all product</a>
            </form>
        </div>
        <p>Developer By MOHAMED MAGDY</p>
    </center>
</body>
</html>