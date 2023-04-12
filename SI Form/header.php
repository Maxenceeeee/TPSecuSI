<header>
    <nav class="navbar">
        <a href="index.php">Accueil</a>
    </nav>

    <div class="account-links">
        <?php
        if (isset($_SESSION['mail'])) {
            echo '<a href="logout.php" class="link-account">Déconnexion</a>';
            echo '<a href="admin-blog.php" class="link-account"><i class="fa-solid fa-user"></i></a>';
        } else {
            echo '<a href="login.html" class="link-account">Connexion</a>';
            echo '<a href="sign-in.html" class="link-account">Créer un compte</a>';
        }
        ?>
    </div>
</header>