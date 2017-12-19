<!DOCTYPE html>

<?php
    require "../HTML/header.html";
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/meyers-reset.css">
    <link type="text/css" rel="stylesheet" href="css/infostyle.css">


    <title>Kolonial - Abonnement</title>


</head>

<body>


    <!-- MAIN PAGE BANNER START--->
    <div id="banner" class="banner-responsive">

        <div id="banner-txt-wrapper">
            <h1 id="banner-txt">Abonnér på varer.</h1>
        </div>

    </div>
    <!-- MAIN PAGE BANNER END --->


    <!-- MAIN PAGE CONTAINER START --->
    <div class="container">


        <!-- MAIN PAGE CONTENT START --->

        <!-- Informasjonstekst -->
        <article class="info-box">


            <div id="info-wrapper">
                <h3 id="subscription-title" class="info-txt">Ved å abonnere på dagligvarer du bruker regelmessing, trenger du aldri mer å bekymre deg for å glemme viktige varer!</h3>
                <p id="subscription-info" class="info-txt">Dette kan for eksempel være bleier, vaskemiddel, smør eller melk. <br><br>Du kan selv velge hvilke varer du vil abonnere på, hvor ofte og hvor mye. Det er ingen bindingstid og du kan avslutte abonnementet når som helst.<br><br>Abonnement kan oppretter i Dine lister.</p>

                <input class="btn" id="btn-info-til-liste" type="button" onclick="location.href='../kolonial-abonnement-php/abonnement.php';" value="Gå til dine lister">
            </div>


        </article>

        <!-- MAIN PAGE CONTENT END --->

    </div>
    <!-- MAIN PAGE CONTAINER END --->



</body>

</html>
