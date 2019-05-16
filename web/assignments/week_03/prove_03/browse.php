<?php 
    include "../../../menu.php";
    session_start();
    if (isset($_POST)) {
        var_dump($_POST);
    }
    
    if (isset($_POST["item"])) {
        $_SESSION["item"] = $_POST["item"];
        
    }
    var_dump($_SESSION["item"]);
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
    <link rel="stylesheet" href="./styles/browse.css">
</head>

<body>
    <div class="jumbotron">
        <h1 class="d-flex justify-content-center">Welcome to Fire 🔥 Footwear.</h1>
        <h4 class="d-flex justify-content-center">Add some heat to your sneaker game.</h4>
    </div>
    <div id="cart-icon"></div>
    <div id="shoes">
        <!-- 
            Fill this dynamically with shoes. 
            A shoe item is:
                - An image
                - Bold title
                - Price
                - Button to add a size to your shopping cart -> store the shoe_id, size, and price in a session variable to add to cart and then to be purchased.
         -->
    </div>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script src="./scripts/browse.js"></script>
</body>


</html>