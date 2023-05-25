<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = $_POST["id"];

    $consulta = "DELETE FROM registros WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Redirigir al usuario a una página de éxito
        header("location: eliminar_exitoso.html");
    } else {
        // Mostrar mensaje de error
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>