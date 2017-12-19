<?php
    require 'require/connection.php';
    $statement1 = $connection->prepare('SELECT * FROM abonnement ORDER BY kunde_id');
    require 'require/statement-execute-1.php';

    $statement2 = $connection->prepare('SELECT * FROM liste ORDER BY liste_id');
    require 'require/statement-execute-2.php';

    require '../HTML/header.html';
?>

<!--- PHP CSS (kan inkluderes i en header) --->
<link rel="stylesheet" href="require/css.css"/>

<div id="container">
    <div id="content">
        <h1>Admin</h1>
        <br>
        
        <!--- Visning --->
        <input type="button" onclick="location.href='crud/insert-example.php';" value="Nytt Eksempel">
        <input type="button" onclick="location.href='crud/delete-example.php';" value="Slett Eksempel">
        <br><br>
        
        <h2>Lag ny liste</h2>
        <form class="" action="crud/create-list.php" method="post">
            <input type="text" id="listenavn" name="listenavn" placeholder="Listenavn">
            <input type="number" id="antall-varer" name="antall-varer" placeholder="Antall varer">
            <input type="number" id="total-pris" name="total-pris" placeholder="Total pris">
            <input type="number" id="vare-id" name="vare-id" placeholder="Varer">
            <input type="button" id="lag-liste-btn" onclick="submit();" value="Lag liste">            
        </form>
        <br>
        
        <h2>Legg til abonnement</h2>
        <form class="" action="crud/create-subscription.php" method="post">
            <input type="number" id="kunde-id" name="create_kunde_id" placeholder="Kunde ID">
            <input type="number" id="liste-id" name="create_liste_id" placeholder="Liste ID">
            
            <!--- Dropdown tid --->
            <select name="create_leveringstid">
                <option value="07-09">07-09</option>
                <option value="08-10">08-10</option>
                <option value="08-11">08-11</option>
                <option value="09-10">09-10</option>
                <option value="09-11">09-11</option>
                <option value="09-12">09-12</option>
                <option value="09-14">09-14</option>
                <option value="14-16">14-16</option>
                <option value="16-19">16-19</option>
            </select>

            <!--- Intervall --->
            <input type="number" id="intervall" name="create_intervall" value="Intervall i uker">

            <!--- Leveringsdato --->
            <input type="date" id="leveringsdato" name="create_leveringsdato" value="">
                
            <button type="button" onclick="submit();">Legg til abonnement</button>
        </form>
        
        <br>
        <hr>
        
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