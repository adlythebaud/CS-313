<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST["name"]))
        echo "<strong>Name: </strong>". $_POST["name"] . "<br>";
    }
?>