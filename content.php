<?php
require 'bdd.php';

$id = round(rand(1,5));

$sql =  "SELECT p.*
        FROM phrase p
        WHERE p.phrase_id = :phrase_id";

$requete = $db->prepare($sql);
$requete->bindParam(':phrase_id', $id, PDO::PARAM_INT);
$requete->execute();

$phrase = $requete->fetch(PDO::FETCH_ASSOC);
$content = $phrase['phrase_text'];


?>