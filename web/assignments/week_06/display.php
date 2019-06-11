<?php
    
    try
    {
        $hostname = "";
        $username = "";
        $password = "";
        $database = "";
        $port = "";

        $db = new PDO("pgsql:host=$hostname;port=$port;dbname=$database", $username, $password);

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        
            $sql = "INSERT INTO cs313.scriptures(scriptures_id, book, chapter, verse, content) VALUES ('" . $_POST["book"] . "', " . $_POST["chapter_input"] . ", " . $_POST["verse_input"] . ", '" . $_POST["content"] . "')";
            
            $scripture_id = $db->lastInsertId("scriptures_scriptures_id_seq");
            
            $topicSQL = "INSERT INTO cs313.scriptures_topic_lookup VALUES(" . $_POST["topic"] . ", " . $scripture_id . ")";
    
            
            if (($db->exec($sql) === TRUE) && ($db->exec($topicSQL) === TRUE)) {
                echo "success.";
            }
            
        }
    }
    catch(PDOException $ex)
    {
        echo "Error: " . $ex . "<br>";
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    
    <?php 
       
    ?>
    

</body>

</html>