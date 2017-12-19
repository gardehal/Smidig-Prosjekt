<?php
    require '../require/connection.php';

    $statement1 = $connection->prepare('DELETE FROM abonnement WHERE kunde_id = "'.$_POST['slett_kunde_id'].'" AND liste_id = "'.$_POST['slett_liste_id'].'"');

    $statement1->execute();

    header('Location: ../abonnement.php');
    exit;