<?php 

    try
    {
        $hostname = getenv("HOSTNAME");
        $username = getenv("USERNAME");
        $password = getenv("PASSWORD");
        $database = getenv("DATABASE");
        $port = getenv("PORT-PSQL");

        $db = new PDO("pgsql:host=$hostname;port=$port;dbname=$database", $username, $password);
    }
    catch(PDOException $ex)
    {
        echo "Error: " . $ex . "<br>";
        die();
    }
    echo "<h1>Scripture Resources</h1><br>";
    foreach($db->query("SELECT * FROM teach_05.scriptures") as $row)
    {
        echo "<strong>" . $row["book"] . " " . $row["chapter"] . ":" . $row["verse"] . "</strong> " . $row["content"] . "<br>";
    }



    

?>