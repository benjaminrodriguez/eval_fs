<?php
    // ----------------------------------------------------------------------------

    function inscription_INSERT ($nom, $prenom, $email, $password, $profession, $profil_picture)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO user (nom, prenom, email, password, profession, profil_picture) 
        VALUES (?, ?, ?, ?, ?, ?);
        ');
        $inscription->execute(array($nom, $prenom, $email, $password, $profession, $profil_picture));
    }

    // ----------------------------------------------------------------------------

    function ajouter_patient_INSERT ($nom, $prenom, $adresse, $code_postal, $ville, $email, $date_de_naissance, $telephone, $sexe, $mode_de_vie, $alimentation, $type)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO patient (nom, prenom, adresse, code_postal, ville, email, date_de_naissance, telephone, sexe, mode_de_vie, alimentation, type) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
        ');
        $inscription->execute(array($nom, $prenom, $adresse, $code_postal, $ville, $email, $date_de_naissance, $telephone, $sexe, $mode_de_vie, $alimentation, $type));
    }
    // ----------------------------------------------------------------------------

    function ajouter_responsable_INSERT ($nom, $prenom, $adresse, $code_postal, $ville, $email, $date_de_naissance, $telephone, $sexe)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO responsable (nom, prenom, adresse, code_postal, ville, email, date_de_naissance, telephone, sexe, patient_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, LAST_INSERT_ID());
        ');
        $inscription->execute(array($nom, $prenom, $adresse, $code_postal, $ville, $email, $date_de_naissance, $telephone, $sexe));
    }
    // ----------------------------------------------------------------------------

    function nouvelle_fiche_consultation_INSERT ($type_consultation, $type_pathologie, $lieu_consultation, $protocole_utilise, $resultat_obtenu)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO fiche_consultation (type_consultation, type_pathologie, lieu_consultation, protocole_utilise, resultat_obtenu) 
        VALUES (?, ?, ?, ?, ?);
        ');
        $inscription->execute(array($type_consultation, $type_pathologie, $lieu_consultation, $protocole_utilise, $resultat_obtenu));
    }

        // ----------------------------------------------------------------------------

        function nouvelle_consultation_INSERT ($title, $date, $time_debut, $time_fin, $description, $patient, $medecin)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO events (title, date, date_debut, date_fin, description, fiche_consultation_id, $patient_id, user_id) 
        VALUES (?, ?, ?, ?, ?, LAST_INSERT_ID(), ?, ?);
        ');
        $inscription->execute(array($title, $date, $time_debut, $time_fin, $description, $patient, $medecin));
    }

    // ----------------------------------------------------------------------------

    
?>