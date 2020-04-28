<?php

namespace Entity;

use Entity\Training;
use ludk\Utils\Serializer;

class SingleExo
{
    public $id;
    public $exoName;
    public $nbrSeries;
    public $nbrReps;
    public $tpsRepos;

    use Serializer;
}
