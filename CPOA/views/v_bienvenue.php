<?php
/*
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_ACCUEIL ?></h1><br><br>
<h2><?= PHRASE_PAGE_ACCUEIL ?></h2><br>
<h3><?= EXPLICATION_PAGE_ACCUEIL ?></h3><br><br>

<form action="index.php?page=authentification" method="POST">
<h4><input type="radio" name=choixauth value="gerant"> Gérant d'un hebergement<br><br>
<input type="radio" name=choixauth value="staff"> Membre du staff</h4><br>
<input type="submit" value="<?= SUBMIT ?>">
</form>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 

