function validarEmail(){
var email = document.getElementById("email").value;

/*var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
var esValido=expReg.test(email);
if(esValido==true){
    alert('El email es válido')
}
else{
    alertalert('El email NO es válido')
}
*/
if(email.indexOf("@") == -1 || email.length < 6){
    alert(" Escribe un email correcto ");
  
    return false;
}
alert("Se han guardado los datos correctamente!");
  return true;
}