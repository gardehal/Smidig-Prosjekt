<div id="card">
    <div id="display">
        <div class="listenavn-space" style="position: absolute; width: 150px; left: 0;">
            <?= $event['liste_navn'] ?>
        </div>
        <div class="listenavn-space" style="position: absolute; width: 50px; left: 150px;">
            | ID: <?= $event['liste_id'] ?> |
        </div>
        <div class="listenavn-space" style="position: absolute; width: 150px; left: 200px;">
            Antall varer: <?= $event['liste_vareantall'] ?>
        </div>
        <div class="listenavn-space" style="position: absolute; width: 200px; left: 350px;">
            | Total pris: <?= $event['liste_pris'] ?> kr
        </div>  
    </div>
    
    <div id="select" style="position: absolute; width: 30%; top: -5px;">        
        <!--- Slett liste --->
        <div style="position: absolute; right: 0;">
            <form class="" action="crud/delete-list.php" method="post" style="right: 0;">
                <input type="button" onclick="submit();" value="Slett" style="right: 0;">
                <input type="hidden" name="slett_liste_id" value="<?= $event['liste_id'] ?>">
            </form>
        </div>
        
        <!--- Kjøp listen (burde gå til Handlekurv) --->
        <button type="button" id="buy-list-btn" style="top: 0; right: 20%;">Kjøp listen</button>
    </div>
</div>