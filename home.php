<?php

session_start();
if ($_SESSION['usuario']===null) {
   header("Location: index.html"); 
} 

function tieneRol($rol_necesario, $rol_usuario) {
    return $rol_usuario === $rol_necesario;
}
    // Incluye el archivo de configuración de la base de datos
    include './data/conexion.php';
    // Define la consulta SQL para seleccionar todos los registros de la tabla 'persona'
    $query = "SELECT * FROM carro";
    // Ejecuta la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
</head>
<body>
    <h1 style="text-align: center;">Predio Copart</h1>
    <!-- Enlace para agregar una nueva persona -->
    <?php
    if ('basico' === $_SESSION['rol']) {
        
    } else {
        echo "<a href='./view/agregar.php'>Nuevo+</a>";
    }  
    ?>
    

    <!-- Crear una tabla para mostrar los datos -->
    <table style="border:green; border-width:3px; border-style:dashed; border-collapse: collapse;">
        <tr>
            <th>Id</th>
            <th>Color</th>
            <th>Poliza</th>
            <th>Year</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Marca</th>
        </tr>
        <?php
            // Itera a través de los resultados de la consulta
            while ($datos = mysqli_fetch_array($ejecutar)) {
                echo "<tr>";
                echo "<td>".$datos[0]."</td>";
                echo "<td>".$datos[1]."</td>";
                echo "<td>".$datos[2]."</td>";
                echo "<td>".$datos[3]."</td>";
                echo "<td>".$datos[4]."</td>";
                echo "<td>".$datos[5]."</td>";
                echo "<td>".$datos[6]."</td>";
                // Agrega enlaces para modificar y eliminar registros
                
                if ('basico' === $_SESSION['rol']) {

                } else if ('administrador' === $_SESSION['rol']) {
                    echo "<td><a href='./view/modificar.php?id=".$datos[0]."'>Modificar</a></td>";
                    echo "<td><a href='./view/eliminar.php?id=".$datos[0]."'>Eliminar</a></td>";
                }elseif ('rustico' === $_SESSION['rol']) {
                    echo "<td><a href='./view/modificar.php?id=".$datos[0]."'>Modificar</a></td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
