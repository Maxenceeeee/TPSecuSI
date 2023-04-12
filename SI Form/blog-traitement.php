<?php

$titre = $_REQUEST['titre'];
$sujet = $_REQUEST['sujet'];
$text = $_REQUEST["text"];

$dbname = "secu_si";
$dbuser = "root";
$dbip = "localhost";
$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser);

$add = $bdd->query("INSERT INTO `articles`(`titre`, `sujet`, `contenu`) VALUES ('$titre','$sujet','$text')");

header('Location: admin-blog.php');
?>