<?php
require '../connection.php';
$_SESSION = [];
session_unset();
session_destroy();
header('location:../index.html');
?>