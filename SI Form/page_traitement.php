<?php
session_start();
?>

<html>

<head>
    <title>Traitement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
        $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $mail = $_REQUEST["mail"];
    $password = $_REQUEST["password"];
    $date = $_REQUEST["date"];
    $hashed_password = hash('sha256', $password);

     if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $dbname = "secu_si";
    $dbuser = "root";
    $dbpass = "";
    $dbip = "localhost";

    $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
    $formulaire = $bdd->query('INSERT INTO identifiants (adresseMail, motDePasse, nom, prenom, dateNaissance) VALUES ("' . $mail . '","' . $hashed_password . '","' . $nom . '","' . $prenom . '","' . $date . '")');

    $_SESSION['mail'] = $mail;
    header('Location: index.php');

      } else {
        header('Location: sign-in.php');
      }



    }else{
        header('Location: sign-in.php');
    }

    ?>

</body>

</html>