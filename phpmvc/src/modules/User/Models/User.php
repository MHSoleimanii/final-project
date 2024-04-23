<?php

namespace App\modules\User\Models;

class User
{
    public $name;
    public $publishedYear;

    public function __construct($name, $publishedYear)
    {
        $this->name = $name;
        $this->publishedYear = $publishedYear;
    }
}