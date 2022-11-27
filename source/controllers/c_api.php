
<?php

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
