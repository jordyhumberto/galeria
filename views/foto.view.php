<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">foto <?php if (!empty($foto['titulo'])) {
                echo $foto['titulo'];
            }else {
                echo $foto['imagen'];
            }?></h1>
        </div>
    </header>
    <div class="contenedor">
        <div class="contenedor-foto">
            <img class="foto" src="fotos/<?php echo $foto['imagen'];?>" alt="">
            <p class="texto"><?php echo $foto['texto'];?></p>
            <a class="regresar" href="index.php">Regresar</a>
        </div>
    </div>
    <footer>
        <p class="copyright">Galeria-Jordy</p>        
    </footer>
</body>
</html>
