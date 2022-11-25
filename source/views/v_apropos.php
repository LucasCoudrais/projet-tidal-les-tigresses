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
    <nav class="navbar navbar-expand-lg " style="background-color: #57b846;">
      <div class="container-fluid">
        <?php
        $status = isset($_COOKIE['userCookie']) ? $_COOKIE['userCookie'] : null;
        ?>
        <a href="http://localhost:50080/source/index.php?page=accueil" class="navbar-brand" style="color: white;"> Les tigresses </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link link-navbar " style="color:  white;" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar" style="color: white;" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: black;" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=api">Démo API</a>
            </li>
          </ul>

          <?php
          if (!isset($status) || $status == null) {
          ?>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user ' style="
                background: url('assets/icons/account_user-white.png');"></span></a>
            </li>
          <?php
          } else {
          ?>
            <form action="" method="post">
              <div class="col-12">
                <button class="btn btn-primary" name="submitDisconnect" type="submit">Déconnexion</button>
              </div>
            </form>
          <?php
          }
          ?>
        </div>

      </div>
    </nav>


  </header>





  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/acuponcture_apropos.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50" style="color: white;">
        <h1>Qui sommes-nous?</h1>
        <p style="color: white;">Nous sommes 4 étudiants en école d'ingénieur et nous réalisons un projet TIDAL</p>
        <p style="color: white;">Pour réaliser ce site web, nous avons utilisés la collection Boostrap et nous avons utilisés les langages
          html,
          css et php</p>
        <h3>Bibliographie:</h3>
        <ul>
          <li><a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Boostrap exemples</a></li>
          <li> <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">W3School</a></li>
          <li> <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Documentation php</a>
          </li>
          <li> <a>Cours de PHP de TIDAL</a>
          </li>
          <li> <a>Pour le searchable select, nous ne retrouvons pas le lien mais le fichier source pris sur internet est dans le dossier assets</a>
          </li>
          <li> <a>Pour le css et le html de la page connexion nous avons aussi pris un template sur internet mais ne retrouvons pas le lien</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</body>

</html>