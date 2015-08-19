<?php
$dt = new DateTime('2015-02-03 15:23:45', new DateTimeZone('Asia/Manila'));

var_dump($dt);

$strTz = ini_get('date.timezone');
$tz = new DateTimeZone($strTz == '' ? 'Asia/Manila' : $strTz);
var_dump($tz);

// format()
echo 'DateTime: ' . $dt->format("M-d-Y h:i:s") . "\n";
//output: DateTime: Feb-03-2015 03:23:45

// now parameter
$dt = new DateTime('now', $tz);
var_dump($dt);
// output:
// object(DateTime)#3 (3) {
//   ["date"]=>
//   string(19) "2015-08-19 12:25:02"
//   ["timezone_type"]=>
//   int(3)
//   ["timezone"]=>
//   string(11) "Asia/Manila"
// }

$dt = null;

// diff()
$dtPast = new DateTime('1994-04-12 00:00:00', $tz);
$dtNow  = new DateTime('now', $tz);
$dtDiff = $dtPast->diff($dtNow);
$pastStr = $dtPast->format('M d, Y');
$diffStr = $dtDiff->format('%y years, %m months, and %d days');
echo "{$pastStr} is {$diffStr} ago.\n";
// output: Apr 12, 1994 is 21 years, 4 months, and 7 days ago.

//getLocation()
foreach($tz->getLocation() as $key => $value) {
  echo "{$key}: {$value}\n";
}
 ?>
