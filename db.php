<?php

$host = 'localhost';
$database = 'crud_php';

$conn = new mysqli($host, $_ENV["DB_USER"], $database, $_ENV["DB_PASSWORD"]);

if ($conn->connect_error)
    {
        die("Could not connect to the database. Error: {$conn->connect_error}");
    }