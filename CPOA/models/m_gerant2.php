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
	$erreur = ERROR_BDD;
  }

// s'il n'y a pas d'erreurs : recherche dans la base de l'utilisateur 
  if(!isset($erreur)) 
  {
	try 
	{
		$query1 = $bdd->prepare("SELECT * FROM etablissement where id_etabl= ?");
		$query1->execute(array($idetabl));
		$resultatetabl = $query1->fetch(PDO::FETCH_ASSOC);

		$query2 = $bdd->prepare("SELECT * FROM service where id_serv= ?");
		$query2->execute(array($resultatetabl['id_serv']));
        $resultatservice = $query2->fetch(PDO::FETCH_ASSOC);

        $query4 = $bdd->prepare("SELECT * FROM vip where id_vip in 
        (SELECT id_vip FROM sejour where id_etabl= ?)");
		$query4->execute(array($idetabl));
		$resultatslistevip = $query4->fetchall(PDO::FETCH_ASSOC);

		$query5 = $bdd->prepare("SELECT count(id_vip) as nb_place_prise FROM sejour where id_etabl= ?");
		$query5->execute(array($idetabl));
		$resultatplaceprise = $query5->fetch(PDO::FETCH_ASSOC);
		
		if($resultatetabl === false )
		{
			$erreur = ERROR_BDD;
		}
		
	}	
	catch(PDOException $e)
	{
        if(DEBUG)
            die ('Erreur : '.$e->getMessage());
		$erreur = ERROR_BDD;
	}
	
	
  }
?>