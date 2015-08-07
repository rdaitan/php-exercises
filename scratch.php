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

