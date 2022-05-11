<?php

include("con_db.php");


if(isset($_POST['enviar'])){
if(strlen($_POST['cedula']) < 1 && strlen($_POST['nombre']) < 1 && strlen($_POST['apellido']) < 1 &&strlen($_POST['especificacion']) < 1) {
$cedula = trim($_POST['cedula']);
$nombre = trim($_POST['name']);
$apellido = trim($_POST['apellido']);
$especificacion = trim($_POST['especificacion']);
$consulta = "INSERT INTO `medico`(Cedula, Nombre, Apellido, Especificacion) VALUES ('$cedula','$nombre','$apellido','$especificacion')";
$resultado = mysqli_query($conex,$consulta);

}
}
?>
