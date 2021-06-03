<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/log.css">
    <script src="js/log.js" defer></script>
    <title>Connection</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <main>

        <h1>Connecter-vous !</h1>
        <form action="./controllers/session.php" method="POST">
            <fieldset>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" name="pseudo"  value="" placeholder="Pénom" class="inset_input" required>
                </div>
                <?php if(isset($_GET['error'])) : ?>
                    <p style ='color:red'>Utilisateur ou mots de passe incorrect</p>
                    <?php endif ?>
                <div class="password">
                    <label for="password" >Mot de passe :</label>
                    <input id="password" type="password" name="password" placeholder="*******"class="inset_input" required>
                    <img src="../img/weiw.png" alt="" id='checkbox'>
                </div>
            </fieldset>
            <input type="submit" value="Envoyer !" class="blue_button" >
        </form>
    </main>
</body>
</html>