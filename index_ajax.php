<?php
include("cn.php");
$jsoue = "josue";

$usuario = "SELECT fecha_de_entradas.dias,fecha_de_entradas.usuarios,fecha_de_entradas.servicio,fecha_de_entradas.hora_entrada,fecha_de_salidas.hora_salida FROM fecha_de_salidas,fecha_de_entradas WHERE fecha_de_entradas.id_usuarios = fecha_de_salidas.	id_usuarios";
$usuarios = "SELECT * FROM fecha_de_salidas WHERE usuario = '$jsoue'";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("y-m-d H:i:s");
$josue = "josue";
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("y-m-d H:i:s");
$dia = date("d-m-y");
//mandar horas y minutos por separado para hacer 2 tablas con hora exacta y minutos trabajados
//$hora = date("H:i:s");
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title>Pagina principal</title>
    <style>
       
    </style>
</head>
  <body>


  
  <div class="container-add">
        <h2 class="container__title">Registrar hora de Entrada</h2>
        <form action="insertar.php" method="post" class="container__form">
            <label for="" class="container__label">Dia:</label>
            <input name="numero_dia" type="text" class="container__input" value="<?= $dia ?>"  disabled>
            <label for="" class="container__label">Nombre:</label>
            <input  name="nombre_empleado" type="text" class="container__input" value="<?= $josue ?>"  disabled>
            <label for="" class="container__label">Servicio:</label>
            <input name="Nombre_servicio" type="text" class="container__input" value="">
            <label for="" class="container__label">Hora de entrada</label>
            <input name="hora_entrada" type="datetime" class="container__input" value="<?= $hora ?>" disabled>
            <input class="container__submit" type="submit" value="registrar" onclick="return mostraredi">
        </form>
<!--    Datatables  -->
        <div class="container-add">
            <h2 class="container__title">Registrar hora de Salida</h2>
            <form action="insertarfechados.php" method="post" class="container__form">
                <label style="display:none; class="container__label">DIA:</label> 
                <input type="hidden"name="dia" type="text" class="container__input" value="<?= $dia ?>" disabled>
                <label style="display:none; type="hidden"for="" class="container__label">Nombre:</label>
                <input type="hidden"name="empleado_entrada" type="text" class="container__input" value="<?= $josue ?>" disabled>
                <label style="display:none;  type="hidden"for="" class="container__label">Servicio:</label>
                <input type="hidden"name="servicio" type="text" class="container__input" value="">
                <label for="" class="container__label">Hora de Salida</label>
                <input name="salida" type="datetime" class="container__input" value="<?= $hora ?>" disabled>
                <label style="display:none; type="hidden"for="" class="container__label">Turno:</label>
                <input class="container__submit" type="submit" value="registrar">
            </form>
        </div>


    <h2 class="text-center">SEN MANTENIMIENTO Y LIMPIEZA</h2>
      
    <h3 class="text-center">SERVICIOS HORAS</h3>
    
    <div class="container">
       <div class="row">
           <div class=" tabla col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead>
                 <tr>
                 <th>ID</th>
                    <th>Usuarios</th>
                    <th>Dias</th>
                    <th>Hora de Entrada</th>   
                    <th>Hora de Salida</th>                            
                    <th>Servicio</th>
                    <th>Hora Total</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
    <script>
      $(document).ready(function() {
        
        $.ajax({
        url: "consulta_ajax.php",
        success : function(data) {
            var o = JSON.parse(data);
            var hora_entrada;
            var hora_salida;
            var hora_total;
            var now = moment();
            o.forEach(element =>{
              var date1 = moment(`2016-10-08 ${element.hora_entrada}`);
              var date2 = moment(`2016-10-08 ${element.hora_salida}`);

              let totalMinutes = date2.diff(date1, 'minutes');
              var hours = Math.trunc(totalMinutes/60);
              var minutes = totalMinutes % 60;
              let laSalvacion = `${hours}:${minutes}`;

              if (!element.hasOwnProperty('hora_total')) {
                element['hora_total'] = laSalvacion;
              }
            });
            $('#tablaUsuarios').DataTable({
                data : o,
                columns: [
                    {"data" : "id_usuarios"},
                    {"data" : "usuarios"},
                    {"data": "dias"},
                    {"data": "hora_entrada"},
                    {"data": "hora_salida"},
                    {"data": "servicio"}, 
                    {"data":"hora_total"}
                ],
            });
        }       
       });
      });
    </script>
    
      
  </body>
</html>