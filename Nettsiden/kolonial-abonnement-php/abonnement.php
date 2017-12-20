<?php
    require 'require/connection.php';
    $statement1 = $connection->prepare('SELECT kunde_id, liste_navn, abonnement.liste_id, bestiling_id, leverings_dato, leverings_tidspunkt, intervall FROM abonnement 
    LEFT JOIN liste ON abonnement.liste_id=liste.liste_id ORDER BY kunde_id, liste_id');
    require 'require/statement-execute-1.php';

    //require '../HTML/header.html';
    require '../header-vilde/header.html';
?>

<!--- PHP CSS (kan inkluderes i en header) --->
<link rel="stylesheet" href="require/css.css"/>

<div id="container">
    <div id="content">
        <h1 style="font-size: 30px; font-weight: bold;">Abonnement</h1>
        <br>
        
        <!--- Visning --->
        <input type="button" onclick="location.href='crud/insert-example.php';" value="Nytt Eksempel">
        <input type="button" onclick="location.href='crud/delete-example.php';" value="Slett Eksempel">
        <br><br>
        
        <?php
            foreach ($events1 as $event) 
            {      
                require 'crud/cards/subscription-card.php';
                echo "<br><br>";
                $contentcounter++;
            }
            if($contentcounter == 0)
            {
                echo "Beklager, vi fant ingen abonnementer! Prøv å søke på en kunde ID.";
            }
        ?>
    </div>
</div>
<?php
    //require 'footer.php';
?>