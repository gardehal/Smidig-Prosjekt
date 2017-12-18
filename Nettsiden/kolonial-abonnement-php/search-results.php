<?php
    require 'require/connection.php';
    $getsearch = $_GET['searchbar'];
    $statement1 = $connection->prepare('SELECT * FROM abonnement 
    WHERE kunde_id = "'.$getsearch.'"
    ORDER BY kunde_id DESC');
    require 'require/statement-execute-1.php';

    $statement2 = $connection->prepare('SELECT * FROM liste 
    WHERE liste_id = "'.$getsearch.'"
    ORDER BY liste_id DESC');
    require 'require/statement-execute-2.php';

    require '../HTML/header.html';
?>

<!--- PHP CSS (kan inkluderes i en header) --->
<link rel="stylesheet" href="require/css.css"/>

<div id="container">
    <div id="content">
        <h1> Viser resultater for <?= $getsearch ?> </h1>
        <br>
        
        <h2>Abonnement</h2>
        <br>
        <?php
            foreach ($events1 as $event) 
            {   
                require 'crud/cards/subscription-card.php';
                echo "<br>";
                $searchcounter++;
            } 
            if($searchcounter == 0)
            {
                echo "Beklager! Vi fant ingen abonnement med $getsearch!";
            }
        ?>
        <br>
        
        <h2>Lister</h2>
        <?php
            foreach ($events2 as $event) 
            {   
                require 'crud/cards/list-card.php';
                echo "<br>";
                $searchcounter++;
            } 
            if($searchcounter == 0)
            {
                echo "Beklager! Vi fant ingen lister med $getsearch!";
            }
        ?>
    </div>
</div>

<?php
    //require 'footer.php';
?>