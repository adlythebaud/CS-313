<?php 
include "../../../menu.php"; 
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

    <div>
        <!-- 
            Fill this dynamically with shoes. 
            A shoe item is:
                - An image
                - Bold title
                - Price
                - Button to add a size to your shopping cart -> store the shoe_id, size, and price in a session variable to add to cart and then to be purchased.
         -->
    </div>
    <?php
        
        // use these in production.
        // $hostname = getenv("HOSTNAME");
        // $username = getenv("USERNAME");
        // $password = getenv("PASSWORD");
        // $database = getenv("DATABASE");

        $hostname = "mymariadb.ccswpeqyo8av.us-east-2.rds.amazonaws.com";
        $username = "master";
        $password = "02x9sWJoadGKYdIfP38";
        $database = "my_maria_db";
        
        $conn = mysqli_connect($hostname, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());            
        }
        // get the items to show:
        $display_items = "SELECT DISTINCT shoe_id, shoe_name, price, shoe_description FROM my_maria_db.website_inventory";
        $result = $conn->query($display_items);

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
    <script src="./scripts/browse.js"></script>
</body>


</html>