<?php
session_start();

$_SESSION = array();

session_destroy();

setcookie("email", "", time()-3600);