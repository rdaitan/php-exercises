<?php
require 'connect.php';

$query  = 'INSERT INTO individual VALUES(10, "George", "Kelman", "1972-04-12")';
$result = $db->query($query);
print("\nRow inserted!");
