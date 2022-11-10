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

    if(isset($_POST['submitCo'])) {
      // form submitted, now we can look at the data that came through
      // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
      $userName = $_POST['name'];
      $userPwd = $_POST['pwd'];
      // Now you can do whatever with this variable.
      $query = "select * from users where matricule='".$userName."' and password='".$userPwd."'";
      $query1 = $bdd->prepare($query);
      $query1->execute();
   
      if ($query1->rowCount() >= 1) {
          $query1->fetch(PDO::FETCH_ASSOC);
          setcookie("userCookie", $userName);
          header('Location: http://localhost:50080/source/index.php?page=accueil');
      } else {
          $resultatUser = '<script> window.alert("Mot de passe ou identifiant incorrect!"); </script>';
      }
    }


	}	
	catch(PDOException $e)
	{
                if(DEBUG)
                        die ('Erreur : '.$e->getMessage());
		$erreur = 'query';
	}
  }