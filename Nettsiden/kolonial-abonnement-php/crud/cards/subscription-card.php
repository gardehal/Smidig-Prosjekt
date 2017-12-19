<div id="card">
    <div id="display">
        <p>
            Kunde ID: <?= $event['kunde_id'] ?> |
            <?= $event['liste_navn'] ?> ID: <?= $event['liste_id'] ?> |
            Leveringsdato: <?= $event['leverings_dato'] ?>
        </p>
    </div>
    
    <div id="select" style="position: absolute; width: 30%; top: -5px;">
        <!--- Slett abonnement --->
        <form class="card-form" action="crud/delete-subscription.php" method="post" style="position: absolute;">
            <input type="button" id="delete-btn" onclick="submit();" value="Slett">
            <input type="hidden" name="slett_kunde_id" value="<?= $event['kunde_id'] ?>">
            <input type="hidden" name="slett_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
        
        <form class="card-form" action="crud/update-subscription.php?id=<?= $event['kunde_id'] ?>" method="post">
            <div id="dropdown-order">
                <!--- Endre abonnement --->   
                <button type="button" id="dropdown-btn" class="" onclick="toggleDropdown()" style="left: 25%;">Endre levering</button>
                
                <div id="dropdown-content" style="display:none; left: 25%;"> <!--- display:none virker ikke i CSS... --->
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
                    
                    <!--- Oppdater dato etc. --->
                    <button type="button" id="update-list-btn" onclick="submit();">Oppdater</button>
                </div>
            </div>
                
            <!--- Kjøp listen (burde gå til Handlekurv) --->
            <button type="button" id="buy-list-btn">Kjøp listen</button>

            <!--- Id-er ---> 
            <input type="hidden" name="edit_kunde_id" value="<?= $event['kunde_id'] ?>"> 
            <input type="hidden" name="edit_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
    </div>
</div>

<script>
    function toggleDropdown() //ser ikke ut til å reagere på riktig element, ID burde ikke virke, men kanskje class gjør. Elementer utenfra som contentcounter (se index.php) henter bare det siste elementet. Prøve array?
        {
            var x = document.getElementById("dropdown-content");
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