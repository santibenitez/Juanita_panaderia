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
    <link rel="stylesheet" href="./css/stock.css">
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
      <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nombre producto</th>
              <th scope="col">Descripción</th>
              <th scope="col">Tipo</th>
              <th scope="col">Stock</th>
              <th scope="col">Precio</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
            <tbody>
                   <?php
                       $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

                       $query = "SELECT * FROM productos";

                       $filas = mysqli_query($conexion, $query);

                       while($unafila = mysqli_fetch_assoc($filas)){
                           echo "<tr>";
                               echo "<td>".$unafila["nombre"]."</td>";
                               echo "<td>".$unafila["descripcion"]."</td>";
                               echo "<td>".$unafila["tipo"]."</td>";
                               echo "<td>".$unafila["stock"]."</td>";
                               echo "<td>".$unafila["precio"]."</td>";
                               echo "<td>
                                          <a href='./editar_producto.php?id=".$unafila["id"]."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                                    </td>";
                               echo "<td>
                                           <a href='./eliminar_producto.php?id=".$unafila["id"]."' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
                                    </td>";
                           echo "</tr>";
                       }

                       mysqli_close($conexion);
                   ?>
               </tbody>
           </table>
       <br>
       <a href="./agregar_producto.php" class="agregar_producto">Agregar productos</a>
       <section>
         <a href="htpps://wa.me/5492216191617" target="_blank" class="logo_whatsapp"><img src="./imagenes/logos/logo_whatsapp.png" alt="logo_whatsapp" class="boton_whatsapp"></a>
       </section>
  </body>
</html>
