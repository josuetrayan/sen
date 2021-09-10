function confirmacion(e){
    if (confirm("esta seguro que desea borrar el registro")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".tableborrar__item__link");

for (var i=0; i< linkDelete.length; i++){
    linkDelete[i].addEventListener('click',confirmacion);
}


function mostrarBoton2 (id) {
    var btn_1 = document.getElementById('btn-1-'+id);

        btn_1.style.display = 'none';
      
    }
    function mostrarBoton1 () {
    var btn_1 = document.getElementById('btn-1-'+id);
    var btn_2 = document.getElementById('btn-2-'+id);
        btn_2.style.display = 'none';
        btn_1.style.display = 'inline';
    }

