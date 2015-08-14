<?php
$attributes = array();
if(array_key_exists('attributes', $_GET))
    $attributes = $_GET['attributes'];

$personalityAttributes = array(
    'perky'     => 'Perky',
    'morose'    => 'Morose',
    'thinking'  => 'Thinking',
    'feeling'   => 'Feeling',
    'thrifty'   => 'Thrifty',
    'shopper'   => 'Shopper'
    );

function makeCheckBoxes($name, $query, $options) {
    foreach ($options as $value => $label) {
        $checked = in_array($value, $query) ? 'checked' : '';
        
        echo "<input type=\"checkbox\" name=\"{$name}\" value=\"{$value}\" {$checked} />{$label}<br/>";
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personality</title>
</head>
<body>    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php makeCheckBoxes('attributes[]', $attributes, $personalityAttributes); ?>
        <input type="submit" value="Record my personality!" name="s" >
    </form>
    <?php
    if (array_key_exists('s', $_GET)) { // when the submit button is clicked, it is also passed.
        $description = implode(' ', $_GET['attributes']);
        print("You have a $description personality.");
    }
    ?>
</body>
</html>