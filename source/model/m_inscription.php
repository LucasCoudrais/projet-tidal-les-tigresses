<?php
if (isset($_POST['submitDisconnect'])) {
    setcookie('userCookie', null, -1);
    header('Location: http://localhost:50080/source/index.php?page=inscription');
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
            $idUser = $_POST['idUser'];
            $pwdUser = $_POST['pwdUser'];
            $nameUser = $_POST['nameUser'];
            $firstNameUser = $_POST['firstNameUser'];
            $ageUser = $_POST['ageUser'];

            $queryTest = "select * from users where matricule='" . $idUser . "'";
            $query2 = $bdd->prepare($queryTest);
            $query2->execute();
            if ($query2->rowCount() >= 1) {
                $resultatInscr = '<script> window.alert("Cet utilisateur existe deja inscription impossible!"); </script>';
            } else {
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
