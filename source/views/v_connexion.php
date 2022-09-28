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
    <link rel="stylesheet" href="assets/css/connexion.css">
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
      <h1>Les tigresses</h1>
      <br>
      <div class="text-center">
        <img src="assets/80869-la-jeune-tigresse-isha.jpg" class=" tigresses" alt="tigresses">
      </div>
      <br>
      <br>
      <br>
      <form class="container">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="margot" >
          <div class="button">
            <a href="http://localhost:50080/source/index.php?page=accueil" class="btn btn-primary ">Connexion</a>
        </div></div>
      </form>
        <div class ="container">
            <br>
            <br>
        <p>New users</p>
        <div class="toine" >
          <div class="button">
            <a href="http://localhost:50080/source/index.php?page=inscription" class="btn btn-primary ">Inscription</a>
        </div>
      </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      
    
       
    </body>
</html>
