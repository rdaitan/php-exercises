<?php
include 'Coffee.php';

$coffee = new Coffee;
$coffee->brand = 'Kopiko';
$coffee->name = 'Brown Coffee';
$coffee->net_wt = '25 g';

$coffee->getWtUnit = function () use ($coffee) {
    $unit = array();
    preg_match('/^[[:digit:]]+ ([[:alpha:]]+)$/', $coffee->net_wt, $unit);
    return $unit[1];
};

var_dump($coffee->getWtUnit());