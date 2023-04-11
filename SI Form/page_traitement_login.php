<html>

<head>
    <title>Traitement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<?php
    if (isset($_REQUEST['mail']) && isset($_REQUEST['password'])) {
        $mail = $_REQUEST['mail'];
        $password = $_REQUEST['password'];

        $dbname = "secu_si";
        $dbuser = "root";
        $dbpass = "";   
        $dbip = "localhost";

        $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
        $login = $bdd->query("SELECT motDePasse FROM identifiants WHERE adresseMail = '".$mail."'");
        $row = $login->fetch();
        $mdp = $row['motDePasse'];
        if ($mdp == $password){
            header('Location: connecte.html');
            exit;
        } else {
            echo "Indentifiants invalides";
            exit;
        }
    } else {
        echo "Veuillez entrer vos identifiants de connexion.";
        exit;
    }
    ?>
</body>

</html>