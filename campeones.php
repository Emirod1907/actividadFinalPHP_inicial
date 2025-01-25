<?php include('header.php'); ?>
<section class="campeones">
        <h2>Campeones del mundo de este siglo</h2>
        <div class="botonera">
            <ul>
                <li><a href="campeones.php?nombre=bz">Brasil</a></li>
                <li><a href="campeones.php?nombre=it">Italia</a></li>
                <li><a href="campeones.php?nombre=es">España</a></li>
                <li><a href="campeones.php?nombre=al">Alemania</a></li>
                <li><a href="campeones.php?nombre=fr">Francia</a></li>
                <li><a href="campeones.php?nombre=ar">Argentina</a></li>
            </ul>
        </div>
        <section>
        <?php
        if(isset($_GET['nombre']))
        {
        $campeon= $_GET['nombre'];
        switch($campeon){
            case "bz":
                $nombre= "Brasil.";
                $descripcion= "Brasil fue pentacampeon en 2002 siendo invicto y con unas actuaciones estratosféricas de Ronaldo, Rivaldo y Ronaldinho.";
                $img='img/brasil.jpeg';
                break;
            case "it":
                $nombre= "Italia.";
                $descripcion= "Italia logró su 4 trofeo del mundo en 2006 en el partido que sera recordado para muchos por el cabezazo de Zidane";
                $img='img/italia.jpg';
                break;
            case "es":
                $nombre= "España.";
                $descripcion= "La roja se coronó campeona por primera vez en su historia gracias a un gol de Andres Iniesta.";
                $img='img/españa.jpg';
                break;
            case "al":
                $nombre= "Alemania.";
                $descripcion= "Los germanos le ganaron a Argentina la final en el Maracaná luego de un gol en el tiempo extra y se convirtieron en campeones por cuarta vez en su historia";
                $img='img/alemania.jpeg';
                break;
            case "fr":
                $nombre= "Francia.";
                $descripcion= "Los franceses coronaron un campeonato increible con un equipo joven y muy físico";
                $img='img/francia.jpeg';
                break;
            case "ar":
                    $nombre= "Argentina.";
                    $descripcion= "Messi llevó a la Argentina bordar a su tercera estrella en el pecho con un equipo sólido y unido, tras una actuacion de otro planeta en una final para la historia";
                    $img='img/argentina.jpg';
                break;
        }
        ?>
        <div class="contenedor">
            <h3><?php echo $nombre;?></h3>
            <h3><?php echo $descripcion;?></h3>
            <div class="box_img">
                <img src=<?php echo $img ?> alt=<?php echo $nombre; ?>>
            </div>
        <?php } ?>
        </div>
        </section>
    </section>
    <?php include('footer.php'); ?>

