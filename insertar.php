<?php
include ("cn.php");


$numero_dia =$_POST["numero_dia"];
$nombre_empleado =$_POST["nombre_empleado"];
$Nombre_servicio=$_POST["Nombre_servicio"];
$hora_entrada=$_POST["hora_entrada"];
$hora_entrada_Segundos=strtotime($_POST["hora_entrada"]);
$TotalTime = ($hora_entrada_Segundos / 60)/60;
$TotalTime = number_format((float)$TotalTime,2,'.','');
$insertar = "INSERT INTO fecha_de_entradas (hora_entrada,usuarios,servicio,dias,horaSegundo) VALUES ('$hora_entrada','$nombre_empleado','$Nombre_servicio','$numero_dia','$TotalTime')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    echo "<script> alert('Se a registrado el usuario con exito'); </script>";
     header("index.php");
}else {
    echo "<script> alert('no se pudo registrar');
    windows.history.go(-1);</script>";
}
