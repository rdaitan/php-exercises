<?php
# insert into table using prepared statement

require 'connect.php';

// data to insert
$newPersons = array(
  array('p_id' => 11, 'p_fname' => 'Smith', 'p_lname' => 'Smithsonian'  , 'p_bday' => '1992-01-23'),
  array('p_id' => 12, 'p_fname' => 'Wells', 'p_lname' => 'Welington'    , 'p_bday' => '1998-02-13'),
  array('p_id' => 13, 'p_fname' => 'Maria', 'p_lname' => 'Marianas'     , 'p_bday' => '1989-11-22')
);

$statement = $db->prepare("INSERT INTO individual VALUES (:p_id, :p_fname, :p_lname, :p_bday)");

foreach ($newPersons as $person) {
  $statement->execute($person);
  print("\nInserted:\n");
  print_r($person);

  // print error message, if any.
  print("\n");
  print_r($statement->errorInfo());
}

print("\nDone!");
