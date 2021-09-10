

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript">

        function Habilitar()
        {
            var camp1 = document.getElementById("campo1");
            var camp2 = document.getElementById("campo2");
            var boton = document.getElementById("boton");
    
            if(camp1.value != camp2.value){
                boton.disabled = true;
            }else{
                boton.disabled = false;
            }
        }
        function deHabilitar()
        {
            var camp1 = document.getElementById("campo1");
            var camp2 = document.getElementById("campo2");
            var boton = document.getElementById("boton");
    
            if(campo1 == 2021 ){
                document
            }
        }

    
    
    </script>
</head>
<body>
    
<input type="password" name="" id="campo1" value="">
<input type="password" name="" id="campo2" value="" onkeyup="Habilitar()">
<a href=""></a>
<input  type="button" name="" id="boton" value="boton">

</body>
</html>