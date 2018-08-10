<?php
require 'conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
    $check=@getimagesize($_FILES['foto']['tmp_name']);
    if ($check!==false) {
        $titulo=$_POST['titulo'];
        $imagen=$_FILES['foto']['name'];
        $texto=$_POST['texto'];
        $carpeta_destino='fotos/';
        $archivo_subido=$carpeta_destino.$_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
        $sql="INSERT INTO fotos(titulo,imagen,texto) VALUES ('$titulo','$imagen','$texto')";
        $resultado=$mysqli->query($sql);
        header('location:index.php');
    }else{
        $error="error";
    }
}
require 'views/subir.view.php';
?>