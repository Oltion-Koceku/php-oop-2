<?php 

  require_once __DIR__ . '/Models/Categoria.php';
  require_once __DIR__ . '/Models/Articoli.php';
  require_once __DIR__ . '/Models/Cibo.php';
  require_once __DIR__ . '/Models/Giochi.php';
  require_once __DIR__ . '/data/db.php';

  $articoli = $articoliArrey;



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>

  <title>Shop Cani Gatti</title>
</head>
<body>
  <div class="contanier">

    <h1>Articoli</h1>
    <div class="d-flex justify-content-center ">
    <?php foreach($articoli as $articolo): ?>
      <div class="card mx-3 " style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $articolo->img ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $articolo->name ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo $articolo->description ?></h6>
          <?php foreach($articolo->category as $item): ?>
          <p class="card-text"><?php echo $item ?></p>
          <?php endforeach ?>
          <p class="card-text"><?php echo $articolo->getPrice() ?></p>
          <!-- con method_exists, verifica se il metodo esiste e lo stampa -->
          <?php if (method_exists($articolo, 'getIngredient')): ?>
          <p class="card-text"><?php echo $articolo->getIngredient()  ?></p>
          <?php endif ?>  
          <?php if (method_exists($articolo, 'getMaterial')): ?>
          <p class="card-text"><?php echo $articolo->getMaterial()  ?></p>
          <?php endif ?>  
        </div>
      </div>
    <?php endforeach ?>
    
  </div>
  </div>
  
</body>
</html>