<?php

namespace Entity;

use Entity\User;
use Entity\SingleExo;

class Training
{
    public User $user;
    public $trainId;
    public $creationDate;
    public $category;
    public $title;
    public $urlImg;
    public SingleExo $exo1;
    public SingleExo $exo2;
    public SingleExo $exo3;
    public SingleExo $exo4;
}