<?php
session_start();
?>

<html>

<head>
    <title>modifier un blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <?php
    include('header.php');
    $id = $_REQUEST['id'];
    ?>
    <div class="carre-add">
        <div class="formulaire">
        <form action='modif_traitement.php?id=<?php echo $id; ?>' onsubmit="return fonction();" method="post">
                <h1 class="form-title">Modifier un blog</h1>
                <?php


                $dbname = "secu_si";
                $dbuser = "root";
                $dbpass = "";
                $dbip = "localhost";

                $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);

                $title = $bdd->query("SELECT titre FROM articles WHERE idArticle = '" . $id . "'");
                $row = $title->fetch();
                $blogtitle = $row['titre'];

                $subject = $bdd->query("SELECT sujet FROM articles WHERE idArticle = '" . $id . "'");
                $row = $subject->fetch();
                $blogsubject = $row['sujet'];

                $contenu = $bdd->query("SELECT contenu FROM articles WHERE idArticle = '" . $id . "'");
                $row = $contenu->fetch();
                $blogcontenu = $row['contenu'];
                ?>
                <div class="in">
                    <input class="input_text" name="titre" type="text" id="titre" placeholder="Titre" autocomplete="off" value="<?php echo $blogtitle; ?>">
                    <br>
                    <input class="input_text" name="sujet" type="text" id="sujet" placeholder="Sujet" autocomplete="off" value="<?php echo $blogsubject; ?>">
                    <br>
                    <textarea class="input_textarea" name="text"><?php echo $blogtitle; ?></textarea>
                    <br>
                </div>
                <button class="btn-add" type="submit">Valider</button>
            </form>
        </div>
    </div>
</body>

</html>