function validarTerminos() {
    var y=document.forms["eventos"]["terminos"].checked;
    if (y == false) {
        alert("Tienes que aceptar los términos y condiciones");
        return false;
    }


    alert("Se han guardado los datos correctamente!");
        return true;


}