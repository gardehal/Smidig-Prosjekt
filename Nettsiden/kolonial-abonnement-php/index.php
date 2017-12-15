<?php
    require 'connection.php';
    $statement1 = $connection->prepare('SELECT * FROM abonnement ORDER BY kunde_id');
    require 'statement-execute-1.php';

    require '../HTML/header.php';
?>

<link rel="stylesheet" href="css.css"/>

<div id="container">
    <div id="content">
        <h1>Abonnement</h1>
        
        <!--- Visning --->
        <input type="button" onclick="location.href='insert-example.php';" value="Nytt Eksempel">
        <input type="button" onclick="location.href='delete-example.php';" value="Slett Eksempel">
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
                echo "Beklager, vi fant ingen hendelser! Prøv å søke på en kunde ID.";
            }
        ?>
    </div>
</div>

<?php
    //require 'footer.php';
?>