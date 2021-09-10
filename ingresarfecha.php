<?php
include 'date.php';

$conexion =mysqli_connect('localhost','root','','fecha');




if (isset($_REQUEST['ingresar'])){

    $id=1;
    
    $salida=$_POST['fechasalidas'];
    $consulta ="INSERT INTO fecha(fecha_salida) VALUES ('$salida') ";
    
    $ejecutar=mysqli_query($conexion,$consulta);
    


    if($ejecutar){
        echo '<script> alert("fecha ingresada")</script>';
    }else{
        echo '<script> alert("fecha no ingresada")</script>';
    }



}


   

?>