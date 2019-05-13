<?php include "../../../menu.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiger Tongues Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron">
        <h1 class="d-flex justify-content-center">Welcome to Tiger Tongues Footwear.</h1>
    </div>

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
    <?php
        
        // use these in production.
        $hostname = getenv("HOSTNAME");
        $username = getenv("USERNAME");
        $password = getenv("PASSWORD");
        $database = getenv("DATABASE");
        
        

        $conn = mysqli_connect($hostname, $username, $password, $database);

        // Check connection
        if (!$conn) {

            die("Connection failed: " . mysqli_connect_error());            

        }
        // get the items to show:
        $display_items = "SELECT DISTINCT shoe_id, shoe_name, price FROM my_maria_db.website_inventory";
        $result = $conn->query($display_items);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<img src=\"./images/" . $row["shoe_id"] . "_01.jpg\" alt=" . "\"" . $row["shoe_id"] . "\" class=\"img-thumbnail\" height=\"200\" width=\"200\"> <br>"; 
                echo "<strong>" . $row["shoe_name"] . "</strong><br>Price: $" . $row["price"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</body>

</html>