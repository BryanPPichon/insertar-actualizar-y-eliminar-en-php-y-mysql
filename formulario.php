<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre del Alumno"> <br><br>
        <input type="text" name="paterno" placeholder="Apellido paterno"> <br><br>
        <input type="text" name="materno" placeholder="Apellido materno"> <br><br>
        <input type="submit" value="Guardar">
    </form>

    <table>
        <th>id</th>
        <th>nombre</th>
        <th>apellido paterno</th>
        <th>apellido materno</th>
        <th></th>
        <th></th>
        <?php
        $sel = $con -> query("SELECT * FROM alumnos");
        while($fila = $sel ->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['paterno'] ?></td>
            <td><?php echo $fila['materno'] ?></td>
            <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>"> EDITAR </a></td>
            <td><a href="borrar.php?id=<?php echo $fila['id'] ?>"> ELIMINAR </a></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>