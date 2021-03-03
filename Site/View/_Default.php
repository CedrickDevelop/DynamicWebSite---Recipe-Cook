
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ***********CSS********** -->
  <link rel="stylesheet" href="/Style/style.css">
  <!-- **********Font style******** -->
  <!-- ********ROBOTO*********** -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
  <!-- ********COOKIE*********** -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

  <title>Les magiciens du fouet</title>

</head>
<!-- /////////////////////////////////////////////////////////////////// -->

<body>
<!-- **************************** NAVIGATION *************************** -->
    <nav>
        <div class="identification">
            <a href="#recettes"> <strong>Nos recettes </strong> </a>
            <a href="#cuisinier"> <strong>Nos cuisiniers️ </strong> </a>
            <a href="#contact"> <strong>Nous Contacter ✉️ </strong> </a>
        </div>
    </nav>
<!-- /////////////////////////////////////////////////////////////////// -->
<!-- **************************** HEADER *************************** -->

  <div class="titre">
    <h1>Les magiciens du Fouet</h1>
  </div>

  <section class="accueil">
    
    <div class="header-texte">
      <h2>Des recettes d'exception <br /> à la maison</h2>
      <h3>Vous rêvez d'être un cuisinier ou une cuisinière reconnus pour vos talents ? <br /> Venez partager vos recettes ! </h3> 
    </div>

    <div class="header-image">
        <img src="../img/Photo_Site/image-accueil-inclusive.jpg" alt="cuisiner chez soi">
    </div>

  </section>

<!-- /////////////////////////////////////////////////////////////////// -->
<!-- **************************** CONTENU DE PAGE -- VIEWS *************************** -->
    
    <?= $content; ?>

<!-- /////////////////////////////////////////////////////////////////// -->
<!-- **************************** PIED DE PAGE *************************** -->
<div class="trait-separation"></div>
<footer >
    <p>Réalisé par Cedrick Pommier.</p> 
    <p>Tous droits réservés ©️</p>
</footer>
 

</body>
</html>   