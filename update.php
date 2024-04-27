<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "select * from prod where id= $ID");
    $data = mysqli_fetch_array($up)
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Update Products</h2>
                <input type="text" name="id" placeholder="Product Id" value="<?php echo $data ['id'] ?>">
                <br>
                <input type="text" name="name" placeholder="Product Name" value="<?php echo $data ['name'] ?>" required>
                <br>
                <input type="text" name="price" placeholder="Product Price" value="<?php echo $data ['price'] ?>" required>
                <br>
                <label for="file">Update product image</label>
                <input type="file" id="file" name="image" style="display: none;">
                <button name="update" type='submit'>Update Product</button>
                <br><br>
                <a href="products.php">display all products</a>
            </form>
        </div>
        <p>Developer By MOHAMED MAGDY</p>
    </center>
</body>
</html>