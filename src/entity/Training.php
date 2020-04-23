<?php

namespace Entity;

use Entity\User;

class Training
{
    public $id;
    public $creationDate;
    public $exerciceName;
    public $nbrSeries;
    public $nbrReps;
    public User $userId;
}
