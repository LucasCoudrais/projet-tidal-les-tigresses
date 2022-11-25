<?php

    if(isset($_POST['submitDisconnect'])) {
        setcookie('userCookie', null, -1);
        header('Location: http://localhost:50080/source/index.php?page=accueil');
    }	