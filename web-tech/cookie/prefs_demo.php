<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Front Door</title>
</head>
<?php
$background = array_key_exists('background', $_COOKIE) ? $_COOKIE['background'] : null;
$foreground = array_key_exists('foreground', $_COOKIE) ? $_COOKIE['foreground'] : null;
?>
<body bgcolor="<?php echo $background; ?>" text="<?php echo $foreground; ?>">
    <p>
        We have many fine products for you to view. Please feel free to browse
        the aisles and stop an assistant at any time. But remember, you break it
        you bought it!
    </p>
    <p>
        Would you like to <a href="index.html">change your preferences?</a>
    </p>

</body>
</html>