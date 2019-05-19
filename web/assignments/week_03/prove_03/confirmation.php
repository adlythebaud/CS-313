<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation - Fire Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
        $firstName = test_input($_POST["first_name"]);

        $lastName = test_input($_POST["lastName"]);
        $email = test_input($_POST["email"]);
        $streetAddress1 = test_input($_POST["street_address_1"]);
        $streetAddress2 = (!empty($_POST["street_address_2"]) ? test_input($_POST["street_address_2"]) : "");
        $city = test_input($_POST["city"]);
        $stateProvReg = test_input($_POST["state_prov_reg"]);
        $zipCode = test_input($_POST["zip_code"]);
        $country = test_input($_POST["country"]);
        $phoneNumber = test_input($_POST["phone_number"]);
        $shippingMethod = test_input($_POST["shipping_method"]);

        // display shipping and recipient info
        echo "<strong>First Name: </strong>". $firstName . "<br>";
        
        echo "<strong>Last Name: </strong>". $lastName . "<br>";
        
        echo "<strong>Email Address: </strong>". $email . "<br>";

        echo "<strong>Street Address:</strong><br>";
            
        echo $streetAddress1 . " " . (!empty($_POST["street_address_2"]) ? test_input($_POST["street_address_2"]) : "") . "<br>";
        
        echo $city . ", " . $stateProvReg . " " . $zipCode . "<br>";

        echo $country . "<br>";

        echo "<strong>Phone Number: </strong>". $phoneNumber . "<br>";

        echo "<strong>Shipping Method: </strong>". $shippingMethod . "<br>";             
    }
    
?>
    <a href="browse.php" class="btn btn-primary">Continue Shopping</a>
</body>

</html>