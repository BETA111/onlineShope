<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | منتجات </title>
    <style>
    h3{
        width: 62%;
        margin-top: 30px;
        font-family: "Cairo", sans-serif;
        font-weight: bold;
        background-color: #fe972d;
        color: #fff4e3;
        border-radius: 20px;
    }
    .card{
        float: right;
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .card img{
        width: 100%;
        height: 200px;
    }
    main{
    width: 62%;
    background-color: white;
    margin: 50px auto;
    border-radius: 10px;
    }
    .card a{
border: none;
padding: 10px;
width: 50%;
font-weight: bold;
background-color: #ffbd79;
cursor: pointer;
font-family: "Cairo", sans-serif;
margin-bottom: 15px;
}
a{
text-decoration: none;
font-size: 20px;
color: #fe972d;
font-family: "Cairo", sans-serif;
font-weight: bold;
margin-top: 20px;
margin-left: 10px;
margin-right: 10px;
}
    </style>
</head>
<body>
    <center>
        <h3>Admin control page</h3>
    </center>
    <br>

    <center>
    <a href="index.php">Add new product</a>
    <a href="shop.php">User Mood</a>
    </center>
    <center>
    <?php
    include ('config.php');
    $result = mysqli_query($con,"SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main>
        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='$row[image]' >
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>price : $row[price]$</p>
        <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete product</a>
        <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit product</a>
        </div>
     </div>
   </main>
        </center>
        ";
    }
    ?></center>
   
</body>
</html>