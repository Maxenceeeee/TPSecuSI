<?php

$id = $_REQUEST['id'];
$titre = $_REQUEST['titre'];
$sujet = $_REQUEST['sujet'];
$text = $_REQUEST["text"];

$dbname = "secu_si";
$dbuser = "root";
$dbip = "localhost";
$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser);

$update = $bdd->query("UPDATE `articles` SET `titre`='$titre',`sujet`='$sujet',`contenu`='$text' WHERE idArticle = '".$id."' ");
header('Location: admin-blog.php');

?>