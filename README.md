# TPSecuSI
TP de Sécurité SI de Mattis Da Silva et Maxence Frappier

La base de données secu_si comporte 2 tables. La première est la table "identifiants", référencent les utilisateurs s'inscrivant sur le site et leurs
informations. La deuxième est la table "articles", référencent tout les blogs présent sur le site, ainsi que l'identifiant de leur auteur, leur titre et le sujet
qu'ils traitent.

La première page est la page d'acceuil, elle présente à l'utilisateur les blogs les plus récents et lui offr la possibilité de s'inscrire ou se connecter.

La deuxième page est la page "Sign in", elle demande à l'utilisateur de rentrer son nom, prénom, date de naissance, adresse mail et un mot de passe et enregistre
ces informations dans la base de données secu_si.

La troisième page est la page "Log in", elle demande à l'utilisateur de rentrer son adresse mail ainsi que son mot de passe et vérifie ensuite que ces
identifiants sont conformes à ceux stockés dans la table "identifiants" de secu_si. Si un utilisateur échoue trop de fois à se connecter, son compte sera bloqué
pendant un moment.

Les utilisateurs connectés ont accès a une page leur permettant de gérer leurs posts, soit en ajoutant de nouveaux blogs, en modifiant les blogs déjà existants
ou en les supprimant.

Il existe un log in de test déjà présent dans la base de données, l'adresse mail est test@test.com et le mdp est test123.

Les mots de passe sont chiffrés à l'aide de la méthode Hash de PHP.

La création de compte est protégée à l'aide d'un Captcha, empêchant ainsi les comptes automatiques.
