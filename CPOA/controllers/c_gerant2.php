<?php
// Contrôle - Neutralisation du paramètre reçu 
if (isset($_POST['choixetablgerant']))
{
  $idetabl =  htmlspecialchars($_POST['choixetablgerant']);
	
  require_once(PATH_MODELS.$page.'.php');
}

if(isset($erreur))
{	
	$page= '404';
	$alert= choixAlert('info_etabl');
	require_once(PATH_VIEWS.$page.'.php');
}
else
{	//appel de la vue
	require_once(PATH_VIEWS.$page.'.php');
}
