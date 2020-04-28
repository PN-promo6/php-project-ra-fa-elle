<?php

namespace Entity;

use Entity\User;
use Entity\SingleExo;
use ludk\Utils\Serializer;

class Training
{
    public User $user;
    public $id;
    public $category;
    public $title;
    public $urlImg;
    public SingleExo $exo1;
    public SingleExo $exo2;
    public SingleExo $exo3;
    public SingleExo $exo4;

    use Serializer;
}
