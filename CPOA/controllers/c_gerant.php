<?php

// Contrôle - Neutralisation du paramètre reçu 



//if (isset($_POST['nom'], $_POST['prénom'], $_POST['mdp'])){
  $nom =  htmlspecialchars($_POST['nom']);
  $prénom =  htmlspecialchars($_POST['prénom']);
  $mdp =  htmlspecialchars($_POST['mdp']);
  //}
  require_once(PATH_MODELS.$page.'.php'); 

  /*if($resultat1['nom']=$nom && $resultat1['prénom']=$prénom && $resultat3['mdp']=$mdp )
		{
			$erreur = ERREUR_QUERY_BDD;
		}*/
   
  if(isset($erreur)) // affichage des erreurs de login
  {
    $page= '404';
	  $alert= choixAlert('id_non_valide');
	  require_once(PATH_VIEWS.$page.'.php');
  }
  else // donc login existe et $resultats utilisable
  {
	  require_once(PATH_VIEWS.$page.'.php'); 
  }