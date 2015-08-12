<?php
include 'Coffee.php';

$coffee = new Coffee;
$coffee->brand = 'Kopiko';
$coffee->name = 'Brown Coffee';
$coffee->net_wt = '25 g';

Coffee::printp($coffee);