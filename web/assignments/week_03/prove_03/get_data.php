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
    $display_items = "SELECT DISTINCT shoe_id, shoe_name, price, shoe_description FROM my_maria_db.website_inventory";
    $result = $conn->query($display_items);
    if ($result->num_rows > 0) {
        echo json_encode(mysqli_fetch_all($result));
    }
    
    // It might be worthwhile saving your rows as session variables..
    $conn->close();
?>