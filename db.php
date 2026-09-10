<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();   

$host = 'localhost';
$database = 'crud_php';

$conn = new mysqli($host, $_ENV["DB_USER"], $_ENV["DB_PASSWORD"], $database);

if ($conn->connect_error)
    {
        die("Could not connect to the database. Error: {$conn->connect_error}");
    }