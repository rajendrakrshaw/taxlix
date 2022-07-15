<?php
session_start();
echo $_SESSION['logged'];
echo $_SESSION['user']['email'];

$_SESSION['logged'] = false;
echo $_SESSION['logged'];
session_destroy();
header("refresh:1;url=http://rajendrakrshaw.rf.gd/");



?>