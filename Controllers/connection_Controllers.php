<?php

    if(isset($_POST['email']) && isset($_POST['password'])) 
    {
        /*
        // Ma clé privée
        $secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";

        // Paramètre renvoyé par le recaptcha
        $response = $_POST['g-recaptcha-response'];
        
        // On récupère l'IP de l'utilisateur
        $remoteip = $_SERVER['REMOTE_ADDR'];
        
        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
            . $secret
            . "&response=" . $response
            . "&remoteip=" . $remoteip ;
        
        $decode = json_decode(file_get_contents($api_url), true);*/
        
        //if ($decode['success'] == true) 
        //{
            // C'est un humain
            
            //RECUPERE LES DONNEES DE L'USER
            $data = connection_SELECT($_POST['email']);
            sleep(1);

            if (password_verify($_POST['password'], $data['password']))
            { 
                // ON DETRUIT LE POST PASSWORD
                unset($_POST['password']);

                // STOCKAGE VARIABLE SESSION
                $_SESSION['id'] = intval($data['id']);
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['prenom'] = $data['prenom'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['profession'] = $data['profession'];
                $_SESSION['profil_picture'] = $data['profil_picture'];
               
                header('Location: index.php?page=home');
                exit;
            } 
            else if (!password_verify($_POST['password'], $data['password']))
            {
                require(dirname(__FILE__).'/../Public/js/erreur_auth.js');
            }
        //}
        //else 
        //{
            // C'est un robot ou le code de vérification est incorrecte
            //header('Location: index.php?page=connection');
       // }
    }  
    require(dirname(__FILE__).'/../Views/connection_Views.php');
?>