<?php
session_start();
if (isset($_SESSION['codigoE'])) {
  header('Location: index.html');
}
$username = isset($_POST['codigoE']) ? $_POST['codigoE'] : '';
$password = isset($_POST['pwd']) ? $_POST['pwd'] : '';;

$user = 'u20200089';
$pass = '123';



$ID=2;
$nombre='Maria';
$apellido='Perez';
$correo='maria@gmail.com';
$usuario='maria99';
$rol='rustico';

$ID=3;
$nombre='Jose';
$apellido='Lopez';
$correo='jose@gmail.com';
$usuario='jose99';
$rol='basico';

$ID=1;
$nombre='Hector';
$apellido='Murillo';
$correo='hector@gmail.com';
$usuario='hector94';
$rol='rustico';
// Generar el hash de la contraseña
$hash_contraseña1 = password_hash($pass, PASSWORD_DEFAULT);
$verificacion = false;
// Verificar si la contraseña ingresada coincide con el hash almacenado
if (password_verify($password, $hash_contraseña1)) {
    $verificacion=true;
} else {
    $verificacion=false;
}



if (($username != '' || $password != '') && $username == $usuario && $verificacion == true) {
    session_start();
    $_SESSION['ID']=$ID;
    $_SESSION['Nombre']=$nombre;
    $_SESSION['Apellido']=$apellido;
    $_SESSION['Correo']=$correo;
    $_SESSION['usuario']=$usuario;
    $_SESSION['rol']=$rol;
    header("Location: home.php");

} else {
    header("Location:index.html");
}

?>