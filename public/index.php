<?php

require "../vendor/autoload.php";

use Entity\User;
use Entity\Training;

$userRaph = new User();
$userRaph->userId = 1;
$userRaph->mail = "monmail@mail.com";
$userRaph->nickname = "Raff";
$userRaph->password = "aaaaaaaa";

$train1 = new Training();
$train1->id = 1;
$train1->creationDate = time();
$train1->category = "legs";
$train1->title = "Legs day";
$train1->exo1 = "squatts";
$train1->exo2 = "squatts";
$train1->exo3 = "squatts";
$train1->exo4 = "squatts";
$train1->nbrSeries = 4;
$train1->nbrReps = 10;
$train1->userId = $userId;

$train2 = new Training();
$train2->id = 2;
$train2->creationDate = time();
$train2->category = "half-body";
$train2->title = "dos-pecs-bras";
$train2->exo1 = "squatts";
$train2->exo2 = "squatts";
$train2->exo3 = "squatts";
$train2->exo4 = "squatts";
$train2->nbrSeries = 4;
$train2->nbrReps = 10;
$train2->userId = $userId;

$items = array($train1, $train2);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shapes&Friends | Training</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="logo de la marque"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Parcourir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Partager</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
        possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
        repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Partage ton entraînement</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
      <div class="col-12">
        <h2> Catégories </h2>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/boy.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Catégories</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
              neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/boy.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Full-body</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente,
              tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/boy.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Half-body</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
              neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/boy.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Full-body</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente,
              tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>