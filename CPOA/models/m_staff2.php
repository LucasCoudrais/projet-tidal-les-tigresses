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
		//ensemble des requettes et écxecution nécessaire aux contraintes ou affichages
		$query1 = $bdd->prepare("SELECT * FROM vip where id_vip= ?");
		$query1->execute(array($idvip));
		$resultatvip = $query1->fetch(PDO::FETCH_ASSOC);

		$query2 = $bdd->prepare("SELECT * FROM jury where id_vip= ?");
		$query2->execute(array($idvip));
		$resultatjury = $query2->fetch(PDO::FETCH_ASSOC);

		$query3 = $bdd->prepare("SELECT * FROM mb_film where id_vip= ?");
		$query3->execute(array($idvip));
		$resultatmembre = $query3->fetch(PDO::FETCH_ASSOC);

		$query4 = $bdd->prepare("SELECT * FROM equipe_film where id_equipe= ?");
		$query4->execute(array($resultatmembre['id_equipe']));
		$resultatfilm = $query4->fetch(PDO::FETCH_ASSOC);

		$query5 = $bdd->prepare("SELECT * FROM mb_film where id_equipe= ?");
		$query5->execute(array($resultatmembre['id_equipe']));
		$resultatequipefilm = $query5->fetchall(PDO::FETCH_ASSOC);

		$query6 = $bdd->prepare("SELECT * FROM etablissement where id_etabl not in 
		(SELECT id_etabl FROM etablissement where id_etabl in 
		(SELECT id_etabl FROM vip where id_mb_film in 
		(SELECT id_mb_film FROM mb_film where id_equipe != ?)) and id_etabl is not null) ");
		$query6->execute(array($resultatmembre['id_equipe']));
		$resultatcontraintemb = $query6->fetchall(PDO::FETCH_ASSOC);

		$query6 = $bdd->prepare("SELECT * FROM etablissement where id_etabl not in 
		(SELECT id_etabl FROM etablissement where id_etabl in 
		(SELECT id_etabl FROM vip where id_jury in 
		(SELECT id_jury FROM jury where equipe_jury != ?)) and id_etabl is not null) ");
		$query6->execute(array($resultatjury['equipe_jury']));
		$resultatcontraintejury = $query6->fetchall(PDO::FETCH_ASSOC);

		$query7 = $bdd->prepare("SELECT * FROM etablissement where id_etabl= ?");
		$query7->execute(array($resultatvip['id_etabl']));
		$resultatassignement = $query7->fetch(PDO::FETCH_ASSOC);
		
		if($resultatvip === false )
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