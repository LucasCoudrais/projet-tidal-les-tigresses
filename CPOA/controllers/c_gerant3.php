<?php


// Contrôle - Neutralisation du paramètre reçu 
if (isset($_POST['saisienom'], $_POST['saisietype'], $_POST['saisieadresse'], $_POST['choixservice'], $_POST['saisienbplace'], $_POST['idgerant'] ))
{
  $saisienom =  htmlspecialchars($_POST['saisienom']);
  $saisietype =  htmlspecialchars($_POST['saisietype']);
  $saisieadresse =  htmlspecialchars($_POST['saisieadresse']);
  $choixservice =  htmlspecialchars($_POST['choixservice']);
  $saisienbplace =  htmlspecialchars($_POST['saisienbplace']);
  $idgerant =  htmlspecialchars($_POST['idgerant']);
	
  require_once(PATH_MODELS.$page.'.php');
}

//recherche en base si le login existe en utilisant la fonction définie dans le modèle
$resultat = selectEtablissement($saisienom);
		
if($resultat == false )
{
  // le login n'existe pas en base => insert en base en utilisant la fonction définie dans le modèle
  $resultat = insertEtablissement($saisienom, $saisietype, $saisieadresse, $choixservice, $saisienbplace, $idgerant);
  
  if($resultat != true)
  {
    // une erreur est retournée par la fonction insertUtilisateur
    $erreur = 'fonction_insert';
  }
} 
elseif($resultat == true )
{
  // le login existe déjà en base
  $erreur = 'etabl_exist';
}
else
{
  // une erreur est retournée par la fonction selectUtilisateur
  $erreur = 'fonction_select';
}

// recherche du message d'erreur à afficher s'il existe
if(isset($erreur)) $alert = choixAlert($erreur);


//appel de la vue
require_once(PATH_VIEWS.$page.'.php');
