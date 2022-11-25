<?php

if (isset($_POST['submitDisconnect'])) {
    setcookie('userCookie', null, -1);
    header('Location: http://localhost:50080/source/index.php?page=accueil');
}



if (!isset($erreur)) {
    try {
        function runAPI($resource, $method, $params)
        {
            if ($resource == "patho") {
                if ($method == "GET") {
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
            $query = 'select * from patho where idp=? ';
            $query1 = $bdd->prepare($query);
            $query1->execute(array($params)); //sécurité
            return $query1->fetch(PDO::FETCH_ASSOC);
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
            $query = "select * from patho";
            $query1 = $bdd->prepare($query);
            $query1->execute();
            return $query1->fetchAll(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        if (DEBUG)
            die('Erreur : ' . $e->getMessage());
        $erreur = 'query';
    }
}
