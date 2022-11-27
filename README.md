README Projet TIDAL 

Membres du groupes:
	- FIERIMONTE Margot
	- COUDRAIS Lucas
	- GIVOIS Antoine
	- BREDIN Antoine

Pour faire fonctionner notre site: <br>
	1) Allumer la VM debian-web-2022-disk001 et se connecter en root (id:root//mdp:tp) <br>
	2) Se connecter à la base de données http://localhost:50080/pgadmin4/ (id:tp@t.p mdp:tptptp) <br>
	3) Créer une base de données "acudb" puis lancer le script pgsql joint au projet <br>
	4) Envoyer tous les fichiers php qui se trouvent dans le dossier "source" dans le dossier var/www/html de la VM <br>
	5) Se connecter au site web http://localhost:50080/source (ne pas oublier la connexion ssh) <br>
	6) Se connecter au site grace à un "compte uitlisateur" (identifiant : "admin" + mot de passe : "Admin123")  <br>
	7) Profiter d'une visite inoubliable sur notre site <br>

Difficultés rencontrées:
 - Délais entre les séances, reprendre le travail où on en était.
 - Travail en groupe sur GIT, problème de conflit, de branches.
 - Certaines notions du cours compliquées à mettre en oeuvre.
 - L'énoncé du projet parfois vague, notamment sur les contraintes technologiques à utiliser et les spécifictés des filtres et des attentes précises.
 - Différences de niveau au sein du groupe (2 developpeurs // 2 réseaux), équilibrage des notions et répartitions des taches compliqués => perte de temps.

Changements depuis la dernière séance : 
- Inscription fonctionne
- Connexion et déconnexion à travers des cookies et non pas une variable dans l'URL 
- Ajout d'un page de démo pour l'API qui possède un modèle MVC plus propre que les autres pages et aussi des exemples de méthodes d'API simple que nous avons pu avoir le temps de mettre en place

Bibliographie:
 - Cours de PHP de TIDAL
 - https://getbootstrap.com/docs/5.2/getting-started/introduction/
 - https://www.php.net/manual/fr/
 - https://www.w3schools.com/php
 - pour le searchable select, nous ne retrouvons pas le lien mais le fichier source pris sur internet est dans le dossier assets
 - [pour le css et le html de la page connexion et du menu navbar](https://colorlib.com/wp/cat/login-forms/)