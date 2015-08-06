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



