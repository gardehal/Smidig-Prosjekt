<?php
require 'require/connection.php';
date_default_timezone_set('Europe/Oslo');
$date = date('Y-11-d H:i:s', time());

    //todo_id, todo_check, todo_todo
    $statement1 = $connection->prepare('INSERT INTO abonnement VALUES (
    99, 
    99,
    NULL,
    "'.$date.'",
    07-09,
    1)');

    $statement1->execute();

    header('Location: index.php');
    exit;