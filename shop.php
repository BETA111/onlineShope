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
        color: #fe972d;
        width: 62%;
        margin-top: 30px;
        font-family: "Cairo", sans-serif;
        font-weight: bold;
        
    }
    .card{
        float: right;
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
    margin: 20px auto;
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
.navbar-brand{
    margin-left: 70px;
    text-decoration: none;
    font-size: 20px;
    color: #fff4e3;
    font-family: "Cairo", sans-serif;
    font-weight: bold;
}
.navbar-admin{
    margin-right: 70px;
    text-decoration: none;
    font-size: 20px;
    color: #fff4e3;
    font-family: "Cairo", sans-serif;
    font-weight: bold;
}
nav{
    color: #fe972d;
    background-color: #fe972d;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="card.php">My card|عربتي</a>
        <a class="navbar-admin" href="index.php">Admin Mood</a>

    </nav>
    <center>
        <h3>Products available</h3>
    </center>
    <br>
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
        <a href='val.php? id=$row[id]' class='btn btn-success'>Add to cart</a>
        </div>
     </div>
   </main>
        </center>
        ";
    }
    ?></center>
   
</body>
</html>