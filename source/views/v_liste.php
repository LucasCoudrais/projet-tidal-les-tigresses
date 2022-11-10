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
  <link rel="stylesheet" href="assets/css/liste.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>How to create searchable select box</title>
  <!-- JS for jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- CSS for searching -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- JS for searching -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<script>
  // .js-example-basic-single declare this class into your select box
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>

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
              <a class="nav-link link-navbar " style="color: white;" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar" style="color: black;" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
            </li>
          </ul>
          <?php
          if (!isset($status)) {
          ?>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user ' style="
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
  <div class="row">

    <div class="col ">

      <form class="g-3 needs-validation first-form" action="" method="post">
        <div class="mb-3">
          <label for="idPatho" class="form-label">Recherche pathologie</label>
          <input type="text" name="patho" class="form-control" id="idPatho" aria-describedby="pathonHelp">
          <div id="pathonHelp" class="form-text">Recherche de mot(s) dans la description de la pathologie</div>
        </div>

        <label for="mers">Code méridien</label>
        <div class=" mb-3">
          <select name="mer" id="mers" class="js-example-basic-single" style="width:300px">
            <option selected="selected" value="choisir">
              Choisir...
            </option>

            <?php
            foreach ($resultat3 as $ligne3) {
              echo '<option value="' . $ligne3['mer'] . '">' . $ligne3['mer'] . '</option>';
            }
            ?>
          </select>
        </div>
        <?php
        if ($status == "on") {
        ?>
          <label for="keyword">Mot clé de symptome </label>

          <div class=" mb-3">

            <select name="keyword" id="keyword" class="js-example-basic-single" style="width:300px">
              <option selected="selected" value="choisir">
                Choisir...
              </option>
              <?php
              foreach ($resultat2 as $ligne2) {
                echo '<option value="' . $ligne2['name'] . '">' . $ligne2['name'] . '</option>';
              }
              ?>
            </select>
          </div>
        <?php
        }
        ?>
        <div class="col-12">
          <button class="btn btn-primary" name="submit" type="submit">Valider</button>
        </div>
      </form>
    </div>
  </div>
  <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Description patho</th>
          <th scope="col">Type</th>
          <th scope="col">Nom méridien</th>
          <th scope="col">Code méridien</th>
          <th scope="col">Symptome</th>
          <th scope="col">Clé symptome</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($resultat1 as $ligne) {
          echo '<tr>
                <th scope="row">' . $ligne['desc_patho'] . '</th>
                <td>' . $ligne['type'] . '</td>
                <td>' . $ligne['nom_meri'] . '</td>
                <td>' . $ligne['code_meri'] . '</td>
                <td>' . $ligne['desc_symptome'] . '</td>
                <td>' . $ligne['cle_sympt'] . '</td>
              </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>