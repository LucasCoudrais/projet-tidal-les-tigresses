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

<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les tigresses</title>
  <link rel="stylesheet" href="assets/css/accueil.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg " style="background-color: #57b846;">
      <div class="container-fluid">

        <a href="http://localhost:50080/source/index.php?page=accueil" class="navbar-brand" style="color: white;"> Les tigresses </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link link-navbar " style="color: black;" aria-current="page"  href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar" style="color: white;" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
            </li>
          </ul>
          <li class="d-flex">
            <a class="nav-link"href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user ' style="
    background: url('assets/icons/account_user-white.png');"></span></a>
          </li>
        </div>

      </div>
    </nav>


  </header>
  <section class="container-fluid container_acuponcture" id="home">
    <div class="row ">
      <div class="col-6">
        <img class="img_acuponcture" src="assets/acuponcture.jpg">
  
      </div>
  
      <div class="col-6">
        <div class="row" >
          <p>
            L’acupuncture est une pratique issue de la tradition médicale chinoise. Elle consiste en la stimulation de
            «points
            d’acupuncture» sur divers endroits du corps à l’aide de techniques qui peuvent être physiques (implantation
            d’aiguilles, dispositifs d’acupression, application de ventouses, d’aimants, lasers…).
          </p>
    

        </div>
        <div class="row">
          <div class="col-6">
            <div class="button">
              <a href="http://localhost:50080/source/index.php?page=connexion" class="btn btn-primary ">Se connecter</a>
              </div>
          </div>
          <div class="col-6">
            <div class="button">
              <a href="http://localhost:50080/source/index.php?page=inscription"  class="btn btn-primary ">S'inscrire</a>
              </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>
