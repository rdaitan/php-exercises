<?php
include 'Coffee.php';

$coffee = new Coffee;
$coffee->brand = 'Kopiko';
$coffee->name = 'Brown Coffee';
$coffee->net_wt = '25 g';

Coffee::printp($coffee);

$coffee2 = new Coffee('Nescafe', '3-in-1', '25 g');
Coffee::printp($coffee2);