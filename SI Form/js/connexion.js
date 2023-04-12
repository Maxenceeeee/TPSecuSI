function fonction() {
    let Valide = true;

    let idInput = document.getElementById("nom");
    if (idInput.value.length < 3 || idInput.value.length > 100 || /^[a-zA-Z ]+$/.test(idInput.value) == false) {
        idInput.style.borderBottomColor = "red";
        Valide = false;
        document.getElementById("label_nom").style.color = "Red";
        document.getElementById("label_nom").innerHTML = ("Nom non valide");
    } else {
        idInput.style.borderBottomColor = "green";
        document.getElementById("label_nom").style.color = "Green";
        document.getElementById("label_nom").innerHTML = ("Nom ✔");
    }

    let prenomInput = document.getElementById("prenom");
    if (prenomInput.value.length < 3 || prenomInput.value.length > 100 || /^[a-zA-Z ]+$/.test(prenomInput.value) == false) {
        prenomInput.style.borderBottomColor = "red";
        document.getElementById("label_prenom").style.color = "Red";
        document.getElementById("label_prenom").innerHTML = ("Prénom non valide/");
        Valide = false;
    } else {
        document.getElementById("label_prenom").style.color = "green";
        document.getElementById("label_prenom").innerHTML = ("Prénom ✔");
        prenomInput.style.borderBottomColor = "green";
    }

    let dateInput = document.getElementById("date");
    if (dateInput.value == "" || new Date(dateInput.value) >= new Date()) {
        dateInput.style.borderBottomColor = "red";
        document.getElementById("label_date").style.color = "red";
        document.getElementById("label_date").innerHTML = "Date de naissance non valide";
        Valide = false;
    } else {
        dateInput.style.borderBottomColor = "green";
        document.getElementById("label_date").style.color = "green";
        document.getElementById("label_date").innerHTML = "Date de naissance ✔";
    }


    let mailInput = document.getElementById("mail");
    if (mailInput.value.length < 3 || mailInput.value.length > 100 ) {
        mailInput.style.borderBottomColor = "red";
        document.getElementById("label_mail").style.color = "Red";
        document.getElementById("label_mail").innerHTML = ("Adresse mail non valide");
        Valide = false;
    } else {
        document.getElementById("label_mail").style.color = "green";
        document.getElementById("label_mail").innerHTML = ("Adresse mail ✔");
        mailInput.style.borderBottomColor = "green";
    }

    let passwordInput = document.getElementById("password");
    if (passwordInput.value.length < 8 || !/\d/.test(passwordInput.value) || !/[^\w\s]/.test(passwordInput.value)) {
        passwordInput.style.borderBottomColor = "red";
        document.getElementById("label_password").style.color = "Red";
        document.getElementById("label_password").innerHTML = "Mot de passe non valide. Veuillez entrer au moins 8 caractères, un chiffre et un caractère spécial.";
        Valide = false;
    } else {
        document.getElementById("label_password").style.color = "green";
        document.getElementById("label_password").innerHTML = "Mot de passe ✔";
        passwordInput.style.borderBottomColor = "green";
    }

    return Valide;
}