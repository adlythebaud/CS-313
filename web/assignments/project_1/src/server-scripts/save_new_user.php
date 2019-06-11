 <?php
    // include "../resources/header.php";
    header("Access-Control-Allow-Origin: *");
    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);
    
    include "../resources/connect.php";
    
    try {
                
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["first_name"] && $_POST["last_name"] && $_POST["email_address"] && $_POST["username"] && $_POST["password"] && $_POST["password_confirm"]) {
            
            // create user. Send correct response back.
            
            $insert = "INSERT INTO project_1.users (user_id, first_name, last_name, username, password, email_address) VALUES (DEFAULT, " . $conn->quote($_POST["first_name"]) . ", " . $conn->quote($_POST["last_name"]) . ", " . $conn->quote($_POST["username"]) . ", " . $conn->quote(password_hash($_POST["password"], PASSWORD_DEFAULT)) . ", " . $conn->quote($_POST["email_address"]) . ")";

            
            if ($conn->exec($insert) === false) {
                echo "0";
            } else {
                echo "1";
                unset($insert);
                unset($conn);
            }

            

        }

        echo "1";
        

    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    


?>