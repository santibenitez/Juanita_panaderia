<?php
  if (!empty($_GET["id"]) && is_numeric($_GET["id"])) {
    $idProducto = $_GET["id"];

    $conexion = mysqli_connect("localhost:3306", "root", "", "panaderia");

    $query = "DELETE FROM productos WHERE id = $idProducto";
    $resultado = mysqli_query($conexion, $query);

    if($resultado === true){
        echo "<script>alert('Se elimino correctamente el producto');</script>";
        window.history.back();
    }
    else{
        echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
    }

    mysqli_close($conexion);
  }
?>
