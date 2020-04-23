<?php

namespace Entity;

use Entity\User;

class Training
{
    public $id;
    public $creationDate;
    public $category;
    public $title;
    public $exo1;
    public $exo2;
    public $exo3;
    public $exo4;
    public $nbrSeries;
    public $nbrReps;
    public User $userId;
}
