<?php
require_once 'func_template.php';

$bindings = array();
$template = '';

if (array_key_exists('name', $_GET)) {
  $template = 'thankyou.template';
  $bindings['NAME'] = $_GET['name'];
}
else {
  $template = 'user.template';
}

$bindings['DESTINATION'] = $_SERVER['PHP_SELF'];
echo fillTemplate($template, $bindings);
