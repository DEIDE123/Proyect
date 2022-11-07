function validate(){
    var name = document.getElementById("name").value;  
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var error_message = document.getElementById("error_message");
    var y=document.forms["formulario"]["condiciones"].checked;
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 8){
      text = " Escribe Más de 8 carácteres ";
      error_message.innerHTML = text;
      return false;
    }
    
    if(isNaN(phone) || phone.length < 9){
      text = "Escribe un teléfono correcto";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = " Escribe un email correcto ";
      error_message.innerHTML = text;
      return false;
    }
   

    if (y == false) {
      alert("Tienes que aceptar los términos y condiciones");
        return false;
    }
   
    alert("Se han guardado los datos correctamente!");
    return true;
  }