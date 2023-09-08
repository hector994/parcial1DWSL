<?php
include '../data/conexion.php';
// Verifica si se proporciona un ID válido en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta la base de datos para obtener los datos de la persona con el ID especificado
    $query = "SELECT * FROM carro WHERE id='$id'";
    $ejecucion = mysqli_query($conexion, $query);

    // Verifica si se encontraron resultados
    if ($ejecucion && mysqli_num_rows($ejecucion) > 0) {
        $fila = mysqli_fetch_assoc($ejecucion);
    } else {
        echo "No se encontraron registros con el ID proporcionado.";
        exit; // Sale del script si no se encuentra ningún registro.
    }
} else {
    echo "ID no proporcionado en la URL.";
    exit; // Sale del script si no se proporciona un ID válido en la URL.
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>

<body>
    <form action="../controller/crud.php" method="POST">
        <input type="text" name="opcion" value="3" hidden>
        <input type="text" name="id" value="<?php echo $fila['id']; ?>" required require> <br><br>
        <input type="text" name="color" placeholder="color" value="<?php echo $fila['color']; ?>" required> <br><br>
        <input type="text" name="poliza" placeholder="poliza" value="<?php echo $fila['poliza']; ?>" required> <br><br>
        <input type="text" name="year" placeholder="year" value="<?php echo $fila['ann']; ?>" required> <br><br>
        <input type="text" name="descripcion" placeholder="descripcion" value="<?php echo $fila['descripcion']; ?>" required> <br><br>
        <input type="text" name="tipo" placeholder="tipo" value="<?php echo $fila['idtipo']; ?>" required> <br><br>
        <input type="text" name="marca" placeholder="marca" value="<?php echo $fila['idmarca']; ?>" required> <br><br>
        <input type="submit" value="Eliminar">
    </form>
</body>

</html>
