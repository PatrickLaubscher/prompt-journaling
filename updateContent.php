<?php
require 'bdd.php';

if(isset($_POST['id'])) {
    $id_random = $_POST['id'];

    $sql =  "SELECT p.*
             FROM phrase p
             WHERE p.phrase_id = :phrase_id";

    $requete = $db->prepare($sql);
    $requete->bindParam(':phrase_id', $id_random, PDO::PARAM_INT);
    $requete->execute();

    $phrase = $requete->fetch(PDO::FETCH_ASSOC);
    $content = $phrase['phrase_text'];

    echo $content;

} else {
    echo "";
}

?>
