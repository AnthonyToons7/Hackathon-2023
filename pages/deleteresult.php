<?php 
session_start();
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
    <script src="../js/script.js"></script>
</head>
<body>
    <main>
        <div class="filler"></div>
        <section class="containerhartje">
                <h1 class="result-header">Ook al heb je de keuze gemaakt om de foto te verwijderen, bestaat hij alsnog op het internet.</h1>
                <button class="doorgaan">Doorgaan</button>
                <div class="foto-holder foto-holder-delete"><img src="../uploads/<?= $_SESSION['photo'] ?>"></div>
            <img src="../img/icons8-empty-trash-100.png" alt="" class="trash-can"/>
        </section>
        <div class="animation-overlay"></div>
        <div class="filler"></div>
    </main>
</body>
</html>