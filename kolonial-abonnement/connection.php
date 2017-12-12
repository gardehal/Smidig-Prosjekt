<?php

$host = 'localhost';
$port = 8889;
$username = 'root';
$password = 'root';
$name = 'kolonial_abonnement';

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password);