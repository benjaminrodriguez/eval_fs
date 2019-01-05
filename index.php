<?php
    session_start();

    // REQUIRE LES MODELES DE BDD
    require('Modeles/access_bdd.php');
    require('Modeles/modele_delete.php');
    require('Modeles/modele_insert.php');
    require('Modeles/modele_select.php');
    require('Modeles/modele_update.php');
    //require(dirname(__FILE__).'/./Controllers/php/token.php');


    if ($_GET['page'] == 'connection')
    {
        if(isset($_SESSION['email']))  header('Location: index.php?page=home');
        //connection();
        else require_once('Controllers/connection_Controllers.php');
    }
    else if ($_GET['page'] == 'inscription')
    {
        //inscription();
        require_once('Controllers/inscription_Controllers.php');
    }
    else if (isset($_GET['page']) && !empty($_GET['page']) && isset($_SESSION['id'])) 
    {
        if ($_GET['page'] == 'dc')
        {
            require_once('Controllers/php/disconnect.php');
        }
        else if ($_GET['page'] == 'home') 
        {
            //home();
            require_once('Controllers/home_Controllers.php');
        }
        else if ($_GET['page'] == 'consultation')
        {
            //my_profile();
            require_once('Controllers/consultation_Controllers.php');
        }        
        else if ($_GET['page'] == 'patients')
        {
            //cards_store();
            require_once('Controllers/patients_Controllers.php');
        }
        else
        {
            header('Location: index.php?page=connection');
            exit();
        }
    }
    else 
    {
        header('Location: index.php?page=connection');
        exit();
    }
?>