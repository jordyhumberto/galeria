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
        <h1 class="titulo">Galeria</h1>
    </div>
    </header>
    <section class="fotos">
    <div class="grid-contenedor">
        <?php foreach ($fotos as $foto) {?>
            <div class="thumb">
                <a href="foto.php?id=<?php echo $foto['id'];?>">
                    <img class="foto" src="fotos/<?php echo $foto['imagen'];?>" alt="">
                </a>
            </div>
        <?php }?>
    </div>
    <div class="paginacion">
    <?php if($pagina_actual>1){?>
            <a class="izquierda" href="index.php?p=<?php echo $pagina_actual-1;?>">pagina anterior</a>
    <?php }?>
    <?php if($total_paginas!=$pagina_actual){?>
            <a class="derecha" href="index.php?p=<?php echo $pagina_actual+1;?>">pagina siguiente</a>
    <?php }?>
    </div>
    </section>
    <footer>
        <p class="copyright">Galeria-Jordy</p>
    </footer>

</body>
</html>