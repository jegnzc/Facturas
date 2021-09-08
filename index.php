<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <nav class="nav">
    <h1 class="nav__titulo">Proyecto Facturación</h1>
    <ul class="nav__items">
      <li class="nav__item"><a href="./index.php">Factura</a></li>
      <li class="nav__item"><a href="./ingresar.php">Ingresar</a></li>
      <li class="nav__item"><a href="#">Clientes</a></li>
    </ul>
  </nav>

  <!-- <header>
    <div class="header__titulo">
      <h1>Facturación</h1>
    </div>
  </header> -->



  <section class="factura">

    <section class="factura__buscar">
      <form action="./busqueda.php" method="GET">
        <label for="id">No. de Factura:</label>
        <input class="id" type="number" name="id" id="id"><br>
        <input class="btn" type="submit" value="Buscar">
      </form>
    </section>
  </section>

</body>

</html>