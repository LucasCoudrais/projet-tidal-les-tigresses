<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_AUTH_CHECK . $prénom ?>  <?= $nom ?> !</h1><br><br>

<?php

echo'<h2>'.LISTE_VIP.'</h2>
<br /><br />

<h3>'.LISTE_JURY.'</h3> 
<table> <tr>';
$i=1;
foreach ($resultatjury  as $resultatt) {//liste des jurys
      if ($i>7){//affichage et retour a la ligne pour les photos
            $i=1;
            echo '</tr> <tr>'; 
      }
      echo '<td width="192" height="255"> <a href="index.php?page=staff2&idvip='.$resultatt['id_vip'].'">
            <img src="'.PATH_IMAGES_VIP.$resultatt['photo_vip'].'
            " width="192" height="255">
            '.$resultatt['prenom_vip'].' '.$resultatt['nom_vip'].'</a></td>' ;
      $i=$i+1;
}
echo'</tr> </table> <br />

<h3>'.LISTE_MBFILM.'</h3>
<table> <tr>';
$i=1;
foreach ($resultatmbfilm  as $resultatt) {// liste des membre d'un film
      if ($i>7){//affichage et retour a la ligne pour les photos
            $i=1;
            echo '</tr> <tr>'; 
      }
      echo '<td width="192" height="255" > <a href="index.php?page=staff2&idvip='.$resultatt['id_vip'].'">
            <img src="'.PATH_IMAGES_VIP.$resultatt['photo_vip'].'
            " width="192" height="255">
            '.$resultatt['prenom_vip'].' '.$resultatt['nom_vip'].'</a></td>' ;
      $i=$i+1;
}
echo'</tr> </table> <br />

<h2>'.LISTE_MBASSIGNE.'</h2>
<table> <tr>';
$i=1;
foreach ($resultatmbassigné  as $resultatt) {// liste membre qui ont hébergement
      if ($i>7){
            $i=1;
            echo '</tr> <tr>'; 
      }
      echo '<td width="192" height="255"> <a href="index.php?page=staff2&idvip='.$resultatt['id_vip'].'">
            <img src="'.PATH_IMAGES_VIP.$resultatt['photo_vip'].'
            " width="192" height="255">
            '.$resultatt['prenom_vip'].' '.$resultatt['nom_vip'].'</a></td>' ;
      $i=$i+1;
}
echo'</tr> </table> <br />';

?>

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');