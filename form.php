<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/log.css">
    <title>Inscription</title>
</head>

<body>
    <?php require './templates/header.php' ?>
    <main>
        <h1>Vous inscrire</h1>
        <form action="formSend.php" method="POST">
            <fieldset>
                <div>
                    <label for="name">Nom:</label>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label for="color"> Couleur:</label>
                    <input type="text" name="color" required>
                </div>
                <div>
                    <label for="age"> Age:</label>
                    <input type="number" min="0" name="age" required>
                </div>
            </fieldset>
            <div>
                <input type="submit" value="envoyer">
            </div>
        </form>
    </main>
</body>

</html>