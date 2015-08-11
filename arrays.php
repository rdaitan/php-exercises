<?php
$arr = array('Dog', 'snake' => 'Snake', 'Cat');
print("1 {$arr[0]}");
print("2 {$arr["snake"]}");

// works as of php 5.4
//$arr2 = ['y' => 'yes', 'n' => 'no', 'm' => 'maybe'];
//var_dump($arr2);

// adding values to the end
$arr[] = 'punpun';
var_dump($arr);

// range()
$names = range('aaron', 'zee');
print('<br/>');
var_dump($names);

print('<br/>');

// list()
list($str1, $str2) = array('ayy', 'lmao');
print("{$str1} {$str2}<br/>");

// extract()
$fruitColor = array(
    'apple' => 'red',
    'mango' => 'yellow',
    'banana' => 'yellow',
    'guava' => 'green'
    );

extract($fruitColor);
print("$apple, $mango, $banana, $guava <br/>"); 
extract($fruitColor, EXTR_PREFIX_ALL, 'fruit');
print("$fruit_apple, $fruit_mango, $fruit_banana, $fruit_guava <br/>");

// array_walk()
$pomf = array('pomf', 'pomf', 'pomf');
$pomfer = function($value, $key, $str) {    // first arg is value, next is key, third is extra data
    print("{$key} {$value}{$str}<br/>");
};
array_walk($pomf, $pomfer, '=3');

// array_reduce()

$vals = range(1, 100);
$total = array_reduce($vals, function ($runningTotal, $currentValue) {
    $runningTotal += $currentValue;
    return $runningTotal;
});
print("$total<br/>");

