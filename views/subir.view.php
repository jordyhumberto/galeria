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
            <h1 class="titulo">subir</h1>
        </div>
    </header>
    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" autocomplete="off">
            <label for="foto">selecciona</label>
            <input type="file" id="foto" name="foto"><br>
            <label for="titulo">titulo</label>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="texto">descripcion</label>
            <textarea name="texto" id="texto" placeholder="ingresa descripcion"></textarea><br>
            <?php if (isset($error)) {?>
                <p class="error"><?php echo $error;?></p>
            <?php }?>
            <input type="submit" class="submit" value="subir foto">
        </form>
    </div>
    <footer>
        <p class="copyright">Galeria-Jordy</p>        
    </footer>
</body>
</html>
