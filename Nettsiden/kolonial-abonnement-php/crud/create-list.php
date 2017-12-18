<?php
require '../require/connection.php';

    $statement1 = $connection->prepare('INSERT INTO liste VALUES (
    null,
    "'.$_POST['listenavn'].'",
    "'.$_POST['antall-varer'].'",
    "'.$_POST['total-pris'].'",
    "'.$_POST['vare-id'].'")');

    $statement1->execute();

    header('Location: ../admin.php');
    exit;