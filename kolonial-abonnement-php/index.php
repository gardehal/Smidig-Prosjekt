<?php
    require 'connection.php';
    $statement1 = $connection->prepare('SELECT * FROM abonnement ORDER BY kunde_id'); //statisk kunde
    require 'statement-execute-1.php'; 
?>

<link rel="stylesheet" href="css.css"/>

<div id="container">
    <div id="content">
        <h1>Abonnement</h1>
        <input type="button" onclick="location.href='insert-previous-day-list.php';" value="Nytt Abonnement" />
        <input type="button" onclick="location.href='slett-eksempel.php';" value="Slett Eksempel" />
        <br>
        
        <?php
            foreach ($events1 as $event) 
            {      
                require 'card.php';
                echo "<br><br>";
                $contentcounter++;
            }
            if($contentcounter == 0)
            {
                echo "Beklager! Vi fant ingen hendelser!";
            }
        ?>
    </div>
</div>