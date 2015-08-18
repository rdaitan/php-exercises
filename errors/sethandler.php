<?php
require 'trigger.php';

function logErrorsPretty($errorCode, $errorMessage, $filename, $line, $symbols) {
  echo "{$errorCode}!!!!{$errorMessage} {$filename} on line {$line}\n";
  print_r($symbols);
}

set_error_handler('logErrorsPretty');

noDouble("heyo");
noDouble("what");
noDouble("yahallo");
noDouble("ayy");
