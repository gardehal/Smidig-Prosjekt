<div id="card">
    <div id="display">
        <p>
            Kunde ID: <?= $event['kunde_id'] ?> |
            Liste ID: <?= $event['liste_id'] ?> |
            Bestillings ID: <?= $event['bestiling_id'] ?>
        </p>
    </div>
    
    <form class="" action="update-subscription.php?id=<?= $event['kunde_id'] ?>" method="post">
        <div id="select">
            <!--- Dropdown tid --->
            <select name="leveringstid" onChange='submit();'>
                <!-- TODO: enum eller selected shit = shit --->
                <option value="<?= $event['leverings_tidspunkt'] ?>" disabled selected><?= $event['leverings_tidspunkt'] ?></option>
                <option value="1">07-09</option>
                <option value="2">08-10</option>
                <option value="3">08-11</option>
                <option value="4">09-10</option>
                <option value="5">09-11</option>
                <option value="6">09-12</option>
                <option value="7">09-14</option>
                <option value="8">14-16</option>
                <option value="9">16-19</option>
            </select>

            <!--- Intervall --->
            <input type="number" id="intervall" name="intervall" onChange='submit();' value="<?= $event['intervall'] ?>">

            <!--- Leveringsdato --->
            <input type="date" id="leveringsdato" name="leveringsdato" onChange='submit();' value="<?= $event['leverings_dato'] ?>">

            <button type="button">Kjøp listen</button>


            <input type="hidden" name="edit_kunde_id" value="<?= $event['kunde_id'] ?>"> 
            <input type="hidden" name="edit_liste_id" value="<?= $event['liste_id'] ?>">
        </div>
    </form>
</div>