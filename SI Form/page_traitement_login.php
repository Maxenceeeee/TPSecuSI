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
    $login = $bdd->query("SELECT motDePasse FROM identifiants WHERE adresseMail = '".$mail."'");
    $row = $login->fetch();
    $mdp = $row['motDePasse'];
    $hashed_password = hash('sha256', $password);

    if ($mdp == $hashed_password){
        header('Location: connecte.html');
    } else {
        echo "Indentifiants invalides";
        echo "$mdp";
        echo ".<br>.";
        echo "$hashed_password";
    }
    ?>  
</body>

</html>