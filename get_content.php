<?php

header('Content-type : application/json');
require_once 'connexion.php';

$reponse = array();

$query = $con->prepare("SELECT * FROM phrase");


    if ($query->execute()){

        $phrases = array();
        $resultat = $query->get_result();

        while($elmt = $resultat->fetch_array(MYSQLI_ASSOC)){

            $phrases[] = $elmt;
            
        }
    $reponse['error'] = false;
    $reponse['phrases'] = $phrases;
    $reponse['message'] = "La commande a été exécutée avec succès";

    //Fermeture de connexion
    $query->close();
    

    } else {

        // impossible d'exécuter la requète 
        $reponse['error'] = true;
        $reponse['message'] = "Impossible d'exécuter cette requète";
       
    }

    if(isset($_GET['id'])){

        $id = $_GET['id'];
    
        $query = $con->prepare("SELECT phrase_id, phrase_text FROM phrase WHERE phrase_id=$id ");
    
        if($query->execute()){
            
            $reponse['error'] = false;
            $reponse['message'] = "La phrase a bien été supprimée.";
    
    
        } else {
            $reponse['error'] = true;
            $reponse['message'] = "Impossible d'exécuter cette requète";
    
        }
    
    
    }

?>