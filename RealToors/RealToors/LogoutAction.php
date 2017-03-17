<?php
//destroys admin session so they can't reaccess adminmode
session_start();
unset($_SESSION['user']);
session_destroy();
header('Location: Homepage.html');