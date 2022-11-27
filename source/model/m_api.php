<?php

if (isset($_POST['submitDisconnect'])) {//gestion de l'appui sur le bouton de déconnexion
    setcookie('userCookie', null, -1);// on "supprime" le cookie
    header('Location: http://localhost:50080/source/index.php?page=api');// on refresh la page pour mettre à jour l'interface dynamique
}

function runAPI($resource, $method, $params)
{
    if ($resource == "patho") {//ressources patho
        if ($method == "GET") {//méthode GET
            if ($params == NULL) {
                $result = getListPatho();
            } else {
                $result = getPathoById($params);
            }
        } else {
            return 405; //method not allowed
        }
    } else {
        return 404; //resource not found
    }
    return json_encode($result);
}

function getPathoById($params)
{
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
        try{
            $query = 'select * from patho where idp=? ';
            $query1 = $bdd->prepare($query);
            $query1->execute(array($params));
            return $query1->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            if (DEBUG)
                die('Erreur : ' . $e->getMessage());
            $erreur = 'query';
        }
    }
}

function getListPatho()
{
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
            $query = "select * from patho";
            $query1 = $bdd->prepare($query);
            $query1->execute();
            return $query1->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            if (DEBUG)
                die('Erreur : ' . $e->getMessage());
            $erreur = 'query';
        }
    }
}

