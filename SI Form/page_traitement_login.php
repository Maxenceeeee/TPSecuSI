<html>

<head>
    <title>Traitement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['password'];


    $dbname = "secu_si";
    $dbuser = "root";
    $dbpass = "";
    $dbip = "localhost";

    $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
    $formulaire = $bdd->query('SELECT motDePasse FROM identifiants WHERE adresseMail = $mail');
    if ($formulaire == $password){
        header('Location: connecte.html');
    } else {
        echo "Indentifiants invalides";
    }
    ?>
</body>

</html>