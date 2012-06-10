<?php
require_once('upload.class.php');
$upload_handler = new UploadHandler();
$upload_handler->handle_file_upload('1.png','image/png');
?>