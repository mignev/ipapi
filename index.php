<?php

header('Access-Control-Allow-Origin: *');

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

echo json_encode(array(
  'ip'  => $ip,
));

?>
