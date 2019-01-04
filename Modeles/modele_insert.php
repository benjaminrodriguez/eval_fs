<?php
    // ----------------------------------------------------------------------------

    function inscription_INSERT ($nom, $prenom, $email, $password, $profession)
    {
        $bdd = bdd();
        // INSCRIPTION
        $inscription = $bdd->prepare(
        'INSERT INTO user (nom, prenom, email, password, profession) 
        VALUES (?, ?, ?, ?, ?);
        ');
        $inscription->execute(array($nom, $prenom, $email, $password, $profession));
    }

    // ----------------------------------------------------------------------------

    function inscription_insert_hobbies_two ($user_id,$hobbies_id)
    {
        $bdd = bdd();
        // INSCRIPTION HOBBY TABLE INTERMEDIAIRE
        $inscription = $bdd->prepare(
                                    'INSERT INTO hobbies_has_user (user_id, hobbies_id)
                                    VALUES (?, ?);
                                    ');
        $inscription->execute(array($user_id, $hobbies_id));
        
    }

    // ----------------------------------------------------------------------------

    function create_topic_INSERT($title, $status, $content, $user_id)
    {
        $bdd = bdd();
        // INSCRIPTION
        $creer_sujet = $bdd->prepare(
            'INSERT INTO subject (title, date_posted, content, status, user_id)
            VALUES (?, NOW(), ?, ?, ?);
            ');
        $creer_sujet->execute(array($title, $content, $status, $user_id));
    }

    // ----------------------------------------------------------------------------

    function write_topic_INSERT($new_message, $autor_id, $subject_id)
    {
        $bdd = bdd();
        // INSCRIPTION
        $creer_sujet = $bdd->prepare(
            'INSERT INTO message (date, content_message, autor_id, subject_id)
            VALUES (NOW(), ?, ?, ?);
            ');
        $creer_sujet->execute( array( $new_message, intval($autor_id), intval($subject_id) ) );
    }

    // ----------------------------------------------------------------------------

    function new_passed_INSERT($user_id, $deck_id)
    {
        // INSERT LE NOUVEAU DECK CREE
        $bdd = bdd();
        $req = $bdd->prepare('  INSERT INTO passed (date_passed, number_game, score_user, user_id, deck_id)
                                VALUES (NULL, NULL, NULL, ?, ?);
                            ');
        $req-> execute(array(intval($user_id), intval($deck_id) ));
    }

    //--------------------------------------------------------------------------------

    function new_deck_INSERT($name, $description, $autor_id, $picture, $categorie_id)
    {
        // INSERT LE NOUVEAU DECK CREE
        $bdd = bdd();
        $req = $bdd->prepare('  INSERT INTO deck (name, description, autor_id, status, picture, date_creation, categorie_id)
                                VALUES (?, ?, ?, "privated", ?, NOW(), ?);
                            ');
        $req-> execute(array($name, $description, intval($autor_id), $picture, intval($categorie_id)));
    }
      
    //--------------------------------------------------------------------------------

    function new_question_INSERT($question_cards, $deck_id)
    {
        $bdd = bdd();
        $req = $bdd->prepare(
            'INSERT INTO recto (question_cards, deck_id)
             VALUES (?, ?);
            ');
        $req->execute(array($question_cards, intval($deck_id)));
    }

    //--------------------------------------------------------------------------------

    function new_answer_INSERT($answer_cards, $recto_id)
    {
        $bdd = bdd();
        $req = $bdd->prepare(
            'INSERT INTO verso (answer_cards, statut_cards, recto_id)
             VALUES (?, ?, ?);
            ');
        $req->execute(array($answer_cards, 'T', $recto_id));
    }

    //--------------------------------------------------------------------------------

    function succes_rate_INSERT($verso_id)
    {
        $bdd = bdd();
        $req = $bdd->prepare(
            'INSERT INTO succes_rate (level_cards, chain, played_cards, nb_succes, verso_id)
             VALUES (0, 0, NULL, 0, ?);
            ');
        $req->execute(array(intval($verso_id)));
    }

    
?>