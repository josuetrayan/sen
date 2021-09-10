<?php
include ("cn.php");

$id =$_POST["id"];
$nombre =$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$fechaactual =$_POST["fechasalidas"];
$fechasalida =$_POST["fecha"];



$actualizar = "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',direccion='$direccion',fecha_actual='$fechaactual',fecha_salida='$fechasalida' WHERE id='$id'";

$resultado = mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script> alert('Se actualizo el usuario con exito'); </script>";
    header("location:edicion.php");

}else {
    echo "<script> alert('no se pudo registrar');
    windows.history.go(-1);</script>";
}
