<?php
    require '../require/connection.php';
    $kundeid = $_POST['edit_kunde_id'];
    $listeid = $_POST['edit_liste_id'];

    //Scrubbe og restriksjoner
    $intervall = filter_var($_POST['intervall'], FILTER_SANITIZE_STRING);

    if($intervall < 1 || empty($intervall))
    {
        header('Location: javascript://history.go(-1)');
        exit;
    }

    $statement1 = $connection->prepare('UPDATE abonnement SET
    leverings_tidspunkt = "'.$_POST['leveringstid'].'", 
    leverings_dato = "'.$_POST['leveringsdato'].'", 
    intervall = "'.$intervall.'"
    WHERE kunde_id = "'.$kundeid.'" AND liste_id = "'.$listeid.'"');
    $statement1->execute();

    header('Location: ../abonnement.php');
    exit;