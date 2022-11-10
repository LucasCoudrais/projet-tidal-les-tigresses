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
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/connexion.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg " style="background-color: #57b846;">
      <div class="container-fluid">
        <?php
        $status = $_COOKIE["userCookie"];
        ?>
        <a href="http://localhost:50080/source/index.php?page=accueil" class="navbar-brand" style="color: white;"> Les tigresses </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link link-navbar " style="color: white;" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil" >Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar" style="color: white;" href="http://localhost:50080/source/index.php?page=liste" >Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=apropos" >A propos</a>
            </li>
          </ul>
          <?php
          if (!isset($status)) {
          ?>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion" ><span class='icon_user ' style="
    background: url('assets/icons/account_user-white.png');"></span></a>
            </li>
          <?php
          } else {
          ?>
            <div class="button">
              <a href="http://localhost:50080/source/index.php?page=accueil" class="btn btn-primary ">Déconnexion</a>
            </div>
          <?php
          }
          ?>
        </div>

      </div>
    </nav>


  </header>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 ">
        <form class="login100-form validate-form" action="" method="post">

          <span class="login100-form-avatar">
            <img src="assets/tigre.png" alt="AVATAR">
          </span>
          <div class="wrap-input100 validate-input m-t-20 m-b-15" data-validate="Username">
            <input class="input100" type="text" name="name">
            <span class="focus-input100" data-placeholder="Identifiant"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-30" data-validate="Password">
            <input class="input100" type="password" name="pwd">
            <span class="focus-input100" data-placeholder="Mot de passe"></span>
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="submitCo" type="submit">
              Connexion
            </button>
          </div>
          <?php
          echo $resultatUser;
          ?>
          <ul class="login-more p-t-20 mb-2">
            <li>
              <span class="txt1">
                Vous n'avez pas de compte ?
              </span>
              <a href="http://localhost:50080/source/index.php?page=inscription"  class="txt2">
                Inscription
              </a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



</body>

</html>