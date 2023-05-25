<?php
include("db.php");

$consulta = "SELECT id, usuario FROM Personal";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['usuario']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.html">Volver</a>

</body>
</html>

<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
