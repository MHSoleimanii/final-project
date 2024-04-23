<?php


function config($key)
{
    $config = include '../src/config/app.php';

    return $config[$key];
}