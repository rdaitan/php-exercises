<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature Conversion 2</title>
</head>
<body>
    <?php 
    @$fahrenheit = $_GET['fahrenheit']; // @ is used to supress errors.
    if ($fahrenheit) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <p>Fahrenheit temperature</p>
        <input type="text" name="fahrenheit">
        <br>
        <input type="submit" value="Convert to Celsius!">
    </form>
    <?php } 
    else {
        $fahrenheit = $_GET['fahrenheit'];
        $celsius = ($fahrenheit - 32) * 5 / 9;
        printf('%.2fF is  %.2fC', $fahrenheit, $celsius);
    }
    ?>
</body>
</html>