<?php
$image = imagecreate(200, 200);

$blue   = imagecolorallocate($image, 0x77, 0xD1, 0xEF);
$yellow = imagecolorallocate($image, 0xFF, 0xFF, 0xBE);
$white  = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);

imagefilledarc($image, 100, 50, 50, 50, 0, 360, $yellow, IMG_ARC_PIE);
imagestring($image, 5, 45, 150, "guten morgen", $white);

header('Content-type: image/png');
imagepng($image);
