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