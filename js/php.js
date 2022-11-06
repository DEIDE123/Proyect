const formulario=documentById('formulario');
const inputs=document.querySelectorAll('#formulario input')
function enablesend() {
    document.eventos.submit.disabled=!document.loginform.terms.checked;

    if (y == false) {
        alert("Tienes que aceptar los términos y condiciones");
        return false;
    }
}