<?php

namespace Entity;

use ludk\Utils\Serializer;

class User
{
    public $id;
    public $mail;
    public $nickname;
    public $password;

    use Serializer;
}
