<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><div class="text-center">
<?= TITRE_PAGE_AUTH_CHECK . $prénom ?>  <?= $nom ?> !
</div></h1><br><br>

<!--  Affichage liste des etablissement du gerant -->
<div class="col-md-6 col-sm-6 col-xs-12">
<h2><?= TITRE_LISTE_ETABLISSEMENT ?></br></br></h2>

<?php
if (!isset($resultatetabl)){ // si le gerant n'a pas d'etablissement
    echo'<h2>'.NO_LISTE.'</h2></br></br></br>';
        }else{// si le gerant a un etablissement
            echo'<h3><form action="index.php?page=gerant2" method="POST">';
			foreach ($resultatetabl as $resultattss) {
                echo '<input type="radio" name=choixetablgerant 
                value="'.$resultattss['id_etabl'].'">'.$resultattss['nom_etabl'].'<br></br></br>';
            }
            echo'</h3><h4><input type="submit" value="'.SUBMIT.'"></h4></form>';
        }

?>
</div>

<!--  Saisir caractéristiques d'un nouveau batiment -->
<div class="col-md-6 col-sm-6 col-xs-12">
<h2><?= TITRE_SAISIE_ETABLISSEMENT ?></h2>

<table>
 <form action="index.php?page=gerant3" method="POST"><h4>
	<tbody>
		<tr>
			<td align=left><h3> Nom établissement</h3></td>
			<td align=center>
			<input type="text" name="saisienom" >
			</td>
		</tr></br>
		<tr>
			<td align=left><h3>Type de l'établissement</h3></td>
			<td align=center>
			<input type="text" name="saisietype">
			</td>
		</tr>
        <tr>
			<td align=left><h3>Adresse de l'établissement</h3></td>
			<td align=center>
            <input type="text" name="saisieadresse">
			</td>
		</tr>
        <tr>
			<td align=left><h3>Service de l'établissmement</h3></td>
			<td align=center>
			<?php
			if (isset($resultatservice)){ 
			foreach ($resultatservice as $resultatts) {
				echo '<input type="radio" name=choixservice value="'.$resultatts['id_serv'].'">
				 '.$resultatts['lib_serv'].'<br>';
			}
			}
			?>
			</td>
		</tr>
        <tr>
			<td align=left><h3>Nombre de places</h3></td>
			<td align=center>
            <input type="number" name="saisienbplace" value="1" min="0">
			</td>
		</tr>

		<tr><td colspan=2 align=center>
		<?php
		echo'<input type="hidden" name="idgerant" value="'.$resultat1['id_gerant'].'">';
		?>
		<input type="submit" value="Ajouter">
		</td></tr>
	</tbody>
	</h4></form>
 </table>
 </div>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');