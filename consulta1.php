<?php

$regis_nombre =$_POST['nombre'];
$regis_apellido =$_POST['apellido'];
$regis_email =$_POST['email'];

$conexion = mysqli_connect('localhost','root','','php_inicial') 
or exit ('No se pudo conectar a la base de datos');

$registro= mysqli_query($conexion, "INSERT INTO registro VALUES(DEFAULT,'$regis_nombre','$regis_apellido','$regis_email')");

mysqli_close($conexion);

header('Location:registro.php?ok');


