<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php include "../../menu.php"; ?>


<br>
<a href="/assignments.php">Return</a>
<h1>TEAM ACTIVITY 3: FORMS</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="col-md-6">
    <div class="form-group">
        <label for="name_input">Name</label>
        <input type="text" name="name" id="name_input" class="form-control" placeholder="Enter your name.">
    </div>
    <div class="form-group">
        <label for="email_input">Email</label>
        <input type="text" name="email" id="email_input" class="form-control" placeholder="Enter your email address.">
    </div>

    <div>
        <label for="major">Major</label>
        <select class="form-control" name="major">
            <option value="" selected disabled hidden>Select your major.</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Computer Engineering">Software Engineering</option>
            <option value="Web Design and Development">Web Design and Development</option>
            <option value="Computer Information Technology">Computer Information Technology</option>
            <option value="Computer Engineering">Computer Engineering</option>
        </select>
    </div>

    <div class="form-group">
        <br>
        <label for="comments">Comments</label>
        <textarea class="form-control" name="comments" id="comments" cols="30" rows="5"></textarea>
    </div>

    <div>
        <label for="continents">Where have you gone?</label><br>
        <input type="checkbox" name="continent[]" value="North America">North America <br>
        <input type="checkbox" name="continent[]" value="South America">South America <br>
        <input type="checkbox" name="continent[]" value="Australia">Australia <br>
        <input type="checkbox" name="continent[]" value="Asia">Asia <br>
        <input type="checkbox" name="continent[]" value="Europe">Europe <br>
        <input type="checkbox" name="continent[]" value="Africa">Africa <br>
        <input type="checkbox" name="continent[]" value="Antartica">Antartica <br>
    </div>
    <input type="submit" value="submit">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST["name"]))
        echo "<strong>Name: </strong>". $_POST["name"] . "<br>";

        if (!empty($_POST["email"]))
        echo "<strong>Email: </strong>". $_POST["email"] . "<br>";

        if (!empty($_POST["major"]))
        echo "<strong>Major: </strong>". $_POST["major"] . "<br>";

        if (!empty($_POST["comments"]))
        echo "<strong>Comments: </strong>". $_POST["comments"] . "<br>";

        if (!empty($_POST["continent"])){
            echo "<strong>Places visited:</strong><br>";
            foreach ($_POST["continent"] as $continent){
                echo $continent . "<br>";
            }

        }
        
    }
?>