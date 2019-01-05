<?php

    //var_dump($_SESSION);
    //SI L'UTILISATEUR N'EST PAS CONNECTE, IL EST REDIRIGER VERS LA PAGE DE CONNEXION
    if (!isset($_SESSION['email']))
    {
        header('Location: index.php?page=connection');
        exit;
    } 

    
    
    if (!isset($_POST['menu']))
    {
        $datas = last_deck_play_SELECT($_SESSION['id']);

        $title = 'Accueil';
        $section = 'Accueil';
        require(dirname(__FILE__).'/../Views/fiches_Views.php');
    }
    else if ($_POST['menu'] === 'fiche')
    {
        header('Location: index.php?page=fiche');
        exit;
    }
        else if ($_POST['menu'] === 'patient')
    {
        header('Location: index.php?page=patient');
        exit;
    }
        else if ($_POST['menu'] === 'inventory')
    {
        header('Location: index.php?page=inventory');
        exit;
    }
        else if ($_POST['menu'] === 'store')
    {
        header('Location: index.php?page=store');
        exit;
    }
        else if ($_POST['menu'] === 'forum')
    {
        header('Location: index.php?page=forum');
        exit;
    }

    


?>