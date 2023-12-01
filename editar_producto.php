<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Con el amor en la masa">
    <meta name="keywords" content="pan, pannettone, facturas, Juanita, panaderia, bakery">
    <meta name="author" content="Santiago Tomás Benitez">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/editar_producto.css">
    <title>Juanita- Panadería de autor</title>
    <title></title>
  </head>
  <body>
    <header>
      <div>
        <h1 class="titulo">Juanita- Panadería de autor</h1>
      </div>
      <div class="guia">
        <ul>
          <li><a class="botonguia" href="./index.html">Inicio</a>
          <li><a class="botonguia" href="#nosotros">Nosotros</a>
          <li><a class="botonguia" href="#fotos">Fotos</a>
          <li><a class="botonguia" href="./tienda.php">Tienda</a>
          <li><a class="botonguia" href="htpps://wa.me/5492216191617">Contactanos</a>
          <li><a class="botonguia" href="./login.php">Administrador</a>
        </ul>
      </div>
    </header>
      <div class="formulario">
        <br><br><br><br><br><br>
        <img src="./imagenes/panadera.jpg" alt="Panadera" class="panadera"><br><br>
      <?php

        if (!empty($_GET["id"]) && is_numeric($_GET["id"])) {
          $idproducto = $_GET["id"];

          $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

          $query = "SELECT * FROM productos WHERE id = $idproducto";

          $editar = mysqli_query($conexion, $query);

          while ($editarproducto = mysqli_fetch_assoc($editar)) {
            echo "<form class='editar_producto' method='post' action='./agregar_producto1.php'>";
            echo "<input type='hidden' name='id' value= $idproducto>";
            echo "<label for='nombreproducto'>".$editarproducto['nombre']."</label>"."<br>";
            echo "<input type='text' id='nombreproducto' name='nombreproducto' placeholder='Nuevo nombre'>"."<br>";
            echo "<label for='descripcionproducto'>".$editarproducto['descripcion']."</label>"."<br>";
            echo "<textarea placeholder='Nueva descripción del producto' name='descripcionproducto' id='descripcionproducto'></textarea>"."<br>";
            echo "<label for='tipoproducto'>".$editarproducto['tipo']."</label>"."<br>";
            echo "<input type='text' id='tipoproducto' name='tipoproducto' placeholder='Modificar tipo'>"."<br>";
            echo "<label for='stock'>".$editarproducto['stock']."</label>"."<br>";
            echo "<input type='number' id='stock' name='stock' placeholder='Modificar stock'>"."<br>";
            echo "<label for='precio'>".$editarproducto['precio']."</label>"."<br>";
            echo "<input type='number' id='precio' name='precio' placeholder='Modificar precio'>"."<br>";
            echo "<input type='submit' value='Guardar cambios' clas='boton_guardar'>";
            echo "</form>";
          }
          mysqli_close($conexion);
        }
      ?>
            <a href="./stock.php" class="volver">Volver</a>

      </div>
      <section>
          <a href="htpps://wa.me/5492216191617" target="_blank" class="logo_whatsapp"><img src="./imagenes/logos/logo_whatsapp.png" alt="logo_whatsapp" class="boton_whatsapp"></a>
      </section>
   </body>
 </html>
