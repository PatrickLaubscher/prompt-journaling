<?php

$dbservername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'prompt_content';

//On établit la connexion
    $db = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
    //On définit le mode d'erreur de PDO sur Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>