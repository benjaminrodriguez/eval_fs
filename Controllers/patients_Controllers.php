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
        $title = 'Accueil';
        $section = 'Accueil';
        require(dirname(__FILE__).'/../Views/patients_Views.php');
    }
    if (isset($_POST['nom_patient']) 
    && isset($_POST['prenom_patient'])
    && isset($_POST['adresse_patient'])
    && isset($_POST['cp_patient'])
    && isset($_POST['ville_patient'])
    && isset($_POST['email_patient'])
    && isset($_POST['date_de_naissance_patient'])
    && isset($_POST['telephone_patient'])
    && isset($_POST['sexe_patient']) 
    && isset($_POST['mode_de_vie_patient'])
    && isset($_POST['alimentation_patient'])
    && isset($_POST['type_patient']))
    {
        var_dump($_POST);
        ajouter_patient_INSERT($_POST['nom_patient'], $_POST['prenom_patient'], $_POST['adresse_patient'],
                               $_POST['cp_patient'], $_POST['ville_patient'], $_POST['email_patient'], 
                               $_POST['date_de_naissance_patient'],$_POST['telephone_patient'], $_POST['sexe_patient'], 
                               $_POST['mode_de_vie_patient'], $_POST['alimentation_patient'], $_POST['type_patient']);
    }
    

    


?>