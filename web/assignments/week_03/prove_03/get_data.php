<?php
        
    // use these in production.
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
=======
>>>>>>> Testing for Azure Deployment Pipeline
    $hostname = getenv("HOSTNAME");
    $username = getenv("USERNAME");
    $password = getenv("PASSWORD");
    $database = getenv("DATABASE");
<<<<<<< refs/remotes/heroku/master

=======
    // $hostname = getenv("HOSTNAME");
    // $username = getenv("USERNAME");
    // $password = getenv("PASSWORD");
    // $database = getenv("DATABASE");

=======
    // $hostname = getenv("HOSTNAME");
    // $username = getenv("USERNAME");
    // $password = getenv("PASSWORD");
    // $database = getenv("DATABASE");

>>>>>>> Shopping Cart functionality complete
    $hostname = "mymariadb.ccswpeqyo8av.us-east-2.rds.amazonaws.com";
    $username = "master";
    $password = "02x9sWJoadGKYdIfP38";
    $database = "my_maria_db";
    
<<<<<<< refs/remotes/heroku/master
>>>>>>> Commit.
=======

>>>>>>> Testing for Azure Deployment Pipeline
=======
>>>>>>> Shopping Cart functionality complete
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
<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
    }
    
    // It might be worthwhile saving your rows as session variables..
=======
    }    
>>>>>>> Commit.
=======
    }
    
    // It might be worthwhile saving your rows as session variables..
>>>>>>> Shopping cart page complete
    $conn->close();
?>