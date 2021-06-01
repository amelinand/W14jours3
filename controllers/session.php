<?php

session_start();

require ('users.php');



foreach($users as $value){
    if($_POST === $value){
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('Location: ../index.php');
    }
}
if( !isset($_SESSION['pseudo']) ){
    header('Location: ../log.php');
}




