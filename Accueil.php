  <?php include('donnees.php')?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
  <?php include('header.html')?>

  <div class="container">
    <h1>Banque de Projets </h1>
    <p>Découvrez une collection soigneusement sélectionnée de projets exceptionnels dans ledéveloppement, le design, le marketing et la data science.</p>

    <div class="explore">
        <a href="Projets.php">Nos projets</a>
        <a href="Equipe.php">Notre Equipe</a>
    </div>
    <div class="projet-nombre">
      <div>
        <img src="" alt="">
        <h3><?php echo $dev?></h3>
        <h3>Projets de développement</h3>
      </div>
      <div>
        <img src="" alt="">
        <h3><?php echo $design?></h3>
        <h3>Projets de design</h3>
      </div>
      <div>
        <img src="" alt="">
        <h3><?php echo $mobile?></h3>
        <h3>Projet de mobile</h3>
      </div>
    </div>
    <div>
      <h2>Projets en Vedettes</h2>
      <p>Explorez nos projets les plus remarquables, sélectionnés pour leur innovation qualité exceptionnelle..</p>
      <div class="box-projet">
        <div class="projet">
          <h2>Application E-commerce React</h2>
          <div class="info">
            <p>Développement</p>
            <p>15/05/2024</p>
          </div>
          <p>
            Une application e-commerce complète avec panier, paiement et gestion des commandes. Interface moderne et responsive avec TypeScript.
          </p>
          <div class="techno">
            <p>React</p>
            <p>TypeScript</p>
            <p>css</p>
          </div>
          <a href="" id="watchingProjet">Voir le projet</a>
        </div>
      </div>
        <a href="Projets.php">Voir tous les projets</a>
    </div>
  </div>
</body>