<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>

<body>
    <h1 style="text-align: center;">Predio Copart</h1>
    <form action="../controller/crud.php" method="POST">
        <input type="text" name="opcion" value="1" hidden><br><br>
        <input type="text" name="id" placeholder="id" hidden>
        <br><br>
        <input type="text" name="color" placeholder="color" required>
        <br><br>
        <input type="text" name="poliza" placeholder="poliza" required>
        <br> <br>
        <input type="text" name="year" placeholder="year" required>
        <br> <br>
        <input type="text" name="descripcion" placeholder="descripcion" required>
        <br> <br>
        <input type="text" name="tipo" placeholder="tipo" required>
        <br> <br>
        <input type="text" name="marca" placeholder="marca" required>
        <br> <br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>