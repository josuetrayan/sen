<?php
include_once 'cndos.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$jsoue = "josue";
$consulta = "SELECT * FROM fecha_de_salidas,fecha_de_entradas WHERE fecha_de_entradas.id_usuarios = fecha_de_salidas.id_usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion=null;
?>