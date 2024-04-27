<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card | عربتي</title>
    <style>
        h3{
            width: 62%;
        margin-top: 30px;
        margin-bottom: 30px;
        font-family: "Cairo", sans-serif;
        font-weight: bold;
        }
        main{
            width: 62%;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #b0c5ea;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        .btn{
            border: none;
            font-weight: bold;
            font-size: 15px;
            color: #fff;
            background-color:#fe972d;
            border-color: #fe972d;
            font-family: "Cairo", sans-serif;
        }
        a{
            text-decoration: none;
            font-size: 20px;
            color: #fe972d;
            font-family: "Cairo", sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center>
    <h3>
    Your Reserved Products
    </h3>
    </center>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM addcard");
while ($row = mysqli_fetch_array($result)) {
    echo "
    <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Product name</th>
                    <th scope='col'>Product price</th>
                    <th scope='col'>Delete Product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                </tr>
            </tbody>
        </table>
    </main>
</center>
    ";
}
?>
<center>
    <a href="shop.php">Back to Products Page</a>
</center>
</body>
</html>