<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<?php 

if(isset($resultatetabl)){
echo'<h1><div class="text-center">'.TITRE_INFO_ETABL.$resultatetabl['type_serv'].' 
'.$resultatetabl['nom_etabl'].'</div></h1>';
?>

 <table align=center>

	<tbody>
		<tr><td><h3><?php// tableau sans bordure qui affiche toutes les infos de l'etablissement
            echo'Adresse : '.$resultatetabl['adresse'].'';
        ?></td></h3></tr>

        <tr><td><h3><?php
            echo'Propose service suivant : '.$resultatservice['lib_serv'].'';
        ?></td></h3></tr>

		<tr><td><h3><?php
        if (isset($resultatslistevip)){
            echo'Liste des VIP résidant dans votre établisement actuellement :</br></h3> ';
			foreach ($resultatslistevip as $resultat) {
                if(isset($resultat['id_jury'])){
                echo 'Le jury : '.$resultat['prenom_vip'].' '.$resultat['nom_vip'].'<br>';
                }else{
                echo 'Le membre de film : '.$resultat['prenom_vip'].' '.$resultat['nom_vip'].'<br>';
                }
			}
        }else {
            echo'Aucun VIP n\'est asigné a cet eétablisement pour l\'instant';
        }
		?></td></tr>

        <tr><td><h3><?php
            echo'Nombre de place totale : '.$resultatetabl['nb_place_tot'].'';
        ?></td></h3></tr>
        <tr><td><h3><?php
            echo'Nombre de place prises : '.$resultatplaceprise['nb_place_prise'].'';
        ?></td></h3></tr>
        <tr><td><h3><?php
        $nb_place_reste = $resultatetabl['nb_place_tot'] - $resultatplaceprise['nb_place_prise'];
            echo'Nombre de place restantes : '.$nb_place_reste.'';
        ?></td></h3></tr>
	</tbody>
	
 </table>
 <?php } ?>
 

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); ?>