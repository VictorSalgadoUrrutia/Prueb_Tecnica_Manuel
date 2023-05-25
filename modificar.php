<?php
include("db.php");

$USUARIO = $_POST['usuario'];
$PASSWORD = $_POST['password'];

$consulta = "UPDATE Personal SET password='$PASSWORD' WHERE usuario='$USUARIO'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    // Modificación exitosa, redireccionar a una página de éxito o mostrar un mensaje
    header("location: home.php");
} else {
    // Error en la modificación, redireccionar a una página de error o mostrar un mensaje
    header("location: index.html");
}

mysqli_close($conexion);
?>
