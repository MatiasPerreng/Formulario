<?php


$conex = mysqli_connect("localhost","root","","registro");

if(isset($_POST['enviar'])){
if(strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['especificacion']) >= 1) {
$cedula = trim($_POST['cedula']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$especificacion = trim($_POST['especificacion']);
$consulta = "INSERT INTO registrar (Cedula, Nombre, Apellido, Especificación) VALUES ('$cedula','$nombre','$apellido','$especificacion')";
$resultado = mysqli_query($conex,$consulta);

}
}
?>
