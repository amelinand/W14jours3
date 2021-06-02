<?php


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/log.css">
    <link rel="stylesheet" href="./css/formSend.css">
    <title>Document</title>
</head>
<body>
    <?php require './templates/header.php' ?>
    <main>
        <h1>Bienvenue parmi nous, <?=$_POST['name']?> ! </h1>
        <h2>Vous avez  <?=$_POST['age'] ?> ans</h2>
        <h2>Votre Couleur préférer est <?=$_POST['color'] ?></h2>
        <h2>Vous pouvez désormais vous Connecter !</h2>
        <?php
        $n = $_POST['name'];
        $a = $_POST['age'];
        $c = $_POST['color']
        ?>
    </main>
</body>
</html>