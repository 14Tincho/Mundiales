function validar() {
    let nombre, expresionNombre, email, emailDos, expresionEmail, errores;
    nombre = document.getElementById("nombre").value;
    email =  document.getElementById("email").value;
    emailDos =  document.getElementById("emailDos").value;
    expresionNombre = /^[a-zA-ZÀ-ÿ\s]{3,20}$/;
    expresionEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    // errores = "";

    if (!expresionNombre.test(nombre)) {
        errores += "El nombre es obligatorio y tiene que tener mas de 3 caracteres y menos de 20";
    }
    if (email === "" || email.length < 7 || email.length > 40) {
        if (errores !== "") {
            errores += "\n";
        }
        errores += "El email es obligatorio y tiene que contener entre 7 y 40 caracteres";
    }else if (!expresionEmail.test(email)) {
        if (errores !== "") {
            errores += "\n";
        }
        errores += "El email no es valido";
    }
    if (emailDos === "" || emailDos.length < 7 || emailDos.length > 40) {
        if (errores !== "") {
            errores += "\n";
        }
        errores += "Debe repetir el email";
    }else if (!expresionEmail.test(emailDos)) {
        if (errores !== "") {
            errores += "\n";
        }
        errores += "El email no es valido";
    }
    if (email !== emailDos) {
        if (errores !== "") {
            errores += "\n";
        }
        errores += "Los mails no coinciden";
    }
}