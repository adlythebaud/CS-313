<?php
    // include "../resources/header.php";
    session_start();
    include "../resources/connect.php";
    
    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);

    // function onLogin($user) {
    //     $token = GenerateRandomToken(); // generate a token, should be 128 - 256 bit
    //     storeTokenForUser($user, $token);
    //     $cookie = $user . ':' . $token;
    //     $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
    //     $cookie .= ':' . $mac;
    //     setcookie('rememberme', $cookie);
        
    // }



    try { 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["signup"]) {
            $statement = "SELECT COUNT(*) FROM project_1.users WHERE users.email_address= :email_address OR users.username = :username";
            // echo $statement . "\n";
            $sql = $conn->prepare($statement);
            
            $sql->execute([
                'email_address' => $_POST["email_username"], 
                'username' => $_POST["email_username"]
                ]);

            $result = $sql->fetch();
            
            echo $result["count"];
            
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["login"]) {
            // login the user. How do I do that exactly...?
            // probably set a cookie and session variable..?
            $statement = "SELECT * FROM project_1.users WHERE users.email_address=:email_address OR users.username=:email_address";
            

            $sql = $conn->prepare($statement);

            $sql->execute(['email_address' => $_POST["email_username"]]);

            $result = $sql->fetch();
            
            if (password_verify($_POST["password"], $result["password"])) {
                // TODO: Create session variable or cookie here that states that the user is logged in. Keep user logged in until session ends or until they log out.
                echo 1;
            } else {
                echo 0;
            }

        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["passwordReset"]) {
            
        }
        
        unset($conn);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;

?>