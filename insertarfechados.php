<?php
include ("cn.php");



$dia =$_POST["dia"];
$empleado_entrada =$_POST["empleado_entrada"];
$servicio=$_POST["servicio"];
$salida=$_POST["salida"];
$salidaSegundo=strtotime($_POST["salida"]);
$TotalTime = ($salidaSegundo / 60)/60;
$TotalTime = number_format((float)$TotalTime,2,'.','');
$insertar = "INSERT INTO fecha_de_salidas (hora_salida,usuario,servicios,dia,hora_Segundo_Salida) VALUES ('$salida','$empleado_entrada','$servicio','$dia','$TotalTime')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script> alert('Se a registrado el usuario con exito'); </script>";
     header("index.php");
}else {
    echo "<script> alert('no se pudo registrar');
    windows.history.go(-1);</script>";
}


//SELECT fecha_de_salidas.hora_Segundo_Salida,fecha_de_entradas.horasegundo,(((fecha_de_salidas.hora_Segundo_Salida-fecha_de_entradas.horasegundo)/60)/60) horal_total FROM fecha_de_salidas INNER JOIN  fecha_de_entradas ON fecha_de_salidas.id_usuarios = fecha_de_entradas.id_usuarios