<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Inscription</title>
</head>

<body>
    <?php require './templates/header.php' ?>
    <main>
        <h1> Inscrirez-vous!</h1>
        <form action="formSend.php" method="POST">
            <fieldset>
                <div>
                    <label for="name">Nom:</label>
                    <input type="text" name="name" placeholder="Cara Dune" class="inset_input" required>
                </div>
                <div>
                    <label for="color"> Couleur:</label>
                    <input type="text" name="color" placeholder="bleu" class="inset_input" required>
                </div>
                <div>
                    <label for="age"> Age:</label>
                    <input type="number" min="0" name="age" placeholder="18" class="inset_input" required>
                </div>
                <div>
                    <Label for="password"> Password :</Label>
                    <input type="password" name="password" placeholder="*******" class="inset_input" required>
                </div>
                <div>
                    <label for="email"> Email :</label>
                    <input type="email" name="email" class="inset_input" placeholder="cara-dune@mandalorian.com" require>
                </div>
            </fieldset>
                <div>
                    <input type="submit" value="envoyer" class="blue_button" >
                </div>
                <div class="lien">
                <a class="lien" href="log.php">Connectez-vous!</a>
                </div>
        </form>
    </main>
</body>

</html>