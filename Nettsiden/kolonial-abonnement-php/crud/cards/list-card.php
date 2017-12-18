<div id="card">
    <div id="display">
        <p>
            <?= $event['liste_navn'] ?> |
            Liste ID: <?= $event['liste_id'] ?> |
            Antall varer: <?= $event['liste_vareantall'] ?> |
            Total pris: <?= $event['liste_pris'] ?> kr
        </p>
    </div>
    
    <div id="select" style="position: absolute; width: 30%; top: -5px;">        
        <!--- Kjøp listen (burde gå til Handlekurv) --->
        <button type="button" id="buy-list-btn" style="top: 0;">Kjøp listen</button>
        
        <!--- Slett liste --->
        <form class="" action="crud/delete-list.php" method="post">
            <input type="button" onclick="submit();" value="Slett">
            <input type="hidden" name="slett_liste_id" value="<?= $event['liste_id'] ?>">
        </form>
    </div>
</div>