<?php
$database = [
    'host'   => 'localhost',
    'dbname' => 'eitaa-login',
    'user'   => 'root',
    'pass'   => ''
];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['eitaa-login']}", $database['user'], $database['pass']);
} catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}