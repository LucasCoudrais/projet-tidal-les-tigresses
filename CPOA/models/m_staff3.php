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

  
  $query = $bdd->prepare("SELECT * FROM vip where id_vip= ?");
	$query->execute(array($id_vip));
  $resultatvip = $query->fetch(PDO::FETCH_ASSOC);

  // fonction recherche dans la base de l'utilisateur 
  function selectUtilisateur($id_vip) 
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

    $requete = $bdd->prepare("SELECT * FROM vip where id_vip = ?");
		$requete->execute(array($id_vip));
	try 
	{
    $resultats = $requete->fetch(PDO::FETCH_ASSOC);
		if(!isset($resultats['id_etabl']))
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
  function insertUtilisateur($choixhotel, $choixdate, $choixduree, $id_vip) 
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

    $query1 = $bdd->prepare("SELECT * FROM etablissement where nom_etabl= ?");
		$query1->execute(array($choixhotel));
    $resultatetabl = $query1->fetch(PDO::FETCH_ASSOC);

    $query2 = $bdd->prepare("SELECT max(id_sejour) as maxi FROM sejour");
		$query2->execute(array($choixhotel));
    $resultatidsejour = $query2->fetch(PDO::FETCH_ASSOC);
    
    if(!isset($resultatidsejour)){//prend le max des id pour mettre le suiviant au max+1
      $idsej=1;
    }else{
      $idsej= $resultatidsejour['maxi'] + 1;
    }
    // insertion dans sejour
	$requete1 = "INSERT INTO sejour SET id_vip = ?, id_etabl = ?, id_sejour= ?,
   date_deb = ?, duree= ?";
	$donnees1 = array(
					$id_vip,
					$resultatetabl['id_etabl'],
          $idsej,
          $choixdate,
          $choixduree
          );
    // insertion dans laz table vip de l'etabl correspondant au bon vip      
  $requete2 = "UPDATE vip SET id_etabl = ? WHERE id_vip = ?";
	$donnees2 = array(
          $resultatetabl['id_etabl'],
					$id_vip
					);
	try 
	{
    $query3 = $bdd->prepare("SELECT hebergement FROM vip where id_vip= ?");
		$query3->execute(array($id_vip));
    $resultatviphebergement = $query3->fetch(PDO::FETCH_ASSOC);

    $query5 = $bdd->prepare("SELECT count(id_vip) as nb_place_prise 
    FROM sejour where id_etabl= ?");// compte le nombre de vip qu'il y a dans cet établissement
		$query5->execute(array($resultatetabl['id_etabl']));
    $resultatplaceprise = $query5->fetch(PDO::FETCH_ASSOC);

    if(((int)$resultatplaceprise['nb_place_prise'])<((int)$resultatetabl['nb_place_tot'])){ // si il reste assez de places

      if(strcmp($resultatviphebergement['hebergement'],'true')===0){ // si il est eligible a l'hebergement

		$query6 = $bdd->prepare($requete1);
    $query6->execute($donnees1);
    $query7 = $bdd->prepare($requete2);
    $query7->execute($donnees2);

      }else{
        $erreur= 'no_hebergement';
      }

    }else{
      $erreur= 'no_place';
    }

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