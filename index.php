<?php

header('Content-type : application/json');
require_once 'get_content_text.php';

?>

<form method="POST" action="http://localhost:8001/create_new_phrase.php">
    <textarea name="text" id="text">Ecrire la nouvelle phrase</textarea>
    <input type="submit" value="Valider la nouvelle phrase">
</form>