
function validarFormulario() {
    var y=document.forms["eventos"]["terms"].checked;

    if (y == false) {
        alert("Tienes que aceptar los términos y condiciones");
        return false;
    }
    alert("Se han guardado los datos correctamente!");
    return true;
}


