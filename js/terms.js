function  terms() {
    var terms = document.getElementById("terms").value;
    var error_message = document.getElementById("error_message");
    error_message.style.padding = "10px";
    var text;

    if (terms.checked) {
    text = " Acepta los términos y servicios ";
    error_message.innerHTML = text;
    return false;
}

    alert("Se han guardado los datos correctamente!");
    return true;
}