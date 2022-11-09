function validarEmail(){

var email = document.getElementById("email").value;
/*REGULAR EXPRESION
/^([a-zA-Z0-9_\.\-])---> BEFORE THE '@' ONLY WORDS (A,Z) AND NUMBERS (0,9)
\@---> MusT HAVE A '@'
\@(([a-zA-Z0-9\-])--->AFTER THE '@' ONLY WORDS (A,Z) AND NUMBERS (0,9)
+\.---> MUST HAVE A '.'
([a-zA-Z0-9]{2,4})+$/----> AFTER '.' ONLY WORD AND NUMBERS AND MUST TO HAVE A FOR 2,4 SIZE (IMPORT*->THE SIZE OF Extension doen´t work yet)
*/

var expReg= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var esValido=expReg.test(email);
if(esValido==true){
    alert('El email es válido')
    return true;
}
else{
    alert('El email NO es válido')
    return false;
}

//if(email.indexOf("@") == -1 || email.length < 6){
    //alert(" Escribe un email correcto ");
  
  //  return false;
//}
//alert("Se han guardado los datos correctamente!");
  //return true;
}