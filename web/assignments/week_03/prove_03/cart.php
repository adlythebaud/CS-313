<?php 
    session_start();            
    if (!empty($_SESSION["shoes"])){
        $shoesArray = array();            
        foreach ($_SESSION["shoes"] as $shoe){            
            array_push($shoesArray, json_encode($shoe));            
        }
        echo json_encode($shoesArray);
    }
?>
