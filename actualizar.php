<?php 
include 'conexion.php';

$id = $_REQUEST['id'];
$sel = $con -> query("SELECT * FROM alumnos WHERE id='$id' ");
if($fila = $sel ->fetch_assoc()) {
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="nombre" placeholder="Nombre del Alumno" value="<?php echo $fila['nombre'] ?>" <br><br>
        <input type="text" name="paterno" placeholder="Apellido paterno" value="<?php echo $fila['paterno'] ?>"> <br><br>
        <input type="text" name="materno" placeholder="Apellido materno" value="<?php echo $fila['materno'] ?>"> <br><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>