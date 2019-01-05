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
            echo "<li>".$donnees['profession']. " prénom : " .$donnees['prenom']. " nom : ".$donnees['nom']. " contact : ".$donnees['email']. "</li>";
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
                ?><li><a href='./index.php?page=patients&choix=liste_patient&id=<?=$donnees["id"]?>'>Prénom : <?=$donnees['prenom']?> Nom : <?=$donnees['nom']?></a></li> <?php
            }
    
    }
    function patient_SELECT($patient_id)
    {
        $bdd = bdd();
        $qcm = $bdd->prepare('SELECT *
        FROM patient
        WHERE patient.id = ?
        ;');
        $qcm->execute(array($patient_id));
        while ($donnees = $qcm->fetch())
            {
                echo "<li> <ul>nom : " .$donnees['nom']. "</ul><ul> prénom : " .$donnees['prenom']. " </ul><ul> adresse : " 
                .$donnees['adresse']. "</ul><ul>code postal : " .$donnees['code_postal']. " </ul><ul>ville : " .$donnees['ville'].
                " </ul><ul> email : " .$donnees['email']. "</ul><ul> date de naissance : " .$donnees['date_de_naissance'].
                "</ul><ul> téléphone : " .$donnees['telephone']. " </ul><ul> sexe : " .$donnees['sexe'].
                "</ul><ul> mode de vie : " .$donnees['mode_de_vie']. "</ul><ul> alimentation : " .$donnees['alimentation'].
                "</ul><ul> type : " .$donnees['type']. "</ul>"

                ;
            }
    
    }
    
    //-------------------------------------------------------------------------------

    function liste_consultations_SELECT($user_id)
    {
        $bdd = bdd();
        $qcm = $bdd->prepare('SELECT events.title AS title, events.date AS date, 
                              events.date_debut AS date_debut, events.date_fin AS date_fin, events.description AS description,
                              user.nom AS nom_medecin, patient.nom AS nom_patient
                              FROM events
                              INNER JOIN patient ON patient.id=events.patient_id
                              INNER JOIN user ON user.id=events.user_id
                              WHERE events.user_id = ?
        ;');
        $qcm->execute(array($user_id));
        while ($donnees = $qcm->fetch())
            {
                echo "<li>La consultation " .$donnees['title']. "le " .$donnees['date']. 
                " a eu lieu de " .$donnees['date_debut']." à " .$donnees['date_fin']. " avec le Docteur : " .$donnees['nom_medecin']. " pour le patient " 
                .$donnees['nom_patient'].", description : " .$donnees['description']."</li>";
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

