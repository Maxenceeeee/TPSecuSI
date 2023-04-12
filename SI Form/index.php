<?php
session_start();
?>

<html>

<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    include('header.php');
    ?>

    <div class="index-session">
        <?php
        if (isset($_SESSION['mail'])) {
            echo "Bonjour, " . $_SESSION['mail'] . " !";
        } else {
            echo "Vous n'êtes pas connecté";
        }
        ?>
    </div>
    <section class="content">
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
                echo "<a href='index.php?id=".$list['idar']."'class='blog-links'>".$list['titre']."</a>";
                echo '<br/>';
            }
            ?>
        </div>
        <div class="blog">
            <div class="titre">
                <h1>Titre du premier blog sur la page d'acceuil !</h1>
            </div>
            <div class="blog-content">
                <p class="lorem">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur dolorem unde ipsa officiis
                    aliquam molestias saepe nam harum ipsum nemo temporibus quidem, ea nihil tempore inventore,
                    optio
                    non accusamus sequi!
                </p>
                <br>
                <p class="lorem">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ipsam cum eos eaque alias at
                    illum voluptas perspiciatis deserunt nihil. Suscipit veritatis dolor nemo ducimus minus eius
                    voluptatum modi exercitationem laboriosam dolorum cum libero ipsa nobis doloremque sed amet,
                    laudantium aliquid eaque sint in similique reiciendis error cupiditate illum. Sint libero sunt
                    asperiores quasi cumque porro culpa quibusdam, nobis, dolorum at repudiandae reprehenderit
                    aliquam
                    provident soluta. Vero, nostrum illum sequi vitae voluptatibus consequatur! Harum adipisci ut
                    porro
                    minima ullam dignissimos neque! Inventore error, porro, qui totam dolore dignissimos ipsa soluta
                    cum
                    consectetur reprehenderit placeat beatae earum laudantium sed! Animi, impedit?
                </p>
                <br>
                <p class="lorem">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ipsam cum eos eaque alias at
                    illum voluptas perspiciatis deserunt nihil. Suscipit veritatis dolor nemo ducimus minus eius
                    voluptatum modi exercitationem laboriosam dolorum cum libero ipsa nobis doloremque sed amet,
                    laudantium aliquid eaque sint in similique reiciendis error cupiditate illum. Sint libero sunt
                    asperiores quasi cumque porro culpa quibusdam, nobis, dolorum at repudiandae reprehenderit
                    aliquam
                    provident soluta. Vero, nostrum illum sequi vitae voluptatibus consequatur! Harum adipisci ut
                    porro
                    minima ullam dignissimos neque! Inventore error, porro, qui totam dolore dignissimos ipsa soluta
                    cum
                    consectetur reprehenderit placeat beatae earum laudantium sed! Animi, impedit?
                </p>
                
                <img src="https://www.taptouche.com/images/1/3/a/8/4/13a845e178cb05ecc149ffc850ad9a6eac19f85d-lorem-ipsum.png" alt="Lorem ipsum" class="picture">
            </div>
        </div>
    </section>
</body>