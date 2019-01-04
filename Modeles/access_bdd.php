<?php
    function bdd()
    {
        global $bdd;
        //CONNEXION A LA BDD
        try
        {
            $bdd = new PDO('mysql:host=localhost; dbname=Eval_fin; charset=utf8', 'root', 'toor',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
    }
?>