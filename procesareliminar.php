<?php
include ("cn.php");
$id =$_GET["id"];
$eliminar = "DELETE FROM usuarios WHERE id='$id'";
$resultadoEliminar = mysqli_query($conexion,$eliminar);

if ($resultadoEliminar){
    header("location:edicion.php");
}else{
    echo"<script> alert('no se pudo borrar') </script>";
}
