<?php include('header.php'); ?>
<body>
    <form action="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <label for="edad">Edad</label>
        <input type="number" name="edad">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia">|
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad">
        <label for="calle">Calle</label>
        <input type="text" name="calle">
        <label for="altura">Altura</label>
        <input type="text" name="altura">
        <input type="submit" class="btn" value="Enviar">
    </form>
    <?php include('footer.php'); ?>
</body>
</html>