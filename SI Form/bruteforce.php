<?php
session_start();
unset($_SESSION['login_attempts']);
header('Location: login.html');
?>