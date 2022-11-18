<?php

    if(isset($_POST['submitDisconnect'])) {
        setcookie('userCookie', null, -1);
    }	