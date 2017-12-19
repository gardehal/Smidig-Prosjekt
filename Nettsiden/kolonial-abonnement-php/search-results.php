<?php
    require 'require/connection.php';

    //Scrubbe og restriksjoner
    $getsearch = $_GET['searchbar'];
    //$vareid = filter_var($_POST['vare_id'], FILTER_SANITIZE_STRING);


    $statement1 = $connection->prepare('SELECT kunde_id, liste_navn, abonnement.liste_id, bestiling_id, leverings_dato, leverings_tidspunkt, intervall FROM abonnement 
    LEFT JOIN liste ON abonnement.liste_id=liste.liste_id
    WHERE kunde_id = "'.$getsearch.'"
    OR liste_navn LIKE "%'.$getsearch.'%"
    OR leverings_dato LIKE "%'.$getsearch.'%"
    OR leverings_tidspunkt LIKE "%'.$getsearch.'%"
    ORDER BY kunde_id, liste_id');
    require 'require/statement-execute-1.php';

    $statement2 = $connection->prepare('SELECT * FROM liste 
    WHERE liste_id = "'.$getsearch.'"
    OR liste_navn LIKE "%'.$getsearch.'%"
    ORDER BY liste_id DESC');
    require 'require/statement-execute-2.php';

    require '../HTML/header.html';
?>

<!--- PHP CSS (kan inkluderes i en header) --->
<link rel="stylesheet" href="require/css.css"/>

<div id="container">
    <div id="content">
        <h1> Viser søkeresultater for "<?= $getsearch ?>" </h1>
        <br>
        
        <h2>Abonnement</h2>
        <br>
        <?php
            foreach ($events1 as $event) 
            {   
                require 'crud/cards/subscription-card.php';
                echo "<br><br>";
                $contentcounter++;
            } 
            if($contentcounter == 0)
            {
                echo "Beklager! Vi fant ingen abonnement med $getsearch!";
            }
        ?>
        <hr>
        
        <h2>Lister</h2>
        <br>
        
        <?php
            foreach ($events2 as $event) 
            {   
                require 'crud/cards/list-card.php';
                echo "<br><br>";
                $contentcounter++;
            } 
            if($contentcounter == 0)
            {
                echo "Beklager! Vi fant ingen lister med $getsearch!";
            }
        ?>
    </div>
</div>

<?php
    //require 'footer.php';
?>