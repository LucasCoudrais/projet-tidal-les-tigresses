<?php
/*
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A propos de nous</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/apropos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
  
          <a href="http://localhost:50080/source/index.php?page=accueil" class="navbar-brand"> <img class="fas fa-hiking"></i> Les tigresses </a>
          <div id="nav-close" class="fas fa-times"></div>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
              </li>
            </ul>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user'></span></a>
            </li>
          </div>
  
        </div>
      </nav>
  
  
    </header>

      <div class="div_img">
      <img src="assets/acup.jpeg" class="image">
      <div class="text">
      <h1 >Qui sommes-nous?</h1>
      <p>Nous sommes 4 étudiants en école d'ingénieur et nous réalisons un projet TIDAL</p>
      <p class="info">Pour réaliser ce site web, nous avons utilisés la collection Boostrap et nous avons utilisés les langages html, css et php</p>
      <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Boostrap exemples</a>
        </div>
    </div>
    </body>
</html>
