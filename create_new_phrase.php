<?php

header('Content-type : application/json');
require_once 'connexion.php';

$reponse = array();

if(isset($_POST['text'])){

    $text = $_POST['text'];

    $query = $con->prepare("INSERT INTO phrase(phrase_text) VALUES ('$text') ");

    if($query->execute()){
        
        $reponse['error'] = false;
        $reponse['message'] = "La création a été exécutée avec succès";


    } else {
        $reponse['error'] = true;
        $reponse['message'] = "Impossible d'exécuter cette requète";

    }


}

print_r($reponse);