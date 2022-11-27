
<?php

//fichier de controller respectant la bonne architecture MVC il controlle les données qui entre et qui sorte et fait le lien
// entre le modèle et la vue 
// il va appeler les méthode du modèle en fonction de ce qu'il recoit de la vue qu'il aura préalablement controllé
//puis il controllé ce que lui renvoie le modèle avant d'y renvoyer à la vue 

require_once(PATH_MODELS . $page . '.php');


if (isset($_POST['submitGetId'])) {
    if (isset($_POST['idPatho']) && $_POST['idPatho'] != "") {
        $result = runAPI("patho", "GET", $_POST['idPatho']);
    } else {
        $result = '<script> window.alert("Veuillez rentrer un identifiant d API"); </script>';
    }
    if ($result == 404 || $result == 405) {
        $resultatDescription = '<script> window.alert("Erreur lors de la récupération de cette patho"); </script>';
    } else {
        $resultatDescription = $result;
    }
}

if (isset($_POST['submitGet'])) {
    $result = runAPI("patho", "GET", NULL);
    if ($result == 404 || $result == 405) {
        $resultatListe = '<script> window.alert("Erreur lors de la récupération de la liste des patho"); </script>';
    } else {
        $resultatListe = $result;
    }
}


require_once(PATH_VIEWS . $page . '.php');
