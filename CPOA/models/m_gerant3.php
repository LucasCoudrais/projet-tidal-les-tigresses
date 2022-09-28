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
  } // fin acces bdd

  // fonction recherche dans la base de l'utilisateur 
  function selectEtablissement($saisienom) 
  {
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
  } // fin acces bdd

    $requete = $bdd->prepare("SELECT * FROM etablissement where nom_etabl = ?");
		$requete->execute(array($saisienom));
	try 
	{
    $resultats = $requete->fetch(PDO::FETCH_ASSOC);
		if(!isset($resultats['nom_etabl']))
		{
			$resultat = false;
		}
		else $resultat = true;
	}	
	catch(PDOException $e)
	{
                if(DEBUG)
                        die ('Erreur : '.$e->getMessage());
		$resultat = 'query';
	}
	// retourne true, false ou 'query'
	return $resultat;
  }



  // fonction recherche dans la base de l'utilisateur 
  function insertEtablissement($saisienom, $saisietype, $saisieadresse, $choixservice, $saisienbplace, $idgerant) 
  {

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
  }// fin acces bdd

    $query2 = $bdd->prepare("SELECT max(id_etabl) as maxi FROM etablissement");
	  $query2->execute(array($saisienom));
    $resultatidetabl = $query2->fetch(PDO::FETCH_ASSOC);

    if(!isset($resultatidetabl)){
      $idetabl=1;
    }else{
      $idetabl= $resultatidetabl['maxi'] + 1;
    }
    
	$requete1 = "INSERT INTO etablissement SET id_etabl = ?, id_gerant = ?, id_serv= ?,
     nom_etabl = ?, type_serv= ?, adresse= ?, nb_place_tot= ?";
	$donnees1 = array(
		      $idetabl,
          $idgerant,
          $choixservice,
          $saisienom,
          $saisietype,
          $saisieadresse,
          $saisienbplace
          );
          
  
	try 
	{
		$query1 = $bdd->prepare($requete1);
    $query1->execute($donnees1);
	}	
	catch(PDOException $e)
	{
		if(DEBUG)
				die ('Erreur : '.$e->getMessage());
		 $erreur= 'query';
	}
	if(isset($erreur))
		return $erreur; 
	else 
		return true;
  }
?>