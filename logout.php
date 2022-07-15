<?php
session_start();
echo $_SESSION['logged'];
echo $_SESSION['user']['email'];


session_abort();
// header("refresh:1;url=http://rajendrakrshaw.rf.gd/");



?>