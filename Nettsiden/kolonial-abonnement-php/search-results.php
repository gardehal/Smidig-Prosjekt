<?php
    require 'connection.php';
    $getsearch = $_GET['searchbar'];
    $statement1 = $connection->prepare('SELECT * FROM abonnement 
    WHERE kunde_id = "'.$getsearch.'"
    ORDER BY kunde_id DESC');
    require 'statement-execute-1.php';

    require '../HTML/header.html';
?>

<!--- PHP CSS (kan inkluderes i en header) --->
<link rel="stylesheet" href="css.css"/>

<div id="container">
    <div id="content">
        <h1> Viser resultater for <?= $getsearch ?> </h1>

        <?php
            foreach ($events1 as $event) 
            {   
                require 'card.php';
                echo "<br>";
                $searchcounter++;
            } 
            if($searchcounter == 0)
            {
                echo "Beklager! Vi fant ingen artikkler med $getsearch!";
            }
        ?>
    </div>
</div>

<?php
    //require 'footer.php';
?>