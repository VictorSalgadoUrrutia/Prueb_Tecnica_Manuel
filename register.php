<?php
include("db.php");
$USUARIO = $_POST['usuario'];
$PASSWORD = $_POST['password'];

// Verificar si el usuario ya existe en la base de datos
$consulta_verificar = "SELECT * FROM Personal WHERE usuario='$USUARIO'";
$resultado_verificar = mysqli_query($conexion, $consulta_verificar);
$filas_verificar = mysqli_num_rows($resultado_verificar);

if ($filas_verificar > 0) {
    // El usuario ya existe, mostrar mensaje de error de inicio de sesión
    include("index.html");
    ?>
    <h1 class="title">ERROR DE INICIO DE SESIÓN: Usuario ya registrado</h1>
    <?php
} else {
    // El usuario no existe, realizar el registro
    $consulta = "INSERT INTO Personal (usuario, password) VALUES ('$USUARIO', '$PASSWORD')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        header("location: home.php");
    } else {
        include("index.html");
        ?>
        <h1 class="title">Error al registrarse</h1>
        <?php
    }
}

mysqli_free_result($resultado_verificar);
mysqli_close($conexion);
?>
