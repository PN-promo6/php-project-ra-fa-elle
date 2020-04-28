<?php
require __DIR__ . "/../vendor/autoload.php";

use Entity\User;
use Entity\Training;
use Entity\SingleExo;

use ludk\Persistence\ORM;

$orm = new ORM(__DIR__ . '/../Resources');
$trainingRepo = $orm->getRepository(Training::class);
$items = $trainingRepo->findAll();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <title>Shapes&Friends | Trainings </title>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark px-5">
        <a class="navbar-brand" href="#"><img src="img/logo.svg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Parcourir</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mes entraînements <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn search-btn my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--HEADER-->
    <header class="py-5">
        <div class="jumbotron w-75 mx-auto text-white">
            <div class="jumb-content px-5">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <a class="btn share-train-btn btn-lg" href="#" role="button">Partage un entraînement</a>
            </div>
        </div>
    </header>

    <!--CORPS DE PAGE-->
    <div class="container pageBody">
        <div class="title-row text-center p-4">
            <h2 class="text-uppercase text-white">Mes entraînements</h2>
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
                <div class="col-md-4 my-3">
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>