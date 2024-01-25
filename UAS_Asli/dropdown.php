<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
</head>
<body>

<form method="post" action="process_form.php">
    <label for="cars">Choose a car:</label>
    <select name="cars" id="cars">
        <?php
        // Assume you have an array of car options
        $carOptions = array("Toyota", "Honda", "Ford", "Chevrolet", "Nissan");

        // Loop through the array to generate options dynamically
        foreach ($carOptions as $car) {
            echo "<option value=\"$car\">$car</option>";
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>

</body>
</html>
