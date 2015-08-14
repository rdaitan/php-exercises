<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personality</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p>Select you personality attributes:</p>
        <input type="checkbox" name="attributes[]" value="perky"/>Perky<br/>
        <input type="checkbox" name="attributes[]" value="morose"/>Morose<br/>
        <input type="checkbox" name="attributes[]" value="thinking"/>Thinking<br/>
        <input type="checkbox" name="attributes[]" value="feeling"/>Feeling<br/>
        <input type="checkbox" name="attributes[]" value="thrifty"/>Thrifty<br/>
        <input type="checkbox" name="attributes[]" value="shopper"/>Shopper<br/>
        <input type="submit" name='s' value="Record my personality!">
    </form>
    <?php
    if (array_key_exists('s', $_GET)) { // when the submit button is clicked, it is also passed.
        $description = implode(' ', $_GET['attributes']);
        print("You have a $description personality.");
    }
    ?>
</body>
</html>