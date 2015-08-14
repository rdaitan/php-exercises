<?php
require 'connect.php';

$statement = $db->prepare('SELECT * FROM individual');
$statement->execute();

// get row one at a time
while ($row = $statement->fetch()) {
  print("\n");
  print_r($row);
}

$statement = null;  // release the result object
