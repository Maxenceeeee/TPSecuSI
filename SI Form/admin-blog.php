<?php
session_start();
?>

<html>

<head>
  <title>ajouter</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <?php
  include('header.php');
  ?>
  <div class="add-blog">
    <a href="addblog.php"><i class="fa-solid fa-plus"></i></a>
    <p>Ajouter un nouveau blog</p>
  </div>
  <section class="content">
    <div class="bandeau">
      <h1>Mes Blogs (x)</h1>
      <hr solid 2px grey width="150px">
      <?php
      $dbname = "secu_si";
      $dbuser = "root";
      $dbip = "localhost";
      $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser);

      $listage = $bdd->query('SELECT articles.idArticle AS idar, articles.idAuteur AS idau, articles.titre AS titre, articles.sujet AS sujet FROM articles');
      while ($list = $listage->fetch()) {
        while ($list = $listage->fetch()) {
          echo "<div class='list'><a class='supp-blog' href='supp-blog.php?id=" . $list['idar'] . "'><ion-icon name='trash-outline'></ion-icon></a><a class='supp-blog' href='modifblog.php?id=" . $list['idar'] . "'><ion-icon name='create-outline'></ion-icon></a><a href='admin-blog.php?id=" . $list['idar'] . "'class='blog-links'>" . $list['titre'] . "</a></div>";
        }
      }
      ?>
    </div>
    <div class="blog">
      <div class="titre">
        <h1>Vos blogs s'affichent ici (pas fonctionnel)</h1>
      </div>
    </div>
  </section>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
