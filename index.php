<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/accueil.css">
    <title>Accueil</title>
</head>

<body>
 <?php require './templates/header.php' ?>
    <!-- on pourrait l'utiliser comme rappel de nav bar pour le rappeler sur toutes les pages que si le fichier est en .php  -->
    <main>
        <?php  if(isset($_SESSION['pseudo'])) : ?>
            <h1>Bienvenue <?= $_SESSION['pseudo']?></h1>
        <?php else : ?>   
        <h1>The Mandalorian!</h1>
        <?php endif ?>
    </main>
</body>

</html>