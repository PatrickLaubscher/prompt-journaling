<?php  
  require 'bdd.php';
  require 'content.php';
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
    <script src="js/main.js" defer></script>
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
                <a class="nav-link" href="#" title="">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    </header>
  
    <main>

      <!-- Main -->

      <section class="section">
        <div class="container">        
          <div class="row">
            <div class="col-lg">
              <div class="mb-4 border">
                Contenu
              </div>
            </div>
            <div class="col-lg">
              <div class="mb-4 border">
                Contenu
              </div>
            </div>
          </div>
          <div class="row flex-column align-items-center justify-content-center">
            <div class="col-md-6 row flex-column align-items-center">
              <div class="mb-4 col border text-center">
                <p class="" id="content"><?= $content?></p>
              </div>
            </div>
            <div class="col-4 col-md-3 col-lg-2">
              <div class="mb-4 border row justify-content-center">
                <button class="btn btn-primary" id="btn">Bouton</button>
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