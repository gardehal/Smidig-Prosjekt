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
            
            <input type="number" id="kunde-id" name="kunde-id" placeholder="Kunde ID">
            <input type="number" id="liste-id" name="liste-id" placeholder="Liste ID">
            
            <div id="dropdown-order">
                <button type="button" id="dropdown-btn" class="" onclick="toggleDropdown()">Endre levering</button>
                
                <div id="dropdown-content" style="display: none;"> <!--- display:none virker ikke i CSS... --->
                    <!--- Dropdown tid --->
                    <select name="leveringstid">
                        <option value="<?= $event['leverings_tidspunkt'] ?>" selected><?= $event['leverings_tidspunkt'] ?></option>
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
                    <input type="number" id="intervall" name="intervall" value="<?= $event['intervall'] ?>">

                    <!--- Leveringsdato --->
                    <input type="date" id="leveringsdato" name="leveringsdato" value="<?= $event['leverings_dato'] ?>">
                </div>
            </div>
                
            <!--- Kjøp listen (burde gå til Handlekurv) --->
            <button type="button" id="sub-list-btn">Legg til abonnement</button>
        </form>
        
    </div>
</div>

<?php
    //require 'footer.php';
?>