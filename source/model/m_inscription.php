<?php
if (isset($_POST['submitDisconnect'])) {//gestion de l'appui sur le bouton de déconnexion
    setcookie('userCookie', null, -1);// on "supprime" le cookie
    header('Location: http://localhost:50080/source/index.php?page=inscription');// on refresh la page pour mettre à jour l'interface dynamique
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

        if (isset($_POST['submitIns'])) {
            // form submitted, now we can look at the data that came through
            // the value inside the brackets comes from the name attribute of the input field. (just like submit above)
            $idUser = $_POST['idUser']; //récupération des données du formulaire
            $pwdUser = $_POST['pwdUser'];
            $nameUser = $_POST['nameUser'];
            $firstNameUser = $_POST['firstNameUser'];
            $ageUser = $_POST['ageUser'];

            $queryTest = "select * from users where matricule='" . $idUser . "'";//on regarde si un user deja existant possède le même matricule
            $query2 = $bdd->prepare($queryTest); 
            $query2->execute();
            if ($query2->rowCount() >= 1) { // si on recoit au moins une ligne 
                $resultatInscr = '<script> window.alert("Cet utilisateur existe deja inscription impossible!"); </script>';
            } else { // ajout de l'utilisateur 
                $query = "INSERT INTO users (name, firstname, age, password, matricule) VALUES (
                '" . $nameUser . "',
                '" . $firstNameUser . "',
                '" . $ageUser . "',
                '" . $pwdUser . "',
                '" . $idUser . "'
                );";

                $query1 = $bdd->prepare($query);
                $query1->execute();
                $query1->fetch(PDO::FETCH_ASSOC);
                $resultatInscr = '<script> window.alert("Inscription réussie"); </script>';
            }
        }
    } catch (PDOException $e) {
        if (DEBUG)
            die('Erreur : ' . $e->getMessage());
        $erreur = 'query';
    }
}
