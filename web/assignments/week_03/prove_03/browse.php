<?php 
    include "../../../menu.php";
    session_start();
    if (isset($_POST)) {
        var_dump($_POST);
    }
    
    // initialize the session variable
    
    // add each $_POST["item"] into an array

    // if we click the shopping cart item, set the session variable equal to the array.

    // if (isset($_POST["item"])) {
    //     $_SESSION["item"] = $_POST["item"];
        
    // }
    // var_dump($_SESSION["item"]);

    if (!empty($_POST["item"])){
        
        foreach ($_POST["item"] as $shoe){
            echo $shoe . "<br>";
        }

    }
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

    <div id="shopping-cart-container" class="row col-2">
        <div id="shopping-cart"></div>
        <i class="fas fa-shopping-cart" id="shopping-cart-icon"></i>        
    </div>
    <div id="shoes">

    </div>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script src="./scripts/browse.js"></script>
</body>


</html>