<?php
    header("Access-Control-Allow-Origin: *");
    
    $hostname = "mypostgresqldb.ccswpeqyo8av.us-east-2.rds.amazonaws.com";
    $username = "master";
    $password = "Wb3wwKvXmvRcWVOhOc5";
    $database = "MyPostgreSQLDB";
    $port = "5432";

    try {
        $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);        
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>