<?php
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><div class="text-center"><?= TITRE_DESCRIPTION ?> </div></h1>

<!--  affichage photo + description  -->
<div class="col-md-6 col-sm-6 col-xs-12">
<?php
 echo '</br> <img src="'.PATH_IMAGES_VIP.$resultatvip['photo_vip'].'" 
 " width="300" height="400">';
echo ' </br> <h2>'.$resultatvip['nom_vip'].' '.$resultatvip['prenom_vip'].'</h2>';

			if (isset($resultatvip['id_jury'])){ // si le vip est jury
				echo' <h3><i>'.$resultatjury['role_equipe'].'</h3></i>';
			}
			if (isset($resultatvip['id_mb_film'])){ // si le vip est membre
				echo' <i><h3>'.$resultatmembre['role_equipe'].'</h3></i> 
				</br><h4>'.PHRASE_REAL_FILM.'
				<img src="'.PATH_IMAGES_Film.$resultatfilm['photo_film'].'"
				" width="150" height="200"> </h4>';
			}
			?>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">

<?php 
if(!isset($resultatvip['id_etabl'])){
?>
<h2><?= PHRASE_HOTEL_CORRESPONDANT ?> </h2>

 <table class="table table-bordered">
 <form action="index.php?page=staff3" method="POST"><h4>
	<tbody>
		<tr>
			<td align=left><h3><?=TEXTE_HOTEL?></h3></td>
			<td align=center>
			<?php
			if (isset($resultatvip['id_mb_film'])){ // si le vip est membre
			foreach ($resultatcontraintemb as $resultatts) {
				echo '<input type="radio" name=choixhotel value="'.$resultatts['nom_etabl'].'">
				 '.$resultatts['nom_etabl'].'<br>';
			}
			}elseif (isset($resultatvip['id_jury'])){ // si le vip est jury
				foreach ($resultatcontraintejury as $resultatts) {
					echo '<input type="radio" name=choixhotel value="'.$resultatts['nom_etabl'].'">
					 '.$resultatts['nom_etabl'].'<br>';
				}
			}
			?>
			</td>
		</tr>
		<tr>
			<td align=left><h3><?=TEXTE_DATE?></h3></td>
			<td align=center>
			<input type="date" name="choixdate"  min="2019-05-14"max="2019-05-25" >
			</td>
		</tr>
		<tr>
			<td align=left><h3><?=TEXTE_DUREE?></h3></td>
			<td align=center>
			<input type="number" name="choixduree" value="1" min="0" max="15">
			</td>
		</tr>
		<tr><td colspan=2 align=center>
		<?php
		echo'<input type="hidden" name="idvip" value="'.$idvip.'">';
		?>
		<input type="submit" value="<?= SUBMIT ?>">
		</td></tr>
	</tbody>
	</h4></form>
 </table>

 <?php
 }
 else{
	 echo '</br></br></br></br></br></br></br>
	 <h2>'.PHRASE_DEJA_ASIGNE.' '.$resultatassignement['nom_etabl'].'</h2>';
 } 
 ?>

 </div>
<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 