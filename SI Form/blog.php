<?php
session_start();
?>

<html>

<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    include('header.php');
    ?>

    <section class="content page-blog">
        <div class="bandeau">
            <h1>Blogs récents (x)</h1>
            <hr solid 2px grey width="150px">
            <?php
            $dbname = "secu_si";
            $dbuser = "root";
            $dbip = "localhost";
            $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser);

            $listage = $bdd->query('SELECT articles.idArticle AS idar, articles.idAuteur AS idau, articles.titre AS titre, articles.sujet AS sujet FROM articles');
            while ($list = $listage->fetch()) {
                echo "<a href='index.php?id=" . $list['idar'] . "'class='blog-links'>" . $list['titre'] . "</a>";
                echo '<br/>';
            }
            ?>
        </div>
        <div class="blog">
            <div class="titre">
                <?php

                $req = $_REQUEST['id'];

                $titre = $bdd->query("SELECT titre FROM articles WHERE idArticle = '" . $req . "'");
                $row = $titre->fetch();
                $blogtitre = $row['titre'];
                echo "<h1>" . $blogtitre . "</h1>";
                ?>
            </div>
            <div class="sujet">
                <?php

                $req = $_REQUEST['id'];

                $sujet = $bdd->query("SELECT sujet FROM articles WHERE idArticle = '" . $req . "'");
                $row = $sujet->fetch();
                $blogsujet = $row['sujet'];
                echo "<h3>" . $blogsujet . "</h3>";
                ?>
            </div>
            <div class="blog-content">

                <?php

                $req = $_REQUEST['id'];

                $text = $bdd->query("SELECT contenu FROM articles WHERE idArticle = '" . $req . "'");
                $row = $text->fetch();
                $blogtext = $row['contenu'];
                echo "<p class='lorem'>" . $blogtext . "</p>";
                ?>

            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>