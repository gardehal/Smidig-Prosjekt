<div id="card">
    <div id="display">
        <p>
            Kunde ID: <?= $event['kunde_id'] ?> |
            Liste ID: <?= $event['liste_id'] ?> |
            Bestillings ID: <?= $event['bestiling_id'] ?>
        </p>
    </div>
    
    <div id="select">
        <form class="" action="update-subscription.php?id=<?= $event['kunde_id'] ?>" method="post">
            <!--- Dropdown tid --->
            <select name="leveringstid">
                <!-- TODO: enum eller selected shit = shit --->
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
            <button type="button" id="update-list-btn" name="update-list-btn" onclick="submit();">Oppdater</button>
            <!--- Kjø lsiten (burde gå til Handlekurv) --->
            <button type="button" id="buy-list-btn" name="buy-list-btn">Kjøp listen</button>


            <input type="hidden" name="edit_kunde_id" value="<?= $event['kunde_id'] ?>"> 
            <input type="hidden" name="edit_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
    </div>
</div>