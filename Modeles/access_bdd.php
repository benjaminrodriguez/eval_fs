<?php
    function bdd()
    {
        //CONNEXION A LA BDD
        try
        {
            $bdd = new PDO('mysql:host=localhost; dbname=Eval_fin; charset=utf8', 'root', 'toor');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
    }
?>