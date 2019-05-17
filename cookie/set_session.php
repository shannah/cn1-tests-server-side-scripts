<?php
require_once 'inc/common.inc.php';
$value = "hello";
if (@$_GET[HASH_KEY]) {
    $value = $_GET[HASH_KEY];
}
setcookie(COOKIE_KEY, $value);
header('Content-type: application/json');
echo json_encode(array('result'=>1));