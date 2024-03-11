<?php

header('Content-type : application/json');
require_once 'connexion.php';

$reponse = array();

if(isset($_POST['id'])){

    $id = $_POST['id'];

    $query = $con->prepare("DELETE FROM phrase WHERE phrase_id=$id ");

    if($query->execute()){
        
        $reponse['error'] = false;
        $reponse['message'] = "La phrase a bien été supprimée.";


    } else {
        $reponse['error'] = true;
        $reponse['message'] = "Impossible d'exécuter cette requète";

    }


}

