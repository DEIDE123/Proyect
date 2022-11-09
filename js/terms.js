function validarFormulario() {
 
    var a=document.forms["eventos"]["opcion1"].checked;
    var b=document.forms["eventos"]["opcion2"].checked;
    var c=document.forms["eventos"]["opcion3"].checked;
    var i=document.forms["eventos"]["opcion4"].checked;
    var y=document.forms["eventos"]["terminos"].checked;


    if ((a == false) && (b == false) && (c == false) && (i == false)){
        alert("Tienes que seleccionar un evento como mínimo");
        return false;
    }

    if (y == false) {
        alert("Tienes que aceptar los términos y condiciones");
        return false;
    }


    alert("Se han guardado los datos correctamente!");
        return true;
}





