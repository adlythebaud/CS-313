<?php 
    include "../resources/connect.php";
    session_start();

    $client_id = "98d63c2e25ea4bc9aea984eee58ccce1";
    $client_secret = "07b33ee3f6a045da964df2d89eb061e6";
    $redirect_uri = "";
    $scopes = "user-read-private%20user-read-email%20user-top-read";
    $access_token = $_SESSION["access_token"];

    // 1. Have my application request authorization; the user logs in and authorizes access.
    if (!isset($_SESSION["access_token"])) {
        // user is logged in and we can either get new data from them or verify that we have their data.
        $auth_request = "https://accounts.spotify.com/authorize?client_id=" . $client_id . "&response_type=code&redirect_uri=" . $redirect_uri . "&scope=" . $scopes . "&state=34fFs29kd09";

        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Origin: *");
       
        header('Location: '. $auth_request);
        
    }

    // 2. Have application request refresh AND access tokens. Spotify returns these.

    // 3. Use access token from step 2 to access the Spotify Web API. Spotify will then return requested user data.

    // 4. Request a refresh token because your access token will expire eventually.

?>