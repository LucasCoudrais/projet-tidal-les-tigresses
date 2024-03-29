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
        <?php
        $status = isset($_COOKIE['userCookie']) ? $_COOKIE['userCookie'] : null;//récupération du cookie
        ?>
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
            <li class="nav-item">
              <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=api">Démo API</a>
            </li>
          </ul>
          <?php
          if (!isset($status) || $status == null) {// affichage dynamique du bouton de connexion/deconnexion en fonction du contenu du cookie
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
  <h1>Page de démo pour l'api</h1>
  <br>
  <br>
  <h4>Infomation sur patho pour id (Get patho/[id])</h4>
  <form class="row g-3" class="formInscr" style="margin-left: 30px; margin-right:30px;" action="" method="post">
    <div class="col-md-6">
      <label for="inputID" class="form-label">Identifiant</label>
      <input type="text" name="idPatho" class="form-control" id="inputID">
    </div>
    <div class="col-12">
      <button class="btn btn-primary" name="submitGetId" type="submit">Valider</button>
    </div>
  </form>
  <?php
  echo $resultatDescription;
  ?>

  <h4> Liste de toutes les patho (Get patho/)</h4>
  <form class="row g-3" class="formInscr" style="margin-left: 30px; margin-right:30px;" action="" method="post">
    <div class="col-12">
      <button class="btn btn-primary" name="submitGet" type="submit">Valider</button>
    </div>
    <?php
    echo $resultatListe;
    ?>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>