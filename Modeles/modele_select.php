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
            echo "<li>".$donnees['profession']. " | prénom : " .$donnees['prenom']. " | nom : ".$donnees['nom']. " | contact : <a href='mailto:".$donnees['email']."'>".$donnees['email']."</a> </li>";
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
                              user.nom AS nom_medecin, patient.nom AS nom_patient, fiche_consultation_id AS fiche_consultation_id
                              FROM events
                              INNER JOIN patient ON patient.id=events.patient_id
                              INNER JOIN user ON user.id=events.user_id
                              WHERE events.user_id = ?
        ;');
        $qcm->execute(array($user_id));
        while ($donnees = $qcm->fetch())
            {
                echo "<li>La consultation " .$donnees['title']. "le " .$donnees['date']. 
                " a eu lieu de " .$donnees['date_debut']." à " .$donnees['date_fin'].  " pour le patient " 
                .$donnees['nom_patient'].", description : " .$donnees['description']." <a href='./index.php?page=consultation&choix=liste_consultation&id_consultation=".$donnees['fiche_consultation_id']."'>Voir plus</a></li>";
            }
    
    }

    //-------------------------------------------------------------------------------

    function fiche_consultation_SELECT($fiche_consultation_id)
    {
        $bdd = bdd();
        $qcm = $bdd->prepare('SELECT *
        FROM fiche_consultation
        INNER JOIN events ON events.fiche_consultation_id=fiche_consultation.id
        INNER JOIN user ON user.id=events.user_id
        WHERE fiche_consultation.id = ?
        ;');
        $qcm->execute(array($fiche_consultation_id));
        while ($donnees = $qcm->fetch())
            {
                echo "<li> <ul> Docteur : " .$donnees['nom']. " </ul><ul>Type de consultation : " .$donnees['type_consultation']. "</ul><ul> 
                Type de pathologie : " .$donnees['type_pathologie']. " </ul><ul> Lieu de consultatin : " 
                .$donnees['lieu_consultation']. "</ul><ul>Protocole utilisé : " .$donnees['protocole_utilise']. " 
                </ul><ul>Resultat obtenu : " .$donnees['resultat_obtenu']."</ul>"

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

