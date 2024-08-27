<?php 
include 'conexion.php';

$id = $_REQUEST['id'];

$del = $con -> query("DELETE FROM alumnos WHERE id='$id' ");
if($del) {
    echo "<script> location.href='formulario.php'; </script>";
} else {
    echo "<script> 
    alert('El registro no puede ser eliminado.');
    location.href='formulario.php'; </script>";
};
?>