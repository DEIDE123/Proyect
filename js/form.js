function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 6){
    text = " Escribe Más de 6 carácteres ";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = "Escribe un asunto correcto";
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
  if(message.length <= 140){
    text = " Escribe Más de 140 carácteres ";
    error_message.innerHTML = text;
    return false;
  }
  alert("Se han guardado los datos correctamente!");
  return true;
}