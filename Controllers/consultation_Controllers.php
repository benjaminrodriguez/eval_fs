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
        require(dirname(__FILE__).'/../Views/consultation_Views.php');
        //fiche_select($_SESSION['id']);
    }
    if (isset($_POST['title'])
    && isset($_POST['date'])
    && isset($_POST['time_debut'])
    && isset($_POST['time_fin'])
    && isset($_POST['description'])
    && isset($_POST['patient']))
    {
        var_dump($_POST);
        //die;
        // ON CREE UNE FICHE DE CONSULTATION VIDE
        nouvelle_fiche_consultation_INSERT("","","","","");

        // ON AJOUTE LA CONSULTATION
        nouvelle_consultation_INSERT($_POST['title'], $_POST['date'], $_POST['time_debut'], 
                                     $_POST['time_fin'], $_POST['description'], $_POST['patient'], $_SESSION['id']);
    }
    

    


?>