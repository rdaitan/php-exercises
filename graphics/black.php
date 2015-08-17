<?php
# a black square on a white background
# make sure you have gd extensions installed.
# sudo apt-get install php5-gd

$image = imagecreate(200, 200);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 50, 150, 150, $black);

# setting the header at the top would treat any error as part of the image.
# this results in a broken image being displayed.
header("Content-Type: image/png");
imagepng($image); // output a png image
