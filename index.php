<?php include('header.php'); ?>
<?php
include('config.php');
?>
<body>
    <section class="contenido">
        <p><?php echo $mensaje; ?></p>
        <p>Hola, <?php echo $usuario; ?> Tenes <?php echo $edad; ?> años </p>
        <p>El precio del producto es: <?php echo $precioProducto; ?></p>
        <p>con descuento del <?php echo $descuento;?> % </p>
        <p> El precio del producto con descuento es: <?php echo number_format($precioConDescuento, 2); ?></p>
        <section>
            <h2>Producto destacado</h2>
            <div class="contenedor-imagen">
                <img src="<?php echo $imagenProducto; ?>" alt="">
            </div>
            <p>Producto destacado del dia</p>
            <div class="contenedor-imagen">
                <img src="<?php echo $productoDia; ?>" alt="">
            </div>
        </section>
        <p>El precio del producto del dia es: <?php echo $precioProductoDia; ?></p>
        <p>con descuento del <?php echo $descuentoDia;?> % </p>
        <p> El precio del producto con descuento es: <?php echo number_format($precioDescuentoDia, 2); ?></p>
    </section>
    <?php include('footer.php');
    ?>
</body>
</html>