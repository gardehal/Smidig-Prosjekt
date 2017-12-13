<?php
    require 'connection.php';
    $statement1 = $connection->prepare('SELECT * FROM abonoment');
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
                echo "<br>";
                $contentcounter++;
            }
            if($contentcounter == 0)
            {
                echo "Beklager! Vi fant ingen hendelser!";
            }
        ?>
    </div>
</div>