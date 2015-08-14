<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personality</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <p>Select you personality attributes:</p>
        <select name="attributes[]" id="attributes" multiple>
            <option value="perky">Perky</option>
            <option value="morose">Morose</option>
            <option value="thinking">Thinking</option>
            <option value="feeling">Feeling</option>
            <option value="thrifty">Thrifty</option>
            <option value="shopper">Shopper</option>
        </select>
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