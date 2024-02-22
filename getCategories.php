<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'bdd.php';

$sql = "SELECT * FROM category";

$requete = $db->query($sql); 
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($categories);

?>