<?php
include ("cn.php");
$id=$_GET ["id"];
/*agregas una variable ejemplo josue y lo busca en la comlumna josue y muestra los datos */ 
//$josue = "josue";
$usuario = "SELECT * FROM usuarios WHERE id = '$id'";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha= date("y-m-d H:i:s");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>panel editar</title>
</head>

<body>

    <form action="procesaractualizar.php" method="POST"  class="container-table Container-table--edit">
        <div class="table__title table__title--edit">Datos de Usuario</div>
        <div class="table__header"> nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Direccion</div>
        <div class="table__header">fecha iniciio</div>
        <div class="table__header">fecha salida</div>
        <div class="table__header">operacion</div>
        <?php $resustado = mysqli_query($conexion,$usuario);
         while($row=mysqli_fetch_assoc($resustado)) { ?>
        <input type="hidden" class="table__input" value="<?php echo $row["id"];?>" name="id"></input>
        <input type="text" class="table__input" value="<?php echo $row["nombre"];?>" name="nombre"></input>
        <input type="text" class="table__input" value="<?php echo $row["apellido"];?>" name="apellido"></input>
        <input type="text" class="table__input" value="<?php echo $row["direccion"];?>" name="direccion"></input>
        <input type="datatime" class="table__input" value="<?php echo $row["fecha_actual"];?>" name="fechasalidas"></input>
        <input type="datatime" class="table__input" value="<?=$fecha?>" name="fecha"></input>

        <?php } mysqli_free_result($resustado); ?>
        <input type="submit" value="actualizar" class="container__submit--actualizar">
       
         </form>
</body>

</html>