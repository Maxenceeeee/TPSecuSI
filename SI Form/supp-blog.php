<?php
$dbname = "secu_si";
$dbuser = "root";
$dbip = "localhost";
$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser);

$suppr = $bdd->query('DELETE FROM `articles` WHERE `idArticle`=' . $_REQUEST['id']);
header('Location: admin-blog.php');
?>