<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<?php
if(!isset($erreur)){
echo'
<h1>
<div class="text-center">'.TITRE_SUCCES8.$saisietype.' 
'.TITRE_SUCCES9.$saisienom.TITRE_SUCCES3.'</br></br>
'.TITRE_SUCCES12.'

</div></h1>';
}
?>

<!--  affichage photo + description  -->

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 