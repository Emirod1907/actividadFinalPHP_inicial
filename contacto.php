<?php include('header.php'); ?>
<body>
    <h2>Contactanos</h2>
    <form action="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono">
        <label for="asunto">Asunto</label>
        <textarea name="asunto" id="asunto"></textarea>
        <input type="submit" class="btn" value="Enviar">
    </form>
    <?php include('footer.php'); ?>
</body>
</html>