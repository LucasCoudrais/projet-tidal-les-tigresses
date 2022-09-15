<?php

// accès base de données
  // connection à la base de données
  try
  {
	$bdd = new PDO('mysql:host='.BD_HOST.'; dbname='.BD_DBNAME.'; charset=utf8', BD_USER, BD_PWD);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
  { 
        if(DEBUG)
                die ('Erreur : '.$e->getMessage());
	$erreur = 'connexion';
  }

  if(!isset($erreur)) 
  {
	try 
	{
		$query1 = $bdd->prepare("SELECT * FROM utilisateurs where nom_user= ? and prenom_user= ?");
		$query1->execute(array($nom, $prénom,));
        $resultat1 = $query1->fetch(PDO::FETCH_ASSOC);
        
        $query2 = $bdd->prepare("SELECT * FROM utilisateurs where id_gerant= ?");
		$query2->execute(array($resultat1['id_gerant']));
		$resultat2 = $query2->fetch(PDO::FETCH_ASSOC);
		
		$query3 = $bdd->prepare("SELECT * FROM gerant where id_gerant= ? and mdp_gerant= ?");
		$query3->execute(array($resultat2['id_gerant'], $mdp));
        $resultat3 = $query3->fetch(PDO::FETCH_ASSOC);
		
		$query4 = $bdd->prepare("SELECT * FROM etablissement where id_gerant= ?");
		$query4->execute(array($resultat1['id_gerant']));
		$resultatetabl = $query4->fetchall(PDO::FETCH_ASSOC);

		$query5 = $bdd->prepare("SELECT * FROM service");
		$query5->execute(array($resultat1['id_gerant']));
		$resultatservice = $query5->fetchall(PDO::FETCH_ASSOC);
		
		if($resultat1 === false || $resultat2 === false || $resultat3 === false)
		{
			$erreur = ERREUR_QUERY_BDD;
		}
	}	
	catch(PDOException $e)
	{
                if(DEBUG)
                        die ('Erreur : '.$e->getMessage());
		$erreur = 'query';
	}
  }