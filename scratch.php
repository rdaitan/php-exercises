<?php
echo "hello";   // a statement
echo " world";  // a statement must end with a semicolon

if (false) {
    echo "!";   // the semicolon before the closing brace is required.
}               //no need for a semicolon after a curly brace

echo ":)"       // no need for a semicolon before the closing php tag
?>

<?php
    print("it's okay");
print(
    "it's okay"
    );
?>

<?php
##############
#    hash    #
##############

//////////////
//  slashes
//////////////

/*
multiline
comment
*/

?>

<?php
echo "Hello, world";
echo 1 + 1;
echo true;
?>

<?php
// valid
$identifier123;
$Identifier123;
$_identifier123;

// invalid
// $123identifier;
?>

<?php
// constant
define('PUBLISHER', "Penguin");
echo PUBLISHER;
?>

<?php
/*  
    on a 64-bit system the maximum value of an int
    is +9E18, larger than that of a 32-bit system,
    which is around 2 billion.
*/
$isInteger = is_int(9223372036854775808);
echo ($isInteger ? "true" : "false");  // output is false.
?>

<?php
// expansion
$pomf="=3";
echo "$pomf";
echo '$pomf';

if ("pandering" == "pandering") {
    echo "true";
}

if (is_string("yo")) {
    echo "true";
}
?>

<?php
echo is_bool(true) ? "true" : "false";
echo is_bool(0) ? "true" : "false";
?>

<?php
$users[0] = "heyo";
$users[1] = "foo";
$users[2] = "yo";

$info['name']    = "anon";
$info['age']     = 21;
$info['gender']  = 'male';

$animals    = array ("dog", "cat", "fish");
$phones     = array (
    "apple"     => "iPhone 6",
    "samsung"   => "Galaxy S6",
    "microsoft" => "Lumia 540"
    );

foreach ($users as $user) {
    echo "What's up, $user?<br/>";
}

// foreach (array as key => value)
foreach ($phones as $brand => $model) {
    echo "I got the new $model by $brand!<br/>";
}
    
sort($animals);
asort($phones);

var_dump($animals);
var_dump($phones);


// objects

class Money {
    private $value = 0.00;
    
    public function set_value($value = 0.00) {
        $this->value = $value;
    }
    
    public function get_value() {
        return $this->value;
    }
}

$one_hundred = new Money;
$one_hundred->set_value(100.00);
echo "{$one_hundred->get_value()}";


// callback

$say = function($str) {
    echo "{$str}<br/>";
};  // don't forget the semicolon!

function reply($str) {
    echo "{$str}.";
    if ("$str" == 'Heisenberg')
        echo '<br/>You are goddamn right.<br/>';
    else
        echo '<br/>*BANG*<br/>';
}
echo '<br/><br/>';
$say("Say my name.");
call_user_func('reply', 'Heisenberg');

// variables
echo '<br/>';
$count = 6;
echo "Rotate the wheel $count times.<br/>";

echo is_null($amINull) ? 'true' : 'false';
echo '<br/>';

$yo = 'YO';
$$yo = 'heyo';
echo "$YO<br/>";
// echoes heyo

$potato = 'PO-TA-TO';
$patata =& $potato;
print("$potato<br/>");
print("$patata<br/>");
$potato = 'POH-TAY-TOW';
print("$patata<br/>");

$pomf = '=3';
function intensify() {
    // enables access to the global $pomf variable.
    global $pomf;
    $pomf .= '3';
}
function intensifyx2() {
    $GLOBALS['pomf'] .= '33';
}
echo "$pomf";
intensify();
echo "$pomf";
intensifyx2();
echo "$pomf";
echo "<br/>";

function addOneCount() {
    static $count = 0;
    $count++;
    return "$count<br/>";
}

echo addOneCount();
echo addOneCount();
echo addOneCount();


// casting

echo "9.5 lives" - 1;
echo "-32 feet" * -2;
echo "nine 9" * 1;
echo '<br/>';


// casting operator

$a = (int) '5';
echo is_int($a) ? 'true' : 'false';
echo '<br/>';

class Paper {
    public $texture = 'rough';
    public $color = 'white';
}

$p = (array) (new  Paper);
var_dump($p);
echo '<br/>';


// assignment operator
$a = 4;
$b;
$c = ($b = $a);
echo "$a $b $c<br/>";

// execution operator
echo `ls -R` . '<br/>';

// instanceof
$p = new Paper;
echo $p instanceof Paper ? 'true' : 'false';
echo '<br/>';
