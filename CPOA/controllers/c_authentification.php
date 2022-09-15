<?php

// Contrôle - Neutralisation du paramètre reçu 
require_once(PATH_MODELS.$page.'.php'); 

  if(isset($_POST['choixauth'])){
    $choixauth=  htmlspecialchars($_POST['choixauth']);
  }
  
 
  require_once(PATH_VIEWS.$page.'.php'); 

  //appel du controller
  //require_once(PATH_CONTROLLERS.$page.'.php'); 
