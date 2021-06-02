<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/accueil.css">
    <title>Forum</title>
</head>

<body>
 <?php require './templates/header.php' ?>
    <!-- on pourrait l'utiliser comme rappel de nav bar pour le rappeler sur toutes les pages que si le fichier est en .php  -->
    <main classe="acces">
        <?php  if(isset($_SESSION['pseudo'])) : ?>
            <h1>Bienvenue sur notre Forum  <?= $_SESSION['pseudo']?> ! </h1>
        <?php else : ?>   
        <h1>Vous ne passerez pas!</h1>
        <h1>Merci de vous Connecter'</h1>
        <?php endif ?>
    </main>
</body>

</html>