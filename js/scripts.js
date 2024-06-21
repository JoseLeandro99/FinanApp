function validaRegistro() {
    var registerForm = document.querySelector("#form-registro");

    var password = document.querySelector("#register-password");
    var confirmPassword = document.querySelector("#register-confirm-password");

    if ((password.value !== '' && confirmPassword.value !== '') && password.value !== confirmPassword.value) {
        alert("As senhas não conferem!");
        return;
    }

    if (registerForm.checkValidity()) {
        registerForm.submit();
    }
    else {
        registerForm.reportValidity();
    }
}

function logout() {
    location.href = "logout.php";
}