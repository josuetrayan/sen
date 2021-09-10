<?php
include("cn.php");
$jsoue = "josue";
$usuario = "SELECT fecha_de_entradas.dias,fecha_de_entradas.usuarios,fecha_de_entradas.servicio,fecha_de_entradas.hora_entrada,fecha_de_salidas.hora_salida,(fecha_de_salidas.hora_Segundo_Salida - fecha_de_entradas.horasegundo) AS total FROM fecha_de_salidas,fecha_de_entradas WHERE fecha_de_entradas.id_usuarios = fecha_de_salidas.id_usuarios";
$usuarios = "SELECT * FROM fecha_de_salidas WHERE usuario = '$jsoue'";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("y-m-d H:i:s");
$josue = "josue";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("y-m-d H:i:s");
$dia = date("d-m-y");
//mandar horas y minutos por separado para hacer 2 tablas con hora exacta y minutos trabajados
//$hora = date("H:i:s");
$hora = date("i");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <title>Pagina principal</title>
</head>
<body>
    <div class="container-add">
        <h2 class="container__title">Registrar hora de Entrada</h2>
        <form action="insertar.php" method="post" class="container__form">
            <label for="" class="container__label">DIA:</label>
            <input name="numero_dia" type="text" class="container__input" value="<?= $dia ?>">
            <label style="display: none" for="" class="container__label">Nombre:</label>
            <input style="display: none" name="nombre_empleado" type="text" class="container__input" value="<?= $josue ?>">
            <label for="" class="container__label">Servicio:</label>
            <input name="Nombre_servicio" type="text" class="container__input" value="">
            <label for="" class="container__label">Hora de entrada</label>
            <input name="hora_entrada" type="datetime" class="container__input" value="<?= $hora ?>">
            <input class="container__submit" type="submit" value="registrar" onclick="return mostraredi">
        </form>

        <div class="container-add">
            <h2 class="container__title">Registrar hora de Salida</h2>
            <form action="insertarfechados.php" method="post" class="container__form">
                <label for="" class="container__label">DIA:</label>
                <input name="dia" type="text" class="container__input" value="<?= $dia ?>">
                <label for="" class="container__label">Nombre:</label>
                <input name="empleado_entrada" type="text" class="container__input" value="<?= $josue ?>">
                <label for="" class="container__label">Servicio:</label>
                <input name="servicio" type="text" class="container__input" value="">
                <label for="" class="container__label">Hora de Salida</label>
                <input name="salida" type="datetime" class="container__input" value="<?= $hora ?>">
                <label for="" class="container__label">Turno:</label>
                <input class="container__submit" type="submit" value="registrar">
            </form>
        </div>

        <div class="grid">
            <div class="container-table">
                <div class="table__title">SEN Mantenimiento</div>
                <div class="table__title">
                    <h5>Servicios y Horas</h5><a class="title_edit" href="edicion.php">Edicion</a>
                </div>
                <div class="table__header"> Empleado</div>
                <div class="table__header"> Dia</div>
                <div class="table__header"> Hora de entrada</div>
                <div class="table__header">Servicio</div>
                <div class="table__header">Salida</div>
                <div class="table__header">Horas Totales</div>
                <?php $resustado = mysqli_query($conexion, $usuario);

                while ($row = mysqli_fetch_assoc($resustado)) { ?>
                    <div class="table__item">
                        <?php echo $row["usuarios"]; ?>
                    </div>

                    <div class="table__item">
                        <?php echo $row["dias"]; ?>
                    </div>

                    <div class="table__item">
                        <?php echo $row["hora_entrada"]; ?>
                    </div>

                    <div class="table__item">
                        <?php echo $row["servicio"]; ?>
                    </div>

                    <div class="table__item">
                        <?php echo $row["hora_salida"]; ?>
                    </div>
                    <div class="table__item">
                        <?php 
                           $hora_entrada =  new DateTime($row["hora_entrada"]);
                           $hora_salida  = new DateTime($row["hora_salida"]);
                           $dateInterval = $hora_entrada->diff($hora_salida);
                    
                           echo $dateInterval->format('Total: %H horas %i minutos %s segundos').PHP_EOL; 
                        ?>
                    </div>
                <?php } ?>
            </div>
</body>
</html>