<?php
    require '../require/connection.php';

    $statement1 = $connection->prepare('INSERT INTO abonnement VALUES (
    0, 
    0,
    0,
    "2017-12-01",
    07-09,
    1)');

    $statement1->execute();

    header('Location: ../admin.php');
    exit;