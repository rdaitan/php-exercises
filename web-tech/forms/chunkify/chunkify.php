<?php
$word   = $_POST['word'];
$length = $_POST['length'];

$number_of_chunks = ceil(strlen($word) / $length);

print "The {$length}-letter chunks of '{$word}' are:<br/>";

for($i = 0; $i < $number_of_chunks; $i++) {
    $chunk = substr($word, $i * $length, $length);
    printf('%d: %s<br/>', $i + 1, $chunk);;
}

