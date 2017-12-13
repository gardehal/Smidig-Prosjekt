<?php
    require 'connection.php';
    $statement1 = $connection->prepare('SELECT * FROM abonnement WHERE kunde_id = 16'); //statisk kunde
    require 'statement-execute-1.php'; 
?>

<link rel="stylesheet" href="css.css"/>

<div id="container">
    <div id="content">
        <h1>Abonnement</h1>
        <?php
            foreach ($events1 as $event) 
            {      
                require 'card.php';
                echo "<br><br><br><br><br><br><br><br><br><br><br>";
                $contentcounter++;
            }
            if($contentcounter == 0)
            {
                echo "Beklager! Vi fant ingen hendelser!";
            }
        ?>
    </div>
</div>