function validarFormulario() {
 
    var a=document.forms["formulario"]["opcion1"].checked;
    var b=document.forms["formulario"]["opcion2"].checked;
    var c=document.forms["formulario"]["opcion3"].checked;
    var i=document.forms["formulario"]["opcion4"].checked;
    var y=document.forms["formulario"]["terminos"].checked;


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





