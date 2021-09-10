<?php
include ("cn.php");
$usuario = "SELECT * FROM usuarios";
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
    <title>panel de edicion</title>
</head>

<body>

    <div class="container-table Container-table--edit">
        <div class="table__title table__title--edit">Datos de Usuario</div>
        <div class="table__header"> nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Direccion</div>
        <div class="table__header">Fecha de Ingreso</div>
        <div class="table__header">Fecha de Salida</div>
        <div class="table__header">operacion</div>
        <?php $resustado = mysqli_query($conexion,$usuario);
         while($row=mysqli_fetch_assoc($resustado)) { ?>
        <div class="table__item"><?php echo $row["nombre"];?></div>
        <div class="table__item"><?php echo $row["apellido"];?></div>
        <div class="table__item"><?php echo $row["direccion"];?></div>
        <div class="table__item"><?php echo $row["fecha_actual"];?></div>
        <div class="table__item"><?php echo $row["fecha_salida"];?></div>
        <div class="table__item">
            <a href="actualizar.php?id=<?php echo $row["id"];?>" class="table__item__link">Editar / </a>
            <a href="procesareliminar.php?id=<?php echo $row["id"];?>" class="tableborrar__item__link"> Eliminar </a></div>

        <?php } mysqli_free_result($resustado); ?>
       
    </div>
    <script src="confirmacion.js"></script>
</body>

</html>