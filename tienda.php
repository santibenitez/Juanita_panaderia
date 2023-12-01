<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Con el amor en la masa">
    <meta name="keywords" content="pan, pannettone, facturas, Juanita, panaderia, bakery">
    <meta name="author" content="Santiago Tomás Benitez">
    <link rel="stylesheet" href="./css/tienda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <img src="./imagenes/panadera.jpg" alt="Panadera" class="panadera"><br><br>
      </div>
    <?php
            $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

            $query = "SELECT * FROM productos";

            $filas = mysqli_query($conexion, $query);

            while($unafila = mysqli_fetch_assoc($filas)){
        echo "<div class='card-group'>";
          echo  "<div class='card' width='20vw'>";
          echo   "<img src='./imagenes/budinaran.jpg' class='card-img-top' alt='Budín de arándanos'>";
          echo    "<div class='card-body'>";
          echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
          echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
          echo    "</div>";
          echo    "<div class='card-footer'>";
          echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
          echo    "</div>";
          echo  "</div>";
        echo "<div class='card-group'>";
          echo  "<div class='card' width='20vw'>";
          echo   "<img src='./imagenes/citrica.jpg' class='card-img-top' alt='Budín de arándanos'>";
          echo    "<div class='card-body'>";
          echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
          echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
          echo    "</div>";
          echo    "<div class='card-footer'>";
          echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
          echo    "</div>";
          echo  "</div>";
        echo "<div class='card-group'>";
          echo  "<div class='card' width='20vw'>";
          echo   "<img src='./imagenes/donas.jpg' class='card-img-top' alt='Budín de arándanos'>";
          echo    "<div class='card-body'>";
          echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
          echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
          echo    "</div>";
          echo    "<div class='card-footer'>";
          echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
          echo    "</div>";
          echo  "</div>";
        echo "<div class='card-group' width='20vw'>";
          echo  "<div class='card'>";
          echo   "<img src='./imagenes/lemonpie.jpg' class='card-img-top' alt='Budín de arándanos'>";
          echo    "<div class='card-body'>";
          echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
          echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
          echo    "</div>";
          echo    "<div class='card-footer'>";
          echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
          echo    "</div>";
          echo  "</div>";
          echo "<br><br>";
          echo "<div class='card-group' width='20vw'>";
            echo  "<div class='card'>";
            echo   "<img src='./imagenes/macarons.jpg' class='card-img-top' alt='Budín de arándanos'>";
            echo    "<div class='card-body'>";
            echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
            echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
            echo    "</div>";
            echo    "<div class='card-footer'>";
            echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
            echo    "</div>";
            echo  "</div>";
          echo "<div class='card-group' width='20vw'>";
            echo  "<div class='card'>";
            echo   "<img src='./imagenes/marquisechoco.jpg' class='card-img-top' alt='Budín de arándanos'>";
            echo    "<div class='card-body'>";
            echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
            echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
            echo    "</div>";
            echo    "<div class='card-footer'>";
            echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
            echo    "</div>";
            echo  "</div>";
          echo "<div class='card-group' width='20vw'>";
            echo  "<div class='card'>";
            echo   "<img src='./imagenes/muffins.jpg' class='card-img-top' alt='Budín de arándanos'>";
            echo    "<div class='card-body'>";
            echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
            echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
            echo    "</div>";
            echo    "<div class='card-footer'>";
            echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
            echo    "</div>";
            echo  "</div>";
          echo "<div class='card-group' width='20vw'>";
            echo  "<div class='card'>";
            echo   "<img src='./imagenes/selvanegra.jpg' class='card-img-top' alt='Budín de arándanos'>";
            echo    "<div class='card-body'>";
            echo      "<h5 class='card-title'>".$unafila["nombre"]."</h5>";
            echo      "<p class='card-text'>".$unafila["descripcion"]."</p>";
            echo    "</div>";
            echo    "<div class='card-footer'>";
            echo      "<button type='button' class='btn btn-primary'>Lo quiero!</button>";
            echo    "</div>";
            echo  "</div>";
        }
          mysqli_close($conexion);
     ?>
      <section>
        <a href="htpps://wa.me/5492216191617" target="_blank" class="logo_whatsapp"><img src="./imagenes/logos/logo_whatsapp.png" alt="logo_whatsapp" class="boton_whatsapp"></a>
      </section>
    </body>
