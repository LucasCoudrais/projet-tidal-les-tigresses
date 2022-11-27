<?php
/*
 * MODULE DE PHP
 * Index du site
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Initialisation des paramètres du site
require_once('./config/configuration.php');

//vérification de la page demandée 

if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
}
else
	$page="accueil"; //page d'accueil du site - http://.../index.php
//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php');  // on va chercher le bon controller en fonction de la variable page dans l'URL

?>
