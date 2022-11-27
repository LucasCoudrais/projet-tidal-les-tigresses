<?php

if (isset($_POST['submitDisconnect'])) { //gestion de l'appui sur le bouton de déconnexion
    setcookie('userCookie', null, -1); // on "supprime" le cookie
    header('Location: http://localhost:50080/source/index.php?page=accueil'); // on refresh la page pour mettre à jour l'interface dynamique
}
