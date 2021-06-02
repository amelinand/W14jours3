<?php session_start()?>


<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="user.php">Utilisateur</a></li>
            
            <?php  if(isset($_SESSION['pseudo'])) : ?>
                <ul class="display">
                    <li class="none"><a>Bonjour <?= $_SESSION['pseudo'] ?></a>
                    <ul class="ghost">
                        <li><a href="./controllers/logout.php">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
            <?php else : ?>
                <li><a href="form.php">Inscription</a></li>
                <li><a href="log.php">Connexion</a></li>
            <?php endif ?>

        </ul>
    </nav>
</header>
