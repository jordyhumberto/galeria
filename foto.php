<?php
require 'conexion.php';
$id=isset($_GET['id'])?(int)$_GET['id']:false;
if(!$id){
    header('location:index.php');
}
$sql="SELECT * FROM fotos WHERE id='$id'";
$resultado=$mysqli->query($sql);
$row=$resultado->fetch_array(MYSQLI_ASSOC);
$foto=$row;
if(!$foto){
    header('location:index.php');
}
require 'views/foto.view.php';
?>