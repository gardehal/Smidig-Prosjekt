<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="../CSS/kolonial.css">
<link rel="stylesheet" type="text/css" href="../CSS/reset.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
<title>Kolonial</title>

</head>
<body>

    <div id="header">
        
        <div id="search">
            <img id="logo" src="../Bilder/kolonial-logo-transparent.png">
            <div id="hamburger-menu-icon" onclick="toggleDropdown()">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
            <ul id="dropdownliste">
                <li><a class="dropdown-link" href="varer">Varer</a></li>
                <li><a class="dropdown-link" href="oppskrifter">Oppskrifter</a></li>
                <li><a class="dropdown-link" href="lagkonto">Lag Konto</a></li>
                <li><a class="dropdown-link" href="loggin">Logg in</a></li>
            </ul>
            <span class="text"></span>
            <form id="" action="search-results.php" method="GET" style="display: inline-block;">
                <input name="searchbar" placeholder="Søk i 6000 varer">
                <!---<input id="search-button" type="submit" value="Søk">--->
            </form>
        
    </div>
        <nav>
        <ul id="ul">
            <img id="varer" src="../Bilder/icons8-ingredients-100.png">
            <li><a class="nav-link" href="varer">Varer</a></li>
            <img id="oppskrifter" src="../Bilder/icons8-check-100.png">
            <li><a class="nav-link" href="oppskrifter">Oppskrifter</a></li>
            <li><a id="lagkonto" class="nav-link" href="lagkonto">Lag Konto</a></li>
            <li><a class="nav-link" href="loggin">Logg in</a></li>
            <img id="shopping" src="../Bilder/shoppingcart.png">
        </ul>
    </nav>

</div>
<script>
    function toggleDropdown() //ser ikke ut til å reagere på riktig element, ID burde ikke virke, men kanskje class gjør. Elementer utenfra som contentcounter (se index.php) henter bare det siste elementet. Prøve array?
        {
            var x = document.getElementById("dropdownliste");
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
</body>
</html>