<?php 
session_start();
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
?>
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
    <script src="../js/sendresult.js" defer></script>
    <!-- <script src="../js/script.js"></script> -->

</head>
<body>
    <main>
        <div class="filler"></div>
        <section class="containerhartje">
                <h1 class="result-header">Hier had jouw foto tussen kunnen staan.</h1>
                    <div class="foto-holder foto-holder-send"><img src="../uploads/<?= $_SESSION['photo'] ?>"></div>

                    <div class="carousel"></div>
                        <button class="doorgaan">Doorgaan</button>
            </div>
            <div class="envelope-container">
                <div class="envelope-top">
                    <div class="tri-top"></div>
                    <div class="tri-bottom"></div>
                </div>
                <div class="envelope-overlay">
                    <div class="envelope-overlay-left"></div>
                    <div class="envelope-overlay-right"></div>
                </div>
                <div class="envelope"></div>
            </div>
        </section>
        <div class="filler"></div>
        <div class="animation-overlay"></div>
    </main>
</body>
</html>