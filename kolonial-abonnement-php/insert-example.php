<?php
require 'connection.php';

    //todo_id, todo_check, todo_todo
    $statement1 = $connection->prepare('INSERT INTO abonnement VALUES (
    0, 
    0,
    0,
    "2017-12-01",
    07-09,
    1)');

    $statement1->execute();

    header('Location: index.php');
    exit;