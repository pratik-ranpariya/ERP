<?php
error_reporting(0);
session_start();
session_destroy();
include('config.php');
header('Location:'.SITE_URL.'login.php');
?>