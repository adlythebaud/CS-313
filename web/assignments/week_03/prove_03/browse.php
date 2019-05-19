<?php 
    include "../../../menu.php";
    
    session_start();
    // check if an item was sent to the server
    if (isset($_POST["item"])) {
        $shoesArray = array();
        if (!isset($_SESSION["shoes"])) {
            array_push($shoesArray, $_POST["item"]);
        } else {
            $shoesArray = $_SESSION["shoes"];
            array_push($shoesArray, $_POST["item"]);
        }           
        $_SESSION["shoes"] = $shoesArray;
    }
    // var_dump($_SESSION["shoes"]);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fire 🔥 Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/browse.css">
</head>

<body>
    <div class="jumbotron">
        <h1 class="d-flex justify-content-center">Welcome to Fire 🔥 Footwear.</h1>
        <h4 class="d-flex justify-content-center">Add some heat to your sneaker game.</h4>
    </div>
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master

    <div id="shopping-cart-container" class="row col-2">
        <a href="cart.html">
            <div id="shopping-cart"></div>
            <i class="fas fa-shopping-cart" id="shopping-cart-icon"></i>
        </a>
    </div>
    <div id="shoes">

    </div>


    <script src="./scripts/browse.js"></script>
</body>


</html>