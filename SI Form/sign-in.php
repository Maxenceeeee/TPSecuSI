<html>

<head>
  <title>Sign in</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <div class="carre">
    <div class="formulaire">
      <form action="page_traitement.php" onsubmit="return fonction()" method="post">
        <h1 class="form-title">Créer un compte</h1>
        <div class="in">
          <label class="label" id="label_nom">Nom</label>
          <br>
          <input class="input_text" name="nom" type="text" id="nom" autocomplete="off">
          <br>
          <br>
          <label class="label" id="label_prenom">Prénom</label>
          <br>
          <input class="input_text" name="prenom" type="text" id="prenom" autocomplete="off">
          <br>
          <br>
          <label class="label" id="label_date">Date de Naissance</label>
          <br>
          <input class="input_date" name="date" type="date" autocomplete="off" id="date">
          <br>
          <br>
          <label class="label" id="label_mail">Adresse Mail</label>
          <br>
          <input class="input_text" name="mail" type="email" autocomplete="off" id="mail">
          <br>
          <br>
          <label class="label" id="label_password">Mot de passe</label>
          <br>
          <input class="input_text" name="password" type="password" autocomplete="off" id="password">
          <br>
          <br>
          <table>
            <tr>
              <td>
                <label>Entrez le nombre</label>
                <br>
                <input class="input_text" name="captcha" type="text">
                <img src="captcha.php" style="vertical-align: middle;" />
              </td>
            </tr>
          </table>
          <br>
        </div>
        <button class="btn" type="submit">Valider</button>
      </form>
    </div>
  </div>
  <script src="js/connexion.js"></script>
</body>

</html>