<?php

// ----------------------------------------------------------------------------

function fiche_patient_events_delete ($patient_id)
{
    // SUPPRESSION FICHE PATIENT RESPONSABLE
    $bdd = bdd();
    $desinscription = $bdd->prepare(
    'DELETE FROM events
     WHERE events.patient_id = ?;
    ');
    $desinscription->execute(array(intval($patient_id)));
}

    // ----------------------------------------------------------------------------

    function fiche_patient_responsable_delete ($patient_id)
    {
        // SUPPRESSION FICHE PATIENT RESPONSABLE
        $bdd = bdd();
        $desinscription = $bdd->prepare(
        'DELETE FROM responsable
         WHERE responsable.patient_id = ?;
        ');
        $desinscription->execute(array(intval($patient_id)));
    }
    
    // ----------------------------------------------------------------------------
    function fiche_patient_delete ($patient_id)
    {
        // SUPPRESSION FICHE PATIENT
        $bdd = bdd();
        $desinscription = $bdd->prepare(
        'DELETE FROM patient
         WHERE patient.id = ?;
        ');
        $desinscription->execute(array(intval($patient_id)));
    }
    
    // ----------------------------------------------------------------------------
   
    
?>

