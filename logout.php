<?php
ob_start(); // Start output buffering
session_start();
session_unset();
session_destroy();
$_SESSION = array();
header('Location: index.php');
ob_end_flush(); // Flush the output buffer
