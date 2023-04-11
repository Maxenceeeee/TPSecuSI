# TPSecuSI
TP de Sécurité SI de Mattis Da Silva et Maxence Frappier

La base de données secu_si comporte 2 tables. La première est la table "identifiants", référencent les utilisateurs s'inscrivant sur le site et leurs
informations. La deuxième est la table "articles", référencent tout les blogs présent sur le site, ainsi que l'identifiant de leur auteur et le sujet qu'ils
traitent.

La première page est la page "Sign in", elle demande à l'utilisateur de rentrer son nom, prénom, date de naissance, adresse mail et un mot de passe et enregistre
ces informations dans la base de données secu_si.

La seconde page est la page "Log in", elle demande à l'utilisateur de rentrer son adresse mail ainsi que son mot de passe et vérifie ensuite que ces identifiants 
sont conformes à ceux stockés dans la table "identifiants" de secu_si.

Il existe un log in de test déjà présent dans la base de données, l'adresse mail est test@test.com et le mdp est test123.

Les mots de passe sont chiffrés à l'aide de la méthode Hash de PHP
