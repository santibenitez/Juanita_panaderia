<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Con el amor en la masa">
    <meta name="keywords" content="pan, pannettone, facturas, Juanita, panaderia, bakery">
    <meta name="author" content="Santiago Tomás Benitez">
    <link rel="stylesheet" href="./css/agregar_producto.css">
    <title>Juanita- Panadería de autor</title>
    <title></title>
  </head>
  <body>
    <header>
      <div class="titulo">
        <h1>Juanita- Panadería de autor</h1>
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
      <br><br><br><br><br><br><br><br><br>
      <div class="formulario">
        <img src="./imagenes/panadera.jpg" alt="Panadera" class="panadera"><br><br>
        <form method="post" action="">
          <div class="formulario1">
            <label for="nombreproducto">Nombre del producto</label><br>
            <input type="text" id="nombreproducto" name="nombreproducto" placeholder="Nombre del producto"><br>
            <label for="descripcionproducto">Descripción del producto</label><br>
            <textarea placeholder="Ingresar descripcion" name="descripcionproducto" id="descripcionproducto"></textarea><br>
            <label for="tipoproducto">Tipo de producto</label><br>
            <input type="text" id="tipodeproducto" name="tipoproducto" placeholder="Panadería/Pastelería"><br>
            <label for="stock">Stock</label><br>
            <input type="number" id="stock" placeholder="Cantidad disponible" name="stock"><br>
            <label for="precio">Precio</label><br>
            <input type="number" id="precio" placeholder="Precio" name="precio"><br>
            <label for="archivo">Subir imagen</label><br><br>
            <input type="file" id="archivo" placeholder="Seleccionar imagen" name="imagen"><br>
            <button type="submit" class="boton_form">Guardar</button><br>
            <a href="./stock.php" class="volver">Volver</a>
          </div>
        </form>
      </div>
      <?php
        if(!empty($_POST["nombreproducto"]) && !empty($_POST["tipoproducto"]) && !empty($_POST["descripcionproducto"]) && !empty($_POST["precio"]) && !empty($_POST["stock"])){
          $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

          $query = "INSERT INTO productos (nombre, descripcion, tipo, stock, precio) VALUES ('".$_POST['nombreproducto']."', '".$_POST['descripcionproducto']."',  '".$_POST['tipoproducto']."', '".$_POST['stock']."', '".$_POST['precio']."')";

          $agregar = mysqli_query($conexion, $query);

          if($agregar === true){
            echo "<script>alert('El producto ha sido guardado correctamente');</script>";
        }
        else{
            echo "<script>alert('Se produjo un error, por favor vuelva a intentarlo');</script>";
        }

        mysqli_close($conexion);
        }
      ?>
    <section>
      <a href="htpps://wa.me/5492216191617" target="_blank" class="logo_whatsapp"><img src="./imagenes/logos/logo_whatsapp.png" alt="logo_whatsapp" class="boton_whatsapp"></a>
    </section>
  </body>
