<?php



$users = [
    [
        'name' => 'Cara Dune',
        'color' => 'vert',
        'age' => 30
    ],
    [
        'name' => 'Moff Gideon',
        'color' => 'bleu',
        'age' => 50
    ],
    [
        'name' => 'Ahsoka Tano',
        'color' => 'rose',
        'age' => 20
    ],
    [
        'name' => 'Boba Fett',
        'color' => 'Jaune',
        'age' => 42
    ],
    [
        'name' => 'Bébé Yoda',
        'color' => 'Vert',
        'age' => 1
    ],
    [
        'name' => 'Greff Karga',
        'color' => 'Gris',
        'age' => 54
    ],
    [
        'name' => 'Bo-Katan',
        'color' => 'violet',
        'age' => 32
    ],
    [
        'name' => 'Fennec Shand',
        'color' => 'azure',
        'age' => 28
    ],
    [
        'name' => 'Cobb Vanth',
        'color' => 'bleu cerise',
        'age' => 50
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Personnages</title>
</head>

<body>
    <?php require './templates/header.php' ?>
    <main>
        <h1>Les Personnages</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Age</th>
            </tr>

            <?php foreach ($users as $user) : ?>

                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['color'] ?></td>
                    <td><?= $user['age'] ?> ans</td>
                </tr>

            <?php endforeach ?>

        </table>
    </main>
</body>

</html>