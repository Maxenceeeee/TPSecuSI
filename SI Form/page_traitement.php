<html>

<head>
    <title>Traitement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $mail = $_REQUEST["mail"];
    $password = $_REQUEST["password"];
    $date = $_REQUEST["date"];

    $dbname = "secu_si";
    $dbuser = "root";
    $dbpass = "";
    $dbip = "localhost";

    $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);
    $formulaire = $bdd->query('INSERT INTO identifiants (adresseMail, motDePasse, nom, prenom, dateNaissance) VALUES ("' . $mail . '","' . $password . '","' . $nom . '","' . $prenom . '","' . $date . '")');
    
    header('Location: connecte.html');

    ?>

</body>

</html>