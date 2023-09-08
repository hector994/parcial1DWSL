<?php
include '../data/conexion.php';

$opcion = $_POST['opcion'];

$color = $_POST['color'];
$poliza = $_POST['poliza'];
$year = $_POST['year'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];

if ($opcion == 1) {
    // Insertar un nuevo registro
    $query = "INSERT INTO carro (color,poliza,ann,descripcion,idtipo,idmarca) 
    VALUES('$color','$poliza','$year','$descripcion','$tipo','$marca')";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        header("Location: ../home.php");
    } else {
        header("Location: ../view/agregar.php");
    }
} else if ($opcion == 2) {
    // Actualizar un registro existente
    $id = $_POST['id'];
    $query = "UPDATE carro SET color='$color', poliza='$poliza', ann='$year', descripcion='$descripcion'
    ,idtipo='$tipo',idmarca='$marca' WHERE id='$id'";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        header("Location: ../home.php");
    } else {
        header("Location: ../view/modificar.php?id=$id"); // Redirige de nuevo a la página de edición si hay un error.
    }
} else if ($opcion == 3) {
    // Eliminar un registro
    $id = $_POST['id'];
    $query = "DELETE FROM carro WHERE id='$id'";
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        header("Location: ../home.php");
    } else {
        header("Location: ../home.php");
    }
} else {
    echo "Opción no válida.";
}
?>
