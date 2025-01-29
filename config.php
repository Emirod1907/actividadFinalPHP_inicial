<?php
//Definicion de constante
define('TITULO_PAGINA','Mi sitio web');

//Definicion de variables
$usuario= 'Emiliano';
$edad= 34;
$mensaje= "Bienvenido a nuestro sitio web";
$precioProducto= 1800;
$imagenProducto='img/producto.png';
$productoDia='img/copa del mundo.png';
$precioProductoDia=2300;
// Operadores
$descuentoDia=37;
$descuento= 10;
$precioConDescuento= $precioProducto - ($precioProducto * $descuento /100);
$precioDescuentoDia= $precioProductoDia - ($precioProductoDia * $descuentoDia /100);
?>