<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/log.css">
    <title>Connection</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <main>

        <h1>Connecter-vous !</h1>
        <form action="./controllers/session.php" method="POST">
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" name="pseudo"  value="" placeholder="Pénom" class="inset_input" required>
            </div>
            <div>
                <label for="password" >Mot de passe :</label>
                <input type="password" name="password" placeholder="*******"class="inset_input" required>
            </div>

        
            <input type="submit" value="Envoyer !" class="blue_button" >
        </form>
    </main>
</body>
</html>