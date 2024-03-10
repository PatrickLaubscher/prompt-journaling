<?php

header('Content-type : application/json');
require_once 'connexion.php';

$reponse = array();

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = $con->prepare ("SELECT phrase_text AS phrase FROM phrase WHERE phrase_id = ?");
    $query->bind_param('i', $id);

    if($query->execute()){
        $query->bind_result($text);
        $query->fetch();

        $phrases = $text;

        $reponse['error'] = false;
        $reponse['phrases'] = $phrases;
        $reponse['message'] = "La commande a été exécutée avec succès";


    } else {
        $reponse['error'] = true;
        $reponse['message'] = "Impossible d'exécuter cette requète";

    }


}


    

   

?>