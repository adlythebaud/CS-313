<?php 
    session_start();            
    if (!empty($_SESSION["shoes"])){
        $shoesArray = array();            
        foreach ($_SESSION["shoes"] as $shoe){            
            array_push($shoesArray, json_encode($shoe));            
        }
        echo json_encode($shoesArray);
    }
    
    if (!empty($_POST["removeItem"])){
        // echo $_POST["removeItem"] . "<br>";
        foreach ($_SESSION["shoes"] as $shoe){            
            if ($shoe == $_POST["removeItem"]) {
               
                $key=array_search($_POST["removeItem"],$_SESSION["shoes"]);
                // unset session variable here
                echo "<br>" . $_SESSION["shoes"][$key] . "<br>";
                unset($_SESSION["shoes"][$key]);

                // rearrange index of array for further use.
                $_SESSION["shoes"] = array_values($_SESSION["shoes"]);
            }
        }
    }

?>
