<?php
require 'conexion.php';
$fotos_por_pagina=9;
$pagina_actual=(isset($_GET['p'])?(int)$_GET['p']:1);
$inicio=($pagina_actual>1)?$pagina_actual*$fotos_por_pagina-$fotos_por_pagina:0;
$sql="SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina";
$resultado=$mysqli->query($sql);
$fotos=$resultado;
if(!$fotos){
    header('location:index.php');
}
$sql="SELECT FOUND_ROWS() as total_filas";
$resultado=$mysqli->query($sql);
$row=$resultado->fetch_array(MYSQLI_ASSOC);
$total_post=(int)$row["total_filas"];
$total_paginas=ceil($total_post /$fotos_por_pagina);
require 'views/index.view.php';
?>
