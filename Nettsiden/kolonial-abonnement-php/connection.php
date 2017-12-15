<?php

//Nettet

//Denne connection-headeren brukes for å koble siden til server og database.
//Eksempelet viser bruker: garale16_admin, passord: GA16AdminPassord, og databasenavn garale16_westguide. Endre disse tre variablene til ditt brukernavn, passord og databasenavn.
//OBS: ikke bruk personlig passord, lag nye

$host = 'tek.westerdals.no'; //Host, localhost for MAMP, tek.westerdals.no for server
$port = 3306; //3306 for cPanel, 8889 i localhost(eller hva du har i MAMP)
$username = 'garale16_admin'; //Brukernavn i cPanel 
$password = 'GA16AdminPassord'; //Passord for bruker i cPanel   
$name = 'garale16_abonnement'; //[westerdals-brukernavnet]_[Databasenavn]

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password); //Uendret

/*

//Lokalt

$host = 'localhost';
$port = 8889;
$username = 'root';
$password = 'root';
$name = 'kolonial_abonnement';

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password);

*/