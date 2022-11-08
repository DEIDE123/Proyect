function validarEmail(){
var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
var esValido=expReg.test(email);
if(esValido==true){
    alert('El email es válido')
}
else{
    alertalert('El email NO es válido')
}



}