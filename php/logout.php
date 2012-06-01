<?php
require_once('classes/storage.php');
$storage = new storage();
$storage->destroy();
header('Location:../index.php');
?>