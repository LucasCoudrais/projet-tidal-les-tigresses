<?php

// accès base de données
  // connection à la base de données
  try
  {
	$bdd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb;user=pgtp;password=tp');
    
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

    $query1 = $bdd->prepare("select patho.desc as desc_patho, meridien.nom as nom_meri, symptome.desc AS desc_symptome, keywords.name as cle_sympt, patho.mer as code_meri, patho.type from patho
    inner join meridien on patho.mer = meridien.code
    inner join symptpatho on patho.idp = symptpatho.idp
    inner join symptome on symptpatho.ids = symptome.ids
    inner join keySympt on symptome.ids = keySympt.ids
    inner join keywords on keySympt.idk = keywords.idk
    where keywords.name like '%pied%'");
		$query1->execute();
        $resultat1 = $query1->fetchAll(PDO::FETCH_ASSOC);
	}	
	catch(PDOException $e)
	{
                if(DEBUG)
                        die ('Erreur : '.$e->getMessage());
		$erreur = 'query';
	}
  }