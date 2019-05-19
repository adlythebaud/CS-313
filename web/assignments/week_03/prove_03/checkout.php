<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout - Fire Footwear</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <a href="cart.html">Back To Shopping Cart</a><br>

    <form action="confirmation.php" method="POST" class="col-md-6">
        <div class="form-group">
            <strong><label for="first_name_input">First Name</label></strong>
            <input type="text" name="first_name" id="first_name_input" class="form-control"
                placeholder="Enter your first name.">
        </div>
        <div class="form-group">
            <strong><label for="last_name_input">Last Name</label></strong>
            <input type="text" name="last_name" id="last_name_input" class="form-control"
                placeholder="Enter your last name.">
        </div>
        <div class="form-group">
            <strong><label for="email_input">Email Address</label></strong>
            <input type="text" name="email" id="email_input" class="form-control"
                placeholder="Enter your email address.">
        </div>

        <div>
            <strong><label for="country">Country</label></strong>
            <select class="form-control" name="country">
                <option value="" selected disabled hidden>Select a Country.</option>
                <option value="United States">United States</option>
                <option value="Brazil">Brazil</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Australia">Australia</option>
            </select>
        </div>

        <div class="form-group">
            <strong><label>Street Address</label></strong>
            <input type="text" name="street_address_1" id="street_address_1" class="form-control"
                placeholder="Street and number or P.O. box">

            <input type="text" name="street_address_2" id="street_address_2" class="form-control"
                placeholder="Apartment, suite, unit, building, floor etc.">
        </div>

        <div class="form-group">
            <strong><label>City</label></strong>
            <input type="text" name="city" id="city" class="form-control">
        </div>

        <div class="form-group">
            <strong><label>State / Province / Region</label></strong>
            <input type="text" name="state_prov_reg" id="state_prov_reg" class="form-control">
        </div>

        <div class="form-group">
            <strong><label>Zip Code</label></strong>
            <input type="text" name="zip_code" id="zip_code" class="form-control">
        </div>

        <div class="form-group">
            <strong><label>Phone Number</label></strong>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
        </div>

        <div>
            <strong><label for="shipping_method">Shipping Method</label></strong>
            <select class="form-control" name="shipping_method">
                <option value="" selected disabled hidden>Select a Shipping Method.</option>
                <option value="UPS Ground">UPS Ground</option>
                <option value="UPS 3-Day Select">UPS 3-Day Select</option>
                <option value="UPS 2nd Day Air">UPS 2nd Day Air</option>
                <option value="UPS Next Day Air">UPS Next Day Air</option>
            </select>
        </div>

        <a href="cart.html" class="btn btn-secondary">Back To Shopping Cart</a>
        <input type="submit" value="Complete Purchase" class="btn btn-primary">
    </form>
</body>

</html>