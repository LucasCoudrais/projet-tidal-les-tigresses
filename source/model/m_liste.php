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
    if(isset($_POST['submit'])) {
      // form submitted, now we can look at the data that came through
      // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
      $patho = $_POST['patho'];
      $meri = $_POST['mer'];
      var_dump($meri);
      // Now you can do whatever with this variable.
    }
    $condition = "";
    if(isset($meri) and isset($patho) and $patho != "" && $meri != ""){
      $condition = $condition."where patho.mer like '".$meri."' and patho.desc like '%".$patho."%'";
    } elseif( isset($patho) && $patho != "")  {
        $condition = $condition."where patho.desc like '%".$patho."%'";
    } elseif(isset($meri) && $meri != ""){
      $condition = $condition."where patho.mer like '".$meri."'";
    }
    $query = "select patho.desc as desc_patho, meridien.nom as nom_meri, symptome.desc AS desc_symptome, keywords.name as cle_sympt, patho.mer as code_meri, patho.type from patho
    inner join meridien on patho.mer = meridien.code
    inner join symptpatho on patho.idp = symptpatho.idp
    inner join symptome on symptpatho.ids = symptome.ids
    inner join keySympt on symptome.ids = keySympt.ids
    inner join keywords on keySympt.idk = keywords.idk ".$condition;
    var_dump($query);
    $query1 = $bdd->prepare($query);
    $query1->execute();
        $resultat1 = $query1->fetchAll(PDO::FETCH_ASSOC);

    $query2 = $bdd->prepare("SELECT distinct name FROM public.keywords");
    $query2->execute();
        $resultat2 = $query2->fetchAll(PDO::FETCH_ASSOC);


    $query3 = $bdd->prepare("SELECT distinct mer FROM public.patho");
    $query3->execute();
        $resultat3 = $query3->fetchAll(PDO::FETCH_ASSOC);
	}	
	catch(PDOException $e)
	{
                if(DEBUG)
                        die ('Erreur : '.$e->getMessage());
		$erreur = 'query';
	}
  }