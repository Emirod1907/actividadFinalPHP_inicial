<?php

$nombre_sorteo = $_POST['nombre'];
$apellido_sorteo = $_POST['apellido'];
$edad_sorteo = $_POST['edad'];
$provincia_sorteo = $_POST['provincia'];
$localidad_sorteo = $_POST['localidad'];
$calle_sorteo = $_POST['calle'];
$altura_sorteo = $_POST['altura'];


$conexion = mysqli_connect('localhost', 'root', '', 'php_inicial')
    or exit('No se pudo conectar a la base de datos');

$consulta = mysqli_query($conexion, "INSERT INTO participantes VALUES ('$nombre_sorteo','$apellido_sorteo','$edad_sorteo','$provincia_sorteo','$localidad_sorteo','$calle_sorteo','$altura_sorteo')");

mysqli_close($conexion);

header('Location:sorteo.php?ok');
