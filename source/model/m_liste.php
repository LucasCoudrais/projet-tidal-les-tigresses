<?php
if (isset($_POST['submitDisconnect'])) {//gestion de l'appui sur le bouton de déconnexion
  setcookie('userCookie', null, -1);// on "supprime" le cookie
  header('Location: http://localhost:50080/source/index.php?page=liste');// on refresh la page pour mettre à jour l'interface dynamique
}
// accès base de données
// connection à la base de données
try {
  $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb;user=pgtp;password=tp');

  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  if (DEBUG)
    die('Erreur : ' . $e->getMessage());
  $erreur = 'connexion';
}

if (!isset($erreur)) {
  try {
    if (isset($_POST['submit'])) {
      // form submitted, now we can look at the data that came through
      // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
      $patho = $_POST['patho'];
      $meri = $_POST['mer'];
      $keyword = $_POST['keyword'];
      // Now you can do whatever with this variable.
    }
    $condition = ""; //ensemble de tous les cas possibles selon le remplissage de certain filtre ou non 
    //et donc adaptation de la condition qu'on va ajouter a notre requete 
    if ((isset($meri) && $meri != "choisir") and (isset($patho) and $patho != "") and (isset($keyword) && $keyword != "choisir")) {
      $condition = $condition . "where patho.mer like '" . $meri . "' and patho.desc like '%" . $patho . "%' and keywords.name like '" . $keyword . "'";
    } elseif ((isset($meri) && $meri != "choisir") and (isset($patho) and $patho != "")) {
      $condition = $condition . "where patho.mer like '" . $meri . "' and patho.desc like '%" . $patho . "%'";
    } elseif ((isset($meri) && $meri != "choisir") and (isset($keyword) and $keyword != "")) {
      $condition = $condition . "where patho.mer like '" . $meri . "' and keywords.name like '" . $keyword . "'";
    } elseif ((isset($keyword) && $keyword != "choisir") and (isset($patho) and $patho != "")) {
      $condition = $condition . "where keywords.name like '" . $keyword . "' and patho.desc like '%" . $patho . "%'";
    } elseif (isset($patho) && $patho != "") {
      $condition = $condition . "where patho.desc like '%" . $patho . "%'";
    } elseif (isset($meri) && $meri != "choisir") {
      $condition = $condition . "where patho.mer like '" . $meri . "'";
    } elseif (isset($keyword) && $keyword != "choisir") {
      $condition = $condition . "where keywords.name like '" . $keyword . "'";
    }
    $queryLong = "select patho.desc as desc_patho, meridien.nom as nom_meri, symptome.desc AS desc_symptome, keywords.name as cle_sympt, patho.mer as code_meri, patho.type from patho
    inner join meridien on patho.mer = meridien.code
    inner join symptpatho on patho.idp = symptpatho.idp
    inner join symptome on symptpatho.ids = symptome.ids
    inner join keySympt on symptome.ids = keySympt.ids
    inner join keywords on keySympt.idk = keywords.idk " . $condition; //jointure de toutes les données de la base et selection des seules infos pertinentes pour l'utilisateur
    //et aussi au dessus ajout de la condition mise en place au dessus 
    $query1 = $bdd->prepare($queryLong);
    $query1->execute();
    $resultat1 = $query1->fetchAll(PDO::FETCH_ASSOC);

    $query2 = $bdd->prepare("SELECT distinct name FROM public.keywords");//pour fournir la liste d'option du select
    $query2->execute();
    $resultat2 = $query2->fetchAll(PDO::FETCH_ASSOC);


    $query3 = $bdd->prepare("SELECT distinct mer FROM public.patho");//pour fournir la liste d'option du select
    $query3->execute();
    $resultat3 = $query3->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    if (DEBUG)
      die('Erreur : ' . $e->getMessage());
    $erreur = 'query';
  }
}
