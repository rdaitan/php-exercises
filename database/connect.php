<?php

# connect to the bank database in localhost
$dsn      = 'mysql:host=localhost;dbname=bank';
$username = 'root';
$password = 'restarted';

// create connection
@$db = new PDO($dsn, $username, $password);
print('Connection made!');
?>
