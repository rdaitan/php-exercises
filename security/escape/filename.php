<?php
chdir('/var/www/php-exercises/');
$userInput = './../../../etc/passwd';
$appDir    = '/var/www/php-exercises/';

$realUserInput  = realpath($userInput);     // resolve special markers ./../
$cleanUserInput = basename($realUserInput); // return just the filename portion

echo "\$userInput = {$userInput}\n";
echo "realpath(\$userInput): \$realUserInput = {$realUserInput}\n";
echo "basename(\$realuserInput): \$cleanUserInput = {$cleanUserInput}\n";
echo "final: {$appDir}{$cleanUserInput}"; // all clean
