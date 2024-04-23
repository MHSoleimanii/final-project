<?php

namespace App\modules\User\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $this->render('index');
    }
}