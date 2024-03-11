<?php

header('Content-type : application/json');
require 'get_content.php';
require 'get_content_text.php';



$list_select = '';


foreach ($phrases as $phrase) {
    $id = $phrase['phrase_id'];
    $text = $phrase['phrase_text'];

    $list_select .= '
           <option value="' . $id . '">'. $text . '</option>
    ';
}

?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title></title>
  </head>

  <body>

    <!-- Header -->

    <header>
   
      <!-- Menu navigation -->
      
      <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html" title="Accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="">Ajout phrases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="">Modification</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    </header>
  
    <main>

      <!-- Main -->

      <section class="section my-5">
        <div class="container">        
          <div class="row">
            <div class="col">
              <div class="mb-4 border">
                <h2>Ajouter des phrases</h2>
                <form method="POST" action="/create_new_phrase.php">
                    <input type="text" name="add_phrase" id="phrase" placeholder="Saisir ici la nouvelle phrase" size="80">
                    <input type="submit" value="Valider la nouvelle phrase">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section mb-5">
        <div class="container">        
          <div class="row">
            <div class="col">
              <div class="mb-4 border">
                <h2>Modifier des phrases</h2>
                    <form method="GET" action="/get_content.php">
                    <select name="id" id="id">
                        <?= $list_select ?>
                    </select>
                    <input type="submit" value="Sélectionner la phrase à modifier">
                    </form>
                <form method="POST" action="">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section mb-5">
        <div class="container">        
          <div class="row">
            <div class="col">
              <div class="mb-4 border">
                <h2>Supprimer des phrases</h2>
                <form method="POST" action="/delete_phrase.php">
                    <select name="id" id="id">
                        <?= $list_select ?>
                    </select>
                    <input type="submit" value="Supprimer la phrase">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>


 

    </main>

    <!-- Footer -->

    <footer>


  
    </footer>
    


  </body>


</html>
