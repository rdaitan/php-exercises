<?php
$jsonData = file_get_contents('data.json');

var_dump(json_decode($jsonData));
