<?php
require 'current_page.php';
session_destroy();
header('Location: '.$referer);
?>
