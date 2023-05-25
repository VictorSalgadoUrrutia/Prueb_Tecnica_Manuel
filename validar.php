<?php 
include("db.php");
$USUARIO = $_POST['usuario'];
$PASSWORD = $_POST['password'];

$consulta = "SELECT * FROM Personal WHERE usuario='$USUARIO' and password='$PASSWORD'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);
if($filas){
    header("location:home.php");
}else{
    include("index.html");
    ?>
    <h1 class="title">Error al iniciar sesion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>