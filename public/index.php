<?php
require __DIR__ . "/../vendor/autoload.php";

use Entity\User;
use Entity\Training;
use Entity\SingleExo;

$userRaph = new User();
$userRaph->userId = 1;
$userRaph->mail = "monmail@mail.com";
$userRaph->nickname = "Raff";
$userRaph->password = "psswd";

//__training 1___________________________//
$exo1 = new SingleExo();
$exo1->trainId = 1;
$exo1->exoId = 1;
$exo1->exoName = "squatts";
$exo1->nbrSeries = 4;
$exo1->nbrReps = 12;
$exo1->tpsRepos = "1,30";

$exo2 = new SingleExo();
$exo2->exoId = 2;
$exo2->exoName = "squatts";
$exo2->nbrSeries = 4;
$exo2->nbrReps = 12;
$exo2->tpsRepos = "1,30";

$exo3 = new SingleExo();
$exo3->exoId = 3;
$exo3->exoName = "squatts";
$exo3->nbrSeries = 4;
$exo3->nbrReps = 12;
$exo3->tpsRepos = "1,30";

$exo4 = new SingleExo();
$exo4->exoId = 2;
$exo4->exoName = "squatts";
$exo4->nbrSeries = 4;
$exo4->nbrReps = 12;
$exo4->tpsRepos = "1,30";

$train1 = new Training();
$train1->user = $userRaph;
$train1->creationDate = time();
$train1->category = "legs";
$train1->title = "Legs day";
$train1->exo1 = $exo1; // ici à vérifier si je dois faire comme sur cette ligne
$train1->exo2 = $exo2; // ou comme sur celle là ... ou autrement
$train1->exo3 = $exo3;
$train1->exo4 = $exo4;
$train1->urlImg = "https://cdn.pixabay.com/photo/2017/04/22/10/15/sport-2250970_960_720.jpg";

//__fin train 1________________________//

//__ training 2________________________//
$exo5 = new SingleExo();
$exo5->exoId = 1;
$exo5->exoName = "squatts";
$exo5->nbrSeries = 4;
$exo5->nbrReps = 12;
$exo5->tpsRepos = "1,30";

$exo6 = new SingleExo();
$exo6->exoId = 2;
$exo6->exoName = "squatts";
$exo6->nbrSeries = 4;
$exo6->nbrReps = 12;
$exo6->tpsRepos = "1,30";

$exo7 = new SingleExo();
$exo7->exoId = 3;
$exo7->exoName = "squatts";
$exo7->nbrSeries = 4;
$exo7->nbrReps = 12;
$exo7->tpsRepos = "1,30";

$exo8 = new SingleExo();
$exo8->exoId = 2;
$exo8->exoName = "squatts";
$exo8->nbrSeries = 4;
$exo8->nbrReps = 12;
$exo8->tpsRepos = "1,30";

$train2 = new Training();
$train2->userId = $userRaph;
$train2->creationDate = time();
$train2->category = "half-body";
$train2->title = "dos-pecs-bras";
$train2->exo1 = $exo5;
$train2->exo2 = $exo6;
$train2->exo3 = $exo7;
$train2->exo4 = $exo8;
$train2->urlImg = "https://cdn.pixabay.com/photo/2014/10/22/17/25/stretching-498256_960_720.jpg";

//__fin train 2______________________//

$items = array($train1, $train2, $train1, $train2, $train1, $train2, $train1, $train2, $train1, $train2, $train1, $train2);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <title>Shapes&Friends | Trainings </title>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--HEADER-->
    <header>
        <div class="jumbotron">
            <div class="jumb-content px-5">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Partage un entraînement</a>
            </div>
        </div>
    </header>

    <!--CORPS DE PAGE-->
    <div class="pageBody">
        <div class="title-row text-center p-4">
            <h2>Parcourir les entraînements</h2>
        </div>

        <!--cards zone-->
        <div class="row w-75 mx-auto">

            <?php
            $elementNumber = 0;
            foreach ($items as $item) {
                if ($elementNumber % 3 == 0 && $elementNumber > 0) {
                    echo '</div><div class="row w-75 mx-auto">';
                }
            ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $item->urlImg; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->title; ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <?php
                $elementNumber++;
            }
            ?>

            <!--fin cards zone-->
        </div>

        <!--fin cors de page-->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>