<?php
require_once('conn.php');
require_once('images.php');
$img = new images();
$db = new conn('localhost','root','1234','placio');
$str = 'image/png';
$start_position = strpos($str, '/') + 1;
$last_position = strlen($str);
echo substr($str, $start_position, $last_position);
?>