<?php
    require '../require/connection.php';

    //Scrubbe og restriksjoner
    $listenavn = filter_var($_POST['listenavn'], FILTER_SANITIZE_STRING);
    $antallvarer = filter_var($_POST['antall_varer'], FILTER_SANITIZE_STRING);
    $totalpris = filter_var($_POST['total_pris'], FILTER_SANITIZE_STRING);
    $vareid = filter_var($_POST['vare_id'], FILTER_SANITIZE_STRING);

    if(empty($listenavn))
    {
        $listenavn = "Liste uten navn";
    }
    if(empty($antallvarer))
    {
        $antallvarer = 0;
    }
    if(empty($totalpris))
    {
        $totalpris = 0;
    }
    if(empty($vareid))
    {
        $vareid = 0;
    }

    $statement1 = $connection->prepare('INSERT INTO liste VALUES (
    null,
    "'.$listenavn.'",
    "'.$antallvarer.'",
    "'.$totalpris.'",
    "'.$vareid.'")');

    $statement1->execute();

    header('Location: ../index.php');
    exit;