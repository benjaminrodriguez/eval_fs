<?php
    // ----------------------------------------------------------------------------


    function connection_SELECT($email)
    {
        $bdd = bdd();
        $pseudo = $bdd->prepare('SELECT *
                                FROM user
                                WHERE email = ?;
                                ');
        $pseudo->execute(array($email));
        $resultat = $pseudo->fetch();
        return $resultat;
    }

    //--------------------------------------------------------------------------------


    function medecin_select() {
        $bdd = bdd();
        $qcm = $bdd->prepare('SELECT *
                              FROM user;');
        $qcm->execute(array());
        while ($donnees = $qcm->fetch())
        {
            echo $donnees['profession']. " prénom : " .$donnees['prenom']. " nom : ".$donnees['nom']. " contact : ".$donnees['email'];
        }
        $qcm->closeCursor();
    }
    // ----------------------------------------------------------------------------

    

    function liste_patient_SELECT()
    {
        $bdd = bdd();
        $qcm = $bdd->prepare('SELECT *
        FROM patient
        ;');
        $qcm->execute(array());
        while ($donnees = $qcm->fetch())
            {
                echo "<li> <ul>nom " .$donnees['nom']. "</ul><ul> prénom : " .$donnees['prenom']. " </ul><ul> adresse : " 
                .$donnees['adresse']. "</ul><ul>code postal : " .$donnees['code_postal']. " </ul><ul>ville : " .$donnees['ville'].
                " </ul><ul> email : " .$donnees['email']. "</ul><ul> date de naissance : " .$donnees['date_de_naissance'].
                "</ul><ul> téléphone : " .$donnees['telephone']. " </ul><ul> sexe : " .$donnees['sexe'].
                "</ul><ul> mode de vie : " .$donnees['mode_de_vie']. "</ul><ul> alimentation : " .$donnees['alimentation'].
                "</ul><ul> type : " .$donnees['type']. "</ul>"

                ;
            }
    
    }
    
    //-------------------------------------------------------------------------------

    function password_SELECT($id)
    {
        $bdd = bdd();
        $req = $bdd->prepare(' SELECT password
                                FROM user
                                WHERE id = ?
                                LIMIT 1;
                            ');
        $req->execute(array($id));
        $donnees = $req->fetch();
        return $donnees;
    }

    //--------------------------------------------------------------------------------

    

?>

