<?php
    header("Access-Control-Allow-Origin: *");
    
    $hostname =  getnenv("HOSTNAME-PSQL");
    $username = getnenv("USERNAME-PSQL");
    $password = getnenv("PASSWORD-PSQL");
    $database = getnenv("DATABASE-PSQL");
    $port = getnenv("PORT-PSQL");

    try {
        $conn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);        
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>