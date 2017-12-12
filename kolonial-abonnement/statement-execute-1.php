<?php
$statement1->execute();
$events1 = [];

while($row1 = $statement1->fetch(PDO::FETCH_ASSOC)) 
{
    $events1[] = $row1;
}  