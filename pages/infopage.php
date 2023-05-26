<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.6.1.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
    <main>
        <div class="filler"></div>
        <section class="containerhartje">
            <div class="content">
            <div class="infoPageHeader">
                <ul  class="navbar">
                    <li><a href="https://www.sterkhuis.nl"><img src="../img/SH_logo-academie.png"></a></li>
                    <li><a href="https://www.sterkhuis.nl">Home</a></li>
                    <li><a href="https://www.sterkhuis.nl/ervaringsverhalen">Help</a></li>
                    <li><a href="https://www.sterkhuis.nl/contact/">Contact</a></li>
                </ul>
            </div>
                <div id="top-content">
                    <div id="info-top-bg-img"></div>
                    <div id="top-text-content">
                        <h1>Wat is sexting?</h1>
                        <p>Sexting: Het versturen of krijgen van een naaktfoto, spannende video of erotische tekstberichten. Via Whatsapp of andere social media. Hier is een poll over jongeren tussen de 12 en 17 jaar.</p>
                    </div>
                </div>
                <div class="stats">
                    <div class="diagram-section-1">
                        <div class="diagram-white"><p>23%</p><p>Lingerie of naakt foto ontvangen.</p></div>
                        <div class="diagram-blue"><p>24.5%</p><p>Meiden die sexts hebben ontvangen.</p></div>
                        <div class="diagram-pink"><p>21.6%</p><p>Jongens die sexts hebben ontvangen.</p></div>
                    </div>
                    <div class="diagram-section-2">
                        <div class="diagram-white"><p>7.1%</p><p>Meiden die zelf eens een naaktfoto hebben gestuud.</p></div>
                        <div class="diagram-blue"><p>5.5.%</p><p>Jongens die zelf eens een naaktfoto hebben gestuud.</p></div>
                    </div>
                    <div class="diagram-section-3">
                        <div class="diagram-white"><p>3.7%</p><p>Meiden die sexts hebben verzonden.</p></div>
                        <div class="diagram-blue"><p>3.2%</p><p>Jongens die sexts hebben verzonden.</p></div>
                    </div>
                </div>
                <div class="BottomContent">
                    <div class="information">
                        <h1>Toch is sexting niet altijd leuk!</h1>
                        <p>Elk jaar pleegt er een jongere zelfmoord omdat er een naaktfoto is doorgestuurd. Dit kan heel schamend zijn en kan veel problemen veroorzaken.Vele worden gepest en zien uiteindelijk geen uitweg meer.
                         Overkomt jou dit ook? Zoek naar hulp!</p>
                    </div>
                    <div id="info-bottom-bg-img"></div>
                </div>
            </div>
        </section>
        <div class="filler"></div>
    </main>
</body>
</html>
<?php 
session_start();
if(isset($_SESSION['photo'])){
    unlink('../uploads/' . $_SESSION['photo']);
}
?>