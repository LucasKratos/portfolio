<?php 

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/1508depositphotos_183174078-stock-illustration-ls-letters-logo-initial-logo.ico" />
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/pintando-ensos.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pintando Ensos</h5>
        <p class="card-text">This is a longer card with supporting text below as a 
            natural lead-in to additional content. This 
            content is a little bit longer.</p>
        <a>Ver codigo fuente</a>    
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/expense-tracker.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Expense Tracker</h5>
        <p class="card-text"> Aplicacion de Control de gastos realizada con ReactJS y Firebase. Aplicacion con persistencia de datos y logueo.</p>
        <a ref="#">Ver codigo fuente</a>
      </div>
    </div>
    
  </div>
  <div class="col">
    <div class="card">
      <img src="images/carrito-de-compras.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carrito de compras</h5>
        <p class="card-text">Pagina para Artista japones diseñada con HTML, CSS, bootstrap y PHP.</p>
        <a ref="">Ver codigo fuente</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/taura.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Taura Store</h5>
        <p class="card-text">Pagina realizada con ReactJS utilizando "styled-components". (Front-end)</p>
        <a ref="">Ver codigo fuente</a>
      </div>
    </div>
  </div>
</div>
    </main>
    <?php include_once "footer.php";?>
</body>

</html>

