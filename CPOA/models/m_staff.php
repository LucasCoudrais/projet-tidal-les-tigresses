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

        $query = $bdd->query("SELECT * FROM vip where id_etabl is null
        and id_jury is not null");
        $resultatjury = $query->fetchall(PDO::FETCH_ASSOC);

        $query = $bdd->query("SELECT * FROM vip where id_etabl is null 
        and id_mb_film is not null");
        $resultatmbfilm = $query->fetchall(PDO::FETCH_ASSOC);

        $query = $bdd->query("SELECT * FROM vip where id_etabl is not null");
        $resultatmbassigné = $query->fetchall(PDO::FETCH_ASSOC);

        $query1 = $bdd->prepare("SELECT * FROM utilisateurs where nom_user= ? and prenom_user= ?");
		    $query1->execute(array($nom, $prénom,));
        $resultat1 = $query1->fetch(PDO::FETCH_ASSOC);
        
        $query2 = $bdd->prepare("SELECT * FROM utilisateurs where id_staff= ?");
		    $query2->execute(array($resultat1['id_staff']));
	    	$resultat2 = $query2->fetch(PDO::FETCH_ASSOC);
		
	    	$query3 = $bdd->prepare("SELECT * FROM staff where id_staff= ? and mdp_membre= ?");
	    	$query3->execute(array($resultat2['id_staff'], $mdp));
        $resultat3 = $query3->fetch(PDO::FETCH_ASSOC);

    if($resultatjury === false || $resultatmbfilm === false ||
    $resultat1 === false || $resultat2 === false || $resultat3 === false)
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