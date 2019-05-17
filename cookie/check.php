<?php
require_once 'inc/common.inc.php';
header('Content-type: application/json');
echo json_encode(array(HASH_KEY => $_COOKIE[COOKIE_KEY]));