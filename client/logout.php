<?php
session_start();
$_SESSION['logged'] = false;

session_abort();
header("refresh:1;url=https://rajenrakrshaw.rf.gd/");



?>