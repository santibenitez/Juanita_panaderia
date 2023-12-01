<?php

  $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

  if($conexion -> connect_error){
    die("Conexión fallida". $conexion -> connect_error);
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $nombre = $_POST["nombreproducto"];
    $descripcion = $_POST["descripcionproducto"];
    $tipo = $_POST["tipoproducto"];
    $stock = $_POST["stock"];
    $precio = $_POST["precio"];


    $query = "UPDATE productos SET nombre ='$nombre', descripcion ='$descripcion', tipo ='$tipo', stock ='$stock', precio ='$precio' WHERE id = $id";

    $agregar = mysqli_query($conexion, $query);

    if($agregar === true){
      header("Location: ./stock.php");
      exit();
  }

    else{
      echo "Hubo un error, por favor intente nuevamente";
  }

  mysqli_close($conexion);

}
?>
