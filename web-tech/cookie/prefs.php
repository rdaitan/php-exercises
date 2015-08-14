<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preferences Set</title>
</head>
<body>
<?php
$colors = array(
    'black' => '#000000',
    'white' => '#ffffff',
    'red'   => '#ff0000',
    'blue'  => '#0000ff'
    );

$background = array_key_exists('background', $_POST) ? $_POST['background'] : null;
$foreground = array_key_exists('foreground', $_POST) ? $_POST['foreground'] : null;

setcookie('background', $colors[$background]);
setcookie('foreground', $colors[$foreground]);
?>

    <p>Thank you. Your preferences have been changed to:</p>
    <p>Background: <?php echo $background; ?></p>
    <p>Background: <?php echo $foreground; ?></p>

    <p>Click <a href="prefs_demo.php">here</a> to see the preferences in action.</p>
</body>
</html>