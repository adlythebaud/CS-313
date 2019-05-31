<?php
//dob16008@byui.edu
    session_start();
    try
    {
        $hostname = "";
        $username = "";
        $password = "";
        $database = "";
        $port = "";

        $db = new PDO("pgsql:host=$hostname;port=$port;dbname=$database", $username, $password);
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
    <form action="display.php" method="POST" class="col-md-6">
        <div class="form-group">
            <label for="name_input">Book</label>
            <input type="text" name="book" id="book_input" class="form-control"
                placeholder="Enter a book of scripture.">
        </div>
        <div class="form-group">
            <label for="email_input">Chapter</label>
            <input type="text" name="chapter_input" id="chapter_input" class="form-control"
                placeholder="Enter a Chapter.">
        </div>
        <div class="form-group">
            <label for="email_input">Verse Number</label>
            <input type="text" name="verse_input" id="verse_input" class="form-control" placeholder="Enter a Verse.">
        </div>


        <div class="form-group">
            <br>
            <label for="comments">Verse Text</label>
            <textarea class="form-control" name="content" id="comments" cols="30" rows="5"></textarea>
        </div>

        <div>
            <label for="continents">Topic</label><br>
            <?php 
            foreach($db->query("SELECT * FROM cs313.topic") as $row)
            {                
                echo "<input type='checkbox' name='topic' value='" . $row["topic_id"] .  "'>" . $row["name"] . "<br>";
            }
        
        ?>
        </div>
        <input type="submit" value="submit">
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        
            $sql = "INSERT INTO cs313.scriptures(scriptures_id, book, chapter, verse, content) VALUES (DEFAULT, " . $_POST["book"] . ", " . $_POST["chapter_input"] . ", " . $_POST["verse_input"] . ", " . $_POST["content"] . ")";
            // probably should error check.
            $db->query($sql);

            
        }
    ?>
    

</body>

</html>