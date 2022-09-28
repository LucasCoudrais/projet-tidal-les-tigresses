<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<?php
if(!isset($erreur)){
$prenom = $resultatvip['prenom_vip'];
$nom = $resultatvip['nom_vip'];

echo'
<h1>
<div class="text-center">'.TITRE_SUCCES1.$prenom.' '.$nom.TITRE_SUCCES2.$choixhotel.TITRE_SUCCES3.'</br></br>

'.TITRE_SUCCES4.$choixdate.TITRE_SUCCES5.$choixduree.TITRE_SUCCES6.'</br></br>

'.TITRE_SUCCES7.'

</div></h1>';
}

?>

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 