<?php
$arr = array('Dog', 'snake' => 'Snake', 'Cat');
print("1 {$arr[0]}");
print("2 {$arr["snake"]}");

// works as of php 5.4
$arr2 = ['y' => 'yes', 'n' => 'no', 'm' => 'maybe'];
var_dump($arr2);