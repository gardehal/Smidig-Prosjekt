<?php
require 'connection.php';

    //todo_id, todo_check, todo_todo
    $statement1 = $connection->prepare('DELETE FROM abonnement WHERE kunde_id = 0 AND liste_id = 0');

    $statement1->execute();

    header('Location: index.php');
    exit;