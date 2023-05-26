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
            <div class="hartjebg"></div>
            <form action="" id="form" method="post" enctype="multipart/form-data">
                <label for="photo" id="image-container">Upload selfie hier.</label>
                <input type="file"
                    id="photo" name="photo"
                    accept="image/png, image/jpeg, image/jpg, image/wepb" title="&nbsp;" color="transparent"/>
                    <?php
                        session_start();
                        if(isset($_SESSION["error"])) {
                            echo '<p id="error">' . $_SESSION["error"] . '</p>';
                        }
                    ?>
                    <div id="upload-btn-container">
                        <input type="submit" value="&cross; Verwijderen" name="verwijderd" id="stop">
                        <input type="submit" value="Verzenden &rarr;" name="verzenden" id="send">
                        <input type="submit" value="skip &rarr;" name="skip" id="skip">
                    </div>
                </form>
        </section>

        <div class="filler"></div>
    </main>
</body>
</html>
<!-- 
#fffeff 
#203261
#e30265
-->