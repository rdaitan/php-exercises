<?php
header('Content-type: application/json; charset=utf-8');
$data = array(
  'data1' => 'yahallo',
  'data2' => 6392,
  'data3' => array(1, 2, 6, 7)
);

echo json_encode($data);
