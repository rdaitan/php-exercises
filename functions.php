<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <h1>functions</h1>
        <?php function column() { ?>
            <td>column</td>
        <?php } ?>
        <?php
            for ($i = 0; $i < 10 ; $i++)
                column();
        ?>        
    </body>
</html>

<?php
// nested function
function before($str_b4) {
    echo "1 $str_b4 ";
    function after($str_af) {
        echo "3 $str_b4 ";
        echo "4 $str_af ";
    }
    echo "2 TWO ";
}

//after("HEYO");
//before("FOO");

//before("YO");
//echo "  STOP!  ";
//after("SUP");
//
//after("OH");
//before("MY");
        
// global variable

$yo = 'yo';

function hey() {
    global $yo;
    echo $yo . '!';
}

hey();

// static

function heyo() {
    static $str = 'hey';
    $str .= 'o';
    echo "<br/>$str";
}

for ($i = 0; $i < 4; $i++)
    heyo();


// pass-by-reference

function doubler(&$value) {
    $value = $value << 1;
}

$a = 3;
doubler($a);
echo "<br/>$a";
doubler($a);
echo "<br/>$a";
doubler($a);
echo "<br/>$a";
doubler($a);
echo "<br/>$a";

// variable parameters

function print_all() {
    $params = func_get_args();
    foreach($params as $param)
        echo "<br/>$param";
}

print_all('a', 'e', 'i', 'o', 'u');

// return by reference

$names = array('a man', 'b man', 'c man');

function &getNames() {
    global $names;
    return $names;
}

$names_ref =& getNames();
$names_ref[0] = 'p-man';
echo "<br/>$names[0]";

// variable function

$func = 'print_all';
$func('yo', 'momma', 'so', 'fat');

//  anonymous function
$array = array("really long string here, boy", "this", "middling length", "larger");

usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
});

print_r($array);

$sortOption = 'desc';
usort($array, function($a, $b) use ($sortOption) {
    if ($sortOption == 'desc')
        return strlen($b) - strlen($a);
    else
        return strlen($a) - strlen($b);
});

print_r($array);
