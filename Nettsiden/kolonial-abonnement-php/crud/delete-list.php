<?php
    require '../require/connection.php';

    $statement1 = $connection->prepare('DELETE FROM liste WHERE liste_id = "'.$_POST['slett_liste_id'].'"');

    $statement1->execute();

    header('Location: ../admin.php');
    exit;