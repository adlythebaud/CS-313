<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST["username"]))
        echo "<strong>username: </strong>". $_POST["username"] . "<br>";
    }
    echo "test";
?>