<?php


// Contrôle - Neutralisation du paramètre reçu 
if (isset($_GET['idvip']))
{
  $idvip =  htmlspecialchars($_GET['idvip']);
	
  require_once(PATH_MODELS.$page.'.php');
}

if(isset($erreur))
{	
	$page= '404';
	$alert= choixAlert('vip_inexistant');
	require_once(PATH_VIEWS.$page.'.php');
}
else
{	//appel de la vue
	require_once(PATH_VIEWS.$page.'.php');
}