function validarFormulario() {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
 
    var a=document.forms["formulario"]["opcion1"].checked;  //Terms and the events checkbox
    var b=document.forms["formulario"]["opcion2"].checked;
    var c=document.forms["formulario"]["opcion3"].checked;
    var i=document.forms["formulario"]["opcion4"].checked;
    var y=document.forms["formulario"]["terminos"].checked;

    var expReg= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; //Expresion regular for email
    var esValido=expReg.test(email);



    if(esValido==false){
        alert('El email NO es válido')
        return false;
    }
    if(isNaN(phone) || phone.length < 9){
        alert('El telefono NO es válido')
        return false;
    }

    if(nombre.length < 6){
        alert('El nombre y apellido NO es válido')
        return false;
    }
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





