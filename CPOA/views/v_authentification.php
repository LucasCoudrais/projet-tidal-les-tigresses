
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_AUTHENTIFICATION ?></h1><br><br>
<?php
$nom; 
$prénom; 
$mdp; 

if($choixauth=='gerant'){
    echo ' <h2>'.PHRASE_PAGE_AUTHENTIFICATION_GERANT.'</h2><br>';

    echo ' <form action="index.php?page=gerant" method="POST">
	  <label>'.IDENTIFIANT.'
		<input type="text" name = "nom" />
		<input type="text" name = "prénom" />
	  </label>
	  <label>'.MDP.'
	    <input type="password" name = "mdp" />
	  </label>
	  <input type="submit" value="'.SUBMIT.'">
    </form> ';
    
}
if($choixauth=='staff'){
    echo ' <h2>'.PHRASE_PAGE_AUTHENTIFICATION_STAFF.'</h2><br>' ;
    echo ' <form action="index.php?page=staff" method="POST">
	  <label>'.IDENTIFIANT.'
	  <input type="text" name = "nom" />
	  <input type="text" name = "prénom" />
	  </label>
	  <label>'.MDP.'
	    <input type="password" name = "mdp" />
	  </label>
	  <input type="submit" value="'.SUBMIT.'">
    </form> ';
}


?>


<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
