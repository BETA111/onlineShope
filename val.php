<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Purchase Confirmation</title>
    <style>
        input{
            display: none;
        }
        .main{
            width: 80%;
            height: 80%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px;
        }
        a{
            text-decoration: none;
            font-size: 50px;
            font-family: "Cairo", sans-serif;
            font-weight: bold;
            margin-top: 20px;
            margin-right: 10px;
        }
        button{
            font-family: "Cairo", sans-serif;
            font-weight: bold;
            margin-top: 20px;
            size: 80%;
            width: 90%;
        }
        h2{
        width: 62%;
        margin-top: 30px;
        font-family: "Cairo", sans-serif;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <center>
            <div class="main">
            <form action="insert_card.php" method="post">
                <h2>Are you sure to buy this product</h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <input type="text" name="name" value='<?php echo $data['name']?>'>
                <input type="text" name="price" value='<?php echo $data['price']?>'>
                <button name="add" type="submit" class = 'btn btn-warning'>Confirm the addition to the cart</button>
                <br>
                <a class="btn" href="shop.php">Back to Products Page</a>
                </form>
            </div>
    </center>
</body>
</html>