<?php
    require '../require/connection.php';

    $statement1 = $connection->prepare('DELETE FROM liste WHERE liste_id = "'.$_POST['slett_liste_id'].'"');
    $statement1->execute();

    $statement2 = $connection->prepare('DELETE FROM abonnement WHERE liste_id = "'.$_POST['slett_liste_id'].'"');
    $statement2->execute();

    header('Location: ../index.php');
    exit;