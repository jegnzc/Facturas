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
      <form action="#" method="GET">
        <label for="id">No. de Factura:</label>
        <input class="id" type="number" name="id" id="id"><br>
        <input class="btn" type="submit" value="Buscar">
      </form>
    </section>

    <table class="factura__tabla">
      <tr class="factura__titulos">
        <th colspan="100%">
          <h1>Facturación</h1>
        </th>
      </tr>
      <tr class="factura__titulos">
        <th>
          <h1>No. Factura</h1>
        </th>
        <th>
          <h1>Fecha</h1>
        </th>
        <th>
          <h1>Id Cliente</h1>
        </th>
        <th>
          <h1>NIT</h1>
        </th>
      </tr>
      <?php
      $con = mysqli_connect('localhost', 'root', '', 'bdfacturacion');
      $sql = "SELECT A.pkIdFactura, fecha, B.nombre, B.nit FROM cliente B INNER JOIN factura A ON B.pkIdCliente = A.fkIdCliente
       WHERE A.pkIdFactura = $_GET[id]";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='factura__datos'>";
        foreach ($row as $value) {
          echo "<td> <h4> " . $value . "</h4> </td>";
        }
        echo "</tr>";
      }
      ?>
    </table>

    <table class="factura__tabla factura__detalles">
      <tr class="factura__titulos">
        <th>
          <h1>Id Producto</h1>
        </th>
        <th>
          <h1>Producto</h1>
        </th>
        <th>
          <h1>Cantidad</h1>
        </th>
        <th>
          <h1>Precio/u</h1>
        </th>
      </tr>
      <?php
      $con = mysqli_connect('localhost', 'root', '', 'bdfacturacion');
      $sql = "SELECT B.pkIdProducto, B.nombre, A.cantidad, B.precio FROM detalle A INNER JOIN producto B ON B.pkIdProducto = A.fkIdProducto
       WHERE A.fkIdFactura = $_GET[id]";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='factura__datos'>";
        foreach ($row as $value) {
          echo "<td> <h4> " . $value . "</h4> </td>";
        }
        echo "</tr>";
      }
      ?>
    </table>
  </section>



</body>

</html>