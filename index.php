<!DOCTYPE html>
<?php
if (!empty($_POST)) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  if(
    ( isset($_POST["Name"]) ) && 
    ( isset($_POST["Organisation"]) ) && 
    ( isset($_POST["Mail"]) ) &&
    ( filter_var($_POST["Mail"], FILTER_VALIDATE_EMAIL) )
  ) 
  { 
    $feedback = "Tentative d'envoi en cours... ";
    // secure
    $name = htmlspecialchars(addslashes($_POST["Name"]));
    $orga = htmlspecialchars(addslashes($_POST["Organisation"]));
    $mail = htmlspecialchars(addslashes($_POST["Mail"]));
    // conf
    $dbhost = "sql2.freemysqlhosting.net";
    $dbname = "sql2217929";
    $dbuser = "sql2217929";
    $dbpass = "vR5*cZ6%";
    $table = "newsletter";
    // connect
    try {
      $dbh = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
      // exec 
      $query = $dbh->prepare('INSERT INTO '.$table.' (username,organisation,mail) VALUES ("'.$name.'","'.$orga.'","'.$mail.'")');
      $query->execute();
      $feedback = "Inscription réussie";
    }
    catch(Exception $e) {
      $feedback = "Erreur de requête";
    }
  } else {
    $feedback = "Erreur de formulaire";
  }
} else {
  $feedback = "Inscrivez-vous";
}

?>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/scss/style.css">
  <meta charset="UTF-8">
  <title>Village n°1</title>
</head>
<body>

<!-- Bloc Logo -->
  <section class="row-md-12 logo">
    <img src="./assets/img/village1.png" alt="Logo Village n°1" class="img-responsive center-block" style="width: 280px" />
  </section>

<!-- Bloc Carrousel -->
  <section class="carrousel text-center">
    <div id="introcarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="./assets/img/services/batiment.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="./assets/img/services/jardinage2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="./assets/img/services/renovation1.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
    <div class="row-6">
      <h3>
        Nous proposons des offres d'emplois et des services <br>aux personnes handicapées et exclues de la société
      </h3>
      <button type="button" class="btn btn-lg"><a href="http://www.levillage1.be/">En savoir plus</a></button>
    </div>

<!-- Bloc Intro -->
  </section>
  <section class="row-md-12 intro">
    <img src="./assets/img/icons/respect.png" alt="Logo Village n°1" class="img-responsive center-block" style="width: 250px" />
    <h4>Respect</h4>
  </section>
  <section class="col-md-12 valeur">
    <div class="row">
      <div class="col-md-3 valeurelem">
        <div class="ecoute">
        <img src="./assets/img/icons/listening.svg" alt="Logo Village n°1" class="img-responsive center-block" style="width: 150px" />
        <h4>Ecoute</h4>
        </div>
      </div>
      <div class="col-md-3 valeurelem">
        <div class="engagement">
        <img src="./assets/img/icons/engagement.svg" alt="Logo Village n°1" class="img-responsive center-block" style="width: 150px" />
        <h4>Engagement</h4>
        </div>
      </div>
      <div class="col-md-3 valeurelem">
        <div class="pro">
        <img src="./assets/img/icons/professionnal.svg" alt="Logo Village n°1" class="img-responsive center-block" style="width: 150px" />
        <h4>Professionnalisme</h4>
        </div>
      </div>
      <div class="col-md-3 valeurelem">
        <div class="dynamisme">
        <img src="./assets/img/icons/dynamic.svg" alt="Logo Village n°1" class="img-responsive center-block" style="width: 150px" />
        <h4>Dynamisme</h4>
        </div>
      </div>
    </div>

<!-- Bloc Entreprise -->
  </section>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 entreprise">
        <h4>Entreprise</h4>
        <p>Activités industrielles</p>
        <p>Back Office Services</p>
        <p>Service rénovation</p>
        <p>Horticulture</p>
        <p>Cleaning</p>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 proximite">
        <h4>Proximité</h4>
        <p>Service rénovation</p>
        <p>Entretien de jardin</p>
        <p>Titres-services</p>
        <p>Taxi social</p>
      </div>
    </div>
  <div class="row">

<!-- Bloc Sponsors -->
    <section class="col-md-12 col-sm-12 sponsors">
      <img src="./assets/img/partenaires/allibert.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/artisane.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/coca.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/colgate-palmolive.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/colruyt.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/securex.png" class="img-responsive center-block" style="width: 150px" />
      <img src="./assets/img/partenaires/stef.png" class="img-responsive center-block" style="width: 150px" />
    </section>
  </div>

<!-- Bloc Newsletter -->
  <section id="newsletter" class="col-md-12 newsletter">
  <div class="row News">
    <div class="col-md-6 left">
      <div class="col">
        <h4>
          Inscrivez-vous à notre newsletter et <br>
          recevez toutes les news par mails !
        </h4>
        <img class="imageTest" src="./assets/img/services/batiment.jpg" alt="Batiment de la société Village n°1">
      </div>
    </div>
    <div class="col-md-6 right">
      <div class="row">
        <form id="mailform" action="./index.php#newsletter" method="post">
           <?php 
              if (isset($feedback)) {
                echo "<p>".$feedback."</p>";
              }
            ?>
          <input type="text" name="Name" placeholder="Nom complet">
          <select class="select" name="Organisation">
            <option value="Entreprise">Entreprise</option>
            <option value="Proximité">Proximité</option>
          </select>
          <input id="mailinput" type="mail" name="Mail" placeholder="Mail">
          <input id="mailsend" class="submit" type="submit" name="Subscrive" value="Souscrire">
        </form>
      </div>
    </div>
  </div>
  </section>

<!-- Bloc Footer -->
  <section class="col-md-12 footer">
		<p>2017-BecodeGroupe4</p>
  </section>

<!-- Bloc Script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./assets/js/main.js"></script>
</body>
</html>