let psswrd = document.getElementById("password");
let confirm_psswrd = document.getElementById("check_usuario");

function validatePsswrd(){
    if (psswrd.value != confirm_psswrd.value) {
        confirm_psswrd.setCustomValidity("Senhas diferentes!");
    } else {
        confirm_psswrd.setCustomValidity("");
    }
}

psswrd.onchange = validatePsswrd;
confirm_psswrd.onkeyup = validatePsswrd;