<div id="card">
    <div id="display">
        <p>
            <!--- Dele opp listen i seksjoner så det ser bedre ut (virker ikke)
            <div class="listenavn-space" style="position: absolute; width: 200px; left: 0;">
                Kunde ID: <?= $event['kunde_id'] ?>
            </div> |
            <div class="listenavn-space" style="position: absolute; width: 200px; left: 0;">
                <?= $event['liste_navn'] ?> ID: <?= $event['liste_id'] ?>
            </div> |
            <div class="listenavn-space" style="position: absolute; width: 200px; left: 0;">
                Leveringsdato: <?= $event['leverings_dato'] ?>
            </div> --->
            
            Kunde ID: <?= $event['kunde_id'] ?> |
            <?= $event['liste_navn'] ?> ID: <?= $event['liste_id'] ?> |
            Leveringsdato: <?= $event['leverings_dato'] ?>
        </p>
    </div>
    
    <div id="select" style="position: absolute; width: 30%; top: -5px;">
        <form class="card-form" action="crud/update-subscription.php?id=<?= $event['kunde_id'] ?>" method="post">
            <div id="dropdown-order">
                <!--- Endre abonnement --->   
                <button type="button" id="dropdown-btn" class="" onclick="toggleDropdown<?= $contentcounter ?>()" style="right: 55%;">Endre levering</button>
                
                <div id="dropdown-content<?= $contentcounter ?>" class="dropdown-content" style="position: absolute; display: none; top: 23px; left: 25%;">
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
                    <select name="leveringsdato">
                        <option selected disabled>Leveringsdag</option>
                        <option value="2017-12-04">Mandag</option>
                        <option value="2017-12-05">Tirsdag</option>
                        <option value="2017-12-06">Onsdag</option>
                        <option value="2017-12-07">Torsdag</option>
                        <option value="2017-12-08">Fredag</option>
                    </select>
                    
                    <!--- Oppdater dato etc. --->
                    <button type="button" id="update-list-btn" onclick="submit();">Oppdater</button>
                </div>
            </div>
                
            <!--- Kjøp listen (burde gå til Handlekurv) --->
            <button type="button" id="buy-list-btn" style="right: 20%;">Kjøp listen</button>

            <!--- Id-er ---> 
            <input type="hidden" name="edit_kunde_id" value="<?= $event['kunde_id'] ?>"> 
            <input type="hidden" name="edit_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
        
        <!--- Slett abonnement --->
        <form class="card-form" action="crud/delete-subscription.php" method="post" style="position: absolute; right: 0;">
            <input type="button" id="delete-btn" onclick="submit();" value="Slett">
            <input type="hidden" name="slett_kunde_id" value="<?= $event['kunde_id'] ?>">
            <input type="hidden" name="slett_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
    </div>
</div>

<script>
    function toggleDropdown<?= $contentcounter ?>() //ser ikke ut til å reagere på riktig element, ID burde ikke virke, men kanskje class gjør. Elementer utenfra som contentcounter (se index.php) henter bare det siste elementet. Prøve array?
        {            
            var x = document.getElementById("dropdown-content<?= $contentcounter ?>");
            if (x.style.display === "none") 
            {
                x.style.display = "block";
            } 
            else 
            {
                x.style.display = "none";
            }
        }
</script>