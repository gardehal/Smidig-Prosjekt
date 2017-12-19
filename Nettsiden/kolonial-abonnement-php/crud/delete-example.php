<?php
    require '../require/connection.php';

    $statement1 = $connection->prepare('DELETE FROM abonnement WHERE kunde_id = 0 AND liste_id = 0');

    $statement1->execute();

    header('Location: ../abonnement.php');
    exit;