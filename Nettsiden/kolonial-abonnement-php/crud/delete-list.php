<?php
    require '../require/connection.php';

    //Scrubbe og restriksjoner
    $slettlisteid = filter_var($_POST['slett_liste_id'], FILTER_SANITIZE_STRING);

    $statement1 = $connection->prepare('DELETE FROM liste WHERE liste_id = "'.$slettlisteid.'"');

    $statement1->execute();

    header('Location: ../admin.php');
    exit;