<?php

session_start(); // Démarrer la session utilisateur

if ((count($_GET) != 0) && !(isset($_GET['control']) && isset($_GET['action'])))
    require ('./view/error404.tpl'); //cas d'un appel à index.php avec des paramètres incorrects    
//appel à la page d'erreur 404

else {
    if (isset($_GET['control']) && isset($_GET['action'])) {
        $control = $_GET['control'];   //cas d'un appel à index.php
        $action = $_GET['action']; //avec les 2 paramètres controle et action

        require ('./control/' . $control . '.php');
        $action();
    } else {
        require ('./view/home.tpl');
    }
}
?>
