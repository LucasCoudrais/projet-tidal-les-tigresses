<?php


// Contrôle - Neutralisation du paramètre reçu 
if (isset($_POST['choixhotel'], $_POST['choixdate'], $_POST['choixduree'], $_POST['idvip']))
{
  $choixhotel =  htmlspecialchars($_POST['choixhotel']);
  $choixdate =  htmlspecialchars($_POST['choixdate']);
  $choixduree =  htmlspecialchars($_POST['choixduree']);
  $id_vip =  htmlspecialchars($_POST['idvip']);
	
  require_once(PATH_MODELS.$page.'.php');
}

//recherche en base si le login existe en utilisant la fonction définie dans le modèle
$resultat = selectUtilisateur($id_vip);
		
if($resultat == false )
{
  // le login n'existe pas en base => insert en base en utilisant la fonction définie dans le modèle
  $resultat = insertUtilisateur($choixhotel, $choixdate, $choixduree, $id_vip);
  
  if($resultat != true)
  {
    // une erreur est retournée par la fonction insertUtilisateur
    $erreur = $resultat;
  }
} 
elseif($resultat == true )
{
  // le login existe déjà en base
  $erreur = 'login_existe';
}
else
{
  // une erreur est retournée par la fonction selectUtilisateur
  $erreur = $resultat;
}
if(isset($erreur))
{	
	$page= '404';
	$alert= choixAlert($erreur);
  require_once(PATH_VIEWS.$page.'.php');
}else{	//appel de la vue
	require_once(PATH_VIEWS.$page.'.php');
}

