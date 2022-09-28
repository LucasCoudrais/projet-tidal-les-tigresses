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
                <a class="nav-link link-navbar " style="color: white;" aria-current="page" href="http://localhost:50080/source/index.php?page=accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-navbar" style="color: black;" href="http://localhost:50080/source/index.php?page=liste">Liste</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " style="color: white;" href="http://localhost:50080/source/index.php?page=apropos">A propos</a>
              </li>
            </ul>
            <li class="d-flex">
              <a class="nav-link" href="http://localhost:50080/source/index.php?page=connexion"><span class='icon_user' style="
    background: url('assets/icons/account_user-white.png');"></span></a>
            </li>
          </div>

        </div>
      </nav>


    </header>
    <div class="row">

        <div class="col">

            <form class="row g-3 needs-validation first-form" novalidate>
                <div class="col-12">
                    <label for="validationCustom04" class="form-label">Critères</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom04" class="form-label">Pathologies</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>

        </div>

        <div class="col second-form-container">

            <form class="row g-3 needs-validation second-form" novalidate>
                <div class="col-12">
                    <label for="validationCustom04" class="form-label">Recherche par pathologie</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </form>

        </div>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Critères</th>
                <th scope="col">Caractéristique</th>
                <th scope="col">Symptome</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($resultat1 as $ligne) {
                echo '<tr>
                <th scope="row">'.$ligne['idp'].'</th>
                <td>'.$ligne['mer'].'</td>
                <td>'.$ligne['type'].'</td>
                <td>'.$ligne['desc'].'</td>
              </tr>';
              }              
              ?>
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>
