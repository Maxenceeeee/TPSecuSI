<?php
session_start();
?>

<html>

<head>
    <title>Acceuil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <?php
    include('header.php');
    ?>


    <section class="content">
        <div class="bandeau">
            <h1>Blogs récents (x)</h1>
            <ul>
                <li><a href="blog1">Blog 1</a></li>
                <li>Blog 2</li>
                <li>Blog 3</li>
                <li>Blog 4</li>
                <li>Blog 5</li>
            </ul>
        </div>
        <div class="blog">
            <div class="titre">
                <h1>Titre du premier blog sur la page d'acceuil !</h1>
            </div>
            <div class="blog-content">
                <p class="lorem">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur dolorem unde ipsa officiis aliquam molestias saepe nam harum ipsum nemo temporibus quidem, ea nihil tempore inventore, optio non accusamus sequi!
                </p>
                <br>
                <p class="lorem">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ipsam cum eos eaque alias at illum voluptas perspiciatis deserunt nihil. Suscipit veritatis dolor nemo ducimus minus eius voluptatum modi exercitationem laboriosam dolorum cum libero ipsa nobis doloremque sed amet, laudantium aliquid eaque sint in similique reiciendis error cupiditate illum. Sint libero sunt asperiores quasi cumque porro culpa quibusdam, nobis, dolorum at repudiandae reprehenderit aliquam provident soluta. Vero, nostrum illum sequi vitae voluptatibus consequatur! Harum adipisci ut porro minima ullam dignissimos neque! Inventore error, porro, qui totam dolore dignissimos ipsa soluta cum consectetur reprehenderit placeat beatae earum laudantium sed! Animi, impedit?
                </p>
                <br>
                <p class="lorem">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ipsam cum eos eaque alias at illum voluptas perspiciatis deserunt nihil. Suscipit veritatis dolor nemo ducimus minus eius voluptatum modi exercitationem laboriosam dolorum cum libero ipsa nobis doloremque sed amet, laudantium aliquid eaque sint in similique reiciendis error cupiditate illum. Sint libero sunt asperiores quasi cumque porro culpa quibusdam, nobis, dolorum at repudiandae reprehenderit aliquam provident soluta. Vero, nostrum illum sequi vitae voluptatibus consequatur! Harum adipisci ut porro minima ullam dignissimos neque! Inventore error, porro, qui totam dolore dignissimos ipsa soluta cum consectetur reprehenderit placeat beatae earum laudantium sed! Animi, impedit?
                </p>
            </div>
        </div>
    </section>
</body>