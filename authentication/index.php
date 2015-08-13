<?php
$username = array_key_exists('PHP_AUTH_USER', $_SERVER) ? $_SERVER['PHP_AUTH_USER'] : null;
$password = array_key_exists('PHP_AUTH_PW', $_SERVER)   ? $_SERVER['PHP_AUTH_PW']   : null;

$authOK = $username === 'james_bond' && $password === '007';

if(!$authOK) {
    header('WWW-Authenticate: Basic realm="Top Secret Files"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Good day, Mr. Bond.</title>
</head>
<body>
    <h1>Good day, Mr. Bond.</h1>
</body>
</html>
