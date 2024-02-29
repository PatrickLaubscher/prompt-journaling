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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>The Diarist</title>
  </head>

  <body>

    <!-- Header -->

    <header>
   
      <!-- Menu navigation -->
      
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link barlow-r" aria-current="page" href="index.html" title="Accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link barlow-r" href="#" title="">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link barlow-r" href="#" title="">Pricing</a>
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