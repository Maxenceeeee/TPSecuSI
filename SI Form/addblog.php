<html>

<head>
  <title>Ajouter un blog</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <div class="carre-add">
    <div class="formulaire">
      <form action="blog-traitement.php" onsubmit="return fonction()" method="post">
        <h1 class="form-title">Créer un blog</h1>
        <div class="in">
          <input class="input_text" name="titre" type="text" id="titre" placeholder="Titre" autocomplete="off">
          <br>
          <input class="input_text" name="sujet" type="text" id="sujet" placeholder="Sujet" autocomplete="off">
          <br>
          <textarea class="input_textarea" placeholder="Contenu"></textarea>
          <br>
        </div>
        <button class="btn-add" type="submit">Valider</button>
      </form>
    </div>
  </div>
</body>

</html>