<?php 
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
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
<<<<<<< refs/remotes/heroku/master
    
=======
include "../../../menu.php"; 
>>>>>>> Prepping to use JS to populate UI and PHP to pass data back and forth
=======
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
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
    var_dump($_SESSION["item"]);
>>>>>>> got ajax and session variables to work! Look at network tab always.
=======
>>>>>>> getting app logic ready
=======
    var_dump($_SESSION["shoes"]);
=======
>>>>>>> Shopping cart page complete
    
<<<<<<< refs/remotes/heroku/master
    
    
>>>>>>> able to save clicked items as session variables.
=======
>>>>>>> Need to include session start
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
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
=======
>>>>>>> Prepping to use JS to populate UI and PHP to pass data back and forth
=======
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
>>>>>>> Able to pass shoe_id to php
    <link rel="stylesheet" href="./styles/browse.css">
</head>

<body>
    <div class="jumbotron">
        <h1 class="d-flex justify-content-center">Welcome to Fire 🔥 Footwear.</h1>
        <h4 class="d-flex justify-content-center">Add some heat to your sneaker game.</h4>
    </div>
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master

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
=======
    <div>
=======
=======
    <div id="cart-icon"></div>
>>>>>>> got ajax and session variables to work! Look at network tab always.
    <div id="shoes">
>>>>>>> Commit.
        <!-- 
            Fill this dynamically with shoes. 
            A shoe item is:
                - An image
                - Bold title
                - Price
                - Button to add a size to your shopping cart -> store the shoe_id, size, and price in a session variable to add to cart and then to be purchased.
         -->
=======

    <div id="shopping-cart-container" class="row col-2">
        <a href="cart.html">
            <div id="shopping-cart"></div>
            <i class="fas fa-shopping-cart" id="shopping-cart-icon"></i>
        </a>
    </div>
    <div id="shoes">

>>>>>>> Able to pass shoe_id to php
    </div>

<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
        $hostname = "mymariadb.ccswpeqyo8av.us-east-2.rds.amazonaws.com";
        $username = "master";
        $password = "02x9sWJoadGKYdIfP38";
        $database = "my_maria_db";
        
        $conn = mysqli_connect($hostname, $username, $password, $database);
>>>>>>> Prepping to use JS to populate UI and PHP to pass data back and forth


<<<<<<< refs/remotes/heroku/master
=======
        if ($result->num_rows > 0) {
            echo '<form action="' . $_SERVER["PHP_SELF"]. '" method="POST">';
            echo '<div class="container" id="shoes">';
            // output data of each row
            while($row = $result->fetch_assoc()) {                
                
                // I should use JS or React to return this, but I should use echo to return values from the DB to be sent to my javascript file.
                echo '<div class="card col-3" align="center">
                        <img class="img-thumbnail shoe-img" src="./images/'. $row["shoe_id"] . '_01.jpg" alt="Card image cap" height="200" width="200">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["shoe_name"] . '</h5>
                            <p class="card-text">' . $row["shoe_description"] . '</p>
                            <input type="hidden" name="shoes[]" value="' . $row["shoe_id"] . '">
                            <input type="button" value="Add To Cart" class="shoe-input">
                        </div>
                </div>';
            }
            echo '</div>';
            echo '</form>';
            
        } else {
            echo "Our store is empty! Check back soon for new stock.";
        }
        
        // if (!empty($_POST["shoe"])){
        //     echo "<strong>Shoe ID: </strong>". $_POST["shoe"] . "<br>";
        // }
        
        
        $conn->close();
    ?>

    <?php 
       session_start();
       echo "does this work?"; 
    ?>
>>>>>>> Prepping to use JS to populate UI and PHP to pass data back and forth
=======
    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
>>>>>>> Commit.
=======
    
>>>>>>> able to save clicked items as session variables.
=======

>>>>>>> Shopping cart page complete
    <script src="./scripts/browse.js"></script>
</body>


</html>