<?php
session_start();

// Destruction de la session
session_destroy();

header('Location: index.php');
exit;
?>