<?php
session_start();

$max_attempts = 5;

// Vérifier si le formulaire est entièrement rempli
if (isset($_POST['mail']) && isset($_POST['password']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
  // Compter la tentative de connexion
  if (isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts']++;
  } else {
    $_SESSION['login_attempts'] = 1;
  }
}

if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] > $max_attempts) {
  // bloquer l'accès au formulaire
  $_SESSION['last_attempt_time'] = time();
  exit("Vous avez atteint le nombre maximal de tentatives de connexion. Veuillez réessayer plus tard.");
}

$mail = $_POST['mail'];
$password = $_POST['password'];

$dbname = "secu_si";
$dbuser = "root";
$dbpass = "";   
$dbip = "localhost";

$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
$login = $bdd->query("SELECT motDePasse FROM identifiants WHERE adresseMail = '".$mail."'");
$row = $login->fetch();
$mdp = $row['motDePasse'];
$hashed_password = hash('sha256', $password);

if ($mdp == $hashed_password){
    $_SESSION['mail'] = $mail;
    unset($_SESSION['login_attempts']);
    header('Location: index.php');
} else {
    echo "Identifiants invalides";
}
?>
