<?php
require_once 'inc/common.inc.php';
setcookie(COOKIE_KEY, "", time()-3600);
header('Content-type: application/json');
echo json_encode(array('result'=>1));