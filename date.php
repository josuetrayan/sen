<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date("y-m-d H:i:s");
    $fecha_salidasss = date("y-m-d H:i:s");
    ?>

    <form action="ingresarfecha.php" method="post">
    <label for="">Fecha entrada <br><input  id="inputentrada" name="fechas" type="datetime" value="" ></label> <br><br><br>
    <label for="">Fecha salida <br><input id="inputentradsa" name="fechasalidas" type="datetime" value="<?=$fecha_salidasss?>"></label>
    <br>
    <br>
    <input type="submit" name="ingresar" value="Ingresar fecha">


    </form>
</body>
</html>