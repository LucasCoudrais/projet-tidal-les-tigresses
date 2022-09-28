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
    <title>Les tigresses</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/inscription.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <header class="header">
      <nav class="navbar navbar-expand-lg " style="background-color: #57b846;">
        <div class="container-fluid">

          <a href="http://localhost:50080/source/index.php?page=accueil" class="navbar-brand" style="color: white;"> Les tigresses </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link link-navbar " style="color: white;" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-navbar" style="color: white;" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
              </li>
            </ul>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user'></span></a>
            </li>
          </div>

        </div>
      </nav>


    </header>
      <h1>Inscription</h1>
      <br>
      <br>
      <br>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Adresse</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Chemin ">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Adresse 2 </label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio ou maison">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Ville</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Pays</label>
          <select id="inputState" class="form-select">
            <option selected>Choisir...</option>
            <option>France</option>
            <option>Angleterre</option>
            <option>Belgique</option>
            <option>Etats Unis</option>
            <option>Allemagne</option>
            <option>Suisse</option>
            <option>Autre</option>
          </select>
        </div>
        
        <div class="col-12">
          <div class="button">
            <a href="http://localhost:50080/source/index.php?page=accueil" class="btn btn-primary ">Valider</a>
            </div>
        </div>
      </form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
     
    </body>
  </html>
  