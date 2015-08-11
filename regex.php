<?php
var_dump(preg_match('/\$5/', '$5 only.'));
var_dump(preg_match('/\$5/', '5 only.'));
// remember that php would expand $variable when using
// double quotes.

print('<br/>');

// pipe
var_dump(preg_match('/cat|dog/', 'catman'));
var_dump(preg_match('/cat|dog/', 'dogman'));
var_dump(preg_match('/cat|dog/', 'catog'));
var_dump(preg_match('/cat|dog/', 'dog'));
print('<br/>');

// subpatterns
$str = '<form action="submit.php" method="get">Content</form>';
$strPattern = '/^<form action="(.*)" method="(get|post)">(.*)<\/form>$/';
preg_match($strPattern, $str, $matches);
var_dump($matches);
print('<br/>');

// delimiters
var_dump(preg_match('@\$5@', '$5 only.'));
