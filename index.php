<?php 

  require_once __DIR__ . '/Models/Categoria.php';
  require_once __DIR__ . '/Models/Articoli.php';
  require_once __DIR__ . '/Models/Cibo.php';
  require_once __DIR__ . '/Models/Giochi.php';


  $newCategory = new Categoria('Cani');
  $newArticolo = new Cibo('Cibo per cani', 'Bla bla bla', 15.00, $newCategory, ['Ceneri grezze','Proteina grezza','Grassi grezzi','Fibra grezza']);

  $newCategory2 = new Categoria('Gatti');
  $newArticolo2 = new Giochi('Gioco per gatti', 'Bla bla bla', 25.00, $newCategory,'Struttura robusta con rivestimento in poliestere');

  var_dump($newArticolo);
  var_dump($newArticolo2);

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
  
</body>
</html>