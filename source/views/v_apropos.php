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
        $status = $_GET['status'];
        ?>
        <a <?php echo 'href="http://localhost:50080/source/index.php?page=accueil&status=' . $status . '"' ?> class="navbar-brand" style="color: white;"> Les tigresses </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link link-navbar " style="color:  white;" aria-current="page" <?php echo 'href="http://localhost:50080/source/index.php?page=accueil&status=' . $status . '"' ?> >Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-navbar" style="color: white;" <?php echo 'href="http://localhost:50080/source/index.php?page=liste&status=' . $status . '"' ?> >Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " style="color: black;" <?php echo 'href="http://localhost:50080/source/index.php?page=apropos&status=' . $status . '"' ?> >A propos</a>
            </li>
          </ul>
          <li class="d-flex">
            <a class="nav-link" <?php echo 'href="http://localhost:50080/source/index.php?page=connexion&status=' . $status . '"' ?> ><span class='icon_user ' style="
    background: url('assets/icons/account_user-white.png');"></span></a>
          </li>
        </div>

      </div>
    </nav>


  </header>





  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/acuponcture_apropos.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <h1>Qui sommes-nous?</h1>
        <p>Nous sommes 4 étudiants en école d'ingénieur et nous réalisons un projet TIDAL</p>
        <p>Pour réaliser ce site web, nous avons utilisés la collection Boostrap et nous avons utilisés les langages
          html,
          css et php</p>
        <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Boostrap exemples</a>
      </div>
    </div>
  </div>
  </div>
</body>

</html>