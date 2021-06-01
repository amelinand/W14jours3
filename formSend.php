<?php


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/log.css">
    <title>Document</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <main>
        <h1>Bienvenue parmi nous, <?=$_POST['name']?></h1>
        <p>Vous avez  <?=$_POST['age'] ?> ans</p>
        <p>Votre Couleur préférer est <?=$_POST['color'] ?></p>
        <?php
        $n = $_POST['name'];
        $a = $_POST['age'];
        $c = $_POST['color']
        ?>
    </main>
</body>
</html>