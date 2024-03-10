<?php

//Info de connexion BD
$dbname = "prompt_journaling_api";
$host = "127.0.0.1";
$username = "root";
$password = "";

//Connexion BD
$con = mysqli_connect($host, $username, $password, $dbname);

//Vérification
if (!$con) {
    echo "Message: Impossible de se connecter à la base de données";
    die();
} 

?>