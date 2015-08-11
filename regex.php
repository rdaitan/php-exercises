<?php
var_dump(preg_match('/\$5/', '$5 only.'));
var_dump(preg_match('/\$5/', '5 only.'));
// remember that php would expand $variable when using
// double quotes.

